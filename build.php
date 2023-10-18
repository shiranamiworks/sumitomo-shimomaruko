<?php

require_once dirname(__FILE__)."/config.php";

class Build {

  static function getFileList($dir) {
    $iterator = new RecursiveDirectoryIterator($dir);
    $iterator = new RecursiveIteratorIterator($iterator);
    
    $list = array();
    foreach ($iterator as $fileinfo) { // $fileinfoはSplFiIeInfoオブジェクト
      if (
        $fileinfo->isFile() &&
        !preg_match("/^#|^.#|\.css#|\.js#|^.~|\.gitignore|\.htaccess|scss|config\.rb|compass_start\.command|sass-cache|\.html|\.php|\.DS_Store|Thumbs\.db/",$fileinfo->getPathname())
      ) {
        $list[str_replace($dir,"",$fileinfo->getPathname())] = [filemtime($fileinfo->getPathname()),$fileinfo->getSize()];
      }
    }
    return $list;
  }

  static function getPageList($dir) {
    $iterator = new RecursiveDirectoryIterator($dir);
    $iterator = new RecursiveIteratorIterator($iterator);
    
    $list = array();
    foreach ($iterator as $fileinfo) { // $fileinfoはSplFiIeInfoオブジェクト
      if ($fileinfo->isFile() &&
          preg_match("/\.php|\.html/",$fileinfo->getPathname()) &&
          !preg_match("/^#|\.html#|\.php#|cookie\.php|__NoDeploy__include/",$fileinfo->getPathname())
          ) {
        $list[str_replace($dir,"",$fileinfo->getPathname())] = filemtime($fileinfo->getPathname());
      }
    }
    return $list;
  }


  static function shurink_img($name,$info){

      $msg = false;

      $file_name = APP_ROOT_DIR."/html/".$name;
      if($info[1] < SHURINK_IMG_SIZE) {
        $kb = SHURINK_IMG_SIZE/1000;
        $msg = "設定により".$kb."kb以下のファイルは圧縮されません。".$file_name."<br>\n";
        return $msg;
      }

      $png_cmd = PNGQUANT_PATH." ".$file_name;
      $jpg_cmd = JPGOPTIMA_PATH." --strip-all --max=".JPGOPTIMA_QUALITY." ".$file_name;
      $shurinked_file_name = preg_replace("@.png$@","-fs8.png",$file_name);

      if(defined('ENABLE_SHURINK') && ENABLE_SHURINK && preg_match("@.png$@",$name)){
        shell_exec($png_cmd);
        if(file_exists($shurinked_file_name)){
          unlink($file_name);
          rename($shurinked_file_name,$file_name);
          $msg = "shurinked ".$file_name."<br>\n";
        }
      }else if(defined('ENABLE_SHURINK_JPG') && ENABLE_SHURINK_JPG && preg_match("@.jpg$@",$name)){
        shell_exec($jpg_cmd);
        if(file_exists($file_name)){
          $msg = "shurinked ".$file_name."<br>\n";
        }
      }
    return $msg;
  }


  static function build_files($develop_path,$output_path){
    //外部ファイル更新
    $list_develop = Build::getFileList($develop_path);
    $list_deploy = Build::getFileList($output_path);
    $changed_file = array();

    foreach($list_develop as $key=>$val){
      if(!array_key_exists($key,$list_deploy)){

        if(!is_dir($output_path.dirname($key))) mkdir($output_path.dirname($key) , 0777, true);

      if(copy($develop_path.$key,$output_path.$key)){
          if(preg_match("@.png$@",$key) || preg_match("@.jpg$@",$key)){
            Log::build( Build::shurink_img($key,$val));
          }
          touch($output_path.$key,$list_develop[$key][0]);
        }else{
          Log::build( "failed to copy".$key );
        };
      }else{
        if($list_develop[$key][0]>$list_deploy[$key][0]){
          if(copy($develop_path.$key,$output_path.$key)){
            if(preg_match("@.png$@",$key) || preg_match("@.jpg$@",$key)){
              Log::build( Build::shurink_img($key,$val) );
            }
            touch($output_path.$key,$list_develop[$key][0]);
          }else{
            Log::build( "failed to update".$key );
          };
        }
      }
    }
  }


  static function build_pages($develop_path,$output_path){
    //ページ更新
    $page_list = Build::getPageList($develop_path);
    foreach($page_list as $page=>$time){
      $html_data = "";
      //$url = preg_replace("@develop/$@",SITE_ROOT)
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, SITE_ROOT.$page);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
      curl_setopt($ch, CURLOPT_COOKIE ,"building=1");
      $html_data = curl_exec($ch);
      curl_close($ch);
      $not_chang_flg = false;
      $not_cahnge_setting_array = explode(",",NOT_CHANGE_PHP);
      if(!empty($not_cahnge_setting_array)){
        foreach($not_cahnge_setting_array as $not_cahnge_setting){
          if(preg_match("@".$not_cahnge_setting."@",$page)){
            $not_chang_flg = true;
            break;
          }
          if($not_cahnge_setting == "top-index.php" && $page == "index.php"){
            $not_chang_flg = true;
            break;
          }
        }
      }
      $page_html = !$not_chang_flg ? str_replace(".php",".html",$page) : $page ;
      if(!is_dir($output_path.dirname($page))) mkdir($output_path.dirname($page) , 0777, true);
      $fp = fopen($output_path.$page_html,"w+");
      $html_data = preg_replace("@href=\"((?!http|\/\/).*)?.php\"@", "href=\"$1.html\"",$html_data);
      $html_data = preg_replace("@href=\"((?!http|\/\/).*)?.php#(.*)?\"@", "href=\"$1.html#$2\"",$html_data);
      $html_data = preg_replace("@href=\"((?!http|\/\/).*)?.php\?(.*)?\"@", "href=\"$1.html?$2\"",$html_data);
      $html_data = preg_replace("@<!-- %start%@", "<?php ",$html_data);
      $html_data = preg_replace("@%end% -->@", "?> ",$html_data);
      if($page === "index.php"){
        $html_data = preg_replace("/imgs\/lower/", "imgs",$html_data);
      }
      fputs($fp,$html_data);
      fclose($fp);
    }
  }

  static function all_build(){
    if(empty($_COOKIE["building"])){
      Build::build_files(dirname(__FILE__)."/develop/",dirname(__FILE__)."/html/");
      Build::build_pages(dirname(__FILE__)."/develop/",dirname(__FILE__)."/html/");
      Log::build( "build finished" );
    }
  }

}

Build::all_build();


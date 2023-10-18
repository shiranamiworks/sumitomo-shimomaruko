<?php
ini_set('default_charset', 'Shift_JIS');
ini_set("opcache.revalidate_freq",1);
include_once(dirname(__FILE__)."/logging.php");
require_once (dirname(__FILE__)."/config.php");
require_once (dirname(__FILE__)."/functions.php");

$plugin_names = explode(",",ENABLE_PLUGINS);
foreach($plugin_names as $plugin_name){
  if(file_exists(dirname(__FILE__)."/plugins/$plugin_name/$plugin_name.php")){
    include(dirname(__FILE__)."/plugins/$plugin_name/$plugin_name.php");
  }else{
    LOG::error(dirname(__FILE__)."/plugins/$plugin_name/$plugin_name.php"." is not found!!");
  }
};

$request_file = preg_match("@.php|.html@",$_SERVER["REQUEST_URI"]) ?
                get_protcol().$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"] :
                get_protcol().$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]."index.php";
$request_file = preg_replace("@.html$@",".php",$request_file);
if(preg_match("/\?/",$request_file)){
  $query_point = strpos($request_file,"?");
  $request_file = substr($request_file,0,$query_point);
}
$path = dirname(__FILE__)."/develop/".preg_replace("@".SITE_ROOT."@","",$request_file);


if(AUTO_BUILD ){
  include_once(dirname(__FILE__)."/build.php");
}

if(file_exists($path)){
  if( $path[-1] == "/") $path = $path."index.php";
  ob_start();
require_once($path);
$content = ob_get_clean();

$the_content = preg_replace("/\[home_url\]/",SITE_ROOT,$content);
if(!empty($_template_inserted)){
  $the_content = preg_replace("@<!-- End-stylesheet -->@",'<link rel="stylesheet" media="all" href="'.pathto("additional/additional.css",false).'">'."\n<!-- End-stylesheet -->",$the_content);
  $the_content = preg_replace("@<!-- End-js -->@",'<script src="'.pathto("additional/additional.js",false).'"></script>'."\n<!-- End-js -->",$the_content);
}
$the_content = do_filter("insert_end_body",$the_content);
echo $the_content;
exit();
}else{
  $maybe_html_file = preg_replace("@.php$@",".html",$request_file);
  $html_path = dirname(__FILE__)."/develop/".preg_replace("@".SITE_ROOT."@","",$maybe_html_file);
  if(file_exists($html_path)){
    ob_start();
    require_once($html_path);
    $content = ob_get_clean();
    echo $content;
    exit();
  }
  echo "Not found the file path: ".$path."!!<br>"."Required  the file path:".$path." for view url:"."http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
}


<?php

global $filter_array;
$filter_array = array("insert_end_body"=>array());

function pathto($str,$display=true){
  global $page_settings;
  if($display){
    echo (!empty($page_settings["hierarchy-strings"]) ? $page_settings["hierarchy-strings"].$str : $str);
  }else{
    return (!empty($page_settings["hierarchy-strings"]) ? $page_settings["hierarchy-strings"].$str : $str);
  }
}

function is_home(){
  global $build_url;
  global $request_url;
  if(preg_match("/build.php$/",$request_url)){
    return (preg_match("/^index\.php$/",$build_url) > 0);
  }else{
    return (
      SITE_ROOT."index.php" === get_protcol().$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"] ||
      SITE_ROOT === get_protcol().$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]
    );
  }
}

function add_filter($array_name,$function_name){
  global $filter_array;
  if(isset($filter_array[$array_name])){
    $filter_array[$array_name][] = $function_name;
  }else{
    LOG::error("$array_name is not found in hooks!!");
  }
}
function is_building(){
  return !empty($_COOKIE["building"]);
}


function do_filter($array_name,$content){
  global $filter_array;
  if(isset($filter_array[$array_name])){
    $src = "";
    foreach($filter_array[$array_name] as $filter_function){
      if(function_exists($filter_function)){
        $src = $src.$filter_function();
      }
    }
    return Hooks::$array_name($src,$content);
  }else{
    LOG::error("$array_name is not found in hooks!!");
  }
  
}

class Hooks {

  static function insert_end_body($html,$content){
    return preg_replace("@</body>@",$html."</body>",$content);
  }
}



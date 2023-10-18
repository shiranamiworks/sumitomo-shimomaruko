<?php

function get_protcol(){
    return isset($_SERVER['HTTP_X_SAKURA_FORWARDED_FOR']) || (!empty($_SERVER["HTTPS"]) && $_SERVER['HTTPS'] == "on") ? "https://" : "http://";
}

if(!defined("INCLUDES")){
  define("INCLUDES",dirname(__FILE__)."/develop/__NoDeploy__include/");
}
if(!defined('SITE_ROOT')){
  if(count(explode("/",dirname(__FILE__))) > count(explode("/",$_SERVER["DOCUMENT_ROOT"])) ){
    $str = str_replace($_SERVER["DOCUMENT_ROOT"],"",dirname(__FILE__));
    define('SITE_ROOT',get_protcol().$_SERVER['HTTP_HOST'].$str."/develop/");
  }else{
    define('SITE_ROOT',get_protcol().$_SERVER['HTTP_HOST']."/");
  }
}

if(!defined('APP_ROOT_DIR')){
  define('APP_ROOT_DIR',dirname(__FILE__));
}

if(!defined('NOT_CHANGE_PHP')){
  //example "matchword1,matchword2,matchword3"
  define('NOT_CHANGE_PHP');
}

if(!defined('SHURINK_IMG_SIZE')){
  //1kb = 1000
  define('SHURINK_IMG_SIZE',999);
}

if(!defined('AUTO_BUILD')){
  define('AUTO_BUILD',true);
}

if(!defined('ENABLE_SHURINK')){
  //pngquatいるったい！
  //https://pngquant.org/
  define('ENABLE_SHURINK',true);
  define('PNGQUANT_PATH',"/usr/local/bin/pngquant");
}

if(!defined('ENABLE_SHURINK_JPG')){

  //jpegoptimいるよー
  //https://github.com/tjko/jpegoptim
  define('ENABLE_SHURINK_JPG',false);
  define('JPGOPTIMA_PATH',"/usr/local/bin/jpegoptim");
  define('JPGOPTIMA_QUALITY',80);
}


if(!defined('ENABLE_PLUGINS')){

  //プラグイン名（フォルダ名、読み込みファイル名共通）それぞれカンマつ（,）つなぎで！！
  define('ENABLE_PLUGINS',"the_templates");
}




require_once (dirname(__FILE__)."/logging.php");

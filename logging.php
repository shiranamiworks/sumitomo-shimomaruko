<?php


class Log {


  static function message($str,$file_name,$line){
    return "On " . date( "Y年m月d日 H時i分s秒" , $_SERVER['REQUEST_TIME'] ) . "  " . "'" . $str . "'" . "  ". "\n";
  }

  static function error($str){
    $bt = debug_backtrace();
    $file_name = $bt[0]['file'];
    $line = $bt[0]['line'];
    $msg = Log::message($str,$bt[0]['file'],$bt[0]['line']) . 'On'. $file_name . " LINE " . $line . "  " . "REQUEST_URL " . $_SERVER['REQUEST_URI'];
    error_log($msg,3,APP_ROOT_DIR.DIRECTORY_SEPARATOR."log".DIRECTORY_SEPARATOR."error.log");
  }

  static function build($str){
    $bt = debug_backtrace();
    $file_name = $bt[0]['file'];
    $line = $bt[0]['line'];
    error_log(Log::message($str,$bt[0]['file'],$bt[0]['line']),3,APP_ROOT_DIR.DIRECTORY_SEPARATOR."log".DIRECTORY_SEPARATOR."build.log");
  }

}


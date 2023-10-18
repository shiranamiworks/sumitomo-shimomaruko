<?php

function is_valid_templatename(){
  
}

function _template_set_html($template,$replacement_obj,$loop_content){
  if(is_array($loop_content) && !empty($loop_content)){
    foreach($loop_content as $name => $content){
      $loop_content_pos_1 = mb_strpos($template,"{{loop:".$name."}}");
      $loop_content_pos_2 = mb_strpos($template,"{{/loop:".$name."}}");
      $the_loop_content = mb_substr($template, $loop_content_pos_1,$loop_content_pos_2-$loop_content_pos_1,UTF8);
      $the_loop_content = preg_replace("@{{loop:".$name."}}@","",$the_loop_content);
      $loop_result = "";
      foreach($content as $val){
       $_let =  $the_loop_content;
       foreach($val as $_name => $_val){
         $_let = preg_replace("@%%".$_name."%%@",$_val,$_let);
       }
       $loop_result .= $_let;
      }
      $template = substr_replace($template,$loop_result,$loop_content_pos_1,$loop_content_pos_2-$loop_content_pos_1);
      $template = preg_replace("@{{/loop:".$name."}}@","",$template);
    }
  }else{
    $template = preg_replace("@{{.*}}@","",$template);
  }

  if(is_array($replacement_obj) && !empty($replacement_obj)){
    foreach($replacement_obj as $name => $val){
      $template = preg_replace("@%%".$name."%%@",$val,$template);
    }
  }else{
    $template = preg_replace("@%%.*%%@","",$template);
  }

  echo($template);
};

function _template_set_css($template_name){
}

function _template_set_js($template_name){
}

function call_template($arg_obj){

  global $_template_inserted;
  global $called_template_name;
  $template_name = $arg_obj["name"];
  $replacement_obj = $arg_obj["replaces"];
  $loop_content = $arg_obj["loops"];
  if(!in_array($template_name ,$called_template_name)){
    $called_template_name[] = $template_name;
    _template_set_css($template_name);
    _template_set_js($template_name);
  };
  if(empty($_template_inserted)){
    $_template_inserted = 1;
  }

  $template = file_get_contents(dirname(__FILE__)."/srcs/".$template_name.".php");
  _template_set_html($template,$replacement_obj,$loop_content);
}

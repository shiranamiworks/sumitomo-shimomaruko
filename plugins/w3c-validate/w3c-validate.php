<?php


function ff__auto_validator(){
  return is_building() ? "" : file_get_contents(dirname(__FILE__)."/asset/validator.html");
}

add_filter("insert_end_body","ff__auto_validator");

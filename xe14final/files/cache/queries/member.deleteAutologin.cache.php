<?php if(!defined('__ZBXE__')) exit();
$output->query_id = "member.deleteAutologin";
$output->action = "delete";
if(is_object($args->autologin_key)){ $args->autologin_key = array_values(get_method_vars($args->autologin_key)); }
if(is_array($args->autologin_key) && count($args->autologin_key)==0){ unset($args->autologin_key); };
if(!isset($args->autologin_key)) return new Object(-1, sprintf($lang->filter->isnull, $lang->autologin_key?$lang->autologin_key:'autologin_key'));
$output->column_type["autologin_key"] = "varchar";
$output->column_type["member_srl"] = "number";
$output->tables = array( "member_autologin"=>"member_autologin", );
$output->_tables = array( "member_autologin"=>"member_autologin", );
$output->conditions = array ( array("pipe"=>"",
"condition"=>array(array("column"=>"autologin_key", "value"=>$args->autologin_key,"pipe"=>"","operation"=>"equal",),
)),
 );
return $output; ?>
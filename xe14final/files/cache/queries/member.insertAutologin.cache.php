<?php if(!defined('__ZBXE__')) exit();
$output->query_id = "member.insertAutologin";
$output->action = "insert";
$output->column_type["autologin_key"] = "varchar";
$output->column_type["member_srl"] = "number";
$output->tables = array( "member_autologin"=>"member_autologin", );
$output->_tables = array( "member_autologin"=>"member_autologin", );
$output->columns = array ( array("name"=>"autologin_key","alias"=>"","value"=>$args->autologin_key),
array("name"=>"member_srl","alias"=>"","value"=>$args->member_srl),
 );
return $output; ?>
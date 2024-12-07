<?php if(!defined('__ZBXE__')) exit();
$output->query_id = "file.insertFile";
$output->action = "insert";
$output->column_type["file_srl"] = "number";
$output->column_type["upload_target_srl"] = "number";
$output->column_type["upload_target_type"] = "char";
$output->column_type["sid"] = "varchar";
$output->column_type["module_srl"] = "number";
$output->column_type["member_srl"] = "number";
$output->column_type["download_count"] = "number";
$output->column_type["direct_download"] = "char";
$output->column_type["source_filename"] = "varchar";
$output->column_type["uploaded_filename"] = "varchar";
$output->column_type["file_size"] = "number";
$output->column_type["comment"] = "varchar";
$output->column_type["isvalid"] = "char";
$output->column_type["regdate"] = "date";
$output->column_type["ipaddress"] = "varchar";
$output->tables = array( "files"=>"files", );
$output->_tables = array( "files"=>"files", );
$output->columns = array ( array("name"=>"file_srl","alias"=>"","value"=>$args->file_srl),
array("name"=>"upload_target_srl","alias"=>"","value"=>$args->upload_target_srl?$args->upload_target_srl:"0"),
array("name"=>"sid","alias"=>"","value"=>$args->sid),
array("name"=>"module_srl","alias"=>"","value"=>$args->module_srl?$args->module_srl:"0"),
array("name"=>"source_filename","alias"=>"","value"=>$args->source_filename),
array("name"=>"uploaded_filename","alias"=>"","value"=>$args->uploaded_filename),
array("name"=>"file_size","alias"=>"","value"=>$args->file_size?$args->file_size:"0"),
array("name"=>"direct_download","alias"=>"","value"=>$args->direct_download?$args->direct_download:"N"),
array("name"=>"comment","alias"=>"","value"=>$args->comment),
array("name"=>"download_count","alias"=>"","value"=>$args->download_count?$args->download_count:"0"),
array("name"=>"member_srl","alias"=>"","value"=>$args->member_srl?$args->member_srl:"0"),
array("name"=>"regdate","alias"=>"","value"=>$args->regdate?$args->regdate:date("YmdHis")),
array("name"=>"ipaddress","alias"=>"","value"=>$args->ipaddress?$args->ipaddress:$_SERVER['REMOTE_ADDR']),
array("name"=>"isvalid","alias"=>"","value"=>$args->isvalid?$args->isvalid:"N"),
 );
return $output; ?>
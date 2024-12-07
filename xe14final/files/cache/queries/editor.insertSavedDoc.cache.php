<?php if(!defined('__ZBXE__')) exit();
$output->query_id = "editor.insertSavedDoc";
$output->action = "insert";
$output->column_type["member_srl"] = "number";
$output->column_type["ipaddress"] = "varchar";
$output->column_type["module_srl"] = "number";
$output->column_type["document_srl"] = "number";
$output->column_type["title"] = "varchar";
$output->column_type["content"] = "bigtext";
$output->column_type["regdate"] = "date";
$output->tables = array( "editor_autosave"=>"editor_autosave", );
$output->_tables = array( "editor_autosave"=>"editor_autosave", );
$output->columns = array ( array("name"=>"module_srl","alias"=>"","value"=>$args->module_srl),
array("name"=>"member_srl","alias"=>"","value"=>$args->member_srl),
array("name"=>"ipaddress","alias"=>"","value"=>$args->ipaddress),
array("name"=>"document_srl","alias"=>"","value"=>$args->document_srl?$args->document_srl:"0"),
array("name"=>"title","alias"=>"","value"=>$args->title),
array("name"=>"content","alias"=>"","value"=>$args->content),
array("name"=>"regdate","alias"=>"","value"=>$args->regdate?$args->regdate:date("YmdHis")),
 );
return $output; ?>
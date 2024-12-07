<?php if(!defined('__ZBXE__')) exit();
$output->query_id = "syndication.insertLog";
$output->action = "insert";
$output->column_type["log_srl"] = "number";
$output->column_type["module_srl"] = "number";
$output->column_type["document_srl"] = "number";
$output->column_type["title"] = "varchar";
$output->column_type["summary"] = "varchar";
$output->column_type["regdate"] = "date";
$output->tables = array( "syndication_logs"=>"syndication_logs", );
$output->_tables = array( "syndication_logs"=>"syndication_logs", );
$output->columns = array ( array("name"=>"log_srl","alias"=>"","value"=>$this->getNextSequence()),
array("name"=>"module_srl","alias"=>"","value"=>$args->module_srl),
array("name"=>"document_srl","alias"=>"","value"=>$args->document_srl),
array("name"=>"title","alias"=>"","value"=>$args->title),
array("name"=>"summary","alias"=>"","value"=>$args->summary),
array("name"=>"regdate","alias"=>"","value"=>date("YmdHis")),
 );
return $output; ?>
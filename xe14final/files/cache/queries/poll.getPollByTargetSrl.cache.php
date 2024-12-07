<?php if(!defined('__ZBXE__')) exit();
$output->query_id = "poll.getPollByTargetSrl";
$output->action = "select";
if(is_object($args->upload_target_srl)){ $args->upload_target_srl = array_values(get_method_vars($args->upload_target_srl)); }
if(is_array($args->upload_target_srl) && count($args->upload_target_srl)==0){ unset($args->upload_target_srl); };
$output->column_type["poll_srl"] = "number";
$output->column_type["stop_date"] = "date";
$output->column_type["upload_target_srl"] = "number";
$output->column_type["poll_count"] = "number";
$output->column_type["member_srl"] = "number";
$output->column_type["ipaddress"] = "varchar";
$output->column_type["regdate"] = "date";
$output->column_type["list_order"] = "number";
$output->tables = array( "poll"=>"poll", );
$output->_tables = array( "poll"=>"poll", );
$output->columns = array ( array("name"=>"*","alias"=>""),
 );
$output->conditions = array ( array("pipe"=>"",
"condition"=>array(array("column"=>"upload_target_srl", "value"=>$args->upload_target_srl,"pipe"=>"","operation"=>"equal",),
)),
 );
return $output; ?>
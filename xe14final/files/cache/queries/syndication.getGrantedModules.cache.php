<?php if(!defined('__ZBXE__')) exit();
$output->query_id = "syndication.getGrantedModules";
$output->action = "select";
$output->column_type["module_srl"] = "number";
$output->column_type["name"] = "varchar";
$output->column_type["group_srl"] = "number";
$output->tables = array( "module_grants"=>"module_grants", );
$output->_tables = array( "module_grants"=>"module_grants", );
$output->columns = array ( array("name"=>"module_srl","alias"=>""),
 );
$output->conditions = array ( array("pipe"=>"",
"condition"=>array(array("column"=>"name", "value"=>"'access','view','list'","pipe"=>"","operation"=>"in",),
)),
array("pipe"=>"and",
"condition"=>array(array("column"=>"group_srl", "value"=>"1","pipe"=>"","operation"=>"more",),
array("column"=>"group_srl", "value"=>"-1","pipe"=>"or","operation"=>"equal",),
array("column"=>"group_srl", "value"=>"-2","pipe"=>"or","operation"=>"equal",),
)),
 );
$output->groups = array("module_srl");
return $output; ?>
<?php if(!defined('__ZBXE__')) exit();
$output->query_id = "syndication.getGrantedModule";
$output->action = "select";
if(is_object($args->module_srl)){ $args->module_srl = array_values(get_method_vars($args->module_srl)); }
if(is_array($args->module_srl) && count($args->module_srl)==0){ unset($args->module_srl); };
if(isset($args->module_srl)) { unset($_output); $_output = $this->checkFilter("module_srl",$args->module_srl,"number"); if(!$_output->toBool()) return $_output; } 
if(!isset($args->module_srl)) return new Object(-1, sprintf($lang->filter->isnull, $lang->module_srl?$lang->module_srl:'module_srl'));
$output->column_type["module_srl"] = "number";
$output->column_type["name"] = "varchar";
$output->column_type["group_srl"] = "number";
$output->tables = array( "module_grants"=>"module_grants", );
$output->_tables = array( "module_grants"=>"module_grants", );
$output->columns = array ( array("name"=>"count(*)","alias"=>"count"),
 );
$output->conditions = array ( array("pipe"=>"",
"condition"=>array(array("column"=>"module_srl", "value"=>$args->module_srl,"pipe"=>"","operation"=>"equal",),
array("column"=>"name", "value"=>"'access','view','list'","pipe"=>"and","operation"=>"in",),
)),
array("pipe"=>"and",
"condition"=>array(array("column"=>"group_srl", "value"=>"1","pipe"=>"","operation"=>"more",),
array("column"=>"group_srl", "value"=>"-1","pipe"=>"or","operation"=>"equal",),
array("column"=>"group_srl", "value"=>"-2","pipe"=>"or","operation"=>"equal",),
)),
 );
return $output; ?>
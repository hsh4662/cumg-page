<?php if(!defined('__ZBXE__')) exit();
$output->query_id = "document.deleteAlias";
$output->action = "delete";
if(is_object($args->alias_srl)){ $args->alias_srl = array_values(get_method_vars($args->alias_srl)); }
if(is_array($args->alias_srl) && count($args->alias_srl)==0){ unset($args->alias_srl); };
if(is_object($args->document_srl)){ $args->document_srl = array_values(get_method_vars($args->document_srl)); }
if(is_array($args->document_srl) && count($args->document_srl)==0){ unset($args->document_srl); };
if(is_object($args->module_srl)){ $args->module_srl = array_values(get_method_vars($args->module_srl)); }
if(is_array($args->module_srl) && count($args->module_srl)==0){ unset($args->module_srl); };
if(isset($args->alias_srl)) { unset($_output); $_output = $this->checkFilter("alias_srl",$args->alias_srl,"number"); if(!$_output->toBool()) return $_output; } 
if(isset($args->document_srl)) { unset($_output); $_output = $this->checkFilter("document_srl",$args->document_srl,"number"); if(!$_output->toBool()) return $_output; } 
if(isset($args->module_srl)) { unset($_output); $_output = $this->checkFilter("module_srl",$args->module_srl,"number"); if(!$_output->toBool()) return $_output; } 
$output->column_type["alias_srl"] = "number";
$output->column_type["module_srl"] = "number";
$output->column_type["document_srl"] = "number";
$output->column_type["alias_title"] = "varchar";
$output->tables = array( "document_aliases"=>"document_aliases", );
$output->_tables = array( "document_aliases"=>"document_aliases", );
$output->conditions = array ( array("pipe"=>"",
"condition"=>array(array("column"=>"alias_srl", "value"=>$args->alias_srl,"pipe"=>"","operation"=>"equal",),
array("column"=>"document_srl", "value"=>$args->document_srl,"pipe"=>"and","operation"=>"equal",),
array("column"=>"module_srl", "value"=>$args->module_srl,"pipe"=>"and","operation"=>"equal",),
)),
 );
return $output; ?>
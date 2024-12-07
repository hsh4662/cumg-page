<?php if(!defined('__ZBXE__')) exit();
$output->query_id = "document.deleteHistory";
$output->action = "delete";
if(is_object($args->history_srl)){ $args->history_srl = array_values(get_method_vars($args->history_srl)); }
if(is_array($args->history_srl) && count($args->history_srl)==0){ unset($args->history_srl); };
if(is_object($args->document_srl)){ $args->document_srl = array_values(get_method_vars($args->document_srl)); }
if(is_array($args->document_srl) && count($args->document_srl)==0){ unset($args->document_srl); };
if(is_object($args->module_srl)){ $args->module_srl = array_values(get_method_vars($args->module_srl)); }
if(is_array($args->module_srl) && count($args->module_srl)==0){ unset($args->module_srl); };
if(isset($args->history_srl)) { unset($_output); $_output = $this->checkFilter("history_srl",$args->history_srl,"number"); if(!$_output->toBool()) return $_output; } 
if(isset($args->document_srl)) { unset($_output); $_output = $this->checkFilter("document_srl",$args->document_srl,"number"); if(!$_output->toBool()) return $_output; } 
if(isset($args->module_srl)) { unset($_output); $_output = $this->checkFilter("module_srl",$args->module_srl,"number"); if(!$_output->toBool()) return $_output; } 
$output->column_type["history_srl"] = "number";
$output->column_type["module_srl"] = "number";
$output->column_type["document_srl"] = "number";
$output->column_type["content"] = "bigtext";
$output->column_type["nick_name"] = "varchar";
$output->column_type["member_srl"] = "number";
$output->column_type["regdate"] = "date";
$output->column_type["ipaddress"] = "varchar";
$output->tables = array( "document_histories"=>"document_histories", );
$output->_tables = array( "document_histories"=>"document_histories", );
$output->conditions = array ( array("pipe"=>"",
"condition"=>array(array("column"=>"history_srl", "value"=>$args->history_srl,"pipe"=>"","operation"=>"equal",),
array("column"=>"document_srl", "value"=>$args->document_srl,"pipe"=>"and","operation"=>"equal",),
array("column"=>"module_srl", "value"=>$args->module_srl,"pipe"=>"and","operation"=>"equal",),
)),
 );
return $output; ?>
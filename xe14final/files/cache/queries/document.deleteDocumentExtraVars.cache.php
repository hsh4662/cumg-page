<?php if(!defined('__ZBXE__')) exit();
$output->query_id = "document.deleteDocumentExtraVars";
$output->action = "delete";
if(is_object($args->module_srl)){ $args->module_srl = array_values(get_method_vars($args->module_srl)); }
if(is_array($args->module_srl) && count($args->module_srl)==0){ unset($args->module_srl); };
if(is_object($args->document_srl)){ $args->document_srl = array_values(get_method_vars($args->document_srl)); }
if(is_array($args->document_srl) && count($args->document_srl)==0){ unset($args->document_srl); };
if(is_object($args->var_idx)){ $args->var_idx = array_values(get_method_vars($args->var_idx)); }
if(is_array($args->var_idx) && count($args->var_idx)==0){ unset($args->var_idx); };
if(is_object($args->lang_code)){ $args->lang_code = array_values(get_method_vars($args->lang_code)); }
if(is_array($args->lang_code) && count($args->lang_code)==0){ unset($args->lang_code); };
if(is_object($args->eid)){ $args->eid = array_values(get_method_vars($args->eid)); }
if(is_array($args->eid) && count($args->eid)==0){ unset($args->eid); };
if(isset($args->module_srl)) { unset($_output); $_output = $this->checkFilter("module_srl",$args->module_srl,"number"); if(!$_output->toBool()) return $_output; } 
if(isset($args->document_srl)) { unset($_output); $_output = $this->checkFilter("document_srl",$args->document_srl,"number"); if(!$_output->toBool()) return $_output; } 
if(isset($args->var_idx)) { unset($_output); $_output = $this->checkFilter("var_idx",$args->var_idx,"number"); if(!$_output->toBool()) return $_output; } 
if(!isset($args->module_srl)) return new Object(-1, sprintf($lang->filter->isnull, $lang->module_srl?$lang->module_srl:'module_srl'));
$output->column_type["module_srl"] = "number";
$output->column_type["document_srl"] = "number";
$output->column_type["var_idx"] = "number";
$output->column_type["lang_code"] = "varchar";
$output->column_type["value"] = "bigtext";
$output->column_type["eid"] = "varchar";
$output->tables = array( "document_extra_vars"=>"document_extra_vars", );
$output->_tables = array( "document_extra_vars"=>"document_extra_vars", );
$output->conditions = array ( array("pipe"=>"",
"condition"=>array(array("column"=>"module_srl", "value"=>$args->module_srl,"pipe"=>"","operation"=>"equal",),
array("column"=>"document_srl", "value"=>$args->document_srl,"pipe"=>"and","operation"=>"equal",),
array("column"=>"var_idx", "value"=>$args->var_idx,"pipe"=>"and","operation"=>"equal",),
array("column"=>"lang_code", "value"=>$args->lang_code,"pipe"=>"and","operation"=>"equal",),
array("column"=>"eid", "value"=>$args->eid,"pipe"=>"and","operation"=>"equal",),
)),
 );
return $output; ?>
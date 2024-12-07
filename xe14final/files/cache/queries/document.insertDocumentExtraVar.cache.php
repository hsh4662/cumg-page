<?php if(!defined('__ZBXE__')) exit();
$output->query_id = "document.insertDocumentExtraVar";
$output->action = "insert";
$output->column_type["module_srl"] = "number";
$output->column_type["document_srl"] = "number";
$output->column_type["var_idx"] = "number";
$output->column_type["lang_code"] = "varchar";
$output->column_type["value"] = "bigtext";
$output->column_type["eid"] = "varchar";
$output->tables = array( "document_extra_vars"=>"document_extra_vars", );
$output->_tables = array( "document_extra_vars"=>"document_extra_vars", );
$output->columns = array ( array("name"=>"module_srl","alias"=>"","value"=>$args->module_srl),
array("name"=>"document_srl","alias"=>"","value"=>$args->document_srl),
array("name"=>"var_idx","alias"=>"","value"=>$args->var_idx),
array("name"=>"value","alias"=>"","value"=>$args->value),
array("name"=>"lang_code","alias"=>"","value"=>$args->lang_code),
array("name"=>"eid","alias"=>"","value"=>$args->eid),
 );
return $output; ?>
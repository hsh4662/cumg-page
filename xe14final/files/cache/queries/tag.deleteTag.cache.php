<?php if(!defined('__ZBXE__')) exit();
$output->query_id = "tag.deleteTag";
$output->action = "delete";
if(is_object($args->document_srl)){ $args->document_srl = array_values(get_method_vars($args->document_srl)); }
if(is_array($args->document_srl) && count($args->document_srl)==0){ unset($args->document_srl); };
if(isset($args->document_srl)) { unset($_output); $_output = $this->checkFilter("document_srl",$args->document_srl,"number"); if(!$_output->toBool()) return $_output; } 
if(!isset($args->document_srl)) return new Object(-1, sprintf($lang->filter->isnull, $lang->document_srl?$lang->document_srl:'document_srl'));
$output->column_type["tag_srl"] = "number";
$output->column_type["module_srl"] = "number";
$output->column_type["document_srl"] = "number";
$output->column_type["tag"] = "varchar";
$output->column_type["regdate"] = "date";
$output->tables = array( "tags"=>"tags", );
$output->_tables = array( "tags"=>"tags", );
$output->conditions = array ( array("pipe"=>"",
"condition"=>array(array("column"=>"document_srl", "value"=>$args->document_srl,"pipe"=>"","operation"=>"equal",),
)),
 );
return $output; ?>
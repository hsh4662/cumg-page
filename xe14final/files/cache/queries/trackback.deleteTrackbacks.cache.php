<?php if(!defined('__ZBXE__')) exit();
$output->query_id = "trackback.deleteTrackbacks";
$output->action = "delete";
if(is_object($args->document_srl)){ $args->document_srl = array_values(get_method_vars($args->document_srl)); }
if(is_array($args->document_srl) && count($args->document_srl)==0){ unset($args->document_srl); };
if(isset($args->document_srl)) { unset($_output); $_output = $this->checkFilter("document_srl",$args->document_srl,"number"); if(!$_output->toBool()) return $_output; } 
if(!isset($args->document_srl)) return new Object(-1, sprintf($lang->filter->isnull, $lang->document_srl?$lang->document_srl:'document_srl'));
$output->column_type["trackback_srl"] = "number";
$output->column_type["module_srl"] = "number";
$output->column_type["document_srl"] = "number";
$output->column_type["url"] = "varchar";
$output->column_type["title"] = "varchar";
$output->column_type["blog_name"] = "varchar";
$output->column_type["excerpt"] = "text";
$output->column_type["regdate"] = "date";
$output->column_type["ipaddress"] = "varchar";
$output->column_type["list_order"] = "number";
$output->tables = array( "trackbacks"=>"trackbacks", );
$output->_tables = array( "trackbacks"=>"trackbacks", );
$output->conditions = array ( array("pipe"=>"",
"condition"=>array(array("column"=>"document_srl", "value"=>$args->document_srl,"pipe"=>"","operation"=>"equal",),
)),
 );
return $output; ?>
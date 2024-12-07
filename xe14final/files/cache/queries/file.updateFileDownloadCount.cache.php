<?php if(!defined('__ZBXE__')) exit();
$output->query_id = "file.updateFileDownloadCount";
$output->action = "update";
if(is_object($args->file_srl)){ $args->file_srl = array_values(get_method_vars($args->file_srl)); }
if(is_array($args->file_srl) && count($args->file_srl)==0){ unset($args->file_srl); };
if(isset($args->file_srl)) { unset($_output); $_output = $this->checkFilter("file_srl",$args->file_srl,"number"); if(!$_output->toBool()) return $_output; } 
if(!isset($args->file_srl)) return new Object(-1, sprintf($lang->filter->isnull, $lang->file_srl?$lang->file_srl:'file_srl'));
$output->column_type["file_srl"] = "number";
$output->column_type["upload_target_srl"] = "number";
$output->column_type["upload_target_type"] = "char";
$output->column_type["sid"] = "varchar";
$output->column_type["module_srl"] = "number";
$output->column_type["member_srl"] = "number";
$output->column_type["download_count"] = "number";
$output->column_type["direct_download"] = "char";
$output->column_type["source_filename"] = "varchar";
$output->column_type["uploaded_filename"] = "varchar";
$output->column_type["file_size"] = "number";
$output->column_type["comment"] = "varchar";
$output->column_type["isvalid"] = "char";
$output->column_type["regdate"] = "date";
$output->column_type["ipaddress"] = "varchar";
$output->tables = array( "files"=>"files", );
$output->_tables = array( "files"=>"files", );
$output->columns = array ( array("name"=>"download_count","alias"=>"","value"=>$args->download_count?$args->download_count:"download_count+1"),
 );
$output->conditions = array ( array("pipe"=>"",
"condition"=>array(array("column"=>"file_srl", "value"=>$args->file_srl,"pipe"=>"","operation"=>"equal",),
)),
 );
return $output; ?>
<?php if(!defined('__ZBXE__')) exit();
$output->query_id = "comment.deleteCommentList";
$output->action = "delete";
if(is_object($args->comment_srl)){ $args->comment_srl = array_values(get_method_vars($args->comment_srl)); }
if(is_array($args->comment_srl) && count($args->comment_srl)==0){ unset($args->comment_srl); };
if(isset($args->comment_srl)) { unset($_output); $_output = $this->checkFilter("comment_srl",$args->comment_srl,"number"); if(!$_output->toBool()) return $_output; } 
if(!isset($args->comment_srl)) return new Object(-1, sprintf($lang->filter->isnull, $lang->comment_srl?$lang->comment_srl:'comment_srl'));
$output->column_type["comment_srl"] = "number";
$output->column_type["document_srl"] = "number";
$output->column_type["head"] = "number";
$output->column_type["arrange"] = "number";
$output->column_type["module_srl"] = "number";
$output->column_type["regdate"] = "date";
$output->column_type["depth"] = "number";
$output->tables = array( "comments_list"=>"comments_list", );
$output->_tables = array( "comments_list"=>"comments_list", );
$output->conditions = array ( array("pipe"=>"",
"condition"=>array(array("column"=>"comment_srl", "value"=>$args->comment_srl,"pipe"=>"","operation"=>"equal",),
)),
 );
return $output; ?>
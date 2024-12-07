<?php if(!defined('__ZBXE__')) exit();
$output->query_id = "comment.deleteComment";
$output->action = "delete";
if(is_object($args->comment_srl)){ $args->comment_srl = array_values(get_method_vars($args->comment_srl)); }
if(is_array($args->comment_srl) && count($args->comment_srl)==0){ unset($args->comment_srl); };
if(isset($args->comment_srl)) { unset($_output); $_output = $this->checkFilter("comment_srl",$args->comment_srl,"number"); if(!$_output->toBool()) return $_output; } 
if(!isset($args->comment_srl)) return new Object(-1, sprintf($lang->filter->isnull, $lang->comment_srl?$lang->comment_srl:'comment_srl'));
$output->column_type["comment_srl"] = "number";
$output->column_type["module_srl"] = "number";
$output->column_type["document_srl"] = "number";
$output->column_type["parent_srl"] = "number";
$output->column_type["is_secret"] = "char";
$output->column_type["content"] = "bigtext";
$output->column_type["voted_count"] = "number";
$output->column_type["blamed_count"] = "number";
$output->column_type["notify_message"] = "char";
$output->column_type["password"] = "varchar";
$output->column_type["user_id"] = "varchar";
$output->column_type["user_name"] = "varchar";
$output->column_type["nick_name"] = "varchar";
$output->column_type["member_srl"] = "number";
$output->column_type["email_address"] = "varchar";
$output->column_type["homepage"] = "varchar";
$output->column_type["uploaded_count"] = "number";
$output->column_type["regdate"] = "date";
$output->column_type["last_update"] = "date";
$output->column_type["ipaddress"] = "varchar";
$output->column_type["list_order"] = "number";
$output->tables = array( "comments"=>"comments", );
$output->_tables = array( "comments"=>"comments", );
$output->conditions = array ( array("pipe"=>"",
"condition"=>array(array("column"=>"comment_srl", "value"=>$args->comment_srl,"pipe"=>"","operation"=>"equal",),
)),
 );
return $output; ?>
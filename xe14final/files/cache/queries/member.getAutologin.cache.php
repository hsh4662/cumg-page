<?php if(!defined('__ZBXE__')) exit();
$output->query_id = "member.getAutologin";
$output->action = "select";
if(is_object($args->autologin_key)){ $args->autologin_key = array_values(get_method_vars($args->autologin_key)); }
if(is_array($args->autologin_key) && count($args->autologin_key)==0){ unset($args->autologin_key); };
if(!isset($args->autologin_key)) return new Object(-1, sprintf($lang->filter->isnull, $lang->autologin_key?$lang->autologin_key:'autologin_key'));
$output->column_type["member_srl"] = "number";
$output->column_type["user_id"] = "varchar";
$output->column_type["email_address"] = "varchar";
$output->column_type["password"] = "varchar";
$output->column_type["email_id"] = "varchar";
$output->column_type["email_host"] = "varchar";
$output->column_type["user_name"] = "varchar";
$output->column_type["nick_name"] = "varchar";
$output->column_type["find_account_question"] = "number";
$output->column_type["find_account_answer"] = "varchar";
$output->column_type["homepage"] = "varchar";
$output->column_type["blog"] = "varchar";
$output->column_type["birthday"] = "char";
$output->column_type["allow_mailing"] = "char";
$output->column_type["allow_message"] = "char";
$output->column_type["denied"] = "char";
$output->column_type["limit_date"] = "date";
$output->column_type["regdate"] = "date";
$output->column_type["last_login"] = "date";
$output->column_type["change_password_date"] = "date";
$output->column_type["is_admin"] = "char";
$output->column_type["description"] = "text";
$output->column_type["extra_vars"] = "text";
$output->column_type["list_order"] = "number";
$output->column_type["autologin_key"] = "varchar";
$output->column_type["member_srl"] = "number";
$output->tables = array( "member"=>"member","member_autologin"=>"member_autologin", );
$output->_tables = array( "member"=>"member","member_autologin"=>"member_autologin", );
$output->columns = array ( array("name"=>"member.user_id","alias"=>"user_id"),
array("name"=>"member.password","alias"=>"password"),
array("name"=>"member_autologin.autologin_key","alias"=>"autologin_key"),
 );
$output->conditions = array ( array("pipe"=>"",
"condition"=>array(array("column"=>"member_autologin.autologin_key", "value"=>$args->autologin_key,"pipe"=>"","operation"=>"equal",),
array("column"=>"member.member_srl", "value"=>"member_autologin.member_srl","pipe"=>"and","operation"=>"equal",),
)),
 );
return $output; ?>
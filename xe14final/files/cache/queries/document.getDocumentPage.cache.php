<?php if(!defined('__ZBXE__')) exit();
$output->query_id = "document.getDocumentPage";
$output->action = "select";
if(is_object($args->module_srl)){ $args->module_srl = array_values(get_method_vars($args->module_srl)); }
if(is_array($args->module_srl) && count($args->module_srl)==0){ unset($args->module_srl); };
if(is_object($args->comment_count)){ $args->comment_count = array_values(get_method_vars($args->comment_count)); }
if(is_array($args->comment_count) && count($args->comment_count)==0){ unset($args->comment_count); };
if(is_object($args->rev_comment_count)){ $args->rev_comment_count = array_values(get_method_vars($args->rev_comment_count)); }
if(is_array($args->rev_comment_count) && count($args->rev_comment_count)==0){ unset($args->rev_comment_count); };
if(is_object($args->voted_count)){ $args->voted_count = array_values(get_method_vars($args->voted_count)); }
if(is_array($args->voted_count) && count($args->voted_count)==0){ unset($args->voted_count); };
if(is_object($args->rev_voted_count)){ $args->rev_voted_count = array_values(get_method_vars($args->rev_voted_count)); }
if(is_array($args->rev_voted_count) && count($args->rev_voted_count)==0){ unset($args->rev_voted_count); };
if(is_object($args->readed_count)){ $args->readed_count = array_values(get_method_vars($args->readed_count)); }
if(is_array($args->readed_count) && count($args->readed_count)==0){ unset($args->readed_count); };
if(is_object($args->rev_readed_count)){ $args->rev_readed_count = array_values(get_method_vars($args->rev_readed_count)); }
if(is_array($args->rev_readed_count) && count($args->rev_readed_count)==0){ unset($args->rev_readed_count); };
if(is_object($args->list_order)){ $args->list_order = array_values(get_method_vars($args->list_order)); }
if(is_array($args->list_order) && count($args->list_order)==0){ unset($args->list_order); };
if(is_object($args->rev_list_order)){ $args->rev_list_order = array_values(get_method_vars($args->rev_list_order)); }
if(is_array($args->rev_list_order) && count($args->rev_list_order)==0){ unset($args->rev_list_order); };
if(is_object($args->title)){ $args->title = array_values(get_method_vars($args->title)); }
if(is_array($args->title) && count($args->title)==0){ unset($args->title); };
if(is_object($args->rev_title)){ $args->rev_title = array_values(get_method_vars($args->rev_title)); }
if(is_array($args->rev_title) && count($args->rev_title)==0){ unset($args->rev_title); };
if(is_object($args->regdate)){ $args->regdate = array_values(get_method_vars($args->regdate)); }
if(is_array($args->regdate) && count($args->regdate)==0){ unset($args->regdate); };
if(is_object($args->rev_regdate)){ $args->rev_regdate = array_values(get_method_vars($args->rev_regdate)); }
if(is_array($args->rev_regdate) && count($args->rev_regdate)==0){ unset($args->rev_regdate); };
if(is_object($args->update_order)){ $args->update_order = array_values(get_method_vars($args->update_order)); }
if(is_array($args->update_order) && count($args->update_order)==0){ unset($args->update_order); };
if(is_object($args->rev_update_order)){ $args->rev_update_order = array_values(get_method_vars($args->rev_update_order)); }
if(is_array($args->rev_update_order) && count($args->rev_update_order)==0){ unset($args->rev_update_order); };
if(is_object($args->s_title)){ $args->s_title = array_values(get_method_vars($args->s_title)); }
if(is_array($args->s_title) && count($args->s_title)==0){ unset($args->s_title); };
if(is_object($args->s_content)){ $args->s_content = array_values(get_method_vars($args->s_content)); }
if(is_array($args->s_content) && count($args->s_content)==0){ unset($args->s_content); };
if(is_object($args->s_user_name)){ $args->s_user_name = array_values(get_method_vars($args->s_user_name)); }
if(is_array($args->s_user_name) && count($args->s_user_name)==0){ unset($args->s_user_name); };
if(is_object($args->s_user_id)){ $args->s_user_id = array_values(get_method_vars($args->s_user_id)); }
if(is_array($args->s_user_id) && count($args->s_user_id)==0){ unset($args->s_user_id); };
if(is_object($args->s_nick_name)){ $args->s_nick_name = array_values(get_method_vars($args->s_nick_name)); }
if(is_array($args->s_nick_name) && count($args->s_nick_name)==0){ unset($args->s_nick_name); };
if(is_object($args->s_email_addres)){ $args->s_email_addres = array_values(get_method_vars($args->s_email_addres)); }
if(is_array($args->s_email_addres) && count($args->s_email_addres)==0){ unset($args->s_email_addres); };
if(is_object($args->s_homepage)){ $args->s_homepage = array_values(get_method_vars($args->s_homepage)); }
if(is_array($args->s_homepage) && count($args->s_homepage)==0){ unset($args->s_homepage); };
if(is_object($args->s_tags)){ $args->s_tags = array_values(get_method_vars($args->s_tags)); }
if(is_array($args->s_tags) && count($args->s_tags)==0){ unset($args->s_tags); };
if(is_object($args->s_is_secret)){ $args->s_is_secret = array_values(get_method_vars($args->s_is_secret)); }
if(is_array($args->s_is_secret) && count($args->s_is_secret)==0){ unset($args->s_is_secret); };
if(is_object($args->s_member_srl)){ $args->s_member_srl = array_values(get_method_vars($args->s_member_srl)); }
if(is_array($args->s_member_srl) && count($args->s_member_srl)==0){ unset($args->s_member_srl); };
if(is_object($args->s_readed_count)){ $args->s_readed_count = array_values(get_method_vars($args->s_readed_count)); }
if(is_array($args->s_readed_count) && count($args->s_readed_count)==0){ unset($args->s_readed_count); };
if(is_object($args->s_voted_count)){ $args->s_voted_count = array_values(get_method_vars($args->s_voted_count)); }
if(is_array($args->s_voted_count) && count($args->s_voted_count)==0){ unset($args->s_voted_count); };
if(is_object($args->s_comment_count)){ $args->s_comment_count = array_values(get_method_vars($args->s_comment_count)); }
if(is_array($args->s_comment_count) && count($args->s_comment_count)==0){ unset($args->s_comment_count); };
if(is_object($args->s_trackback_count)){ $args->s_trackback_count = array_values(get_method_vars($args->s_trackback_count)); }
if(is_array($args->s_trackback_count) && count($args->s_trackback_count)==0){ unset($args->s_trackback_count); };
if(is_object($args->s_uploaded_count)){ $args->s_uploaded_count = array_values(get_method_vars($args->s_uploaded_count)); }
if(is_array($args->s_uploaded_count) && count($args->s_uploaded_count)==0){ unset($args->s_uploaded_count); };
if(is_object($args->s_regdate)){ $args->s_regdate = array_values(get_method_vars($args->s_regdate)); }
if(is_array($args->s_regdate) && count($args->s_regdate)==0){ unset($args->s_regdate); };
if(is_object($args->s_last_update)){ $args->s_last_update = array_values(get_method_vars($args->s_last_update)); }
if(is_array($args->s_last_update) && count($args->s_last_update)==0){ unset($args->s_last_update); };
if(is_object($args->s_ipaddress)){ $args->s_ipaddress = array_values(get_method_vars($args->s_ipaddress)); }
if(is_array($args->s_ipaddress) && count($args->s_ipaddress)==0){ unset($args->s_ipaddress); };
if(isset($args->comment_count)) { unset($_output); $_output = $this->checkFilter("comment_count",$args->comment_count,"number"); if(!$_output->toBool()) return $_output; } 
if(isset($args->rev_comment_count)) { unset($_output); $_output = $this->checkFilter("rev_comment_count",$args->rev_comment_count,"number"); if(!$_output->toBool()) return $_output; } 
if(isset($args->voted_count)) { unset($_output); $_output = $this->checkFilter("voted_count",$args->voted_count,"number"); if(!$_output->toBool()) return $_output; } 
if(isset($args->rev_voted_count)) { unset($_output); $_output = $this->checkFilter("rev_voted_count",$args->rev_voted_count,"number"); if(!$_output->toBool()) return $_output; } 
if(isset($args->readed_count)) { unset($_output); $_output = $this->checkFilter("readed_count",$args->readed_count,"number"); if(!$_output->toBool()) return $_output; } 
if(isset($args->rev_readed_count)) { unset($_output); $_output = $this->checkFilter("rev_readed_count",$args->rev_readed_count,"number"); if(!$_output->toBool()) return $_output; } 
if(isset($args->list_order)) { unset($_output); $_output = $this->checkFilter("list_order",$args->list_order,"number"); if(!$_output->toBool()) return $_output; } 
if(isset($args->rev_list_order)) { unset($_output); $_output = $this->checkFilter("rev_list_order",$args->rev_list_order,"number"); if(!$_output->toBool()) return $_output; } 
if(isset($args->title)) { unset($_output); $_output = $this->checkFilter("title",$args->title,"number"); if(!$_output->toBool()) return $_output; } 
if(isset($args->rev_title)) { unset($_output); $_output = $this->checkFilter("rev_title",$args->rev_title,"number"); if(!$_output->toBool()) return $_output; } 
if(isset($args->regdate)) { unset($_output); $_output = $this->checkFilter("regdate",$args->regdate,"number"); if(!$_output->toBool()) return $_output; } 
if(isset($args->rev_regdate)) { unset($_output); $_output = $this->checkFilter("rev_regdate",$args->rev_regdate,"number"); if(!$_output->toBool()) return $_output; } 
if(isset($args->update_order)) { unset($_output); $_output = $this->checkFilter("update_order",$args->update_order,"number"); if(!$_output->toBool()) return $_output; } 
if(isset($args->rev_update_order)) { unset($_output); $_output = $this->checkFilter("rev_update_order",$args->rev_update_order,"number"); if(!$_output->toBool()) return $_output; } 
$output->column_type["document_srl"] = "number";
$output->column_type["module_srl"] = "number";
$output->column_type["category_srl"] = "number";
$output->column_type["lang_code"] = "varchar";
$output->column_type["is_notice"] = "char";
$output->column_type["is_secret"] = "char";
$output->column_type["title"] = "varchar";
$output->column_type["title_bold"] = "char";
$output->column_type["title_color"] = "varchar";
$output->column_type["content"] = "bigtext";
$output->column_type["readed_count"] = "number";
$output->column_type["voted_count"] = "number";
$output->column_type["blamed_count"] = "number";
$output->column_type["comment_count"] = "number";
$output->column_type["trackback_count"] = "number";
$output->column_type["uploaded_count"] = "number";
$output->column_type["password"] = "varchar";
$output->column_type["user_id"] = "varchar";
$output->column_type["user_name"] = "varchar";
$output->column_type["nick_name"] = "varchar";
$output->column_type["member_srl"] = "number";
$output->column_type["email_address"] = "varchar";
$output->column_type["homepage"] = "varchar";
$output->column_type["tags"] = "text";
$output->column_type["extra_vars"] = "text";
$output->column_type["regdate"] = "date";
$output->column_type["last_update"] = "date";
$output->column_type["last_updater"] = "varchar";
$output->column_type["ipaddress"] = "varchar";
$output->column_type["list_order"] = "number";
$output->column_type["update_order"] = "number";
$output->column_type["allow_comment"] = "char";
$output->column_type["lock_comment"] = "char";
$output->column_type["allow_trackback"] = "char";
$output->column_type["notify_message"] = "char";
$output->tables = array( "documents"=>"documents", );
$output->_tables = array( "documents"=>"documents", );
$output->columns = array ( array("name"=>"count(*)","alias"=>"count"),
 );
$output->conditions = array ( array("pipe"=>"",
"condition"=>array(array("column"=>"module_srl", "value"=>$args->module_srl,"pipe"=>"","operation"=>"equal",),
array("column"=>"comment_count", "value"=>$args->comment_count,"pipe"=>"and","operation"=>"more",),
array("column"=>"comment_count", "value"=>$args->rev_comment_count,"pipe"=>"and","operation"=>"less",),
array("column"=>"voted_count", "value"=>$args->voted_count,"pipe"=>"and","operation"=>"more",),
array("column"=>"voted_count", "value"=>$args->rev_voted_count,"pipe"=>"and","operation"=>"less",),
array("column"=>"readed_count", "value"=>$args->readed_count,"pipe"=>"and","operation"=>"more",),
array("column"=>"readed_count", "value"=>$args->rev_readed_count,"pipe"=>"and","operation"=>"less",),
array("column"=>"list_order", "value"=>$args->list_order,"pipe"=>"and","operation"=>"less",),
array("column"=>"list_order", "value"=>$args->rev_list_order,"pipe"=>"and","operation"=>"more",),
array("column"=>"title", "value"=>$args->title,"pipe"=>"and","operation"=>"more",),
array("column"=>"title", "value"=>$args->rev_title,"pipe"=>"and","operation"=>"less",),
array("column"=>"regdate", "value"=>$args->regdate,"pipe"=>"and","operation"=>"more",),
array("column"=>"regdate", "value"=>$args->rev_regdate,"pipe"=>"and","operation"=>"less",),
array("column"=>"update_order", "value"=>$args->update_order,"pipe"=>"and","operation"=>"less",),
array("column"=>"update_order", "value"=>$args->rev_update_order,"pipe"=>"and","operation"=>"more",),
)),
array("pipe"=>"and",
"condition"=>array(array("column"=>"title", "value"=>$args->s_title,"pipe"=>"","operation"=>"like",),
array("column"=>"content", "value"=>$args->s_content,"pipe"=>"or","operation"=>"like",),
array("column"=>"user_name", "value"=>$args->s_user_name,"pipe"=>"or","operation"=>"like",),
array("column"=>"user_id", "value"=>$args->s_user_id,"pipe"=>"or","operation"=>"like",),
array("column"=>"nick_name", "value"=>$args->s_nick_name,"pipe"=>"or","operation"=>"like",),
array("column"=>"email_address", "value"=>$args->s_email_addres,"pipe"=>"or","operation"=>"like",),
array("column"=>"homepage", "value"=>$args->s_homepage,"pipe"=>"or","operation"=>"like",),
array("column"=>"tags", "value"=>$args->s_tags,"pipe"=>"or","operation"=>"like",),
array("column"=>"is_secret", "value"=>$args->s_is_secret,"pipe"=>"or","operation"=>"equal",),
array("column"=>"member_srl", "value"=>$args->s_member_srl,"pipe"=>"or","operation"=>"equal",),
array("column"=>"readed_count", "value"=>$args->s_readed_count,"pipe"=>"or","operation"=>"more",),
array("column"=>"voted_count", "value"=>$args->s_voted_count,"pipe"=>"or","operation"=>"more",),
array("column"=>"comment_count", "value"=>$args->s_comment_count,"pipe"=>"or","operation"=>"more",),
array("column"=>"trackback_count", "value"=>$args->s_trackback_count,"pipe"=>"or","operation"=>"more",),
array("column"=>"uploaded_count", "value"=>$args->s_uploaded_count,"pipe"=>"or","operation"=>"more",),
array("column"=>"regdate", "value"=>$args->s_regdate,"pipe"=>"or","operation"=>"like_prefix",),
array("column"=>"last_update", "value"=>$args->s_last_update,"pipe"=>"or","operation"=>"like_prefix",),
array("column"=>"ipaddress", "value"=>$args->s_ipaddress,"pipe"=>"or","operation"=>"like_prefix",),
)),
 );
return $output; ?>
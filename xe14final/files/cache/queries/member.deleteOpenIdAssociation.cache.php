<?php if(!defined('__ZBXE__')) exit();
$output->query_id = "member.deleteOpenIdAssociation";
$output->action = "delete";
if(is_object($args->server_url)){ $args->server_url = array_values(get_method_vars($args->server_url)); }
if(is_array($args->server_url) && count($args->server_url)==0){ unset($args->server_url); };
if(is_object($args->handle)){ $args->handle = array_values(get_method_vars($args->handle)); }
if(is_array($args->handle) && count($args->handle)==0){ unset($args->handle); };
$output->column_type["server_url"] = "text";
$output->column_type["handle"] = "varchar";
$output->column_type["secret"] = "text";
$output->column_type["issued"] = "number";
$output->column_type["lifetime"] = "number";
$output->column_type["assoc_type"] = "varchar";
$output->tables = array( "member_openid_association"=>"member_openid_association", );
$output->_tables = array( "member_openid_association"=>"member_openid_association", );
$output->conditions = array ( array("pipe"=>"",
"condition"=>array(array("column"=>"server_url", "value"=>$args->server_url,"pipe"=>"","operation"=>"equal",),
array("column"=>"handle", "value"=>$args->handle,"pipe"=>"and","operation"=>"equal",),
)),
 );
return $output; ?>
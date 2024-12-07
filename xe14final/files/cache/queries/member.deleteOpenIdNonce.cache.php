<?php if(!defined('__ZBXE__')) exit();
$output->query_id = "member.deleteOpenIdNonce";
$output->action = "delete";
if(is_object($args->nonce)){ $args->nonce = array_values(get_method_vars($args->nonce)); }
if(is_array($args->nonce) && count($args->nonce)==0){ unset($args->nonce); };
$output->column_type["nonce"] = "char";
$output->column_type["expires"] = "number";
$output->tables = array( "member_openid_nonce"=>"member_openid_nonce", );
$output->_tables = array( "member_openid_nonce"=>"member_openid_nonce", );
$output->conditions = array ( array("pipe"=>"",
"condition"=>array(array("column"=>"nonce", "value"=>$args->nonce,"pipe"=>"","operation"=>"equal",),
)),
 );
return $output; ?>
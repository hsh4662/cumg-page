<?php define('__ZBXE__', true); require_once('/home/cumg/public_html/xe14final/config/config.inc.php'); $oContext = &Context::getInstance(); $oContext->init(); header("Content-Type: text/xml; charset=UTF-8"); header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); header("Cache-Control: no-store, no-cache, must-revalidate"); header("Cache-Control: post-check=0, pre-check=0", false); header("Pragma: no-cache"); $lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); $site_srl = 0;$site_admin = false;if($site_srl) { $oModuleModel = &getModel('module');$site_module_info = $oModuleModel->getSiteInfo($site_srl); Context::set('site_module_info',$site_module_info);$grant = $oModuleModel->getGrant($site_module_info, $logged_info); if($grant->manager ==1) $site_admin = true;}if($is_logged) {if($logged_info->is_admin=="Y" || $site_admin) $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srsl = array(); }  $oContext->close(); ?><root><node node_srl="51" parent_srl="0" text="<?php if(true) { $_names = array("en"=>"menu1","ko"=>"menu1",); print $_names[$lang_type]; }?>" url="<?php print(true?"":"")?>" href="<?php print(true?"":"")?>" open_window="" expand="" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>"><node node_srl="52" parent_srl="51" text="<?php if(true) { $_names = array("en"=>"menu1-1","ko"=>"menu1-1",); print $_names[$lang_type]; }?>" url="<?php print(true?"welcome_page":"")?>" href="<?php print(true?"/~cumg/xe14final/index.php?mid=welcome_page":"")?>" open_window="" expand="" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /></node></root>
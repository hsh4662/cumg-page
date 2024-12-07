<?php if(!defined("__ZBXE__")) exit();?><!--#Meta:./modules/message/m.skins/default/message.css--><?php Context::addCSSFile("./modules/message/m.skins/default/message.css", true, "all", "", null); ?>
<div class="bd">
	<div class="hx h2">
		<h2><?php @print($__Context->system_message);?></h2>
	</div>
	<div class="co">
		<?php  if(!$__Context->is_logged){ ?>
        <?php @Context::addJsFile("./common/js/jquery.js", true, '', -100000);?>
        <?php @Context::addJsFile("./common/js/js_app.js", true, '', -100000);?>
        <?php @Context::addJsFile("./common/js/x.js", true, '', -100000);?>
        <?php @Context::addJsFile("./common/js/common.js", true, '', -100000);?>
        <?php @Context::addJsFile("./common/js/xml_handler.js", true, '', -100000);?>
        <?php @Context::addJsFile("./common/js/xml_js_filter.js", true, '', -100000);?>
		<?php
require_once("./classes/xml/XmlJsFilter.class.php");
$__Context->oXmlFilter = new XmlJSFilter("./modules/message/m.skins/default/./filter/","login.xml");
$__Context->oXmlFilter->compile();
?>

		<?php
require_once("./classes/xml/XmlJsFilter.class.php");
$__Context->oXmlFilter = new XmlJSFilter("./modules/message/m.skins/default/./filter/","openid_login.xml");
$__Context->oXmlFilter->compile();
?>

		<div class="mLogin" id="gLogin">
			<form action="./" method="post" onsubmit="return procFilter(this, message_login)" id="gForm" class="ff">
				<fieldset>
					<ul>
						<li><label for="uid"><?php @print($__Context->lang->user_id);?></label><input type="text" name="user_id" id="uid" value="" /></li>
						<li><label for="upw"><?php @print($__Context->lang->password);?></label><input type="password" name="password" id="upw" value="" /></li>
					</ul>
					<p>
						<input type="checkbox" name="keep_signed" id="keepid" value="Y" />						
						<label for="keepid"><?php @print($__Context->lang->keep_signed);?></label>
					</p>
					<input type="submit" value="<?php @print($__Context->lang->cmd_login);?>" class="bn dark" />
					<ul class="hp">
						<li><a href="<?php @print(getUrl('','act','dispMemberFindAccount'));?>"><span><?php @print($__Context->lang->cmd_find_member_account);?></span></a></li>
						<li><a href="<?php @print(getUrl('','act','dispMemberSignUpForm'));?>"><span><?php @print($__Context->lang->cmd_signup);?></span></a></li>
						<?php  if($__Context->member_config->enable_openid=='Y'){ ?>
						<li><a href="#oLogin">Open ID</a></li>
						<?php  } ?>
					</ul>
				</fieldset>
			</form>
		</div>
		<!-- OpenID -->
		<?php  if($__Context->member_config->enable_openid=='Y'){ ?>
		<div class="mLogin" id="oLogin">
			<form action="<?php @print(getUrl('module','member','act','procMemberOpenIDLogin'));?>" method="post" onsubmit="return procFilter(this, openid_login)" id="oForm" class="ff">
				<fieldset>
					<ul>
						<li><label for="openid">Open ID</label><input type="text" name="openid" id="openid" value="" /></li>
					</ul>
					<div class="buttonArea">
					<input type="submit" value="<?php @print($__Context->lang->cmd_login);?>" class="bn dark" />
					</div>
					<ul class="hp">
						<li><a href="#gLogin"><?php @print($__Context->lang->cmd_common_id);?></a></li>
					</ul>
				</fieldset>
			</form>
		</div>
		<?php  } ?>
		<?php  } ?>
		<?php  if($__Context->is_logged){ ?>
		<div class="logOut">
			<a href="<?php @print(getUrl('act','dispMemberLogout','module',''));?>" class="bn dark"><?php @print($__Context->lang->cmd_logout);?></a>
		</div>
		<?php  } ?>
	</div>
</div>

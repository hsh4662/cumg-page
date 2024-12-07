<?php if(!defined("__ZBXE__")) exit();?><?php
$__Context->oTemplate = &TemplateHandler::getInstance();
print $__Context->oTemplate->compile('./modules/member/skins/default/','common_header.html');
?>

<?php
require_once("./classes/xml/XmlJsFilter.class.php");
$__Context->oXmlFilter = new XmlJSFilter("./modules/member/skins/default/filter/","login.xml");
$__Context->oXmlFilter->compile();
?>

<?php
require_once("./classes/xml/XmlJsFilter.class.php");
$__Context->oXmlFilter = new XmlJSFilter("./modules/member/skins/default/filter/","openid_login.xml");
$__Context->oXmlFilter->compile();
?>


<script type="text/javascript">
    var keep_signed_msg = "<?php @print($__Context->lang->about_keep_signed);?>";
    xAddEventListener(window, "load", function() { doFocusUserId('fo_member_login'); });
</script>

<!-- XE 로그인 폼 -->
<div class="memberSmallBox">

    <div class="header"><?php @print($__Context->lang->cmd_login);?></div>

    <form action="./" method="post" onsubmit="return procFilter(this, login)" id="fo_member_login">
        <fieldset class="login">
            <dl>
                <dt><label for="uid"><?php @print($__Context->lang->user_id);?></label></dt>
                <dd><input type="text" name="user_id" id="uid" value="" class="iText w140" /></dd>
                <dt><label for="upw"><?php @print($__Context->lang->password);?></label></dt>
                <dd><input type="password" name="password" id="upw" value="" class="iText w140" /></dd>
            </dl>

            <p class="keep">
                <input type="checkbox" name="keep_signed" id="keepid_opt" value="Y" onclick="if(this.checked) return confirm(keep_signed_msg);"/>
                <label for="keepid_opt"><?php @print($__Context->lang->keep_signed);?></label>
            </p>
			
			<div class="buttonArea">
				<span class="button black strong"><input type="submit" value="<?php @print($__Context->lang->cmd_login);?>" /></span>
			</div>

        </fieldset>
    </form>

    <div class="help tCenter">
        <a href="<?php @print(getUrl('act','dispMemberFindAccount'));?>"><span><?php @print($__Context->lang->cmd_find_member_account);?></span></a> |
        <a href="<?php @print(getUrl('act','dispMemberSignUpForm'));?>"><span><?php @print($__Context->lang->cmd_signup);?></span></a>
    </div>
</div>

<?php  if($__Context->member_config->enable_openid=='Y'){ ?>
<!-- OpenID 로그인 폼 -->
<div class="memberSmallBox">

    <div class="header"><?php @print($__Context->lang->openid);?></div>

    <form action="<?php @print(getUrl('module','member','act','procMemberOpenIDLogin'));?>" method="post" onsubmit="return procFilter(this, openid_login)">
        <fieldset class="login">
            <dl>
                <dt><label for="open_uid"><?php @print($__Context->lang->user_id);?></label></dt>
                <dd><input type="text" name="openid" id="open_uid" value="" class="openid_user_id" /></dd>
            </dl>
            <span class="button black strong"><input type="submit" value="<?php @print($__Context->lang->cmd_login);?>" /></span>

        </fieldset>
        <input type="hidden" name="referer_url" value="<?php @print($__Context->referer_url);?>" />
    </form>

    <div class="help tLeft"><?php @print($__Context->lang->about_openid);?></div>

</div>
<?php  } ?>

<?php
$__Context->oTemplate = &TemplateHandler::getInstance();
print $__Context->oTemplate->compile('./modules/member/skins/default/','common_footer.html');
?>


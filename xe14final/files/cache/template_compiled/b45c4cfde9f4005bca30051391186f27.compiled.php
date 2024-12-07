<?php if(!defined("__ZBXE__")) exit();?><!--#Meta:./modules/member/skins/default/../../tpl/js/signup_check.js--><?php Context::addJsFile("./modules/member/skins/default/../../tpl/js/signup_check.js", true, "", null, "head"); ?>
<?php
require_once("./classes/xml/XmlJsFilter.class.php");
$__Context->oXmlFilter = new XmlJSFilter("./modules/member/skins/default/filter/","signup.xml");
$__Context->oXmlFilter->compile();
?>


<?php Context::loadJavascriptPlugin("ui"); ?>
<?php Context::loadJavascriptPlugin("ui.datepicker"); ?>

<?php
$__Context->oTemplate = &TemplateHandler::getInstance();
print $__Context->oTemplate->compile('./modules/member/skins/default/','common_header.html');
?>


    <h3><?php @print($__Context->lang->cmd_signup);?></h3>

    <form id="fo_insert_member" action="./" method="get" onsubmit="return procFilter(this, signup)">

    <?php  if(!$__Context->is_logged && $__Context->member_config->agreement){ ?>
    <div class="agreementBox">
        <?php @print($__Context->member_config->agreement);?>
    </div>
    <div class="agreementButton">
        <input type="checkbox" name="accept_agreement" value="Y" id="accept_agree" />
        <label for="accept_agree"><?php @print($__Context->lang->about_accept_agreement);?></label>
    </div>
    <?php  } ?>

    <table cellspacing="0" class="rowTable">
    <tr>
        <th colspan="2" class="title"><div><?php @print($__Context->lang->member_default_info);?></div></th>
    </tr>
    <tr>
        <th><div><?php @print($__Context->lang->user_id);?> <span class="require">*</span></div></th>
        <td class="wide"><input type="text" name="user_id" value="" class="iText"/> <p><?php @print($__Context->lang->about_user_id);?></p> </td>
    </tr>
    <tr>
        <th><div><?php @print($__Context->lang->password);?> <span class="require">*</span></div></th>
        <td><input type="password" name="password1" value="" class="iText"/><p><?php @print($__Context->lang->about_password);?></p></td>
    </tr>
    <tr>
        <th><div><?php @print($__Context->lang->password2);?> <span class="require">*</span></div></th>
        <td><input type="password" name="password2" value="" class="iText"/></td>
    </tr>
    <tr>
        <th><div><?php @print($__Context->lang->user_name);?> <span class="require">*</span></div></th>
        <td>
            <input type="text" name="user_name" value="" class="iText"/><p><?php @print($__Context->lang->about_user_name);?></p>
        </td>
    </tr>
    <tr>
        <th><div><?php @print($__Context->lang->nick_name);?> <span class="require">*</span></div></th>
        <td>
            <input type="text" name="nick_name" value="" class="iText"/><p><?php @print($__Context->lang->about_nick_name);?></p>
        </td>
    </tr>
    <tr>
        <th><div><?php @print($__Context->lang->email_address);?> <span class="require">*</span></div></th>
        <td>
            <input type="text" name="email_address" value="" class="iText"/><p><?php @print($__Context->lang->about_email_address);?></p>
        </td>
    </tr>
	<?php  if(count($__Context->lang->find_account_question_items)>1){ ?>
    <tr>
        <th><div><?php @print($__Context->lang->find_account_question);?> <span class="require">*</span></div></th>
        <td>
			<select name="find_account_question">
			<?php  for($__Context->i=1,$__Context->c=count($__Context->lang->find_account_question_items);$__Context->i<$__Context->c;$__Context->i++){ ?>
				<option value="<?php @print($__Context->i);?>"><?php @print($__Context->lang->find_account_question_items[$__Context->i]);?></option>
			<?php  } ?>
			</select>
            <br />
			<input type="text" name="find_account_answer" value="" class="iText w300"/>
        </td>
    </tr>
	<?php  } ?>
    <tr>
        <th><div><?php @print($__Context->lang->homepage);?></div></th>
        <td>
            <input type="text" name="homepage" value="" class="iText"/><p><?php @print($__Context->lang->about_homepage);?></p>
        </td>
    </tr>
    <tr>
        <th><div><?php @print($__Context->lang->blog);?></div></th>
        <td>
            <input type="text" name="blog" value="" class="iText"/><p><?php @print($__Context->lang->about_blog_url);?></p>
        </td>
    </tr>
    <tr>
        <th><div><?php @print($__Context->lang->birthday);?></div></th>
        <td>
            <input type="hidden" name="birthday" id="date_birthday" value="" />
            <input type="text" value="" readonly="readonly" class="inputDate iText" />
			<span class="button"><input type="button" value="<?php @print($__Context->lang->cmd_delete);?>" class="dateRemover" /></span>
			<p><?php @print($__Context->lang->about_birthday);?></p>
        </td>
    </tr>
    <tr>
        <th><div><?php @print($__Context->lang->allow_mailing);?></div></th>
        <td><input type="checkbox" class="checkbox" name="allow_mailing" value="Y" checked="checked" /> <p><?php @print($__Context->lang->about_allow_mailing);?></p></td>
    </tr>
    <?php  if($__Context->extend_form_list){ ?>
    <tr>
        <th class="title" colspan="2"><div><?php @print($__Context->lang->member_extend_info);?></div></th>
    </tr>

        <?php $__Context->Context->__idx[0]=0;if(count($__Context->extend_form_list))  foreach($__Context->extend_form_list as $__Context->key => $__Context->val){$__Context->__idx[1]=($__Context->__idx[1]+1)%2; $__Context->cycle_idx = $__Context->__idx[1]+1; ?><?php  if($__Context->val->is_active=='Y'){ ?>
        <tr>
            <th>
                <?php @print(htmlspecialchars($__Context->val->column_title));?>
                <?php  if($__Context->val->required=='Y'){ ?><span class="require">*</span><?php  } ?>
            </th>
        <td>
            <?php  if($__Context->val->column_type == 'text'){ ?>
                <input type="text" name="<?php @print($__Context->val->column_name);?>" value="<?php @print(htmlspecialchars($__Context->val->value));?>" class="iText w400" />

            <?php  }elseif($__Context->val->column_type == 'homepage'){ ?>
                <input type="text" name="<?php @print($__Context->val->column_name);?>" value="<?php @print(htmlspecialchars($__Context->val->value));?>" class="iText w400" />

            <?php  }elseif($__Context->val->column_type == 'email_address'){ ?>
                <input type="text" name="<?php @print($__Context->val->column_name);?>" value="<?php @print(htmlspecialchars($__Context->val->value));?>" class="iText w400" />

            <?php  }elseif($__Context->val->column_type == 'tel'){ ?>
                <input type="text" name="<?php @print($__Context->val->column_name);?>" value="<?php @print(htmlspecialchars($__Context->val->value[0]));?>" size="4" class="iText" />
                <input type="text" name="<?php @print($__Context->val->column_name);?>" value="<?php @print(htmlspecialchars($__Context->val->value[1]));?>" size="4" class="iText" />
                <input type="text" name="<?php @print($__Context->val->column_name);?>" value="<?php @print(htmlspecialchars($__Context->val->value[2]));?>" size="4" class="iText" />

            <?php  }elseif($__Context->val->column_type == 'textarea'){ ?>
                <textarea name="<?php @print($__Context->val->column_name);?>" class="iTextArea w400"><?php @print(htmlspecialchars($__Context->val->value));?></textarea>

            <?php  }elseif($__Context->val->column_type == 'checkbox'){ ?>
                <?php  if($__Context->val->default_value){ ?>
                    <ul class="checkbox">
                    <?php $__Context->Context->__idx[1]=0;if(count($__Context->val->default_value))  foreach($__Context->val->default_value as $__Context->v){$__Context->__idx[2]=($__Context->__idx[2]+1)%2; $__Context->cycle_idx = $__Context->__idx[2]+1; ?>
                        <li><input type="checkbox" name="<?php @print($__Context->val->column_name);?>" value="<?php @print($__Context->v);?>" <?php  if(is_array($__Context->val->value)&&in_array($__Context->v, $__Context->val->value)){ ?>checked="checked"<?php  } ?>/><?php @print($__Context->v);?></li>
                    <?php  } ?>
                    </ul>
                <?php  } ?>


            <?php  }elseif($__Context->val->column_type == 'radio'){ ?>
                <?php  if($__Context->val->default_value){ ?>
                    <ul class="radio">
                    <?php $__Context->Context->__idx[2]=0;if(count($__Context->val->default_value))  foreach($__Context->val->default_value as $__Context->v){$__Context->__idx[3]=($__Context->__idx[3]+1)%2; $__Context->cycle_idx = $__Context->__idx[3]+1; ?>
                        <li><input type="radio" name="<?php @print($__Context->val->column_name);?>" value="<?php @print($__Context->v);?>" <?php  if(is_array($__Context->val->value)&&in_array($__Context->v, $__Context->val->value)){ ?>checked="checked"<?php  } ?>/><?php @print($__Context->v);?></li>
                    <?php  } ?>
                    </ul>
                <?php  } ?>

            <?php  }elseif($__Context->val->column_type == 'select'){ ?>
                <select name="<?php @print($__Context->val->column_name);?>">
                <?php  if($__Context->val->default_value){ ?>
                    <?php $__Context->Context->__idx[3]=0;if(count($__Context->val->default_value))  foreach($__Context->val->default_value as $__Context->v){$__Context->__idx[4]=($__Context->__idx[4]+1)%2; $__Context->cycle_idx = $__Context->__idx[4]+1; ?>
                        <option value="<?php @print($__Context->v);?>" <?php  if($__Context->v == $__Context->val->value){ ?>selected="selected"<?php  } ?>><?php @print($__Context->v);?></option>
                    <?php  } ?>
                <?php  } ?>
                </select>

            <?php  }elseif($__Context->val->column_type == 'kr_zip'){ ?>
                <div class="krZip">
                    <div class="item" id="zone_address_search_<?php @print($__Context->val->column_name);?>"<?php if($__Context->val->value[0]) {?> style="display:none"<?php }?>>
						<label for="krzip_address1_<?php @print($__Context->val->column_name);?>" class="iLabel"><?php @print($__Context->lang->msg_kr_address);?></label>
                        <input type="text" id="krzip_address1_<?php @print($__Context->val->column_name);?>" class="iText w200" value="" />
                        <span class="button"><button type="button"><?php @print($__Context->lang->cmd_search);?></button></span>
                    </div>
                    <div class="item" id="zone_address_list_<?php @print($__Context->val->column_name);?>" style="display:none">
                        <select name="<?php @print($__Context->val->column_name);?>" id="address_list_<?php @print($__Context->val->column_name);?>" class="w300"></select>
                        <span class="button"><button type="button"><?php @print($__Context->lang->cmd_search_again);?></button></span>
                    </div>
                    <div class="item address2">
						<label for="krzip_address2_<?php @print($__Context->val->column_name);?>" class="iLabel"><?php @print($__Context->lang->msg_kr_address_etc);?></label>
                        <input type="text" name="<?php @print($__Context->val->column_name);?>" id="krzip_address2_<?php @print($__Context->val->column_name);?>" value="<?php @print(htmlspecialchars($__Context->val->value[1]));?>" class="iText w300" />
                    </div>
                </div>
				<!--#Meta:/xe14final/modules/member/skins/default/../../tpl/js/krzip_search.js--><?php Context::addJsFile("/xe14final/modules/member/skins/default/../../tpl/js/krzip_search.js",false,"",null,"body"); ?>
				<script type="text/javascript">jQuery(function($){ $.krzip('<?php @print($__Context->val->column_name);?>') });</script>
            <?php  }elseif($__Context->val->column_type == 'jp_zip'){ ?>
                <input type="text" name="<?php @print($__Context->val->column_name);?>" value="<?php @print(htmlspecialchars($__Context->val->value));?>" />

            <?php  }elseif($__Context->val->column_type == 'date'){ ?>
                <input type="hidden" name="<?php @print($__Context->val->column_name);?>" id="date_<?php @print($__Context->val->column_name);?>" value="<?php @print($__Context->val->value);?>" />
                <input type="text" class="inputDate iText" value="<?php @print(zdate($__Context->val->value,'Y-m-d'));?>" readonly="readonly" />
				<span class="button"><input type="button" value="<?php @print($__Context->lang->cmd_delete);?>" class="dateRemover" /></span>
            <?php  } ?>

            <p><?php @print($__Context->val->description);?></p>

            <div class="publicItem">
                <input type="checkbox" class="checkbox" name="open_<?php @print($__Context->val->column_name);?>" value="Y" id="open_<?php @print($__Context->val->column_name);?>" />
                <label for="open_<?php @print($__Context->val->column_name);?>"><?php @print($__Context->lang->public);?></label>
            </div>
        </td>
    </tr>
        <?php  } ?><?php  } ?>
    <?php  } ?>
    <tr>
        <th class="button" colspan="2">
            <span class="button black strong"><input type="submit" value="<?php @print($__Context->lang->cmd_registration);?>" accesskey="s" /></span>
            <a href="<?php @print(getUrl('act','','member_srl',''));?>" class="button"><span><?php @print($__Context->lang->cmd_cancel);?></span></a>
        </th>
    </tr>
    </table>
</form>

<script type="text/javascript">
(function($){
    $(function(){
        var option = { changeMonth: true, changeYear: true, gotoCurrent: false,yearRange:'-100:+10', onSelect:function(){

            $(this).prev('input[type="hidden"]').val(this.value.replace(/-/g,""))}
        };
        $.extend(option,$.datepicker.regional['<?php @print($__Context->lang_type);?>']);
        $(".inputDate").datepicker(option);
		$(".dateRemover").click(function() {
			$(this).parent().prevAll('input').val('');
			return false;});
    });
})(jQuery);
</script>
<?php
$__Context->oTemplate = &TemplateHandler::getInstance();
print $__Context->oTemplate->compile('./modules/member/skins/default/','common_footer.html');
?>


<?php if(!defined("__ZBXE__")) exit();?><?php
$__Context->oTemplate = &TemplateHandler::getInstance();
print $__Context->oTemplate->compile('./modules/member/skins/default/','common_header.html');
?>

<?php
require_once("./classes/xml/XmlJsFilter.class.php");
$__Context->oXmlFilter = new XmlJSFilter("./modules/member/skins/default/filter/","find_member_account.xml");
$__Context->oXmlFilter->compile();
?>

<?php
require_once("./classes/xml/XmlJsFilter.class.php");
$__Context->oXmlFilter = new XmlJSFilter("./modules/member/skins/default/filter/","find_member_account_by_question.xml");
$__Context->oXmlFilter->compile();
?>


<h3><?php @print($__Context->lang->cmd_find_member_account);?></h3>

<p class="summary"><?php @print($__Context->lang->about_find_member_account);?></p>

<form action="./" method="get" onsubmit="return procFilter(this, find_member_account)">
    <input type="hidden" name="mid" value="<?php @print($__Context->mid);?>" />
    <input type="hidden" name="document_srl" value="<?php @print($__Context->document_srl);?>" />
    <input type="hidden" name="page" value="<?php @print($__Context->page);?>" />

    <table cellspacing="0" class="rowTable" title="<?php @print($__Context->lang->email_address);?>">
        <tr>
            <th><div><label for="cpw"><?php @print($__Context->lang->email_address);?></label></div></th>
            <td class="wide"><input type="text" name="email_address" class="iText w400" /></td>
        </tr>
        <tr>
            <th class="button" colspan="2"><span class="button black strong"><input type="submit" value="<?php @print($__Context->lang->cmd_find_member_account);?>" accesskey="s" /></span></th>
        </tr>
    </table>
</form>


<?php  if(count($__Context->lang->find_account_question_items)>1){ ?>
<h3><?php @print($__Context->lang->cmd_find_member_account);?></h3>

<p class="summary"><?php @print($__Context->lang->about_find_account_question);?></p>

<form action="./" method="get" onsubmit="return procFilter(this, find_member_account_by_question)">
    <input type="hidden" name="mid" value="<?php @print($__Context->mid);?>" />
    <input type="hidden" name="document_srl" value="<?php @print($__Context->document_srl);?>" />
    <input type="hidden" name="page" value="<?php @print($__Context->page);?>" />

    <table cellspacing="0" class="rowTable" title="<?php @print($__Context->lang->email_address);?>">
        <tr>
            <th><div><label for="cpw"><?php @print($__Context->lang->user_id);?></label></div></th>
            <td class="wide"><input type="text" name="user_id" class="iText" /></td>
        </tr>
        <tr>
            <th><div><label for="cpw"><?php @print($__Context->lang->email_address);?></label></div></th>
            <td class="wide"><input type="text" name="email_address" class="iText w400" /></td>
        </tr>

		<tr>
			<th><div><label for="cpw"><?php @print($__Context->lang->find_account_question);?></label></div></th>
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

        <tr>
            <th class="button" colspan="2"><span class="button black strong"><input type="submit" value="<?php @print($__Context->lang->cmd_get_temp_password);?>" accesskey="s" /></span></th>
        </tr>
    </table>
</form>
<?php  } ?>

<?php
$__Context->oTemplate = &TemplateHandler::getInstance();
print $__Context->oTemplate->compile('./modules/member/skins/default/','common_footer.html');
?>


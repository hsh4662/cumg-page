<?php if(!defined("__ZBXE__")) exit();?><?php
$__Context->oTemplate = &TemplateHandler::getInstance();
print $__Context->oTemplate->compile('./modules/board/skins/xe_hhlee/','_header.html');
?>


<?php  if($__Context->oSourceComment->isExists()){ ?>
<div class="feedbackList">
    <div class="item itemOnly">
	
		<div class="itemAside">
			<h4 class="header"><a href="#popup_menu_area" class="member_<?php @print($__Context->oSourceComment->getMemberSrl());?>" onclick="return false"><?php @print($__Context->oSourceComment->getNickName());?></a></h4>
			<p class="meta">
				<?php @print($__Context->oSourceComment->getRegdate("Y.m.d H:i"));?>
				<?php  if($__Context->grant->manager){ ?>
				<br /><?php @print($__Context->oSourceComment->get('ipaddress'));?>
				<?php  } ?>
			</p>
		</div>
		
		<div class="itemContent">
			<?php @print($__Context->oSourceComment->getContent(false));?>
		</div>

    </div>
</div>
<?php  } ?>

<form action="./" method="post" onsubmit="jQuery(this).find('input').each(function(){if(this.title==this.value)this.value='';});return procFilter(this, insert_comment)" class="boardEditor" >
<input type="hidden" name="mid" value="<?php @print($__Context->mid);?>" />
<input type="hidden" name="document_srl" value="<?php @print($__Context->oComment->get('document_srl'));?>" />
<input type="hidden" name="comment_srl" value="<?php @print($__Context->oComment->get('comment_srl'));?>" />
<input type="hidden" name="content" value="<?php @print(htmlspecialchars($__Context->oComment->get('content')));?>" />
<input type="hidden" name="parent_srl" value="<?php @print($__Context->oComment->get('parent_srl'));?>" />

<div class="boardWrite commentEditor">
	
    <div class="editor"><?php @print($__Context->oComment->getEditor());?></div>
	
	<div class="editorOption">
	<?php  if(!$__Context->is_logged){ ?>
	   <input type="text" name="nick_name" class="inputText userName" value="<?php @print(htmlspecialchars($__Context->oComment->get('nick_name')));?>"  title="<?php @print($__Context->lang->writer);?>" onfocus="if(this.value==this.title)this.value='';return false;" />
	   <input type="password" name="password" class="inputText userPw" value="" title="<?php @print($__Context->lang->password);?>" onfocus="if(this.value==this.title)this.value='';return false;" />
	   <input type="text" name="email_address" class="inputText emailAddress" value="<?php @print(htmlspecialchars($__Context->oComment->get('email_address')));?>" title="<?php @print($__Context->lang->email_address);?>" onfocus="if(this.value==this.title)this.value='';return false;" />
	   <input type="text" name="homepage" class="inputText homePage" value="<?php @print(htmlspecialchars($__Context->oComment->get('homepage')));?>" title="<?php @print($__Context->lang->homepage);?>" onfocus="if(this.value==this.title)this.value='';return false;" />
	<?php  } ?>

	<?php  if($__Context->is_logged){ ?>
		<input type="checkbox" name="notify_message" value="Y" <?php  if($__Context->oComment->get('notify_message')=='Y'){ ?>checked="checked"<?php  } ?> id="notify_message" class="inputCheck" />
		<label for="notify_message"><?php @print($__Context->lang->notify);?></label>
	<?php  } ?>
		<input type="checkbox" name="is_secret" value="Y" id="is_secret" <?php  if($__Context->oComment->get('is_secret')=='Y'){ ?>checked="checked"<?php  } ?> class="inputCheck" />
		<label for="is_secret"><?php @print($__Context->lang->secret);?></label>
	</div>

	<div class="boardNavigation">
		<span class="buttonOfficial"><input type="submit" value="<?php @print($__Context->lang->cmd_comment_registration);?>" accesskey="s" /></span>
	</div>
	
</div>


</form>

<?php
$__Context->oTemplate = &TemplateHandler::getInstance();
print $__Context->oTemplate->compile('./modules/board/skins/xe_hhlee/','_footer.html');
?>


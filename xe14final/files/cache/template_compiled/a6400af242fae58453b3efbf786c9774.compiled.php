<?php if(!defined("__ZBXE__")) exit();?><?php
$__Context->oTemplate = &TemplateHandler::getInstance();
print $__Context->oTemplate->compile('./modules/board/skins/xe_hhlee/','_header.html');
?>


<div class="smallBox w268">

    <div class="tCenter messageBox"><?php @print($__Context->message);?></div>

    <div class="gap1 tCenter">
        <?php  if(!$__Context->is_logged){ ?>
        <a href="<?php @print(getUrl('act','dispMemberLoginForm'));?>" class="button"><span><?php @print($__Context->lang->cmd_login);?></span></a>
        <?php  } ?>
        <a href="#" onclick="history.back(); return false;" class="button"><span><?php @print($__Context->lang->cmd_back);?></span></a>
    </div>

</div>

<?php
$__Context->oTemplate = &TemplateHandler::getInstance();
print $__Context->oTemplate->compile('./modules/board/skins/xe_hhlee/','_footer.html');
?>


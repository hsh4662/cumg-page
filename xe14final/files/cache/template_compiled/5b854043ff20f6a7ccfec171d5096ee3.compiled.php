<?php if(!defined("__ZBXE__")) exit();?><?php
$__Context->oTemplate = &TemplateHandler::getInstance();
print $__Context->oTemplate->compile('./modules/board/skins/xe_hhlee/','_header.html');
?>


<div class="smallBox w268">

    <div class="header">
        <h3><?php @print($__Context->lang->confirm_delete);?></h3>
    </div>

    <form action="./" method="get" onsubmit="return procFilter(this, delete_document)">
    <input type="hidden" name="mid" value="<?php @print($__Context->mid);?>" />
    <input type="hidden" name="page" value="<?php @print($__Context->page);?>" />
    <input type="hidden" name="document_srl" value="<?php @print($__Context->document_srl);?>" />

        <div class="inputPassword tCenter">
            <span class="button"><input type="submit" value="<?php @print($__Context->lang->cmd_delete);?>" accesskey="s" /></span>
            <a href="<?php @print(getUrl('act',''));?>" class="button"><span><?php @print($__Context->lang->cmd_cancel);?></span></a>
        </div>

    </form>
</div>

<?php
$__Context->oTemplate = &TemplateHandler::getInstance();
print $__Context->oTemplate->compile('./modules/board/skins/xe_hhlee/','_footer.html');
?>


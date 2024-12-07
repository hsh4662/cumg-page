<?php if(!defined("__ZBXE__")) exit();?><?php
$__Context->oTemplate = &TemplateHandler::getInstance();
print $__Context->oTemplate->compile('./modules/board/tpl/','header.html');
?>


<?php @print($__Context->grant_content);?>

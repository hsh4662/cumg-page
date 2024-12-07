<?php if(!defined("__ZBXE__")) exit();?><!--#Meta:./modules/importer/tpl/js/importer_admin.js--><?php Context::addJsFile("./modules/importer/tpl/js/importer_admin.js", true, "", null, "head"); ?>
<!--#Meta:./modules/importer/tpl/css/importer.css--><?php Context::addCSSFile("./modules/importer/tpl/css/importer.css", true, "all", "", null); ?>

<?php @$__Context->type_list = array('module'=>$__Context->lang->type_module, 'ttxml'=>$__Context->lang->type_ttxml, 'member'=>$__Context->lang->type_member, 'sync'=>$__Context->lang->type_syncmember, 'message'=>$__Context->lang->type_message);?>

<h3 class="xeAdmin"><?php @print($__Context->lang->importer);?> <span class="gray"><?php @print($__Context->lang->cmd_management);?></span></h3>

<!-- 설명 -->
<div class="infoText"><?php @print(nl2br($__Context->lang->about_importer));?></div>

<div class="header4">
    <ul class="localNavigation">
        <?php $__Context->Context->__idx[0]=0;if(count($__Context->type_list))  foreach($__Context->type_list as $__Context->key => $__Context->val){$__Context->__idx[1]=($__Context->__idx[1]+1)%2; $__Context->cycle_idx = $__Context->__idx[1]+1; ?>
        <li <?php  if($__Context->source_type==$__Context->key){ ?>class="on"<?php  } ?>><a href="<?php @print(getUrl('source_type',$__Context->key));?>"><?php @print($__Context->val);?></a></li>
        <?php  } ?>
    </ul>
</div>


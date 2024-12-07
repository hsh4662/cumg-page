<?php if(!defined("__ZBXE__")) exit();?><!--#Meta:./modules/importer/tpl/js/importer_admin.js--><?php Context::addJsFile("./modules/importer/tpl/js/importer_admin.js", true, "", null, "head"); ?>
<!--#Meta:./modules/importer/tpl/css/importer.css--><?php Context::addCSSFile("./modules/importer/tpl/css/importer.css", true, "all", "", null); ?>

<h3 class="xeAdmin"><?php @print($__Context->lang->importer);?> <span class="gray"><?php @print($__Context->lang->cmd_management);?></span></h3>

<!-- 설명 -->
<div class="infoText"><?php @print(nl2br($__Context->lang->about_importer));?></div>

<div id="step1">
    <form action="./" method="get">
        <input type="hidden" name="module" value="<?php @print($__Context->module);?>" />
        <input type="hidden" name="act" value="<?php @print($__Context->act);?>" />

        <h4 class="xeAdmin"><?php @print($__Context->lang->import_step_title[1]);?> - <?php @print($__Context->lang->import_step_desc[1]);?></h4>
        <table cellspacing="0" class="rowTable">
        <tr>
            <th scope="col"><div><label for="source_type_module">1. <?php @print($__Context->lang->type_module);?></label></div></th>
            <td class="wide"><input type="radio" name="source_type" value="module" id="source_type_module" /> <label for="source_type_module"><?php @print($__Context->lang->about_type_module);?></label></td>
        </tr>
        <tr>
            <th scope="col"><div><label for="source_type_ttxml">2. <?php @print($__Context->lang->type_ttxml);?></label></div></th>
            <td><input type="radio" name="source_type" value="ttxml" id="source_type_ttxml" /> <label for="source_type_ttxml"><?php @print($__Context->lang->about_type_ttxml);?></label></td>
        </tr>
        <tr>
            <th scope="col"><div><label for="source_type_member">3. <?php @print($__Context->lang->type_member);?></label></div></th>
            <td><input type="radio" name="source_type" value="member" id="source_type_member" /> <label for="source_type_member"><?php @print($__Context->lang->about_type_member);?></label></td>
        </tr>
        <tr>
            <th scope="col"><div><label for="source_type_syncmember">4. <?php @print($__Context->lang->type_syncmember);?></label></div></th>
            <td><input type="radio" name="source_type" value="sync" id="source_type_syncmember" /> <label for="source_type_syncmember"><?php @print($__Context->lang->about_type_syncmember);?></label></td>
        </tr>
        <tr>
            <th scope="col"><div><label for="source_type_message">5. <?php @print($__Context->lang->type_message);?></label></div></th>
            <td><input type="radio" name="source_type" value="message" id="source_type_message" /> <label for="source_type_message"><?php @print($__Context->lang->about_type_message);?></label></td>
        </tr>
        <tr>
            <th colspan="2" class="button">
                <span class="button black strong"><input type="submit" value="<?php @print($__Context->lang->cmd_next);?>" /></span>
            </th>
        </tr>
        </table>
    </form>
</div>


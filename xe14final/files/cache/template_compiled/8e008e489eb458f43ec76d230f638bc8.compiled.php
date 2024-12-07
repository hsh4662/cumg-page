<?php if(!defined("__ZBXE__")) exit();?><?php
$__Context->oTemplate = &TemplateHandler::getInstance();
print $__Context->oTemplate->compile('./modules/importer/tpl/','header.html');
?>


<div id="importForm">
    <form action="./" method="get" onsubmit="return doPreProcessing(this)" id="fo_import">
        <input type="hidden" name="type" value="module" />
        <input type="hidden" name="target_module" value="" id="target_module" />

        <h4 class="xeAdmin"><?php @print($__Context->lang->import_step_title[1]);?> - <?php @print($__Context->lang->import_step_desc[12]);?></h4>
        <table cellspacing="0" class="rowTable">
        <tr>
            <td>
                <input type="text" name="_target_module" id="_target_module" class="inputTypeText w300" readonly="readonly"><a href="<?php @print(getUrl('','module','module','act','dispModuleSelectList','id','target_module','type','single'));?>" onclick="popopen(this.href,'ModuleSelect');return false;" class="button green"><span><?php @print($__Context->lang->cmd_select);?></span></a>
            </td>
        </tr>
        </table>

        <h4 class="xeAdmin"><?php @print($__Context->lang->import_step_title[2]);?> - <?php @print($__Context->lang->import_step_desc[2]);?></h4>
        <table cellspacing="0" class="rowTable">
        <tr>
            <td>
                <input type="text" name="xml_file" value="./" class="inputTypeText fullWidth" />
                <p>ex1) ../module.xml</p>
                <p>ex2) http://...../module.xml</p>
            </td>
        </tr>
        <tr>    
            <th>
                <select name="unit_count" class="w100">
                    <option value="10" selected="selected">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                    <option value="200">200</option>
                    <option value="300">300</option>
                    <option value="400">400</option>
                    <option value="500">500</option>
                    <option value="1000">1000</option>
                </select>
                <span class="button black strong"><input type="submit" value="<?php @print($__Context->lang->cmd_next);?>" /></span>
            </th>
        </tr>
        </table>

    </form>
</div>

<?php
$__Context->oTemplate = &TemplateHandler::getInstance();
print $__Context->oTemplate->compile('./modules/importer/tpl/','process.html');
?>


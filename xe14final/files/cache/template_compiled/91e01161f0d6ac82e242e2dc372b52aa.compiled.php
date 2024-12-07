<?php if(!defined("__ZBXE__")) exit();?><!--#Meta:./modules/editor/components/multimedia_link/tpl/popup.js--><?php Context::addJsFile("./modules/editor/components/multimedia_link/tpl/popup.js", true, "", null, "head"); ?>
<!--#Meta:./modules/editor/components/multimedia_link/tpl/popup.css--><?php Context::addCSSFile("./modules/editor/components/multimedia_link/tpl/popup.css", true, "all", "", null); ?>
<?php Context::loadLang("./modules/editor/components/multimedia_link/tpl/../lang"); ?>

<div id="popHeader">
    <h3 class="xeAdmin"><?php @print($__Context->component_info->title);?> ver. <?php @print($__Context->component_info->version);?></h3>
</div>

<form action="./" method="get" onSubmit="return false" id="fo">
    <div id="popBody">
        <table cellspacing="0" class="rowTable">
        <col width="150" />
        <col />
        <tr>
            <th scope="row"><div><?php @print($__Context->lang->multimedia_url);?></div></th>
            <td><input type="text" class="inputTypeText w400" id="multimedia_url" value="<?php @print($__Context->manual_url);?>" /></td>
        </tr>
        <tr>
            <th scope="row"><div><?php @print($__Context->lang->multimedia_caption);?></div></th>
            <td><input type="text" class="inputTypeText w400" id="multimedia_caption" value="" /></td>
        </tr>
        <tr>
            <th scope="row"><div><?php @print($__Context->lang->multimedia_width);?></div></th>
            <td><input type="text" class="inputTypeText" size="3" id="multimedia_width" value="400" />px</td>
        </tr>
        <tr>
            <th scope="row"><div><?php @print($__Context->lang->multimedia_height);?></div></th>
            <td><input type="text" class="inputTypeText" size="3" id="multimedia_height" value="400" />px</td>
        </tr>
        <tr>
            <th scope="row"><div><?php @print($__Context->lang->multimedia_auto_start);?></div></th>
            <td><input type="checkbox" id="multimedia_auto_start" value="Y" /></td>
        </tr>
        <tr>
            <th scope="row"><div><?php @print($__Context->lang->multimedia_wmode);?></div></th>
            <td>
                <select name="multimedia_wmode">
                    <option value="window"><?php @print($__Context->lang->multimedia_wmode_window);?></option>
                    <option value="opaque"><?php @print($__Context->lang->multimedia_wmode_opaque);?></option>
                    <option value="transparent" selected="selected"><?php @print($__Context->lang->multimedia_wmode_transparent);?></option>
                </select>
                <p><?php @print($__Context->lang->about_ccl_allow_modification);?></p>
            </td>
        </table>
    </div>
    <div id="popFooter">
        <a href="#" onclick="insertMultimedia()" class="button black strong"><span><?php @print($__Context->lang->cmd_insert);?></span></a>
        <a href="#" onclick="winopen('./?module=editor&amp;act=dispEditorComponentInfo&amp;component_name=<?php @print($__Context->component_info->component_name);?>','ComponentInfo','left=10,top=10,width=10,height=10,resizable=no,scrollbars=no,toolbars=no');return false;" class="button"><span><?php @print($__Context->lang->about_component);?></span></a>
    </div>

</form>

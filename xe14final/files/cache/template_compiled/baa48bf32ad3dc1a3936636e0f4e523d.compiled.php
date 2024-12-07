<?php if(!defined("__ZBXE__")) exit();?><!--#Meta:./modules/editor/components/image_gallery/tpl/popup.js--><?php Context::addJsFile("./modules/editor/components/image_gallery/tpl/popup.js", true, "", null, "head"); ?>
<!--#Meta:./modules/editor/components/image_gallery/tpl/popup.css--><?php Context::addCSSFile("./modules/editor/components/image_gallery/tpl/popup.css", true, "all", "", null); ?>
<?php Context::loadLang("./modules/editor/components/image_gallery/tpl/../lang"); ?>

<div id="popHeader">
    <h3 class="xeAdmin"><?php @print($__Context->component_info->title);?> ver. <?php @print($__Context->component_info->version);?></h3>
</div>

<form action="./" method="get" onSubmit="return false" id="fo">
<input type="hidden" name="editor_sequence" value="<?php @print($__Context->editor_sequence);?>" />

    <div id="popBody">

        <table cellspacing="0" class="rowTable">
        <col width="120" />
        <col />
        <tr>
            <th scope="row"><div><?php @print($__Context->lang->width);?></div></th>
            <td><input type="text" class="inputTypeText" size="3" id="width" value="400" />px</td>
        </tr>
        <tr>
            <th scope="row"><div><?php @print($__Context->lang->gallery_style);?></div></th>
            <td>
                <select id="gallery_style">
                    <option value="slide"><?php @print($__Context->lang->gallery_slide_style);?></option>
                    <option value="list"><?php @print($__Context->lang->gallery_list_style);?></option>
                </select>
            </td>
        </tr>
        <tr>
            <th scope="row"><div><?php @print($__Context->lang->gallery_slide_align);?></div></th>
            <td>
                <select id="gallery_align">
                    <option value="center"><?php @print($__Context->lang->gallery_slide_center);?></option>
                    <option value="left"><?php @print($__Context->lang->gallery_slide_left);?></option>
                    <option value="right"><?php @print($__Context->lang->gallery_slide_right);?></option>
                </select>
            </td>
        </tr>
        <tr>
            <th scope="row"><div><?php @print($__Context->lang->gallery_border_thickness);?></div></th>
            <td><input type="text" class="inputTypeText" size="1" id="border_thickness" value="0" />px</td>
        </tr>
        <tr>
            <th scope="row"><div><?php @print($__Context->lang->gallery_border_color);?></div></th>
            <td>
                <div class="editor_color_box">
                    <script type="text/javascript">
                    printColor("border", "<?php @print($__Context->tpl_path);?>/images/blank.gif");
                    </script>
                </div>
                <ul class="buttonLeft">
                    <li><img src="/xe14final/modules/editor/components/image_gallery/tpl/images/border_solid.gif" alt="blank" class="border_preview_color" id="border_preview_color" /></li>
                    <li>#<input type="text" id="border_color_input" size="7" maxlength="6" class="inputTypeText" value="000000" onkeyup="manual_select_color('border',this)"/></li>
                </ul>
            </td>
        </tr>
        <tr>
            <th scope="row"><div><?php @print($__Context->lang->gallery_bg_color);?></div></th>
            <td>
                <div class="editor_color_box">
                    <script type="text/javascript">
                        printColor("bg", "<?php @print($__Context->tpl_path);?>/images/blank.gif");
                    </script>
                </div>
                <ul class="buttonLeft">
                    <li><img src="/xe14final/modules/editor/components/image_gallery/tpl/images/blank.gif" alt="blank" class="bg_preview_color" id="bg_preview_color" /></li>
                    <li>#<input type="text" id="bg_color_input" size="7" maxlength="6" class="inputTypeText" value="FFFFFF" onkeyup="manual_select_color('bg',this)"/></li>
                </ul>
            </td>
        </tr>
        <tr>
            <th scope="row"><div><?php @print($__Context->lang->image_list);?></div></th>
            <td>
                <select id="image_list" size="6" multiple="true" class="image_list">
                </select>
                <p><?php @print($__Context->lang->about_image_list);?></p>
            </td>
        </tr>
        </table>
    </div>

    <div id="popFooter">
        <a href="#" onclick="insertSlideShow()" class="button black strong"><span><?php @print($__Context->lang->cmd_insert);?></span></a>
        <a href="#" onclick="winopen('./?module=editor&amp;act=dispEditorComponentInfo&amp;component_name=<?php @print($__Context->component_info->component_name);?>','ComponentInfo','left=10,top=10,width=10,height=10,resizable=no,scrollbars=no,toolbars=no');return false;" class="button"><span><?php @print($__Context->lang->about_component);?></span></a>
    </div>

</form>

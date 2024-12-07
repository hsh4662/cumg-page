<?php if(!defined("__ZBXE__")) exit();?><!--#Meta:./modules/editor/components/poll_maker/tpl/popup.js--><?php Context::addJsFile("./modules/editor/components/poll_maker/tpl/popup.js", true, "", null, "head"); ?>
<!--#Meta:./modules/editor/components/poll_maker/tpl/popup.css--><?php Context::addCSSFile("./modules/editor/components/poll_maker/tpl/popup.css", true, "all", "", null); ?>
<?php
require_once("./classes/xml/XmlJsFilter.class.php");
$__Context->oXmlFilter = new XmlJSFilter("./modules/editor/components/poll_maker/tpl/filter/","insert_poll.xml");
$__Context->oXmlFilter->compile();
?>

<?php Context::loadLang("./modules/editor/components/poll_maker/tpl/../lang"); ?>

<?php Context::loadJavascriptPlugin("ui.datepicker"); ?>

<script type="text/javascript">
    var msg_poll_cannot_modify = "<?php @print($__Context->lang->msg_poll_cannot_modify);?>";
</script>

<div id="popHeader" class="wide">
    <h3 class="xeAdmin"><?php @print($__Context->component_info->title);?> ver. <?php @print($__Context->component_info->version);?></h3>
</div>

<form action="./" method="post" id="fo_component" onSubmit="procFilter(this, insert_poll); return false;">
<input type="hidden" name="component" value="<?php @print($__Context->component_info->component_name);?>" />
<input type="hidden" name="method" value="insertPoll" />
<input type="hidden" name="poll_srl" value="" />


    <div id="popBody">

        <table cellspacing="0" class="rowTable">
        <col width="100" />
        <col />
        <tr>
            <th scope="row"><div><?php @print($__Context->lang->poll_stop_date);?></div></th>
            <td>

            <input type="hidden" name="stop_date" id="stop_date" value="<?php @print(date('Ymd',time()+60*60*24*30));?>" />
            <input type="text" class="inputDate" value="<?php @print(date('Y-m-d',time()+60*60*24*30));?>" readonly="readonly" />
<script type="text/javascript">
(function($){
    $(function(){
        var option = {
            changeMonth:true,
            changeYear:true,
            gotoCurrent: false
            ,yearRange:'-100:+10'
            , onSelect:function(){
                $(this).prev('input[type="hidden"]').val(this.value.replace(/-/g,""));
            }
        };
        $.extend(option,$.datepicker.regional['<?php @print($__Context->lang_type);?>']);
        $(".inputDate").datepicker(option);
    });
})(jQuery);
</script>

            </td>
        </tr>
        <tr>
            <th scope="row"><div><?php @print($__Context->lang->skin);?></div></th>
            <td>
                <select name="skin">
                    <?php $__Context->Context->__idx[0]=0;if(count($__Context->skin_list))  foreach($__Context->skin_list as $__Context->skin=>$__Context->skin_info){$__Context->__idx[1]=($__Context->__idx[1]+1)%2; $__Context->cycle_idx = $__Context->__idx[1]+1; ?>
                    <option value="<?php @print($__Context->skin);?>"><?php @print($__Context->skin_info->title);?> (skin by <?php @print($__Context->skin_info->maker->name);?>)</option>
                    <?php  } ?>
                </select>
            </td>
        </tr>
        </table>

        <div id="poll_source" class="clear" style="display:none">
            <div class="clear"></div>

            <table cellspacing="0" class="rowTable gap1">
            <col width="100" />
            <col />
            <tr>
            <th scope="row"><div><label><?php @print($__Context->lang->poll_chk_count);?></label></div></th>
            <td><input type="text" name="checkcount_tidx" value="1" size="1" class="inputTypeText" /></td>
            </tr>
            <tr>
                <th scope="row"><div><?php @print($__Context->lang->poll_title);?></div></th>
                <td><input type="text" name="title_tidx" class="inputTypeText w400" /></td>
            </tr>

            <tr>
                <th scope="row"><div><?php @print($__Context->lang->poll_item);?> 1</div></th>
                <td><input type="text" name="item_tidx_1" class="inputTypeText w400" /></td>
            </tr>

            <tr>
                <th scope="row"><div><?php @print($__Context->lang->poll_item);?> 2</div></th>
                <td><input type="text" name="item_tidx_2" class="inputTypeText w400" /></td>
            </tr>
            </table>

            <a href="#" onclick="doPollAddItem(this); return false;" class="button black small"><span><?php @print($__Context->lang->cmd_add_item);?></span></a>
            <a href="#" onclick="doPollDelete(this); return false;" class="button red small"><span><?php @print($__Context->lang->cmd_del_poll);?></span></a> 
        </div>

    </div>

    <div id="popFooter">
            <span class="button black strong"><input type="submit" value="<?php @print($__Context->lang->cmd_submit);?>" /></span>
            <a href="#" onclick="doPollAdd(); return false;" class="button blue"><span><?php @print($__Context->lang->cmd_add_poll);?></span></a>
            <a href="#" onclick="winopen('./?module=editor&amp;act=dispEditorComponentInfo&amp;component_name=<?php @print($__Context->component_info->component_name);?>','ComponentInfo','left=10,top=10,width=10,height=10,resizable=no,scrollbars=no,toolbars=no');return false;" class="button"><span><?php @print($__Context->lang->about_component);?></span></a>
    </div>


</form>

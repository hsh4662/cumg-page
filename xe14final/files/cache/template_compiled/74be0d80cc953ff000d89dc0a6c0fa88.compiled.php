<?php if(!defined("__ZBXE__")) exit();?><script type="text/javascript">
    var preProcessingMsg = "<?php @print($__Context->lang->preprocessing);?>";
</script>

<div id="process" style="display:none;">
    <form action="./" method="get" onsubmit="return doImport()" id="fo_process">
        <input type="hidden" name="type" value="" />
        <input type="hidden" name="total" value="" />
        <input type="hidden" name="cur" value="" />
        <input type="hidden" name="key" value="" />
        <input type="hidden" name="target_module" value="" />
        <input type="hidden" name="guestbook_target_module" value="" />
        <input type="hidden" name="unit_count" value="" />
        <input type="hidden" name="user_id" value="" />

        <h4 class="xeAdmin"><?php @print($__Context->lang->import_step_title[99]);?> - <?php @print($__Context->lang->import_step_desc[99]);?></h4>
        <table cellspacing="0" class="rowTable">
        <tr>
            <td>
                <div id="status"></div>
            </td>
        </tr>
        <tr>    
            <th class="button">
                <div id="btn_continue" style="display:none;"><span class="button black strong"><input type="submit" value="<?php @print($__Context->lang->cmd_continue);?>" /></span></div>
                <div id="btn_reload" style="display:block;"><span class="button"><input type="button" value="<?php @print($__Context->lang->cmd_reload);?>" onclick="location.reload(); return false;"/></span></div>
            </th>
        </tr>
        </table>
    </form>
</div>

<?php if(!defined("__ZBXE__")) exit();?><?php
require_once("./classes/xml/XmlJsFilter.class.php");
$__Context->oXmlFilter = new XmlJSFilter("./modules/comment/tpl/filter/","insert_comment_module_config.xml");
$__Context->oXmlFilter->compile();
?>


<form action="./" method="post" onsubmit="return procFilter(this, insert_comment_module_config)">
<input type="hidden" name="target_module_srl" value="<?php @print($__Context->module_info->module_srl?$__Context->module_info->module_srl:$__Context->module_srls);?>" />

    <h4 class="xeAdmin"><?php @print($__Context->lang->comment);?></h4>
    <table cellspacing="0" class="rowTable">
    <tr>    
        <th><div><?php @print($__Context->lang->comment_count);?></div></th>
        <td class="wide">
			<p><?php @print($__Context->lang->about_comment_count);?></p>
            <input type="text" name="comment_count" value="<?php @print($__Context->comment_config->comment_count);?>" class="inputTypeText w80" />

        </td>
    </tr>
    <tr>    
        <th><div><?php @print($__Context->lang->cmd_vote);?></div></th>
        <td>
		    <select name="use_vote_up" class="w100">
                <option value="Y" <?php  if($__Context->comment_config->use_vote_up=='Y'){ ?>selected="selected"<?php  } ?>><?php @print($__Context->lang->use);?></option>
                <option value="S" <?php  if($__Context->comment_config->use_vote_up=='S'){ ?>selected="selected"<?php  } ?>><?php @print($__Context->lang->show_voted_member);?></option>
                <option value="N" <?php  if($__Context->comment_config->use_vote_up=='N'){ ?>selected="selected"<?php  } ?>><?php @print($__Context->lang->notuse);?></option>
            </select>
        </td>
    </tr>
    <tr>    
        <th><div><?php @print($__Context->lang->cmd_vote_down);?></div></th>
        <td>
		    <select name="use_vote_down" class="w100">
                <option value="Y" <?php  if($__Context->comment_config->use_vote_down=='Y'){ ?>selected="selected"<?php  } ?>><?php @print($__Context->lang->use);?></option>
                <option value="S" <?php  if($__Context->comment_config->use_vote_down=='S'){ ?>selected="selected"<?php  } ?>><?php @print($__Context->lang->show_voted_member);?></option>
                <option value="N" <?php  if($__Context->comment_config->use_vote_down=='N'){ ?>selected="selected"<?php  } ?>><?php @print($__Context->lang->notuse);?></option>
            </select>
        </td>
    </tr>

    <tr>
        <th colspan="2" class="button">
            <span class="button strong black"><input type="submit" value="<?php @print($__Context->lang->cmd_save);?>"/></span>
        </th>
    </tr>
    </table>

</form>

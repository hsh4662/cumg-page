<?php if(!defined("__ZBXE__")) exit();?><?php
require_once("./classes/xml/XmlJsFilter.class.php");
$__Context->oXmlFilter = new XmlJSFilter("./modules/document/tpl/filter/","insert_document_module_config.xml");
$__Context->oXmlFilter->compile();
?>


<form action="./" method="post" onsubmit="return procFilter(this, insert_document_module_config)">
<input type="hidden" name="target_module_srl" value="<?php @print($__Context->module_info->module_srl?$__Context->module_info->module_srl:$__Context->module_srls);?>" />

    <h4 class="xeAdmin"><?php @print($__Context->lang->document);?></h4>
    
    <table cellspacing="0" class="rowTable">
    <tr>    
        <th><div><?php @print($__Context->lang->history);?></div></th>
        <td>
			<p><?php @print($__Context->lang->about_use_history);?></p>
		    <select name="use_history" class="w100">
                <option value="N" <?php  if($__Context->document_config->use_history=='N'){ ?>selected="selected"<?php  } ?>><?php @print($__Context->lang->notuse);?></option>
                <option value="Y" <?php  if($__Context->document_config->use_history=='Y'){ ?>selected="selected"<?php  } ?>><?php @print($__Context->lang->use);?></option>
                <option value="Trace" <?php  if($__Context->document_config->use_history=='Trace'){ ?>selected="selected"<?php  } ?>><?php @print($__Context->lang->trace_only);?></option>
            </select>
		</td>
	</tr>
    <tr>    
        <th><div><?php @print($__Context->lang->cmd_vote);?></div></th>
        <td>
		    <select name="use_vote_up" class="w100">
                <option value="Y" <?php  if($__Context->document_config->use_vote_up=='Y'){ ?>selected="selected"<?php  } ?>><?php @print($__Context->lang->use);?></option>
                <option value="S" <?php  if($__Context->document_config->use_vote_up=='S'){ ?>selected="selected"<?php  } ?>><?php @print($__Context->lang->show_voted_member);?></option>
                <option value="N" <?php  if($__Context->document_config->use_vote_up=='N'){ ?>selected="selected"<?php  } ?>><?php @print($__Context->lang->notuse);?></option>
            </select>
        </td>
    </tr>
    <tr>    
        <th><div><?php @print($__Context->lang->cmd_vote_down);?></div></th>
        <td>
		    <select name="use_vote_down" class="w100">
                <option value="Y" <?php  if($__Context->document_config->use_vote_down=='Y'){ ?>selected="selected"<?php  } ?>><?php @print($__Context->lang->use);?></option>
                <option value="S" <?php  if($__Context->document_config->use_vote_down=='S'){ ?>selected="selected"<?php  } ?>><?php @print($__Context->lang->show_voted_member);?></option>
                <option value="N" <?php  if($__Context->document_config->use_vote_down=='N'){ ?>selected="selected"<?php  } ?>><?php @print($__Context->lang->notuse);?></option>
            </select>
        </td>
    </tr>
    <tr>
        <th class="button" colspan="2">
            <span class="button strong black"><input type="submit" value="<?php @print($__Context->lang->cmd_save);?>"/></span>
        </th>
    </tr>
    </table>

</form>

<?php if(!defined("__ZBXE__")) exit();?><!--#Meta:./modules/member/skins/default/css/default.css--><?php Context::addCSSFile("./modules/member/skins/default/css/default.css", true, "all", "", null); ?>

<div id="memberModule">

    <div id="popHeader" class="wide">
        <h3 class="xeAdmin"><?php @print($__Context->lang->cmd_view_saved_document);?></h3>
    </div>

    <div id="popBody">
        <div id="memberModule">
            <!-- 목록 -->
            <table cellspacing="0" class="colTable">
            <caption>Total : <?php @print(number_format($__Context->total_count));?>, Page <?php @print(number_format($__Context->page));?>/<?php @print(number_format($__Context->total_page));?></caption>
            <thead>
                <tr>
                    <th class="title"><div><?php @print($__Context->lang->date);?></div></th>
                    <th class="title"><div><?php @print($__Context->lang->title);?></div></th>
                    <th class="title"><div><?php @print($__Context->lang->cmd_select);?></div></th>
                </tr>
            </thead>
            <tbody>
                <?php $__Context->Context->__idx[0]=0;if(count($__Context->document_list))  foreach($__Context->document_list as $__Context->no => $__Context->val){$__Context->__idx[1]=($__Context->__idx[1]+1)%2; $__Context->cycle_idx = $__Context->__idx[1]+1; ?>
                <tr>
                    <td class="nowrap"><?php @print($__Context->val->getRegdate("Y-m-d H:i:s"));?></td>
                    <td class="wide">
                        <div><a href="#" onclick="jQuery('#saved_document_<?php @print($__Context->val->document_srl);?>').toggle(); setFixedPopupSize(); return false;"><?php @print($__Context->val->getTitle());?></a></div>
                        <div id="saved_document_<?php @print($__Context->val->document_srl);?>" class="saved_content" style="display:none;"><?php @print($__Context->val->getContent(false));?></div>
                    </td>
                    <td><a href="#" onclick="doDocumentSelect('<?php @print($__Context->val->document_srl);?>'); return false;" class="buttonSet buttonActive"><span><?php @print($__Context->lang->cmd_select);?></span></a></td>
                </tr>
                <?php  } ?>
            </tbody>
            </table>

            <!-- 페이지 네비게이션 -->
            <div class="pagination a1">
                <a href="<?php @print(getUrl('page','','module_srl',''));?>" class="prevEnd"><?php @print($__Context->lang->first_page);?></a> 
                <?php  while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
                    <?php  if($__Context->page == $__Context->page_no){ ?>
                        <strong><?php @print($__Context->page_no);?></strong> 
                    <?php  }else{ ?>
                        <a href="<?php @print(getUrl('page',$__Context->page_no,'module_srl',''));?>"><?php @print($__Context->page_no);?></a> 
                    <?php  } ?>
                <?php  } ?>
                <a href="<?php @print(getUrl('page',$__Context->page_navigation->last_page,'module_srl',''));?>" class="nextEnd"><?php @print($__Context->lang->last_page);?></a>
            </div>
        </div>
    </div>
</div>

<?php require_once dirname(__FILE__) . '/header.inc.php';?>
<!-- content -->
<div id="content" class="grid_24">
  <div id="content-inner">
    <?php require_once dirname(__FILE__) . '/left-nav.inc.php';?>
    <!-- right -->
    <div id="right"  class="grid_18"> 
      <!-- content boxes -->
      <div class="title">
      <h2>Category List</h2>
      <div class="button">
            <a href="<?php echo $this->add_action;?>">Create Category</a>
        </div>
        </div>
      <div class="table">
      <?php if (!empty($this->err)) {?>
      	<p class="errMsg"><?php echo $this->err;?></p>
      <?php } else if (!empty($this->msg)) {?>
      	<p class="successMsg"><?php echo $this->msg;?></p>
      <?php } ?>
            <table cellspacing="0">
                <thead>
                    <tr>
                    	<th>Id</th>
                        <th class="left">Menu</th>
                        <th class="left">Title</th>
                        <th>Sequence</th>
                        <th colspan="2" align="center">Action</th>
                    </tr>
                </thead>
                <tbody>
                	<?php $categories_list_count = count($this->categories_list);
					if (!empty($this->categories_list) && is_array($this->categories_list) && $categories_list_count) {
						for($i=0; $i<$categories_list_count; $i++) {
							?><tr class="<?php echo ($i%2 == 0 ? '' : 'alt');?>">
                            	<td align="center"><?php echo $this->categories_list[$i]['cid'];?></td>
                            	<td><?php echo $this->categories_list[$i]['mtitle'];?></td>
                            	<td><?php echo $this->categories_list[$i]['ctitle'];?></td>
                                <td align="center"><?php echo $this->categories_list[$i]['cseq'];?></td>
                                <td class="edit"><a href="<?php echo $this->edit_action;?>?cid=<?php echo $this->categories_list[$i]['cid'];?>">Edit</a></td>
                                <td class="edit"><a href="<?php echo $this->action;?>?del=y&amp;cid=<?php echo $this->categories_list[$i]['cid'];?>" onclick="if (!confirm_delete()) return false;">Delete</a></td>
                               </tr><?php
						}//end for
					}//end if?>                
                </tbody>
            </table>
    </div>
      <!-- end content boxes --> 
    </div>
    <!-- end right --> 
  </div>
</div>
<!-- end content -->
<?php require_once dirname(__FILE__) . '/footer.inc.php';?>
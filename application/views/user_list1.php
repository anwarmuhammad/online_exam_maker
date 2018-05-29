<div class="main-content">
            <div class="container-fluid" >
            <div class="row-fluid">
                <div class="area-top clearfix">
                    <div class="pull-left header">
                        <h3 class="title">
                        <i class="icon-edit"></i>
                        Manage Student </h3>
                    </div>

                </div>
            </div>
        </div>
 
             <div class="container-fluid padded">
                <div class="box">
                 <div class="box-header">
				<ul class="nav nav-tabs nav-tabs-left">
				<li class="active">
				<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 
				Student List                	</a></li>
				<li>
				<a href="#add" data-toggle="tab"><i class="icon-plus"></i>
				Add Student              	</a></li>
				</ul>
				</div>
	<div class="box-content padded">
		<div class="tab-content">
           
            <div class="tab-pane box active" id="list">
               
               
<!--
			<?php 
		if($this->session->flashdata('message')){
			echo $this->session->flashdata('message');	
		}
		?>
-->
              <form class="text-center" method="post" action="<?php echo site_url('user/index/');?>">
	<div class="input-group">
    <input type="text" class="form-control" name="search" placeholder="<?php echo $this->lang->line('search');?>...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit"><?php echo $this->lang->line('search');?></button>
      </span>
	 
	  
    </div><!-- /input-group -->
	 </form>
              
              
               
                <table cellpadding="0" cellspacing="0" border="0" class="dTable responsive">
<!--
                	<thead>
                		<tr>
							
					
							<th><div>Email</div></th>
							<th><div>Student Name</div></th>
                    		<th><div>Action</div></th>
						</tr>
					</thead>
                    <tbody>
                         
                         <?php 
if(count($result)==0){
	?>
<tr>
 <td colspan="3"><?php echo $this->lang->line('no_record_found');?></td>
</tr>
                         
                         
                          <?php
                                }
                                 foreach($result as $key => $val){
                                      ?>
				            <tr>								
								<td><?php echo $val['email'];?></td>								
								<td><?php echo $val['first_name'];?> <?php echo $val['last_name'];?></td>
						

								<td align="center">
								<a data-toggle="modal" href="student_edit.php?student_id=1" class="btn btn-gray btn-small"><i class="icon-wrench"></i> Edit</a>

								<a data-toggle="modal" href="#modal-delete" onclick="modal_delete('studentdelete.php?student_id=1')" class="btn btn-red btn-small"><i class="icon-trash"></i> Delete </a>

								<a data-toggle="modal" href="#question-modal-form" onclick="modal_view_student_profile('View_Student',1)" class="btn btn-blue btn-small"><i class="icon-zoom-in"></i> View</a>

								</td>
								</tr>
                   
                        <?php 
}
?>
                    </tbody>
-->
                
                
                
                
                
                <tr>
 <th><?php echo $this->lang->line('email');?></th>
<th><?php echo $this->lang->line('first_name');?> <?php echo $this->lang->line('last_name');?></th>
<th><?php echo $this->lang->line('action');?> </th>
</tr>
<?php 
if(count($result)==0){
	?>
<tr>
 <td colspan="3"><?php echo $this->lang->line('no_record_found');?></td>
</tr>	
	
	
	<?php
}
foreach($result as $key => $val){
?>
<tr>
 <td><?php echo $val['email'];?></td>
<td><?php echo $val['first_name'];?> <?php echo $val['last_name'];?></td>
<td>
<a href="<?php echo site_url('user/edit_user/'.$val['uid']);?>"><img src="<?php echo base_url('images/edit.png');?>"></a>
<a href="javascript:remove_entry('user/remove_user/<?php echo $val['uid'];?>');"><img src="<?php echo base_url('images/cross.png');?>"></a>

</td>
</tr>

<?php 
}
?>
                

                </table>
       </div>  
       </div>  
       </div>  
       
       
       
<!--
       foreach($result as $key => $val){
?>
<tr>
 <td><?php echo $val['email'];?></td>
<td><?php echo $val['first_name'];?> <?php echo $val['last_name'];?></td>
<td>
<a href="<?php echo site_url('user/edit_user/'.$val['uid']);?>"><img src="<?php echo base_url('images/edit.png');?>"></a>
<a href="javascript:remove_entry('user/remove_user/<?php echo $val['uid'];?>');"><img src="<?php echo base_url('images/cross.png');?>"></a>

</td>
</tr>

<?php 
}
?>
       
            
                     
-->

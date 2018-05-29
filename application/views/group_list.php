<!--
 <div class="container">

   
 <h3><?php echo $title;?></h3>


  <div class="row">
 
<div class="col-md-12">
<br> 
-->
        
        <div class="main-content">
            <div class="container-fluid" >
            <div class="row-fluid">
                <div class="area-top clearfix">
                    <div class="pull-left header">
                        <h3 class="title">
                        <i class="icon-edit"></i>
                        Manage Group </h3>
                    </div>

                </div>
            </div>
        </div>
        
        
 
             <div class="container-fluid padded">
                <div class="box">
                 <div class="box-header">
				<ul class="nav nav-tabs nav-tabs-left">
				<li class="">
				<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 
				Group List                	</a></li>
<!--
				<li>
				<a href="#" data-toggle="tab"><i class="icon-plus"></i>
				Add Student              	</a></li>
-->
				</ul>
				</div>
        
        
			<?php 
		if($this->session->flashdata('message')){
			echo $this->session->flashdata('message');	
		}
		?>	
		<div id="message"></div>
		
		 <form method="post" action="<?php echo site_url('user/insert_group/');?>">
	
<!--<table class="table table-bordered">-->

<table  cellpadding="0" cellspacing="0" border="0" class="dTable responsive" >
<tr>
 <td>Group Name</td>
 <td>Expiry Date</td>
 
</tr>
<?php 
if(count($group_list)==0){
	?>
<tr>
 <td colspan="3"><?php echo $this->lang->line('no_record_found');?></td>
</tr>	
	
	
	<?php
}

foreach($group_list as $key => $val){
?>
<tr>
 <td><?php echo $val['group_name'];?></td>
 
<!-- <td><input type="text"   class="form-control"  value="<?php echo $val['group_name'];?>" onBlur="updategroup(this.value,'<?php echo $val['gid'];?>');" ></td>-->
<!--
 <td>
 <?php echo $this->config->item('base_currency_prefix');?> <input type="text"      value="<?php echo $val['price'];?>" onBlur="updategroupprice(this.value,'<?php echo $val['gid'];?>');" >
  <?php echo $this->config->item('base_currency_sufix');?>  </td>
-->
 <td><?php echo $val['valid_for_days'];?></td>
 
<!-- <td><input type="text"   class="form-control"  value="<?php echo $val['valid_for_days'];?>" onBlur="updategroupvalid(this.value,'<?php echo $val['gid'];?>');" ></td>-->
<td>
      <a href="javascript:remove_entry('user/remove_group/<?php echo $val['gid'];?>');" class="btn btn-red btn-small" >
           <i class="icon-trash"></i> Delete
          
      </a>
      
    
</td>
</tr>

<?php 
}
?>
<tr>
 <td>
 
 <input type="text"   class="form-control"   name="group_name" value="" placeholder="<?php echo $this->lang->line('group_name');?>"  required ></td>
<!--
<td>
 
  <?php echo $this->config->item('base_currency_prefix');?> 
 <input type="text"     name="price" value="" placeholder="<?php echo $this->lang->line('price');?>"  required >
  <?php echo $this->config->item('base_currency_sufix');?>  </td>
-->
<td>
 
 
 <input type="text"   class="form-control"   name="valid_for_days" value="" placeholder="<?php echo $this->lang->line('valid_for_days');?>"  required ></td>
<td>
<button class="btn btn-gray" type="submit"><?php echo $this->lang->line('add_new');?></button>
 
</td>
</tr>
</table>
</form>
</div>

</div>



</div>
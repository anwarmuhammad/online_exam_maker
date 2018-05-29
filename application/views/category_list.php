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
                        Manage Category </h3>
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
				Category List                	</a></li>
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
		
		 <form method="post" action="<?php echo site_url('qbank/insert_category/');?>">
	
<!--<table class="table table-bordered">-->

<table  cellpadding="0" cellspacing="0" border="0" class="dTable responsive" >
<tr>
 <td>Category Name</td>
 <td>Action</td>
 
 
</tr>
<?php 
if(count($category_list)==0){
	?>
<tr>
 <td colspan="3"><?php echo $this->lang->line('no_record_found');?></td>
</tr>	
	
	
	<?php
}

foreach($category_list as $key => $val){
?>
<tr>
 <td><?php echo $val['category_name'];?></td>

 


<td>
      <a href="javascript:remove_entry('qbank/remove_category/<?php echo $val['cid'];?>');ss" class="btn btn-red btn-small" >
           <i class="icon-trash"></i> Delete
          
      </a>
      
    
</td>
</tr>

<?php 
}
?>
<tr>
 <td>
 
 <input type="text"   class="form-control"   name="category_name" value="" placeholder="<?php echo $this->lang->line('category_name');?>"  required ></td>

<td>
<button class="btn btn-gray" type="submit"><?php echo $this->lang->line('add_new');?></button>
 </td>

</tr>
</table>
</form>
</div>

</div>



</div>
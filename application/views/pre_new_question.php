 <div class="main-content">
            <div class="container-fluid" >
            <div class="row-fluid">
                <div class="area-top clearfix">
                    <div class="pull-left header">
                        <h3 class="title">
                        <i class="icon-edit"></i>
                        Manage Question </h3>
                    </div>

                </div>
            </div>
        
 
             
           
 
 
 <div class="box-content padded">
		<div class="tab-content">
   
   
   
				<h3>Add Question</h3> 
				
   

   
 
   
 

  
     <form method="post" action="<?php echo site_url('qbank/pre_new_question/');?>">
	
<div class="col-md-8">
<br> 
 <div class="login-panel panel panel-default">
		<div class="panel-body"> 
	
	
	
			<?php 
		if($this->session->flashdata('message')){
			echo $this->session->flashdata('message');	
		}
		?>	
		
		
		
				<div class="form-group">	 
					<label   ><?php echo $this->lang->line('select_question_type');?></label> 
					<select class="form-control" name="question_type" onChange="hidenop(this.value);">
						<option value="1"><?php echo $this->lang->line('multiple_choice_single_answer');?></option>
						<option value="2"><?php echo $this->lang->line('multiple_choice_multiple_answer');?></option>
						<option value="3"><?php echo $this->lang->line('match_the_column');?></option>
						<option value="4"><?php echo $this->lang->line('short_answer');?></option>
						<option value="5"><?php echo $this->lang->line('long_answer');?></option>
					
					</select>
			</div>

			<div class="form-group" id="nop" >	 
					<label for="inputEmail"  ><?php echo $this->lang->line('nop');?></label> 
					<input type="text"   name="nop"  class="form-control" value="4"   >
			</div>


 
	<button class="btn btn-gray" type="submit"><?php echo $this->lang->line('next');?></button>
 
		</div>
</div>
 
 
 
 
</div>
      </form>
</div>

 



</div>
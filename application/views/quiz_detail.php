 <div class="main-content">
            <div class="container-fluid" >
            <div class="row-fluid">
                <div class="area-top clearfix">
                    <div class="pull-left header">
                        <h3 class="title">
                        <i class="icon-book"></i>
                        Read Carefully </h3>
                        
                         <h3></h3>
                    </div>

                </div>
            </div>
        </div>
 
             <div class="container-fluid padded">
                <div class="box">
                 
	<div class="box-content padded">
		<div class="tab-content">
           
            <div class="tab-pane box active" id="list">
               
 <br>
 <br>
 
   <form method="post" id="quiz_detail" action="<?php echo site_url('quiz/validate_quiz/'.$quiz['quid']);?>">
  
  
  <!-- /.col-lg-6 -->
<!-- /.row -->

			<?php 
		if($this->session->flashdata('message')){
			echo $this->session->flashdata('message');	
		}
		?>	
		
<table  cellpadding="0" cellspacing="0" border="0" class="dTable responsive table-striped" >


<tr><td><?php echo $this->lang->line('quiz_name');?></td><td><?php echo $quiz['quiz_name'];?></td></tr>
<tr><td colspan='2'><?php echo $this->lang->line('description');?><br><?php echo $quiz['description'];?></td></tr>
<tr><td><?php echo $this->lang->line('start_date');?></td><td><?php echo date('Y-m-d H:i:s',$quiz['start_date']);?></td></tr>
<tr><td><?php echo $this->lang->line('end_date');?></td><td><?php echo date('Y-m-d H:i:s',$quiz['end_date']);?></td></tr>
<tr><td><?php echo $this->lang->line('duration');?></td><td><?php echo $quiz['duration'];?></td></tr>
<tr><td><?php echo $this->lang->line('maximum_attempts');?></td><td><?php echo $quiz['maximum_attempts'];?></td></tr>
<tr><td><?php echo $this->lang->line('pass_percentage');?></td><td><?php echo $quiz['pass_percentage'];?></td></tr>
<tr><td><?php echo $this->lang->line('correct_score');?></td><td><?php echo $quiz['correct_score'];?></td></tr>
<tr><td><?php echo $this->lang->line('incorrect_score');?></td><td><?php echo $quiz['incorrect_score'];?></td></tr>
</table>




</div>

<button class="btn btn-success" type="submit"><?php echo $this->lang->line('start_quiz');?></button>
</form>
</div>



</div>





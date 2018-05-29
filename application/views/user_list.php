<div class="main-content">
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="area-top clearfix">
                <div class="pull-left header">
                    <h3 class="title">
                        <i class="icon-edit"></i>
                        Manage User </h3>
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
				User List                	</a></li>
                    <!--
				<li>
				<a href="#" data-toggle="tab"><i class="icon-plus"></i>
				Add Student              	</a></li>
-->
                </ul>
            </div>
            <div class="box-content padded">
                <div class="tab-content">

                    <div class="tab-pane box active" id="list">

                        <br>
                        <br>
                        <div class="col-lg-6 ">
                            <form class="text-center" method="post" action="<?php echo site_url('user/index/');?>">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="search" placeholder="<?php echo $this->lang->line('search');?>...">
                                    <span class="input-group-btn">
<!--        <button class="btn btn-default" type="submit"><?php echo $this->lang->line('search');?></button>-->
      </span>


                                </div>
                            </form>
                        </div>



                        <!-- /.col-lg-6 -->
                        <!-- /.row -->

                        <?php 
		if($this->session->flashdata('message')){
			echo $this->session->flashdata('message');	
		}
		?>

                            <table cellpadding="0" cellspacing="0" border="0" class="dTable responsive">


                                <tr>
                                    <td>Email</td>
                                    <td>Name</td>
                                    <td> Action </td>
                                </tr>

                                <?php 
if(count($result)==0){
	?>
                                    <tr>
                                        <td colspan="3">
                                            <?php echo $this->lang->line('no_record_found');?>
                                        </td>
                                    </tr>

                                    <?php
}
foreach($result as $key => $val){
?>
                                        <tr>
                                            <td>
                                                <?php echo $val['email'];?>
                                            </td>
                                            <td>
                                                <?php echo $val['first_name'];?>
                                                    <?php echo $val['last_name'];?>
                                            </td>
                                            <td>
                                                <a data-toggle="modal" href="<?php echo site_url('user/edit_user/'.$val['uid']);?>" class="btn btn-gray btn-small"><i class="icon-wrench"></i> Edit</a>

                                                <a data-toggle="modal" href="<?php echo site_url('user/remove_user/'.$val['uid']);?>" class="btn btn-red btn-small"><i class="icon-trash"></i> Delete</a>


                                                <!--<a data-toggle="modal" href="javascript:remove_entry('user/remove_user/<?php echo $val['uid'];?>');" class="btn btn-red btn-small"><i class="icon-trash"></i> Delete</a>-->


                                                <a data-toggle="modal" href="#question-modal-form" onclick="modal_view_student_profile('View_Student',1)" class="btn btn-blue btn-small"><i class="icon-zoom-in"></i> View</a>


                                                <!--<a href="javascript:remove_entry('user/remove_user/<?php echo $val['uid'];?>');"><img src="<?php echo base_url('images/cross.png');?>"></a>-->






                                            </td>
                                        </tr>

                                        <?php 
}
?>
                            </table>
                    </div>

                </div>


                <?php
if(($limit-($this->config->item('number_of_rows')))>=0){ $back=$limit-($this->config->item('number_of_rows')); }else{ $back='0'; } ?>

                    <a href="<?php echo site_url('user/index/'.$back);?>" class="first paginate_button "><?php echo $this->lang->line('back');?></a> &nbsp;&nbsp;
                    <?php
 $next=$limit+($this->config->item('number_of_rows'));  ?>

                        <a href="<?php echo site_url('user/index/'.$next);?>" class="first paginate_button paginate_button_disabled"><?php echo $this->lang->line('next');?></a>





            </div>




            <!-----------HIDDEN QUESTION MODAL FORM - COMMON IN ALL PAGES ------>
            <div id="question-modal-form" class="modal hide fade">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <div id="modal-tablesLabel_question" style="color:#fff; font-size:16px;">&nbsp; </div>
                </div>
                <div class="modal-body" id="modal-body-question">ORANGE</div>
                <div class="modal-footer">
                    <!-- <button class="btn btn-gray" onclick="custom_print('frame1')"></button> -->
                    <button class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

            <!-----------HIDDEN MODAL DELETE CONFIRMATION - COMMON IN ALL PAGES ------>
            <div id="modal-delete" class="modal hide fade" style="height:140px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h6 id="modal-tablesLabel"> <i class="icon-info-sign"></i>&nbsp; Confirmation!</h6>
                </div>
                <div class="modal-delete-body" id="modal-body-delete">Are you sure, you want to delete this student ?</div>
                <div class="modal-footer">
                    <a href="" id="delete_link" class="btn btn-red">Confirm</a>
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>


            <div id="modal-status-active" class="modal hide fade" style="height:140px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h6 id="modal-tablesLabel"> <i class="icon-info-sign"></i>&nbsp; Confirmation!</h6>
                </div>
                <div class="modal-delete-body" id="modal-body-delete">Sure, you want to Activate ?</div>
                <div class="modal-footer">
                    <a href="category_status.php?c_id=" id="active_link" class="btn btn-red">Confirm</a>
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>


            <div id="modal-status-deactive" class="modal hide fade" style="height:140px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h6 id="modal-tablesLabel"> <i class="icon-info-sign"></i>&nbsp; Confirmation!</h6>
                </div>
                <div class="modal-delete-body" id="modal-body-delete">Sure, you want to Dectivate ?</div>
                <div class="modal-footer">
                    <a href="category_status.php?c_id=" id="deactive_link" class="btn btn-red">Confirm</a>
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
            <script>
                function modal_delete(param1) {
                    document.getElementById('delete_link').href = param1;
                }

                function modal_view_student_profile(param1, param2, param3) {
                    document.getElementById('modal-body-question').innerHTML =
                        '<iframe id="frame1" src="viewstudent.php?s_id=' + param2 + '" width="100%" height="400" frameborder="0"></iframe>';
                    document.getElementById('modal-tablesLabel_question').innerHTML = param1.replace("_", " ");
                }


                function modal_status_active(param1) {
                    document.getElementById('active_link').href = param1;
                }

                function modal_status_deactive(param1) {
                    document.getElementById('deactive_link').href = param1;
                }
            </script>
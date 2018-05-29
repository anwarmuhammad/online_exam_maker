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
                    <!--
				<li class="">
				<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 
				Student List                	</a></li>
-->
                    <li>
                        <a href="#add" data-toggle="tab"><i class="icon-plus"></i>
				Add User              	</a></li>
                </ul>
            </div>
            <div class="box-content padded">
                <div class="tab-content">

                    <div class="tab-pane box active" id="list">



                        <div class="tab-pane box" id="add" style="padding: 5px">
                            <div class="box-content">
                                <form action="<?php echo site_url('user/insert_user/');?>" method="post" accept-charset="utf-8" class="form-horizontal validatable" target="_top">


                                    <?php 
		if($this->session->flashdata('message')){
			echo $this->session->flashdata('message');	
		}
		?>



                                        <br>
                                        <br>

                                        <div class="padded">
                                            <div class="control-group">
                                                <label class="control-label">Account Type</label>
                                                <div class="controls">
                                                    <select name="su" class="chzn-select">
                                                        <option value="">Role</option>
                                                        <option value="0">Student</option>

                                                        <option value="1">Techer</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="padded">
                                            <div class="control-group">
                                                <label class="control-label">First Name</label>
                                                <div class="controls">
                                                    <input type="text" class="validate[required]" name="first_name" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="padded">
                                            <div class="control-group">
                                                <label class="control-label">Last Name</label>
                                                <div class="controls">
                                                    <input type="text" class="validate[required]" name="last_name" />
                                                </div>
                                            </div>
                                        </div>
                                        <!--
						<div class="padded">                   
                            <div class="control-group">
                                <label class="control-label">Mother Name</label>
                                <div class="controls">
                                    <input type="text" name="student_mother" class="validate[required]" />
                                </div>
                            </div>
                        </div>
-->
                                        <div class="padded">
                                            <div class="control-group">
                                                <label class="control-label">Valid till</label>
                                                <div class="controls">
                                                    <input type="text" name="subscription_expired" class="validate[required,custom[dateFormat]] datepicker" />
                                                </div>
                                            </div>
                                        </div>



                                        <div class="padded">
                                            <div class="control-group">
                                                <label class="control-label">Phone</label>
                                                <div class="controls">
                                                    <input type="text" class="validate[required,custom[integer]]" name="contact_no" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="padded">
                                            <div class="control-group">
                                                <label class="control-label">Email</label>
                                                <div class="controls">
                                                    <input type="text" class="validate[required,custom[email]]" name="email" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="padded">
                                            <div class="control-group">
                                                <label class="control-label">Password</label>
                                                <div class="controls">
                                                    <input type="password" class="validate[required]" name="password" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="padded">
                                            <div class="control-group">
                                                <label class="control-label">Subscribe to</label>
                                                <div class="controls" name="gid">
                                                    <select class="form-control" name="gid" id="gid" onChange="getexpiry();">
                                                        <?php 
					foreach($group_list as $key => $val){
						?>

                                                            <option value="<?php echo $val['gid'];?>">
                                                                <?php echo $val['group_name'];?>
                                                            </option>
                                                            <?php 
					}
					?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-gray">Add User</button>
                                            <input type="hidden" value="Add new student" name="submit">
                                        </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
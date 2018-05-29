<?php 
			if($this->session->userdata('logged_in')){
				if(($this->uri->segment(1).'/'.$this->uri->segment(2))!='quiz/attempt'){
				$logged_in=$this->session->userdata('logged_in');
	?>


    <div class="sidebar-background">
        <div class="primary-sidebar-background">
        </div>
    </div>
    <div class="primary-sidebar">



        <br />
        <div style="text-align:center;">
            <!--            <a href=""><img src "images/logo.png" style="max-height:100px; max-width:100px;" /> </a>-->
        </div>
        <br />

        <!--   	****Admin Sidebar****-->
        <?php  
				if($logged_in['su']==1){
			?>

            <ul class="nav nav-collapse collapse nav-collapse-primary">


                <li class="dark-nav active"> <span class="glow"></span>
                    <a href="<?php echo site_url('dashboard');?>" rel="tooltip" data-placement="right" data-original-title="Dashboard">
                        <i class="icon-desktop icon-1x"></i>
                        <span>Dashboard </span>
                    </a>
                </li>
                <li class="dark-nav"> <span class="glow"></span>

                    <a href="<?php echo site_url('qbank/category_list');?>" rel="tooltip" data-placement="right" data-original-title="Category">
                        <i class="icon-folder-close icon-1x"></i>
                        <span>Category </span>
                    </a>
                </li>


                <li class="dark-nav"> <span class="glow"></span>
                    <a class="accordion-toggle  " data-toggle="collapse" href="#settings_submenu_first" rel="tooltip" data-placement="right" data-original-title="Settings">
                        <i class="icon-male icon-1x"></i>
                        <span>Student <i class="icon-caret-down"></i></span>
                    </a>

                    <ul id="settings_submenu_first" class="collapse">
                        <li class="">
                            <a href="<?php echo site_url('user');?>">
                                <i class="icon-user "></i>&nbsp;Student List</a>
                        </li>
                        <li class="">
                            <a href="<?php echo site_url('user/new_user');?>"><i class=" icon-plus"></i>&nbsp;Add Student</a>
                        </li>
                    </ul>
                </li>



                <li class="dark-nav"> <span class="glow"></span>
                    <a href="<?php echo site_url('quiz');?>" rel="tooltip" data-placement="right" data-original-title="Exam">
                        <i class="icon-book icon-1x"></i>
                        <span>Exam </span>
                    </a>
                </li>
                <li class="dark-nav"> <span class="glow"></span>
                    <a href="<?php echo site_url('qbank');?>" rel="tooltip" data-placement="right" data-original-title="Question">
                        <i class="icon-question-sign icon-1x"></i>
                        <span>Question </span>
                    </a>
                </li>



                <li class="dark-nav"> <span class="glow"></span>
                    <a href="<?php echo site_url('dashboard/config');?>" rel="tooltip" data-placement="right" data-original-title="Question">
                        <i class="icon-cogs icon-1x"></i>
                        <span>Settings </span>
                    </a>
                </li>


                <li>
                    <span class="glow"></span>
                    <a href="notice.php" rel="tooltip" data-placement="right" data-original-title="Notice">
                        <i class="icon-list-ol icon-1x"></i>
                        <span>Notice </span>
                    </a>
                </li>
                <li>
                    <span class="glow"></span>
                    <a href="<?php echo site_url('result');?>" rel="tooltip" data-placement="right" data-original-title="View Result">
                        <i class="icon-trophy icon-1x"></i>
                        <span>View Result </span>
                    </a>
                </li>
                <li>
                    <span class="glow"></span>
                    <a href="export_table.php" rel="tooltip" data-placement="right" data-original-title="Export">
                        <i class="icon-download icon-1x"></i>
                        <span>Export </span>
                    </a>
                </li>
                <li>
                    <span class="glow"></span>
                    <a href="import_table.php" rel="tooltip" data-placement="right" data-original-title="Import">
                        <i class="icon-upload icon-1x"></i>
                        <span>Import </span>
                    </a>
                </li>



            </ul>

            <!--	******Student Sidebar******-->

            <?php 
				}else{
			?>

                <ul class="nav nav-collapse collapse nav-collapse-primary">


                    <li class="dark-nav active"> <span class="glow"></span>
                        <a href="<?php echo site_url('dashboard');?>" rel="tooltip" data-placement="right" data-original-title="Dashboard">
                            <i class="icon-desktop icon-1x"></i>
                            <span>Dashboard </span>
                        </a>
                    </li>
                    <!--
                    <li class="dark-nav"> <span class="glow"></span>
    <a href="<?php echo site_url('user/edit_user/'.$logged_in['uid']);?>" rel="tooltip" data-placement="right" data-original-title="Category">
        <i class="icon-user icon-1x"></i>
        <span>My Account </span>
    </a>
</li>
-->
                    <li class="dark-nav"> <span class="glow"></span>
                        <a href="<?php echo site_url('quiz');?>" rel="tooltip" data-placement="right" data-original-title="Sub Category">
                            <i class="icon-list icon-1x"></i>
                            <span>Exam List </span>
                        </a>
                    </li>
                    <li class="dark-nav"> <span class="glow"></span>
                        <a href="<?php echo site_url('result');?>" rel="tooltip" data-placement="right" data-original-title="Subject">
                            <i class="icon-trophy icon-1x"></i>
                            <span>View Result </span>
                        </a>
                    </li>








                </ul>

                <?php 
            }
      ?>

    </div>






    <?php 
			}
			}
	?>
<?php 
			if($this->session->userdata('logged_in')){
				if(($this->uri->segment(1).'/'.$this->uri->segment(2))!='quiz/attempt'){
				$logged_in=$this->session->userdata('logged_in');
	?>


    <div class="main-content">
        <?php  
				if($logged_in['su']==1){
			?>


            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="area-top clearfix">
                        <div class="pull-left header">
                            <h3 class="title">
					<i class="icon-desktop"></i>
					Admin Dashboard</h3>
                        </div>
                    </div>
                </div>
            </div>

            <?php 
				}else{
			?>

                <div class="container-fluid">
                    <div class="row-fluid">
                        <div class="area-top clearfix">
                            <div class="pull-left header">
                                <h3 class="title">
					<i class="icon-desktop"></i>
					Student Dashboard</h3>
                            </div>
                        </div>
                    </div>
                </div>



                <?php 
            }
      ?>
                    <!--      /****Admin Dashboard***/-->


                    <?php  
				if($logged_in['su']==1){
			?>
                        <div class="container-fluid padded">
                            <div class="container-fluid padded">



                                <div class="row-fluid">
                                    <div class="span30">
                                        <div class="action-nav-normal">
                                            <div class="row-fluid">
                                                <div class="span2 action-nav-button">
                                                    <a href="<?php echo site_url('dashboard');?>">
                                                        <i class="icon-desktop"></i>
                                                        <span>Dashboard</span>
                                                    </a>
                                                </div>
                                                <div class="span2 action-nav-button">
                                                    <a href="<?php echo site_url('qbank/category_list');?>">
                                                        <i class="icon-folder-close"></i>
                                                        <span>Category</span>
                                                        <span class="label label-total"> T:15</span>
                                                        <span class="label-active label-total"> A:12</span>
                                                    </a>
                                                </div>


                                                <div class="span2 action-nav-button">
                                                    <a href="<?php echo site_url('qbank/level_list');?>">
                                                        <i class="icon-tag"></i>
                                                        <span>Level List</span>
                                                        <!--
								<span class="label label-total"> T:7</span>
								<span class="label-active label-total"> A:7</span>
-->
                                                    </a>
                                                </div>

                                                <div class="span2 action-nav-button">
                                                    <a href="<?php echo site_url('user');?>">
                                                        <i class="icon-male"></i>
                                                        <span>User List</span>
                                                        <!--
								<span class="label badge-inverse"> T:9</span>
								<span class="label-active label-total"> A:8</span>
-->
                                                    </a>
                                                </div>
                                                <div class="span2 action-nav-button">
                                                    <a href="<?php echo site_url('user/new_user');?>">
                                                        <i class="icon-male"></i>
                                                        <span> Add User</span>
                                                        <!--
								<span class="label badge-inverse"> T:9</span>
								<span class="label-active label-total"> A:8</span>
-->
                                                    </a>
                                                </div>
                                                <div class="span2 action-nav-button">
                                                    <a href="<?php echo site_url('quiz/add_new');?>">
                                                        <i class="icon-book"></i>
                                                        <span> Add Exam</span>
                                                        <span class="label label-total"> T:4</span>
                                                        <span class="label-active label-total"> A:0</span>
                                                    </a>
                                                </div>





                                            </div>
                                            <div class="row-fluid">
                                                <div class="span2 action-nav-button">
                                                    <a href="<?php echo site_url('quiz');?>">
                                                        <i class="icon-book"></i>
                                                        <span>Exam</span>
                                                        <span class="label label-total">Total Exam</span>
                                                        <span class="label-active  label-total"><?php echo $num_quiz;?> </span>


                                                    </a>
                                                </div>





                                                <div class="span2 action-nav-button">
                                                    <a href="<?php echo site_url('qbank');?>">
                                                        <i class="icon-question-sign"></i>
                                                        <span>Question Bank</span>
                                                        <span class="label label-total"> Total Question</span>
                                                        <span class="label-active label-total"> <?php echo $num_qbank;?></span>
                                                    </a>
                                                </div>



                                                <div class="span2 action-nav-button">
                                                    <a href="<?php echo site_url('qbank/pre_new_question');?>">
                                                        <i class="icon-question-sign"></i>
                                                        <span> Add Question</span>

                                                    </a>
                                                </div>


                                                <div class="span2 action-nav-button">
                                                    <a href="<?php echo site_url('user');?>">

                                                        <i class="icon-user"></i>
                                                        <span>User</span>
                                                        <span class="label label-total"> Total User</span>
                                                        <span class="label-active label-total"> <?php echo $num_users;?></span>
                                                    </a>

                                                </div>

                                                <div class="span2 action-nav-button">
                                                    <a href="<?php echo site_url('user/group_list');?>">
                                                        <i class="icon-envelope-alt"></i>
                                                        <span>Group</span>
                                                        <span class="label label-total"> T:1</span>
                                                        <span class="label-active label-total"> A:1</span>
                                                    </a>
                                                </div>

                                                <div class="span2 action-nav-button">
                                                    <a href="<?php echo site_url('result');?>">
                                                        <i class="icon-trophy"></i>
                                                        <span>View Result</span>

                                                    </a>
                                                </div>


                                            </div>
                                            <div class="row-fluid">

                                                <div class="span2 action-nav-button">
                                                    <a href="export_table.php">
                                                        <i class="icon-download"></i>
                                                        <span>Export</span>

                                                    </a>
                                                </div>
                                                <div class="span2 action-nav-button">
                                                    <a href="import_table.php">
                                                        <i class="icon-upload"></i>
                                                        <span>Import</span>

                                                    </a>
                                                </div>



                                                <div class="span2 action-nav-button">
                                                    <a href="<?php echo site_url('dashboard/config');?>">
                                                        <i class="icon-wrench"></i>
                                                        <span>General Settings</span>
                                                    </a>
                                                </div>

                                            </div>


                                            <!--				  Student Dashboard Start-->



                                            <?php 
				}else{
			?>


                                                <div class="container-fluid padded">
                                                    <div class="container-fluid padded">



                                                        <div class="row-fluid">
                                                            <div class="span30">
                                                                <div class="action-nav-normal">
                                                                    <div class="row-fluid">
                                                                        <div class="span4 action-nav-button">
                                                                            <a href="<?php echo site_url('dashboard');?>">
                                                                                <i class="icon-desktop"></i>
                                                                                <span>Dashboard</span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="span4 action-nav-button">
                                                                            <a href="<?php echo site_url('quiz');?>
">
                                                                                <i class="icon-list"></i>
                                                                                <span>Exam List</span>

                                                                                <span class="label label-total"> T:15</span>
                                                                                <span class="label-active label-total"> A:12</span>
                                                                            </a>
                                                                        </div>



                                                                        <div class="span4 action-nav-button">
                                                                            <a href="<?php echo site_url('result');?>">
                                                                                <i class="icon-trophy"></i>
                                                                                <span>View Result
								
								
								</span>
                                                                                <span class="label label-total"> T:15</span>
                                                                                <span class="label-active label-total"> anwar</span>
                                                                            </a>
                                                                        </div>










                                                                    </div>

                                                                </div>



                                                                <?php 
            }
      ?>

                                                                    <!--Student Dashboard End-->

                                                                    <div class="row-fluid">
                                                                        <div class="span6">
                                                                            <div class="box">
                                                                                <div class="box-header">
                                                                                    <span class="title"><i class="icon-reorder"></i>&nbsp;Category</span>
                                                                                </div>
                                                                                <div class="box-content scrollable" style="max-height: 500px; overflow-y: auto">
                                                                                    <div class="box-section news with-icons">

                                                                                        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
                                                                                        <script type="text/javascript">
                                                                                            // Load the Visualization API and the piechart package.
                                                                                            google.load('visualization', '1.0', {
                                                                                                'packages': ['corechart']
                                                                                            });

                                                                                            // Set a callback to run when the Google Visualization API is loaded.
                                                                                            google.setOnLoadCallback(drawChart);

                                                                                            // Callback that creates and populates a data table,
                                                                                            // instantiates the pie chart, passes in the data and
                                                                                            // draws it.
                                                                                            function drawChart() {
                                                                                                // Create the data table.
                                                                                                var data = new google.visualization.DataTable();
                                                                                                data.addColumn('string', 'Topping');
                                                                                                data.addColumn('number', 'Slices');

                                                                                                data.addRows([

						['B.Tech', 1], ['MBA', 0], ['BBA', 0], ['M.Tech', 0], ['BCA', 1], ['B.Com', 0], ['LLB', 0], ['M.com', 0], ['MA', 0], ['B.sc', 2], ['M.sc', 0], ['BA', 0], ['5th Standard', 4], ['10th standard', 0], ['10th standard', 1],
						]);

                                                                                                // Set chart options
                                                                                                var options = {
                                                                                                    'title': 'Chart depicting number of students in each category',
                                                                                                    'width': 450,
                                                                                                    'height': 300
                                                                                                };

                                                                                                // Instantiate and draw our chart, passing in some options.
                                                                                                var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
                                                                                                chart.draw(data, options);
                                                                                            }
                                                                                        </script>
                                                                                        <!--Div that will hold the pie chart-->
                                                                                        <div id="chart_div"></div>


                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="span6">
                                                                            <div class="box">
                                                                                <div class="box-header">
                                                                                    <span class="title"><i class="icon-reorder"></i>&nbsp;Exam</span>
                                                                                </div>
                                                                                <div class="box-content scrollable" style="max-height: 500px; overflow-y: auto">
                                                                                    <div class="box-section news with-icons">


                                                                                        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
                                                                                        <script type="text/javascript">
                                                                                            // Load the Visualization API and the piechart package.
                                                                                            google.load('visualization', '1.0', {
                                                                                                'packages': ['corechart']
                                                                                            });

                                                                                            // Set a callback to run when the Google Visualization API is loaded.
                                                                                            google.setOnLoadCallback(drawChart);

                                                                                            // Callback that creates and populates a data table,
                                                                                            // instantiates the pie chart, passes in the data and
                                                                                            // draws it.
                                                                                            function drawChart() {

                                                                                                // Create the data table.
                                                                                                var data = new google.visualization.DataTable();
                                                                                                data.addColumn('string', 'Topping');
                                                                                                data.addColumn('number', 'Slices');

                                                                                                data.addRows([

						['Only Math', 0], ['CCC', 0], ['EXAM NAME', 0], ['Anatomy 101 exam', 0],
						]);

                                                                                                // Set chart options
                                                                                                var options = {
                                                                                                    'title': 'Chart depicting exams taken up by students in last 7 days',
                                                                                                    'width': 450,
                                                                                                    'height': 300
                                                                                                };

                                                                                                // Instantiate and draw our chart, passing in some options.
                                                                                                var chart = new google.visualization.PieChart(document.getElementById('chart_div_exam'));
                                                                                                chart.draw(data, options);
                                                                                            }
                                                                                        </script>
                                                                                        <!--Div that will hold the pie chart-->
                                                                                        <div id="chart_div_exam"></div>


                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                        </div>


                                    </div>



                                    <div style="clear:both;color:#aaa; padding:20px;">
                                        <center>&copy; 2017 <a href="#" target="_blank">Online Examination System</a></center>
                                        <center>A Product of CSTE Family</center>
                                    </div>
                                </div>
                            </div>
                            </body>

                            </html>

                            <?php 
			}
			}
	?>
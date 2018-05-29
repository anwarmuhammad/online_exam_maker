<html>

<head>
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/adminfont.css">
    <link href="css/jquery/jquery-ui-1.10.3.custom.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="css/admin.css" media="screen" rel="stylesheet" type="text/css" />


    <link href="<?php echo base_url('bootstrap/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('css/style.css');?>" rel="stylesheet">

    <link href="<?php echo base_url('css/admin.css');?>" rel="stylesheet">

    <!--[if lt IE 9]>
		<script src="../js/html5shiv.js" type="text/javascript"></script>
		<script src="../js/excanvas.js" type="text/javascript"></script>
		<![endif]-->
    <script src="<?php echo base_url('js/textusintentio.js');?>" type="text/javascript"></script>
    <title>Online Exam</title>
    <meta name="description" content="Online Examination system for Educational Organizations">
    <meta name="keywords" content="Online Examination System">

    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-58877461-1']);
        _gaq.push(['_trackPageview']);
        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' :
                'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>

    <script src="ckeditor/ckeditor.js"></script>
    <!-- <link rel="ckeditor/samples/stylesheet" href="sample.css"> -->
    <script>
        // Remove advanced tabs for all editors.
        CKEDITOR.config.removeDialogTabs = 'image:advanced;link:advanced;flash:advanced;creatediv:advanced;editdiv:advanced';
    </script>


    <script>
        var base_url = "<?php echo base_url();?>";
    </script>

    <!-- jquery -->
    <!--	<script src="<?php echo base_url('js/jquery.js');?>"></script>-->

    <!-- custom javascript -->
    <script src="<?php echo base_url('js/basic.js');?>"></script>

    <!-- bootstrap js -->


    <!-- <link rel="stylesheet" media="all" type="text/css" href="../js/timepicker/jquery-ui.css" /> -->
    <!-- <script type="text/javascript" src="../js/timepicker/jquery-ui.min.js"></script> -->
    <!-- <script type="text/javascript" src="../js/timepicker/jquery-ui-timepicker-addon.js"></script> -->
</head>

<body>

    <?php 
			if($this->session->userdata('logged_in')){
				if(($this->uri->segment(1).'/'.$this->uri->segment(2))!='quiz/attempt'){
				$logged_in=$this->session->userdata('logged_in');
	?>

        <div id="main_body">
            <div class="navbar navbar-top navbar-inverse">
                <div class="navbar-inner">
                    <div class="container-fluid">
                        <a class="brand" href="<?php echo site_url('dashboard');?>">
                             Online Exam Maker</a>
                        <!-- the new toggle buttons -->
                        <ul class="nav pull-right">
                            <li class="toggle-primary-sidebar hidden-desktop" data-toggle="collapse" data-target=".nav-collapse-primary">
                                <button type="button" class="btn btn-navbar"><i class="icon-th-list"></i></button>
                            </li>
                            <li class="hidden-desktop" data-toggle="collapse" data-target=".nav-collapse-top">
                                <button type="button" class="btn btn-navbar"><i class="icon-align-justify"></i></button>
                            </li>
                        </ul>
                        <div class="nav-collapse nav-collapse-top collapse">


                            <ul class="nav pull-right">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li class="with-image">
                                            <div class="avatar">

                                                <div class="it_circle">
                                                    <i class="icon-user icon-5x" style="color:#34495E;"></i>
                                                </div>
                                            </div>
                                            <span>&nbsp;User</span>
                                        </li>
                                        <li class="divider"></li>

                                        <!--
                                        <li>
    <a href="<?php echo site_url('user/edit_user/'.$val['uid']);?>">
        <i class="icon-user"></i><span>Profile</span></a>
</li>
<li>
    <a href="change_password.php">
        <i class="icon-lock"></i><span>Change Password</span></a>
</li>
-->
                                        <li>
                                            <a href="<?php echo site_url('user/logout');?>">
                                                <i class="icon-off"></i><span>Logout</span></a>
                                        </li>
                                    </ul>

                                </li>
                            </ul>


                            <?php  
				if($logged_in['su']==1){
			?>


                                <ul class="nav pull-right">
                                    <li class="dropdown">
                                        <a href="#"><i class="icon-user"></i>Admin Panel </a>
                                    </li>
                                </ul>




                                <?php 
				}else{
			?>


                                    <ul class="nav pull-right">
                                        <li class="dropdown">
                                            <a href="#"><i class="icon-user"></i>Student Panel </a>
                                        </li>
                                    </ul>


                                    <?php 
				        }
                   ?>








                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
			}
			}
	?>
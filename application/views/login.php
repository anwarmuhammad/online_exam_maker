<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>

<head>
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">






    <link href="<?php echo base_url('bootstrap/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('css/student.css');?>" rel="stylesheet">

    <title>2</title>
    <meta name="description" content="1">
    <meta name="keywords" content="Computer Based Test 1">


</head>

<body>
    <div id="main_body">
        <div class="navbar navbar-top navbar-inverse">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="brand" href="#">Online Exam Maker</a>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="span4 offset4">
                <div class="padded" style="margin-top:10px">
                    <!--
                    
							<center><br/><strong>Howdy!</strong> Please, don&#39;t tell anyone your password</center>                        
-->
                    <div class="login box" style="margin-top: 50px;">
                        <div class="box-header">
                            <span class="title">Login</span>
                        </div>
                        <div class="box-content padded">

                            <form action="<?php echo site_url('login/verifylogin');?>" method="post" accept-charset="utf-8" class="separate-sections">

                                <?php 
		if($this->session->flashdata('message')){
			?>
                                    <div class="alert alert-danger">
                                        <?php echo $this->session->flashdata('message');?>
                                    </div>
                                    <?php	
		}
		?>


                                        <div style="display:none">
                                            <input type="hidden" name="login_type" value="center" />
                                        </div>
                                        <center>
                                            <div style="height:100px;">
                                                <div id="avatar" class="avatar ">

                                                    <i class="icon-user icon-7x" style="color:#34495E;"></i>
                                                </div>
                                            </div>
                                        </center>
                                        <div class="input-prepend">
                                            <span class="add-on" href="#">
                                        <i class="icon-envelope"></i>
                                        </span>
                                            <input name="email" type="text" placeholder="Email" autocomplete="off" class="validate[required,custom[email]]">
                                        </div>
                                        <div class="input-prepend">
                                            <span class="add-on" href="#">
                                        <i class="icon-key"></i>
                                        </span>
                                            <input name="password" type="password" placeholder="password" autocomplete="off" class="validate[required]">
                                        </div>
                                        <div class="row-fluid">
                                            <!--
                                        <div class="span6">
                                            <a  data-toggle="modal" href="#modal-simple"  class="btn btn-blue btn-block" >
                                                Forgot Password ?                                            </a>
                                        </div>
-->
                                            <div class="span12">
                                                <input type="submit" class="btn btn-gray btn-block " value="login" />
                                            </div>
                                        </div>
                            </form>
                        </div>
                    </div>
                    <hr />
                    <!--
                       <div style="clear:both;color:#aaa; padding:20px;">
	<center>&copy; 2017  <a href="#" target="_blank"></a></center>
	<center></center>
</div>                      </div>
-->
                </div>
            </div>
        </div>
        <div id="modal-simple" class="modal hide fade" style="top:30%;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h6 id="modal-tablesLabel">Forgot password</h6>
            </div>
            <div class="modal-body" style="padding:20px;">
                <form action="forgetpassword_mail.php" method="post" accept-charset="utf-8">
                    <div class="input-prepend">
                        <span class="add-on" href="#">
				<i class="icon-envelope"></i>
				</span>
                        <input name="email" type="text" placeholder="Email" autocomplete="off" class="validate[required,custom[email]]">
                    </div>
                    <input type="submit" value="Send Mail" class="btn btn-blue btn-medium" />
                </form>
            </div>
            <div class="model-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
</body>

</html>
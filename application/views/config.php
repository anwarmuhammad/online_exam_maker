<div class="container-fluid" style="text-align:center">
    <div class="row-fluid">
        <div class="area-top clearfix">
            <div class="pull-left header">
                <h3 class="title">
                        <i class="icon-edit"></i>
                        Manage Settings </h3>
            </div>

        </div>
    </div>






    <div class="container-fluid padded">


        <form class="form-signin" method="post" action="<?php echo site_url('dashboard/config');?>">
            <h4><?php echo $this->lang->line('config');?></h4>
            <br>

            <?php echo $this->lang->line('config_warning');?>

                <br>
                <div class="form-group">
                    <textarea name="config_val" style="width:800px;height:500px;">
                        <?php echo $result;?>
                    </textarea>


                </div>
                <div class="form-group">

                    <button class="btn btn-primary" type="submit">
                        <?php echo $this->lang->line('submit');?>
                    </button>
                </div>


        </form>
    </div>




</div>

<br>
<br>
</div>
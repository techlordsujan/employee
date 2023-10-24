<!-- page content -->
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper settingPage">
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class= "box-notification">
        <div id="notification-msg" class="notification-msg">
          <?php if(count($session->getFlashdata())>0){; ?>
             <div class="alert alert-<?php echo $session->getFlashdata('type');?>" role="alert"><?php echo $session->getFlashdata('msg');?></div><a href="#" onClick="javascript:document.getElementById('notification-msg').style.display = 'none'" class="close"></a>
          <?php }?>
        </div>        
        </div> 
        <div class="box box-success">
            <div class="box-header with-border">
            <h3 class="box-title">Dashboard </h3>
            </div>
                <div class="box-body">
                <div class="row">
                    <div class="col-lg-12">
                    <div class="col-md-12 col-md-offset-1 aboutshift">



        
                Lorem Ipsum is .... Lorem Ipsum.

            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

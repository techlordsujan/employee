<!-- page content -->
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper settingPage">
    <!-- Main content -->
    <section class="content">
    <div class= "box-notification">
        <div id="notification-msg" class="notification-msg">
          <?php if(count($session->getFlashdata())>0){; ?>
             <div class="alert alert-<?php echo $session->getFlashdata('type');?>" role="alert"><?php echo $session->getFlashdata('msg');?></div><a href="#" onClick="javascript:document.getElementById('notification-msg').style.display = 'none'" class="close"></a>
          <?php }?>
        </div>        
       </div> 
      <!-- Default box -->
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Dashboard </h3>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-lg-12">
              <div class="col-md-12 col-md-offset-1 aboutshift">
              
              <?php //print_r($session_data);?>                
                        <div class="container py-5">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="card mb-4">
                                        <div class="card-body text-center">                                            
                                            <?php $profile_pic =  ($session_data['avatar']?$session_data['avatar']:'avatar.jpg');
                                            if(!file_exists(WRITEPATH . 'uploads/avatar/' . $profile_pic))
                                            {
                                               $profile_pic = 'avatar.jpg';
                                            }
                                            ?>                                            
                                            <img src="<?php echo '/resource/avatar/'.$profile_pic;?>" alt="avatar"
                                            class="rounded-circle img-fluid" style="width: 150px;">
                                            <h5 class="my-3"><?php echo $session_data['staff_name']?></h5>                                  
                                            <div class="d-flex justify-content-center mb-2">
                                            </div>
                                            <a href="#"><span class="pencil glyphicon glyphicon-pencil modalButtonUploadImage" onclick="#" ></span></a>
                                        </div>
                                        
                                    </div>                                
                                </div>
                                <div class="col-lg-6">
                                    <div class="card mb-12">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <p class="mb-0">Full Name</p>
                                                </div>
                                                <div class="col-sm-7">
                                                    <p class="text-muted mb-0"><?php echo $session_data['staff_name']?></p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <p class="mb-0">Position</p>
                                                </div>
                                                <div class="col-sm-7">
                                                    <p class="text-muted mb-0"><?php echo $session_data['position']?></p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <p class="mb-0">Email</p>
                                                </div>
                                                <div class="col-sm-7">
                                                    <p class="text-muted mb-0"><?php echo $session_data['email']?></p>
                                                </div>
                                            </div>                                                                        
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <p class="mb-0">Mobile</p>
                                                </div>
                                                <div class="col-sm-7">
                                                    <p class="text-muted mb-0"><?php echo $session_data['phone']?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                            
                            </div>
                            
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="card mb-4 mb-md-0">
                                    <div class="card-body">
                                        <p class="mb-4"><span class="text-primary font-italic me-1"> KYE Status</span>
                                        </p>
                                        <p class="mb-1" style="font-size: .77rem;"><?php echo round($precentage,2);?>%</p>
                                        <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: <?php echo round($precentage,2);?>%" aria-valuenow="80"
                                            aria-valuemin="0" aria-valuemax="100"></div>
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
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- Modal Crud Start-->
<div class="modal fade" id="nameModal_Photo" role="dialog">
  <div class="modal-dialog">
    <div class="box box-primary popup" >
      <div class="box-header with-border formsize">
        <h3 class="box-title">Upload Image</h3>
          <button type="button" class="close" data-dismiss="modal"  aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>
      <!-- /.box-header -->
      <div class="modal-body" style="padding: 0px 0px 0px 0px;"></div>
    </div>
  </div>
</div><!--End Modal Crud --> 
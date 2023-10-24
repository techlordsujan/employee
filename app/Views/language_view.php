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
          <h3 class="box-title"><?php echo $title;?> </h3>           
        </div>
        
        <div class="box-body">
          <div class="row">
            <div class="col-lg-12">
              <div class="col-md-12 col-md-offset-1 aboutshift">
              
              <?php //print_r($session_data);?>                
                        <div class="container py-5">
                            <div class="row">
                                
                                <div class="col-lg-6">
                                    <div class="card mb-12">
                                        <div class="card-body">
                                        <form class="needs-validation novalidate" action="<?php echo base_url().'language/update'; ?>" method="post">
                                        <div class="row">
                                                <div class="col-sm-2">
                                                    <div class="mb-0"></div>
                                                </div>
                                                <div class="col-sm-10">
                                                    <p class="text-muted mb-0"><div class="col-lg-3">Read</div> <div class="col-lg-3">Write</div> <div class="col-lg-3">Speak</div> <div class="col-lg-3">Understand</div></p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <p class="mb-0">Nepali</p>
                                                </div>
                                                <div class="col-sm-10">
                                                    <input type="hidden" value="<?php echo (isset($staff_data->n_id) && $staff_data->n_id>0 ?$staff_data->n_id:'0');?>" name="n_id">
                                                    
                                                        <div class="col-lg-3"><input class="form-check-input" type="checkbox" value="1" id="n_read_p" name="n_read_p" <?php echo (isset($staff_data->n_read_p)&&$staff_data->n_read_p==1?'checked':'');?>/></div> 
                                                        <div class="col-lg-3"><input class="form-check-input" type="checkbox" value="1" id="n_write_p" name="n_write_p" <?php echo (isset($staff_data->n_write_p)&&$staff_data->n_write_p==1?'checked':'');?>/></div> 
                                                        <div class="col-lg-3"><input class="form-check-input" type="checkbox" value="1" id="n_speak_p" name="n_speak_p" <?php echo (isset($staff_data->n_speak_p)&&$staff_data->n_speak_p==1?'checked':'');?>/></div> 
                                                        <div class="col-lg-3"><input class="form-check-input" type="checkbox" value="1" id="n_understand_p" name="n_understand_p" <?php echo (isset($staff_data->n_understand_p)&&$staff_data->n_understand_p==1?'checked':'');?>/></div>
                                                    
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <p class="mb-0">English</p>
                                                </div>
                                                <div class="col-sm-10">                                               
                                                    
                                                        <div class="col-lg-3"><input class="form-check-input" type="checkbox" value="1" id="n_read_i" name="n_read_i" <?php echo (isset($staff_data->n_read_i)&&$staff_data->n_read_i==1?'checked':'');?>/></div> 
                                                        <div class="col-lg-3"><input class="form-check-input" type="checkbox" value="1" id="n_write_i" name="n_write_i" <?php echo (isset($staff_data->n_write_i)&&$staff_data->n_write_i==1?'checked':'');?>/></div> 
                                                        <div class="col-lg-3"><input class="form-check-input" type="checkbox" value="1" id="n_speak_i" name="n_speak_i" <?php echo (isset($staff_data->n_speak_i)&&$staff_data->n_speak_i==1?'checked':'');?>/></div> 
                                                        <div class="col-lg-3"><input class="form-check-input" type="checkbox" value="1" id="n_understand_i" name="n_understand_i" <?php echo (isset($staff_data->n_understand_i)&&$staff_data->n_understand_i==1?'checked':'');?>/></div>
                                                    
                                                </div>
                                            </div>   
                                            <hr> 
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    
                                                </div>
                                                <div class="col-sm-4">
                                                    <p class="mb-0">
                                                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                                                    </p>
                                                </div>
                                            </div>                                                                                        
                                        </div>
                                    </form>
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
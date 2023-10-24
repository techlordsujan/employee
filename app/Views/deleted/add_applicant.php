<form role="form bor-rad" enctype="multipart/form-data" action="<?php echo base_url().'index.php/'.'candidates/add_edit'?>" method="post">
  <div class="box-body">
    <div class="row">
          
						<div class="col-md-6">
				          <div class="form-group">
				            <label for="status"> Status</label>
				            <select name="status" id="status" class="form-control">
		        			<option value="1" <?php echo (isset($userData->status) && $userData->status == '1')?'selected':''; ?> >Active</option>
		        			
		        			<option value="0" <?php echo (isset($userData->status) && $userData->status == '0')?'selected':''; ?> >Deleted</option>
		        			
				            </select>
				          </div>
				        </div>
					
						<div class="col-md-6">
						  <div class="form-group">
						    <label for="">Name</label>
						    <input type="text" name="applicant_name" value="<?php echo isset($userData->applicant_name)?$userData->applicant_name:'';?>" class="form-control" placeholder="Name">
						  </div>
						</div>
					
						<div class="col-md-6">
						  <div class="form-group">
						    <label for="">Voting Reference</label>
						    <select name="app_session" id="app_session" class="form-control validate[required]" >  
                    <option value="">Please Select</option>                
                    <?php             
                    foreach($masters as $master){?>
                      <option value="<?php echo $master->id;?>" <?php echo (($master->id==(isset($userData->app_session)?$userData->app_session:''))?"selected":"");?>><?php echo $master->vacancy_ref_no;?></option>
                    <?php }?>
                </select>
						  </div>
						</div>
					
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Position</label>
              <select name="app_position" id="app_position" class="form-control validate[required]" >  
                    <option value="">Please Select</option>                
                    <?php             
                    foreach($positions as $position){?>
                      <option value="<?php echo $position->id;?>" <?php echo (($position->id==(isset($userData->app_position)?$userData->app_position:''))?"selected":"");?>><?php echo $position->position;?></option>
                    <?php }?>
              </select>
              
            </div> 
          </div>
          
          <div class="col-md-12"> 
            <div class="form-group imsize">
              <label for="exampleInputFile">Image Upload</label>
              <div class="pic_size" id="image-holder"> 
                <?php if(isset($userData->app_avatar) && file_exists('assets/images/'.$userData->app_avatar)){ 
                  $profile_pic = $userData->app_avatar;
                }else{ 
                  $profile_pic = 'user.png'; 
                } ?> 
                <left> <img class="thumb-image setpropileam" src="<?php echo base_url();?>/assets/images/<?php echo $profile_pic;?>" alt="User profile picture"></left>
              </div> <input type="file" name="app_avatar" id="app_avatar">
            </div>
          </div>                
        </div>
        <?php if(!empty($userData->id)){?>
        <input type="hidden"  name="id" value="<?php echo isset($userData->id)?$userData->id:'';?>">
        <input type="hidden" name="app_avatar_name" value="<?php echo isset($userData->app_avatar)?$userData->app_avatar:'';?>">
        <div class="box-footer sub-btn-wdt">
          <button type="submit" name="edit" value="edit" class="btn btn-success wdt-bg">Update</button>
        </div>
              <!-- /.box-body -->
        <?php }else{?>
        <div class="box-footer sub-btn-wdt">
          <button type="submit" name="submit" value="add" class="btn btn-success wdt-bg">Add</button>
        </div>
        <?php }?>
      </form>
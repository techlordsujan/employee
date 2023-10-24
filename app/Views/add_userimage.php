<form role="form bor-rad" enctype="multipart/form-data" action="<?php echo base_url().'user/updateimage'?>" method="post">
  <div class="box-body">
    <div class="row">          
			<div class="col-md-6">
			  <div class="form-group">
                <?php //print_r($staff_data);?>
				<label for="status"> Staff Id</label>
                <input data-validation="required" type="text" name="staff_id" value="<?php echo $session_data['staff_Id'];?>" class="form-control" placeholder="Staff Id" readonly>
				
			  </div>
			</div>			
           
        <div class="col-md-12">
            <div class="form-group">
            <label for="">Select Image</label>
            <input data-validation="required" type="file" name="avatar" value="<?php echo isset($staff_data->avatar)?$staff_data->avatar:'';?>" class="form-control" placeholder="">
            </div>
        </div>   
        
        <div class="box-footer sub-btn-wdt">          
          <button type="submit" value="add" class="btn btn-success wdt-bg">Change Image</button>
        </div>
		</form>
 

      
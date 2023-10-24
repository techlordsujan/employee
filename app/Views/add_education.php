<form role="form bor-rad" enctype="multipart/form-data" action="<?php echo base_url().'education/update'?>" method="post">
  <div class="box-body">
    <div class="row">          
			<div class="col-md-6">
			  <div class="form-group">
                <?php //print_r($staff_data);?>
				<label for="staff_id"> Staff Id</label>
                <input data-validation="required" type="text" name="staff_id" value="<?php echo $session_data['staff_Id'];?>" class="form-control" placeholder="Staff Id" readonly>
				
			  </div>
			</div>		
			<div class="col-md-6">
			  <div class="form-group">
				<label for="">Level</label>
				<select name="Level" class="form-control" required> 
                    <option value="">Select Level</option>    
                    <option value="PHD" <?php echo (isset($staff_data->Level)&&$staff_data->Level=='PHD'?'selected':'')?>>PHD</option>
                    <option value="MASTERS/POST GRADUATE" <?php echo (isset($staff_data->Level)&&$staff_data->Level=='MASTERS/POST GRADUATE'?'selected':'')?>>MASTERS/POST GRADUATE</option>
                    <option value="BACHELOR" <?php echo (isset($staff_data->Level)&&$staff_data->Level=='BACHELOR'?'selected':'')?>>BACHELOR</option>
                    <option value="INTERMEDIATE/+2/DIPLOMA" <?php echo (isset($staff_data->Level)&&$staff_data->Level=='INTERMEDIATE/+2/DIPLOMA'?'selected':'')?>>INTERMEDIATE/+2/DIPLOMA</option>
                    <option value="SEE/SLC" <?php echo (isset($staff_data->Level)&&$staff_data->Level=='SEE/SLC'?'selected':'')?>>SEE/SLC</option>
                </select>
			  </div>
			</div>	
			
          <div class="col-md-12">
			  <div class="form-group">
				<label for="">Degree Name</label>
				<input data-validation="required" type="text" name="degree_name" value="<?php echo isset($staff_data->degree_name)?$staff_data->degree_name:'';?>" class="form-control" placeholder="Degree name">
			  </div>
			</div>
					
          <div class="col-md-12">
            <div class="form-group">
            <label for="">School Name/University</label>
				<input data-validation="required" type="text" name="school_name_address" value="<?php echo isset($staff_data->school_name_address)?$staff_data->school_name_address:'';?>" class="form-control" placeholder="School Name/University">
            </div> 
          </div>
          <div class="col-md-6">
			  <div class="form-group">
				<label for="">Started year</label>
				<input data-validation="required" type="text" name="from_year" value="<?php echo isset($staff_data->from_year)?$staff_data->from_year:'';?>" class="form-control" placeholder="Started year">
			  </div>
			</div>
					
          <div class="col-md-6">
            <div class="form-group">
            <label for="">Completed year</label>
				<input data-validation="required" type="text" name="to_year" value="<?php echo isset($staff_data->to_year)?$staff_data->to_year:'';?>" class="form-control" placeholder="Completed year">
            </div> 
          </div>
          <div class="col-md-6">
			  <div class="form-group">
				<label for="">Marks</label>
				<input data-validation="required" type="text" name="marks" value="<?php echo isset($staff_data->marks)?$staff_data->marks:'';?>" class="form-control" placeholder="Percentage/CGPA">
			  </div>
			</div>
					
          <div class="col-md-6">
            <div class="form-group">
            <label for="">Division</label>
				<input data-validation="required" type="text" name="division" value="<?php echo isset($staff_data->division)?$staff_data->division:'';?>" class="form-control" placeholder="">
            </div> 
          </div>
		  <div class="col-md-12">
			  <div class="form-group">
				<label for="">Specialization</label>
				<input data-validation="required" type="text" name="specialization" value="<?php echo isset($staff_data->specialization)?$staff_data->specialization:'';?>" class="form-control" placeholder="Specialization">
			  </div>
			</div>

			<div class="col-md-12">
            <div class="form-group">
            <label for="">Upload Transacript (only supports jpg/jpeg/png/pdf of miximum limit 2 MB) </label>
            <input data-validation="required" type="file" name="transcript" class="form-control" placeholder="">
			<label><?php echo isset($staff_data->transcript)&&$staff_data->transcript!=""?"( View uploaded file : <a href='/resource/document/".$staff_data->transcript."' target='_blank'>".$staff_data->transcript."</a> )":'';?></label>
            </div>
        </div> 
		        
        <?php if(empty($staff_data->edu_id)){?>
        <div class="box-footer sub-btn-wdt">
          <input type="hidden"  name="edu_id" value="0">
          <button type="submit" value="add" class="btn btn-success wdt-bg">Add</button>
        </div>
		</form>
        <?php }else{?>
		<input type="hidden"  name="edu_id" value="<?php echo $staff_data->edu_id; ?>">        
		<div>
        <div class="box-footer sub-btn-wdt" style="float:left;">
          <button type="submit" value="edit" class="btn btn-success wdt-bg">Update</button>		  
        </div>
		</form>		
		<form role="form bor-rad" enctype="multipart/form-data" action="<?php //echo base_url().'index.php/'.'Merchant/reset_password'?>" method="post">
        <!-- /.box-body -->			
		<div class="box-footer sub-btn-wdt" style="float:left;">  
		  <input type="hidden" name="<?php //echo $this->security->get_csrf_token_name();?>" value="<?php //echo $this->security->get_csrf_hash();?>">
        </div>
		</form>
		</div>  			
   <?php }?>

      
<form role="form bor-rad" enctype="multipart/form-data" action="<?php echo base_url().'family/update'?>" method="post">
  <div class="box-body">
    <div class="row">          
				
			<div class="col-md-12">
			  <div class="form-group">
				<label for="">Relation</label>
				<input data-validation="required" type="hidden" name="staff_id" value="<?php echo $session_data['staff_Id'];?>" class="form-control" placeholder="Staff Id" readonly>				
				<select name="relation" class="form-control" required> 
                    <option value="">Select Relation</option>    
                    <option value="GRAND FATHER" <?php echo (isset($staff_data->relation)&&$staff_data->relation=='GRAND FATHER'?'selected':'')?>>GRAND FATHER</option>
                    <option value="FATHER" <?php echo (isset($staff_data->relation)&&$staff_data->relation=='FATHER'?'selected':'')?>>FATHER</option>
                    <option value="MOTHER" <?php echo (isset($staff_data->relation)&&$staff_data->relation=='MOTHER'?'selected':'')?>>MOTHER</option>
                    <option value="SPOUSE" <?php echo (isset($staff_data->relation)&&$staff_data->relation=='SPOUSE'?'selected':'')?>>SPOUSE</option>
                    <option value="SON" <?php echo (isset($staff_data->relation)&&$staff_data->relation=='SON'?'selected':'')?>>SON</option>
                    <option value="DAUGHTER" <?php echo (isset($staff_data->relation)&&$staff_data->relation=='DAUGHTER'?'selected':'')?>>DAUGHTER</option>
                    <option value="BROTHER" <?php echo (isset($staff_data->relation)&&$staff_data->relation=='BROTHER'?'selected':'')?>>BROTHER</option>
                    <option value="SISTER" <?php echo (isset($staff_data->relation)&&$staff_data->relation=='SISTER'?'selected':'')?>>SISTER</option>
                    <option value="FATHER-IN-LAW" <?php echo (isset($staff_data->relation)&&$staff_data->relation=='FATHER-IN-LAW'?'selected':'')?>>FATHER-IN-LAW</option>
                    <option value="MOTHER-IN-LAW" <?php echo (isset($staff_data->relation)&&$staff_data->relation=='MOTHER-IN-LAW'?'selected':'')?>>MOTHER-IN-LAW</option>
                </select>
			  </div>
			</div>	
			
          <div class="col-md-4">
			  <div class="form-group">
				<label for="">First Name</label>
				<input data-validation="required" type="text" name="firstname" value="<?php echo isset($staff_data->firstname)?$staff_data->firstname:'';?>" class="form-control" placeholder="First name" required>
			  </div>
			</div>
					
          <div class="col-md-4">
            <div class="form-group">
            <label for="">Middle Name</label>
				<input data-validation="required" type="text" name="midname" value="<?php echo isset($staff_data->midname)?$staff_data->midname:'';?>" class="form-control" placeholder="Middle name" >
            </div> 
          </div>
          <div class="col-md-4">
			  <div class="form-group">
				<label for="">Last Name</label>
				<input data-validation="required" type="text" name="lastname" value="<?php echo isset($staff_data->lastname)?$staff_data->lastname:'';?>" class="form-control" placeholder="Last name" required>
			  </div>
		  </div>
          <div class="col-md-4">
			  <div class="form-group">
				<label for="">First Name(in Nepali)</label>
				<input data-validation="required" type="text" name="n_fname" value="<?php echo isset($staff_data->n_fname)?$staff_data->n_fname:'';?>" class="form-control" placeholder="">
			  </div>
			</div>
					
          <div class="col-md-4">
            <div class="form-group">
            <label for="">Middle Name</label>
				<input data-validation="required" type="text" name="n_midname" value="<?php echo isset($staff_data->n_midname)?$staff_data->n_midname:'';?>" class="form-control" placeholder="">
            </div> 
          </div>
          <div class="col-md-4">
			  <div class="form-group">
				<label for="">Last Name</label>
				<input data-validation="required" type="text" name="n_lastname" value="<?php echo isset($staff_data->n_lastname)?$staff_data->n_lastname:'';?>" class="form-control" placeholder="">
			  </div>
		  </div>
					
          <div class="col-md-6">
            <div class="form-group">
            <label for="">DOB (AD)</label>
				<input data-validation="required" type="text" name="e_dob" value="<?php echo isset($staff_data->e_dob)?$staff_data->e_dob:'';?>" class="form-control" placeholder="YYYY-MM-DD" >
            </div> 
          </div>
          <div class="col-md-6">
			  <div class="form-group">
				<label for="">DOB (BS)</label>
				<input data-validation="required" type="text" name="n_dob" value="<?php echo isset($staff_data->n_dob)?$staff_data->n_dob:'';?>" class="form-control" placeholder="YYYY-MM-DD">
			  </div>
			</div>
					
            <div class="col-md-4">
			  <div class="form-group">
				<label for="">Citizenship No.</label>
				<input data-validation="required" type="text" name="ctzn_no" value="<?php echo isset($staff_data->ctzn_no)?$staff_data->ctzn_no:'';?>" class="form-control" placeholder="">
			  </div>
			</div>
					
          <div class="col-md-4">
            <div class="form-group">
            <label for="">Issued date (BS)</label>
				<input data-validation="required" type="text" name="ctzn_date" value="<?php echo isset($staff_data->ctzn_date)?$staff_data->ctzn_date:'';?>" class="form-control" placeholder="">
            </div> 
          </div>
          <div class="col-md-4">
			  <div class="form-group">
				<label for="">Issued place</label>
				<input data-validation="required" type="text" name="ctzn_place" value="<?php echo isset($staff_data->ctzn_place)?$staff_data->ctzn_place:'';?>" class="form-control" placeholder="">
			  </div>
		  </div>

		  <div class="col-md-6">
			  <div class="form-group">
				<label for="">Occupation</label>
				<input data-validation="required" type="text" name="occupation" value="<?php echo isset($staff_data->occupation)?$staff_data->occupation:'';?>" class="form-control" placeholder="">
			  </div>
			</div>
		    

			<div class="col-md-6">
			  <div class="form-group">
				<label for="">Staff Id (if works in HBL)</label>
				<input data-validation="required" type="text" name="hbl_id" value="<?php echo isset($staff_data->hbl_id)?$staff_data->hbl_id:'';?>" class="form-control" placeholder="">
			  </div>
			</div>

        <div class="col-md-6">
            <div class="form-group">
            <label for="">Telephone</label>
				<input data-validation="required" type="text" name="telephone" value="<?php echo isset($staff_data->telephone)?$staff_data->telephone:'';?>" class="form-control" placeholder="Telephone">
            </div> 
          </div>
        <div class="col-md-6">
			  <div class="form-group">
				<label for="">Mobile</label>
				<input data-validation="required" type="text" name="mobile" value="<?php echo isset($staff_data->mobile)?$staff_data->mobile:'';?>" class="form-control" placeholder="Mobile">
			  </div>
			</div> 
        <div class="col-md-12">
            <div class="form-group">
            <label for="">Email</label>
            <input data-validation="required" type="text" name="email" value="<?php echo isset($staff_data->email)?$staff_data->email:'';?>" class="form-control" placeholder="Email">
            </div>
        </div>   


        <?php if(empty($staff_data->f_id)){?>
        <div class="box-footer sub-btn-wdt">
          <input type="hidden"  name="f_id" value="0">
          <button type="submit" value="add" class="btn btn-success wdt-bg">Add</button>
        </div>
		</form>
        <?php }else{?>
		<input type="hidden"  name="f_id" value="<?php echo $staff_data->f_id; ?>">        
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

      
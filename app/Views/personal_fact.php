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
                                <?php if(count($staff_data)<1) { //echo 'No records found'; ?>


                                <?php }else {
                                    $staff_data = $staff_data[0];
                                   // print_r($staff_data);
                                }?>
<!-- begining of forms !-->

        <form class="needs-validation novalidate" action="<?php echo base_url().'personalfact/update'; ?>" method="post">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row row-form mb-12">
                <section class="section">
                    <div class="col-lg-4">
                        <div class="form-outline">
                            <input type="text" id="e_firstname" name = "e_firstname" value="<?php echo (isset($staff_data->e_firstname)?$staff_data->e_firstname:'0') ;?>" class="form-control" value="<?php echo (isset($staff_data->e_firstname)?$staff_data->e_firstname:'');?>" autocomplete="off" required />
                            <label class="form-label" for="e_firstname">First name</label>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-outline">
                            <input type="text" id="e_midname" name="e_midname" value="<?php echo (isset($staff_data->e_midname)?$staff_data->e_midname:'0') ;?>" class="form-control" autocomplete="off" required />
                            <label class="form-label" for="e_midname">Middle name</label>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-outline">
                            <input type="text" id="e_lastname" name="e_lastname" value="<?php echo (isset($staff_data->e_lastname)?$staff_data->e_lastname:'0') ;?>" class="form-control" autocomplete="off" required />
                            <label class="form-label" for="e_lastname">Last name</label>
                        </div>
                    </div>
                </section>
            </div>

            <div class="row row-form  mb-12">
                <section class="section">
                    <div class="col-lg-4">
                        <div class="form-outline">
                            <input type="text" id="n_firstname" name = "n_firstname" value="<?php echo (isset($staff_data->n_firstname)?$staff_data->n_firstname:'0') ;?>" class="form-control" autocomplete="off" required />
                            <label class="form-label" for="n_firstname">First name (in Nepali)</label>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-outline">
                            <input type="text" id="n_midname" name="n_midname" value="<?php echo (isset($staff_data->n_midname)?$staff_data->n_midname:'0') ;?>" class="form-control" autocomplete="off" required />
                            <label class="form-label" for="n_midname">Middle name (in Nepali)</label>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-outline">
                            <input type="text" id="n_lastname" name="n_lastname" value="<?php echo (isset($staff_data->n_lastname)?$staff_data->n_lastname:'0') ;?>" class="form-control" autocomplete="off" required />
                            <label class="form-label" for="n_lastname">Last name (in Nepali)</label>
                        </div>
                    </div>
                </section>
            </div>
            <div class="row row-form  mb-12">
                <section class="section">
                    <div class="col-lg-4">
                        <div class="form-outline">
                            <input type="text" id="nationality" name = "nationality" value="<?php echo (isset($staff_data->nationality)?$staff_data->nationality:'0') ;?>" class="form-control" autocomplete="off" required />
                            <label class="form-label" for="nationality">Nationality</label>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-outline">
                            <input type="text" id="e_dob" name="e_dob" class="form-control" value="<?php echo (isset($staff_data->e_dob)?$staff_data->e_dob:'0') ;?>" autocomplete="off" required />
                            <label class="form-label" for="e_dob">Date of Birth (A.D) [YYYY-MM-DD]</label>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-outline">
                            <input type="text" id="n_dob" name="n_dob" class="form-control" value="<?php echo (isset($staff_data->n_dob)?$staff_data->n_dob:'0') ;?>" autocomplete="off" required />
                            <label class="form-label" for="n_dob">Date of Birth (B.S) [YYYY-MM-DD]</label>
                        </div>
                    </div>
                </section>
            </div>
            <div class="row row-form  mb-12">
                <section class="section">
                    <div class="col-lg-4">
                        <div class="form-outline">
                            <select id="gender" name = "gender" class="form-control" autocomplete="off" required >
                                <option value="">Select gender</option>
                                <option <?php echo (isset($staff_data->gender) && $staff_data->gender=='m'?'selected':'') ;?>  value="male">Male</option>
                                <option <?php echo (isset($staff_data->gender) && $staff_data->gender=='f'?'selected':'') ;?> value="female">Female</option>
                                <option <?php echo (isset($staff_data->gender) && $staff_data->gender=='o'?'selected':'') ;?> value="others">Others</option>
                            </select>
                            <label class="form-label" for="gender">Gender</label>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-outline">
                            <input type="text" id="blood_group" name="blood_group" value="<?php echo (isset($staff_data->blood_group)?$staff_data->blood_group:'0') ;?>" class="form-control" autocomplete="off" required />
                            <label class="form-label" for="blood_group">Blood group</label>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-outline">
                            <input type="text" id="height" name="height" value="<?php echo (isset($staff_data->height)?$staff_data->height:'0') ;?>" class="form-control" autocomplete="off" required />
                            <label class="form-label" for="height">Height (in cm)</label>
                        </div>
                    </div>
                </section>
            </div>
            <div class="row row-form  mb-12">
                <section class="section">
                    <div class="col-lg-4">
                        <div class="form-outline">
                            <select id="marital_status" name = "marital_status"  class="form-control" autocomplete="off" required  >
                                <option  value="">Select Marital Status</option>
                                <option <?php echo (isset($staff_data->marital_status) && $staff_data->marital_status=='single'?'selected':'') ;?> value="single">Single</option>
                                <option <?php echo (isset($staff_data->marital_status) && $staff_data->marital_status=='married'?'selected':'') ;?> value="married">Married</option>
                                <option <?php echo (isset($staff_data->marital_status) && $staff_data->marital_status=='separated'?'selected':'') ;?> value="separated">Separated</option>
                                <option <?php echo (isset($staff_data->marital_status) && $staff_data->marital_status=='widow'?'selected':'') ;?> value="widow">Widower</option>
                                <option <?php echo (isset($staff_data->marital_status) && $staff_data->marital_status=='divorced'?'selected':'') ;?> value="divorced">Divorced</option>
                            </select>
                            <label class="form-label" for="marital_status">Marital Status</label>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-outline">
                            <input type="text" id="e_marriage_date" name="e_marriage_date" value="<?php echo (isset($staff_data->e_marriage_date)?$staff_data->e_marriage_date:'0') ;?>" class="form-control" autocomplete="off" />
                            <label class="form-label" for="e_marriage_date">Marriage date (in A.D)</label>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-outline">
                            <input type="text" id="n_marriage_date" name="n_marriage_date" value="<?php echo (isset($staff_data->n_marriage_date)?$staff_data->n_marriage_date:'0') ;?>" class="form-control" autocomplete="off" />
                            <label class="form-label" for="n_marriage_date">Marriage date (in B.S)</label>
                        </div>
                    </div>
                </section>
            </div>


            <div class="row row-form  mb-12">
                <section class="section">
                    <div class="col-lg-6">
                        <div class="form-outline">
                            <input type="text" id="religion" name="religion" value="<?php echo (isset($staff_data->religion)?$staff_data->religion:'0') ;?>" class="form-control" autocomplete="off" />
                            <label class="form-label" for="religion">Religion</label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-outline">
                            <input type="text" id="ethnicity" name="ethnicity" value="<?php echo (isset($staff_data->ethnicity)?$staff_data->ethnicity:'0') ;?>" class="form-control" autocomplete="off"  />
                            <label class="form-label" for="ethnicity">Ethnicity</label>
                        </div>
                    </div>
                </section>
            </div>

            <div class="row row-form  mb-12">
                <section class="section">
                <div class="col-lg-4">
                        <div class="form-outline">
                            <input type="text" id="ctzn_no" name="ctzn_no" value="<?php echo (isset($staff_data->ctzn_no)?$staff_data->ctzn_no:'0') ;?>" class="form-control" autocomplete="off" />
                            <label class="form-label" for="ctzn_no">Citizenship No.</label>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-outline">
                            <input type="text" id="ctzn_date" name="ctzn_date" value="<?php echo (isset($staff_data->ctzn_date)?$staff_data->ctzn_date:'0') ;?>" class="form-control" autocomplete="off" />
                            <label class="form-label" for="ctzn_date">Issued Date</label>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-outline">
                            <input type="text" id="ctzn_place" name="ctzn_place" value="<?php echo (isset($staff_data->ctzn_place)?$staff_data->ctzn_place:'0') ;?>" class="form-control" autocomplete="off" />
                            <label class="form-label" for="ctzn_place">Issued Place</label>
                        </div>
                    </div>
                </section>
            </div>

            <div class="row row-form  mb-12">
                <section class="section">
                <div class="col-lg-4">
                        <div class="form-outline">
                            <input type="text" id="passport_no" name="passport_no" value="<?php echo (isset($staff_data->passport_no)?$staff_data->passport_no:'0') ;?>" class="form-control" autocomplete="off" />
                            <label class="form-label" for="passport_no">Passport No.</label>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-outline">
                            <input type="text" id="passport_date" name="passport_date" value="<?php echo (isset($staff_data->passport_date)?$staff_data->passport_date:'0') ;?>" class="form-control" autocomplete="off"  />
                            <label class="form-label" for="passport_date">Issued Date</label>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-outline">
                            <input type="text" id="passport_place" name="passport_place" value="<?php echo (isset($staff_data->passport_place)?$staff_data->passport_place:'0') ;?>" class="form-control" autocomplete="off" />
                            <label class="form-label" for="passport_place">Issued Place</label>
                        </div>
                    </div>
                </section>
            </div>

            <div class="row row-form  mb-12">
                <section class="section">
                <div class="col-lg-4">
                        <div class="form-outline">
                            <input type="text" id="license_no" name="license_no" value="<?php echo (isset($staff_data->license_no)?$staff_data->license_no:'0') ;?>" class="form-control" autocomplete="off"/>
                            <label class="form-label" for="license_no">License No.</label>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-outline">
                            <input type="text" id="license_date" name="license_date" value="<?php echo (isset($staff_data->license_date)?$staff_data->license_date:'0') ;?>" class="form-control" autocomplete="off" />
                            <label class="form-label" for="license_date">Issued Date</label>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-outline">
                            <input type="text" id="license_place" name="license_place" value="<?php echo (isset($staff_data->license_place)?$staff_data->license_place:'0') ;?>" class="form-control"  autocomplete="off" />
                            <label class="form-label" for="license_place">Issued Place</label>
                        </div>
                    </div>
                </section>
            </div>

            <div class="row row-form  mb-12">
                <section class="section">
                <div class="col-lg-8">                                   
                    <!-- Email input -->
                    <div class="form-outline">
                        <input type="email" id="email" name="email" value="<?php echo (isset($staff_data->email)?$staff_data->email:'0') ;?>" class="form-control" autocomplete="off" required />
                        <label class="form-label" for="email">Email</label>
                    </div>
                </div>                    
                <div class="col-lg-4">    
                     <!-- Number input -->
                    <div class="form-outline mb-">
                        <input type="pan" id="pan" name="pan" class="form-control" value="<?php echo (isset($staff_data->pan)?$staff_data->pan:'0') ;?>" autocomplete="off" required  />
                        <label class="form-label" for="pan">PAN</label>
                    </div>
                </div>
                </section>
            </div>

             <!-- Message input -->
            <div class="form-outline">
                <textarea class="form-control" name ="identity_mark" id="identity_mark"  rows="4" autocomplete="off"><?php echo trim((isset($staff_data->identity_mark)?$staff_data->identity_mark:'0')) ;?></textarea>
                <label class="form-label" for="identity_mark">Identity Mark</label>
            </div>   
            
            <div class="row row-form  mb-12">
                <section class="section">
                <div class="col-lg-8">                                   
                <input type="hidden" id="staff_id" name="staff_id" value="<?php echo (isset($staff_data->staff_id)?$staff_data->staff_id:0) ;?>" class="form-control" />
                <input type="hidden" id="id" name="id" value="<?php echo (isset($staff_data->id)?$staff_data->id:'0') ;?>" class="form-control" />
                </div>                    
                <div class="col-lg-4">    
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                </div>
                </section>
            </div>

            
            </form>
        



<!-- end of froms !-->


                                
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


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
<div class="row form-address box-header with-border" ><div class="col-lg-12"><a class="btn btn-info btn-sm" style="float:right;" data-toggle="collapse" href="#AddressCollapse" role="button" aria-expanded="false" aria-controls="AddressCollapse">Permanent Address</a></div></div>
<div class="form-address collapse in" id="AddressCollapse" aria-expanded="true">
        <form class="needs-validation novalidate" action="<?php echo base_url().'address/update'; ?>" method="post">
            
            <div class="row row-form  mb-12">
                <section class="section">
                    <div class="col-lg-4">
                        <div class="form-outline">
                            <select id="region" name = "region" class="form-control" autocomplete="off" required >
                                <option value="">Select Region</option>
                                <option <?php echo (isset($staff_data->region) && $staff_data->region=='himal'?'selected':'') ;?>  value="himal">Himal</option>
                                <option <?php echo (isset($staff_data->region) && $staff_data->region=='pahad'?'selected':'') ;?> value="pahad">Pahad</option>
                                <option <?php echo (isset($staff_data->region) && $staff_data->region=='tarai'?'selected':'') ;?> value="tarai">Tarai</option>
                            </select>
                            <label class="form-label" for="region">Region</label>
                        </div>                    
                    </div>
                    <div class="col-lg-4">
                    <div class="form-outline">
                            <?php ?>
                            <select id="state" name = "state" class="form-control changePermanentDistrict" autocomplete="off" required >
                                <option value="">Select State</option>
                                <option <?php echo (isset($staff_data->state) && $staff_data->state=='koshi'?'selected':'') ;?>  value="koshi">Koshi</option>
                                <option <?php echo (isset($staff_data->state) && $staff_data->state=='maddhesh'?'selected':'') ;?> value="maddhesh">Madhesh</option>
                                <option <?php echo (isset($staff_data->state) && $staff_data->state=='bagmati'?'selected':'') ;?> value="bagmati">Bagmati</option>
                                <option <?php echo (isset($staff_data->state) && $staff_data->state=='gandaki'?'selected':'') ;?> value="gandaki">Gandaki</option>
                                <option <?php echo (isset($staff_data->state) && $staff_data->state=='lumbini'?'selected':'') ;?> value="lumbini">Lumbini</option>
                                <option <?php echo (isset($staff_data->state) && $staff_data->state=='karnali'?'selected':'') ;?> value="karnali">Karnali</option>
                                <option <?php echo (isset($staff_data->state) && $staff_data->state=='sudurpaschim'?'selected':'') ;?> value="sudurpaschim">Sudurpashchim</option>
                            </select>
                            <label class="form-label" for="region">State</label>
                        </div>  
                    </div>
                    <div class="col-lg-4">
                        <div class="form-outline">
                            <div class="permanent_district">
                            <?php   
                                $state_selected = (isset($staff_data->state)?$staff_data->state:'NA');
                                $district_selected = (isset($staff_data->district)?$staff_data->district:'NA');
                                $controller->getdistrict($state_selected,$district_selected);
                            ?>
                            </div>
                            <!--input type="text" id="district" name="district" class="form-control" value="<?php echo (isset($staff_data->district)?$staff_data->district:'') ;?>" autocomplete="off" required /-->
                            <label class="form-label" for="district">District</label>
                        </div>
                    </div>
                </section>
            </div>
            <div class="row row-form  mb-12">
                <section class="section">
                    <div class="col-lg-4">
                        <div class="form-outline">
                        <input type="text" id="local_body" name="local_body" value="<?php echo (isset($staff_data->local_body)?$staff_data->local_body:'') ;?>" class="form-control" autocomplete="off" required />
                            <label class="form-label" for="local_body">VDC/MUNC</label>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-outline">
                            <input type="text" id="ward_no" name="ward_no" value="<?php echo (isset($staff_data->ward_no)?$staff_data->ward_no:'') ;?>" class="form-control" autocomplete="off" required />
                            <label class="form-label" for="ward_no">Ward no.</label>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-outline">
                            <input type="text" id="locality" name="locality" value="<?php echo (isset($staff_data->locality)?$staff_data->locality:'') ;?>" class="form-control" autocomplete="off" required />
                            <label class="form-label" for="locality">Locality</label>
                        </div>
                    </div>
                </section>
            </div>
            <div class="row row-form  mb-12">
                <section class="section">
                    <div class="col-lg-4">
                        <div class="form-outline">
                        <input type="text" id="house_no" name="house_no" value="<?php echo (isset($staff_data->house_no)?$staff_data->house_no:'') ;?>" class="form-control" autocomplete="off" required />
                            <label class="form-label" for="house_no">House no.</label>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-outline">
                            <input type="text" id="telephone_no" name="telephone_no" value="<?php echo (isset($staff_data->telephone_no)?$staff_data->telephone_no:'') ;?>" class="form-control" autocomplete="off" />
                            <label class="form-label" for="telephone_no">Tel no.</label>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-outline">
                            <input type="text" id="mobile" name="mobile" value="<?php echo (isset($staff_data->mobile)?$staff_data->mobile:'') ;?>" class="form-control" autocomplete="off" />
                            <label class="form-label" for="mobile">Mob no.</label>
                        </div>
                    </div>
                </section>
            </div>
            <!-- Message input -->
            <div class="row row-form  mb-12">
            <div class="col-lg-4">
            <div class="form-outline">
                <input type="text" id="map_loc" name="map_loc" value="<?php echo (isset($staff_data->map_loc)?$staff_data->map_loc:'') ;?>" class="form-control" />                
                <label class="form-label" for="map_loc">Geo Location (Latitude,Longitude)</label>
            </div>   
            </div>
            <div class="col-lg-4">
            <div class="form-outline">
                               
            </div>   
            </div>
            </div>
             <!-- Message input -->
            <div class="form-outline">   
           <?php $map_url ="https://maps.google.com/maps?q=".(isset($staff_data->map_loc)?$staff_data->map_loc:'27.708738017154108, 85.31960746822163')."&t=&z=18&ie=UTF8&iwloc=&output=embed";?>             
            <div class="mapouter"><div class="gmap_canvas"><iframe width="1000" height="510" id="gmap_canvas" src="<?php echo $map_url;?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co">2yu</a><br><style>.mapouter{position:relative;text-align:right;height:510px;width:1000px;}</style><a href="https://embedgooglemap.2yu.co">html embed google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:510px;width:1000px;}</style></div></div>
                <label class="form-label" for="identity_mark">Google Map</label>
            </div>   
            
            <div class="row row-form  mb-12">
                <section class="section">
                <div class="col-lg-8">                                   
                <input type="hidden" id="staff_id" name="staff_id" value="<?php echo (isset($staff_data->staff_id)?$staff_data->staff_id:0) ;?>" class="form-control" />
                <input type="hidden" id="id" name="id" value="<?php echo (isset($staff_data->id)?$staff_data->id:'0') ;?>" class="form-control" />
                </div>                    
                <div class="col-lg-4">    
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block">Update Permanent Address</button>
                </div>
                </section>
            </div>            
            </form> 
        </div>  



<!-- end of froms !-->
<div class="row form-address box-header with-border"><div class="col-lg-12"><a class="btn btn-info btn-sm" data-toggle="collapse" style="float:right;" href="#tempAddressCollapse" role="button" aria-expanded="false" aria-controls="tempAddressCollapse">Temporary Address</a></div></div>
        <div class="form-address collapse" id="tempAddressCollapse">
        <?php if(count($staff_temp_data)<1) { //echo 'No records found'; ?>


        <?php }else {
                  $staff_temp_data = $staff_temp_data[0];
                  // print_r($staff_data);
        }?>
<!-- begning of temporary form -->
        <form class="needs-validation novalidate" action="<?php echo base_url().'address/temp_update'; ?>" method="post">
            
            <div class="row row-form  mb-12">
                <section class="section">
                    <div class="col-lg-4">
                        <div class="form-outline">
                            <select id="region" name = "region" class="form-control" autocomplete="off" required >
                                <option value="">Select Region</option>
                                <option <?php echo (isset($staff_temp_data->region) && $staff_temp_data->region=='himal'?'selected':'') ;?>  value="himal">Himal</option>
                                <option <?php echo (isset($staff_temp_data->region) && $staff_temp_data->region=='pahad'?'selected':'') ;?> value="pahad">Pahad</option>
                                <option <?php echo (isset($staff_temp_data->region) && $staff_temp_data->region=='tarai'?'selected':'') ;?> value="tarai">Tarai</option>
                            </select>
                            <label class="form-label" for="region">Region</label>
                        </div>                    
                    </div>
                    <div class="col-lg-4">
                    <div class="form-outline">
                            <div class="temp_state">
                            <select id="state" name = "state"  class="form-control changeTempDistrict" autocomplete="off" required >
                                <option value="">Select State</option>
                                <option <?php echo (isset($staff_temp_data->state) && $staff_temp_data->state=='koshi'?'selected':'') ;?>  value="koshi">Koshi</option>
                                <option <?php echo (isset($staff_temp_data->state) && $staff_temp_data->state=='maddhesh'?'selected':'') ;?> value="maddhesh">Madhesh</option>
                                <option <?php echo (isset($staff_temp_data->state) && $staff_temp_data->state=='bagmati'?'selected':'') ;?> value="bagmati">Bagmati</option>
                                <option <?php echo (isset($staff_temp_data->state) && $staff_temp_data->state=='gandaki'?'selected':'') ;?> value="gandaki">Gandaki</option>
                                <option <?php echo (isset($staff_temp_data->state) && $staff_temp_data->state=='lumbini'?'selected':'') ;?> value="lumbini">Lumbini</option>
                                <option <?php echo (isset($staff_temp_data->state) && $staff_temp_data->state=='karnali'?'selected':'') ;?> value="karnali">Karnali</option>
                                <option <?php echo (isset($staff_temp_data->state) && $staff_temp_data->state=='sudurpaschim'?'selected':'') ;?> value="sudurpaschim">Sudurpashchim</option>
                            </select>
                            </div>
                            <label class="form-label" for="region">State</label>
                        </div>  
                    </div>
                    <div class="col-lg-4">
                        <div class="form-outline">
                            <div class="temp_district">
                                <?php   
                                    $state_selected = (isset($staff_temp_data->state)?$staff_temp_data->state:'NA');
                                    $district_selected = (isset($staff_temp_data->district)?$staff_temp_data->district:'NA');
                                    $controller->getdistrict($state_selected,$district_selected);
                                ?>  
                            </div>  
                            <!--input type="text" id="district" name="district" class="form-control" value="<?php echo (isset($staff_temp_data->district)?$staff_temp_data->district:'') ;?>" autocomplete="off" required /-->
                            <label class="form-label" for="district">District</label>
                        </div>
                    </div>
                </section>
            </div>
            <div class="row row-form  mb-12">
                <section class="section">
                    <div class="col-lg-4">
                        <div class="form-outline">
                        <input type="text" id="local_body" name="local_body" value="<?php echo (isset($staff_temp_data->local_body)?$staff_temp_data->local_body:'') ;?>" class="form-control" autocomplete="off" required />
                            <label class="form-label" for="local_body">VDC/MUNC</label>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-outline">
                            <input type="text" id="ward_no" name="ward_no" value="<?php echo (isset($staff_temp_data->ward_no)?$staff_temp_data->ward_no:'') ;?>" class="form-control" autocomplete="off" required />
                            <label class="form-label" for="ward_no">Ward no.</label>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-outline">
                            <input type="text" id="locality" name="locality" value="<?php echo (isset($staff_temp_data->locality)?$staff_temp_data->locality:'') ;?>" class="form-control" autocomplete="off" required />
                            <label class="form-label" for="locality">Locality</label>
                        </div>
                    </div>
                </section>
            </div>
            <div class="row row-form  mb-12">
                <section class="section">
                    <div class="col-lg-4">
                        <div class="form-outline">
                        <input type="text" id="house_no" name="house_no" value="<?php echo (isset($staff_temp_data->house_no)?$staff_temp_data->house_no:'') ;?>" class="form-control" autocomplete="off" required />
                            <label class="form-label" for="house_no">House no.</label>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-outline">
                            <input type="text" id="telephone_no" name="telephone_no" value="<?php echo (isset($staff_temp_data->telephone_no)?$staff_temp_data->telephone_no:'') ;?>" class="form-control" autocomplete="off" />
                            <label class="form-label" for="telephone_no">Tel no.</label>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-outline">
                            <input type="text" id="mobile" name="mobile" value="<?php echo (isset($staff_temp_data->mobile)?$staff_temp_data->mobile:'') ;?>" class="form-control" autocomplete="off" />
                            <label class="form-label" for="mobile">Mob no.</label>
                        </div>
                    </div>
                </section>
            </div>
            <!-- Message input -->
            <div class="row row-form  mb-12">
            <div class="col-lg-4">
            <div class="form-outline">
                <input type="text" id="map_loc" name="map_loc" value="<?php echo (isset($staff_temp_data->map_loc)?$staff_temp_data->map_loc:'') ;?>" class="form-control" />                
                <label class="form-label" for="map_loc">Geo Location (Latitude,Longitude)</label>
            </div>   
            </div>
            <div class="col-lg-4">
            <div class="form-outline">               
                
            </div>   
            </div>
            </div>
             <!-- Message input -->
            <div class="form-outline">   
           <?php $map_url ="https://maps.google.com/maps?q=".(isset($staff_temp_data->map_loc)?$staff_temp_data->map_loc:'27.708738017154108, 85.31960746822163')."&t=&z=18&ie=UTF8&iwloc=&output=embed";?>             
            <div class="mapouter"><div class="gmap_canvas"><iframe width="1000" height="510" id="gmap_canvas" src="<?php echo $map_url;?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co">2yu</a><br><style>.mapouter{position:relative;text-align:right;height:510px;width:1000px;}</style><a href="https://embedgooglemap.2yu.co">html embed google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:510px;width:1000px;}</style></div></div>
                <label class="form-label" for="identity_mark">Google Map</label>
            </div>   
            
            <div class="row row-form  mb-12">
                <section class="section">
                <div class="col-lg-8">                                   
                <input type="hidden" id="staff_id" name="staff_id" value="<?php echo (isset($staff_temp_data->staff_id)?$staff_temp_data->staff_id:0) ;?>" class="form-control" />
                <input type="hidden" id="id" name="id" value="<?php echo (isset($staff_temp_data->id)?$staff_temp_data->id:'0') ;?>" class="form-control" />
                </div>                    
                <div class="col-lg-4">    
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block">Update Temporary Address</button>
                </div>
                </section>
            </div>            
            </form>
        </div>
<!-- ending of fomr !-->

                                
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


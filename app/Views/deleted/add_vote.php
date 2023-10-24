<form role="form bor-rad" enctype="multipart/form-data" action="<?php echo base_url().'index.php/'.'votes/add_edit'?>" method="post">
  <div class="box-body">
    <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Refrence Number</label>
                <input type="text" name="vacancy_ref_no" value="<?php echo isset($userData->vacancy_ref_no)?$userData->vacancy_ref_no:'';?>" class="form-control" placeholder="Reference Number" <?php echo isset($userData->vacancy_ref_no)?'disabled':''?>>
              </div>
            </div>
						<div class="col-md-6">
				          <div class="form-group">
				            <label for="status"> Status</label>
				            <select name="status" id="" class="form-control">

      		        			<option value="1" <?php echo (isset($userData->status) && $userData->status == 1)?'selected':''; ?> >Active</option>      		        			
      		        			<option value="0" <?php echo (isset($userData->status) && $userData->status == 0)?'selected':''; ?> >Inactive</option>      		        			
                        <option value="2" <?php echo (isset($userData->status) && $userData->status == 2)?'selected':''; ?> >ResultDeclared</option>
                     
				            </select>
				          </div>
				        </div>		
					
						<div class="col-md-6">
						  <div class="form-group">
						    <label for="">Start DateTime</label>
						    <input type="text" name="start_date" value="<?php echo isset($userData->start_date)?$userData->start_date:'';?>" class="form-control" placeholder="yyyy-mm-dd hh:mm:ss">
						  </div>
						</div>	

            <div class="col-md-6">
              <div class="form-group">
                <label for="">End DateTime</label>
                <input type="text" name="end_date" value="<?php echo isset($userData->end_date)?$userData->end_date:'';?>" class="form-control" placeholder="yyyy-mm-dd hh:mm:ss">
              </div>
            </div>       
        </div>
        <?php if(!empty($userData->id)){?>
        <input type="hidden"  name="id" value="<?php echo isset($userData->id)?$userData->id:'';?>">
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
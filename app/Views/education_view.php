<!-- page content -->
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper settingPage">
    <!-- Main content -->
    
    <section class="content">
      <!-- Default box -->
      <div class= "box-notification">
        <div id="notification-msg" class="notification-msg">
          <?php if(count($session->getFlashdata())>0){; ?>
             <div class="alert alert-<?php echo $session->getFlashdata('type');?>" role="alert"><?php echo $session->getFlashdata('msg');?></div><a href="#" onClick="javascript:document.getElementById('notification-msg').style.display = 'none'" class="close_notification"></a>
          <?php }?>
        </div>        
      </div>      
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title"><?php echo $title;?></h3>  
          <div class="box-tools">              
              <button type="button" class="btn-sm  btn btn-success modalButtonEducation" data-src="<?php echo '0';?>" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Add <?php echo $title;?></button>              
            </div>         
        </div>
        
        <div class="box-body">
          <div class="row">
            <div class="col-lg-12">
              <div class="col-md-12 col-md-offset-1 aboutshift">

            <table id="example1" class="cell-border example1 table table-striped table1 delSelTable">
                <thead>
                    <tr>
                    
                    </tr>
                </thead>
                <tbody>
                    
                </tbody> 
            </table>
                      
                        
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
<div class="modal fade" id="nameModal_Education" role="dialog">
  <div class="modal-dialog">
    <div class="box box-primary popup" >
      <div class="box-header with-border formsize">
        <h3 class="box-title">Add <?php echo $title;?></h3>
          <button type="button" class="close" data-dismiss="modal"  aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>
      <!-- /.box-header -->
      <div class="modal-body" style="padding: 0px 0px 0px 0px;"></div>
    </div>
  </div>
</div><!--End Modal Crud --> 
<script type="text/javascript">
  $(document).ready(function() {  
    var url_ = '<?php echo base_url();?>';//$('.content-header').attr('rel');
    var table = $('#example1').DataTable({ 
          dom: 'lfBrtip',
          buttons: [
              'copy', 'excel', 'pdf', 'print'
          ],
          "processing":     true,
          "serverSide": false,
          "ajax": {
            "url": url_+'education/gettabledata',
            "type": 'POST'
          },
          "sPaginationType": "full_numbers",
          "language": {
            "search": "_INPUT_", 
            "searchPlaceholder": "Search",
            "paginate": {
                "next": '<i class="fa fa-angle-right"></i>',
                "previous": '<i class="fa fa-angle-left"></i>',
                "first": '<i class="fa fa-angle-double-left"></i>',
                "last": '<i class="fa fa-angle-double-right"></i>'
            }
          },                    
          "columns": [
              { title: "Id" },
              { title: "StaffID" },
              { title: "Level" },
              { title: "Degree name" },
              { title: "University/College" },
              { title: "Started Year" },
              { title: "Completed Year" },
              { title: "Score" },
              { title: "Division/CGPA" },
              { title: "Specialization" },
              { title: "", "defaultContent": "" },
              { title: "", "defaultContent": "" }
          ],          
          "iDisplayLength": "10",          
          "scrollX": true,
          "aLengthMenu": [[10, 25, 50, 100,500,-1], [10, 25, 50,100,500,"All"]]
      });
    
    setTimeout(function() {
      var add_width = $('.dataTables_filter').width()+$('.box-body .dt-buttons').width()+10;
      $('.table-date-range').css('right',add_width+'px');
        
    }, 300);
    $("button.closeTest, button.close").on("click", function (){});
  });
</script>
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<!-- Main content -->
  <section class="content">
  <?php if($this->session->flashdata("messagePr")){?>
    <div class="alert alert-info">      
      <?php echo $this->session->flashdata("messagePr")?>
    </div>
  <?php } ?>
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">Applicant</h3>
            <div class="box-tools">
           
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body" style="overflow-x: scroll;">           
            <table id="example1" class="applicant_table cell-border example1 table table-striped table1 delSelTable">
              <thead>
                <tr>
                  
                  <th>Q_SetId</th>    
                  <th>Username</th>                              
									<th>Scores</th>
                  <th>Question Attempted</th>                
                </tr>
              </thead>
              <tbody>
              </tbody> 
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>  
<!-- Modal Crud Start-->
<div class="modal fade" id="nameModal_user" role="dialog">
  <div class="modal-dialog">
    <div class="box box-primary popup" >
      <div class="box-header with-border formsize">
        <h3 class="box-title"></h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>
      <!-- /.box-header -->
      <div class="modal-body" style="padding: 0px 0px 0px 0px;"></div>
    </div>
  </div>
</div><!--End Modal Crud --> 
<script type="text/javascript">
  $(document).ready(function() {  
    var url1 = '<?php echo base_url().'index.php/';?>';//$('.content-header').attr('rel');
    var table = $('#example1').DataTable({ 
          dom: 'lfBrtip',
          buttons: [
                {
                  extend: 'excel',
                  filename: 'applicant_export'                                 
                }
          ],
          "processing": true,
          "serverSide": true,
          "order": [[ 0, "desc" ]],
          "ajax": {
            "url":url1+"result/dataTable",
            "type":"POST",
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
          "iDisplayLength": 10,
          "aLengthMenu": [[10, 25, 50, 100,500,-1], [10, 25, 50,100,500,"All"]]
      });
    
    setTimeout(function() {
      var add_width = $('.dataTables_filter').width()+$('.box-body .dt-buttons').width()+10;
      $('.table-date-range').css('right',add_width+'px');

        $('.dataTables_info').before('');  
    }, 300);
    $("button.closeTest, button.close").on("click", function (){});
  });
</script>            
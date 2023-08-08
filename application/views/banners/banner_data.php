
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">البنرات</h3>
                <div class="float-right">
                    <a href="<?=site_url('Banners/add_banners')?>" class="btn btn-primary btn-flat">
                        <i class="fa fa-user-plus"></i>
                        إضافة بانر  </a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <?php //print_r($all_users->result())
                ?>
                <table id="table1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">الصورة </th>
<!--                        <th class="text-center">النص</th>-->
                        <th class="text-center">الإجراء</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</section>
<div class="modal fade bd-example-modal-lg" id="modal_details">
    <div class="modal-dialog modal_details modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="direction: rtl!important;">
                <h4 class="modal-title">تفاصيل</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"  id="details">
            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn-danger" data-dismiss="modal">إغلاق</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<script>
    var dataTable ;
    $(document).ready(function() {

        dataTable= $('#table1').DataTable({
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Arabic.json"
            },
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?=site_url('Banners/get_ajax_banners')?>",
                "type" : "POST",
            },
            "columnDefs" :[
                {
                    "targets":[0,1,-1],
                    "orderable" : false
                }


            ],
            "order" : [],
            "dom": 'Bfrtip',
            "buttons": [
                { "extend": 'excel', "text": ' شيت اكسيل' },
                { "extend": 'copy', "text": 'نسخ' }
            ],
        });
        //dataTable.ajax.reload();  //just reload table
    } );
</script>
<script>
    function get_load_details(valu) {
        $.ajax({
            type: 'post',
            url: "<?php echo base_url();?>Banners/get_load_details",
            data: {
                id: valu
            },
            success: function(d) {
                $('#details').html(d);
            }
        });
    }
</script>
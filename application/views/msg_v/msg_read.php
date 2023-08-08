
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?=$title?></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="table1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th style="width: 5%">#</th>
                        <th>تاريخ الرسالة</th>
<!--                        <th>الإسم</th>-->
                        <th> عنوان الرسالة</th>
                        <th>الجوال</th>
                        <th>الإيميل</th>



                        <th>تاريخ الإجراء</th>
                        <th>تفاصيل</th>
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
            <div class="modal-header">
                <h4 class="modal-title"> تفاصيل الرسالة</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"  id="details">

            </div>
            <div class="modal-footer justify-content-between">

                <button type="button" class="btn btn-danger" data-dismiss="modal">إغلاق</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<script>
    $(document).ready(function() {
        $('#table1').DataTable({
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Arabic.json"
            },
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?=site_url('Msg/get_ajax_msgs_read')?>",
                "type" : "POST",
            },
            "columnDefs" :[
                {
                    "targets":[2,3],
                    "className" : 'text-left'

                },
                {
                    "targets":[3,-1],
                    "className" : 'text-left',


                },
                {
                    "targets":[0,1,5,-1],
                    "orderable" : false,


                },
            ],
            "dom": 'Bfrtip',
            "buttons": [
                { "extend": 'excel', "text": ' شيت اكسيل' },
                { "extend": 'copy', "text": 'نسخ' }
            ],
            "order" : []
        });
    } );

</script>
<script>
    function get_msg_details(valu) {

        $.ajax({
            type: 'post',
            url: "<?php echo base_url();?>Msg/get_msg_details",
            data: {
                msg_id: valu
            },
            success: function(d) {


                $('#details').html(d);


            }

        });
    }
</script>
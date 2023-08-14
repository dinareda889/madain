
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
                        <th><?=translate('The Date of Message')?></th>
                        <!--                        <th>الإسم</th>-->

                        <th> <?=translate('The Title of Message')?></th>
                        <th><?=translate('The Phone Number')?></th>
                        <th><?=translate('The Email Address')?></th>
                        <th><?=translate('The Date of Action')?></th>
                        <th><?=translate('Details')?></th>

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

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title"> <?=translate('Message Details')?></h4>

            </div>
            <div class="modal-body"  id="details">

            </div>
            <div class="modal-footer justify-content-between">

                <button type="button" class="btn btn-danger" data-dismiss="modal"><?=translate('Close')?></button>
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
                "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/English.json"
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
<style>    .direct-chat-img {        border-radius: 50%;        float: right;        height: 45px;        width: 52px;    }</style><section class="content">    <div class="container-fluid">        <div class="card">            <div class="card-header">                <h3 class="card-title"><?=$title?></h3><?php if(isset($all_company_stats) && sizeof($all_company_stats) == 0){ ?>                <div class="float-right">                    <a href="<?=site_url('Video_c/add_video')?>" class="btn btn-primary btn-flat">                        <i class="fa fa-user-plus"></i>                        <?=translate('Add New Video')?>  </a>                </div><?php } ?>            </div>            <!-- /.card-header -->            <div class="card-body">                <?php //print_r($all_users->result())                ?>                <table id="table1" class="table table-bordered table-striped">                    <thead>                    <tr>                        <th >#</th>                        <th ><?=translate('The Date')?></th>                        <th ><?=translate('The Video link')?></th>                        <th ><?=translate('Actions')?></th>                    </tr>                    </thead>                    <tbody>                    </tbody>                </table>            </div>            <!-- /.card-body -->        </div>        <!-- /.card -->    </div></section><div class="modal fade bd-example-modal-lg" id="modal_details" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">    <div class="modal-dialog modal_details modal-lg" role="document" style="width: 90%">        <div class="modal-content">            <div class="modal-header" style="direction: rtl!important;">                <button type="button" class="close" data-dismiss="modal" aria-label="Close">                    <span aria-hidden="true">&times;</span>                </button>                <h4 class="modal-title"><?=translate('The_Video_Link')?></h4>            </div>            <div class="modal-body">                <div id="details"></div>            </div>            <div class="modal-footer" style=" display: inline-block;width: 100%;">                <button type="button" class="btn btn-danger"                        data-dismiss="modal"><?=translate('Close')?>                </button>            </div>        </div>    </div></div><?phpif ($this->session->has_userdata('set_lang')) {    $set_lang = $this->session->userdata('set_lang');} else {    $set_lang = 'english';}if($set_lang == 'english'){    $lang = 'English.json';}else{    $lang = 'Arabic.json';}?><script>    var dataTable ;    $(document).ready(function() {        dataTable= $('#table1').DataTable({            "language": {                "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/<?=$lang?>"            },            "processing": true,            "serverSide": true,            "ajax": {                    "url": "<?=site_url('Video_c/get_ajax_company_stats')?>",                "type" : "POST",            },            "columnDefs" :[                {                    "targets":[0,-1],                    "orderable" : false                }            ],            "order" : [],            "dom": 'Bfrtip',        });        //dataTable.ajax.reload();  //just reload table    } );</script><script>    function get_load_details(valu) {        $.ajax({            type: 'post',            url: "<?php echo base_url();?>Video_c/get_load_details",            data: {                id: valu            },            success: function(d) {                $('#details').html(d);            }        });    }</script>
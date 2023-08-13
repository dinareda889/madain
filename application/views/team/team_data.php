<style>    .direct-chat-img {        border-radius: 50%;         float: right;        height: 45px;        width: 52px;    }</style><section class="content">    <div class="container-fluid">        <div class="card">            <div class="card-header">                <h3 class="card-title"><?=$title?></h3>                <div class="float-right">                    <a href="<?=site_url('Team/add_team')?>" class="btn btn-primary btn-flat">                        <i class="fa fa-user-plus"></i>                        <?=translate('Add The Working Group')?>  </a>                </div>            </div>            <!-- /.card-header -->            <div class="card-body">                <?php //print_r($all_users->result())                ?>                <table id="table1" class="table table-bordered table-striped">                    <thead>                    <tr>                        <th>#</th>                        <th><?=translate('Image')?> </th>                        <th><?=translate('The Name in Arabic')?></th>                        <th><?=translate('The Name in English')?></th>                        <th><?=translate('The Name in Russian')?></th>                        <th><?=translate('Job title in Arabic')?></th>                        <th><?=translate('Job title in English')?></th>                        <th><?=translate('Job title in Russian')?></th>                        <!--                        <th >النص</th>-->                        <th><?=translate('Actions')?></th>                    </tr>                    </thead>                    <tbody>                    </tbody>                </table>            </div>            <!-- /.card-body -->        </div>        <!-- /.card -->    </div></section><script>    var dataTable ;    $(document).ready(function() {        dataTable= $('#table1').DataTable({            "language": {                "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/English.json"            },            "processing": true,            "serverSide": true,            "ajax": {                "url": "<?=site_url('Team/get_ajax_team')?>",                "type" : "POST",            },            "columnDefs" :[                {                    "targets":[0,1,-1],                    "orderable" : false                }            ],            "order" : [],            "dom": 'Bfrtip',        });        //dataTable.ajax.reload();  //just reload table    } );</script>
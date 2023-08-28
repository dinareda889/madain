<style>    .direct-chat-img {        border-radius: 50%;        float: right;        height: 45px;        width: 52px;    }</style><section class="content">    <div class="container-fluid">        <div class="card">            <div class="card-header">                <h3 class="card-title"><?=translate('comment_blog')?> </h3>                <div class="card-tools">                    <div class="float-left">                        <a href="<?= site_url('News') ?>" class="btn btn-warning btn-flat">                            <i class="fa fa-undo"></i>                            <?=translate('back')?></a>                    </div>                </div>            </div>            <!-- /.card-header -->            <div class="card-body">                <?php //print_r($all_users->result())                ?>                <table id="table1" class="table table-bordered table-striped table1">                    <thead>                    <tr>                        <th>#</th>                        <th><?= translate('user_name_comment') ?> </th>                        <th><?= translate('user_email_comment') ?> </th>                        <th><?= translate('user_comment') ?> </th>                        <th><?= translate('action') ?> </th>                    </tr>                    </thead>                    <tbody>                    <?php if (isset($comments) && (!empty($comments))) {                        $key=1;                        foreach ($comments as $comment) {                            ?>                            <tr>                                <td><?=$key++?></td>                                <td><?=$comment->name?></td>                                <td><?=$comment->email?></td>                                <td><?=$comment->comment?></td>                                <td> <a href="#" onclick='Swal.fire({                                        title: "<?=translate('Are You Sure For Delete')?>",                                    icon: "warning",                                    showCancelButton: true,                                    confirmButtonClass: "btn-danger",                                    confirmButtonText: "<?=translate('Delete')?>",                                    cancelButtonText: "<?=translate('Cancel')?>",                                    }).then((result) => {                                     Swal.fire("<?=translate('Deleted')?>", "", "success");                                    window.location="<?= base_url() . 'News/delete_comment/' . $comment->id.'/'.base64_encode($comment->blog_id)  ?>";                                    });' class="btn btn-danger btn-sm">                                    <i class="fa fa-trash"> </i></a>                                </td>                            </tr>                        <?php }                    } ?>                    </tbody>                </table>            </div>            <!-- /.card-body -->        </div>        <!-- /.card -->    </div></section>
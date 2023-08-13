<style>    .form-group .help-block.form-error {        display: block !important;        position: unset !important;    }</style><section class="content">    <div class="container-fluid">        <!-- SELECT2 EXAMPLE -->        <div class="card card-primary card-outline">            <div class="card-header">                <h3 class="card-title"> <?=translate('Update Video Data')?></h3>                <div class="card-tools">                    <div class="float-left">                        <a href="<?= site_url('Video_c') ?>" class="btn btn-warning btn-flat">                            <i class="fa fa-undo"></i>                            <?=translate('Back')?></a>                    </div>                </div>            </div>            <!-- /.card-header -->            <div class="card-body">                <?php echo form_open_multipart('Video_c/edit_video/' . $company_stats->id, array("id" => 'form_div')); ?>                <input type="hidden" name="id" value="<?= $company_stats->id ?>"/>                <div class="row">                    <div class="col-md-6">                        <div class="form-group">                            <label><?=translate('The Date')?></label>                            <input type="date" name="date" class="form-control"                                   id="isi" value="<?= $company_stats->date_ar?>"/>                        </div>                        <?php if (form_error('date')) {                            echo "<span style='color:red'>" . form_error('date') . "</span>";                        } ?>                    </div>                    <div class="col-md-6">                        <div class="form-group">                            <label><?=translate('The Video Link')?></label>                            <input type="text" name="video_link" class="form-control "                                   id="isi" value="https://www.youtube.com/watch?v=<?= $company_stats->video_link?>" />                        </div>                        <?php if (form_error('video_link')) {                            echo "<span style='color:red'>" . form_error('video_link') . "</span>";                        } ?>                    </div>                </div>                <div class="form-group">                    <button type="submit" class="btn btn-labeled btn-success " name="add"                            value="add"><i class="fa fa-paper-plane"></i><?=translate('Save')?>                    </button>                </div>                <?php echo form_close(); ?>                <!-- /.row -->            </div>            <!-- /.card-body -->        </div>        <!-- /.card -->    </div></section>
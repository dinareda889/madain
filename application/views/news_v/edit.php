<style>    .form-group .help-block.form-error {        display: block !important;        position: unset !important;    }</style><section class="content">    <div class="container-fluid">        <!-- SELECT2 EXAMPLE -->        <div class="card card-primary card-outline">            <div class="card-header">                <h3 class="card-title"> تعديل العميل </h3>                <div class="card-tools">                    <div class="float-left">                        <a href="<?= site_url('News') ?>" class="btn btn-warning btn-flat">                            <i class="fa fa-undo"></i>                            رجوع</a>                    </div>                </div>            </div>            <!-- /.card-header -->            <div class="card-body">                <?php echo form_open_multipart('News/edit/' . $project->id, array("id" => 'form_div')); ?>                <input type="hidden" name="id" value="<?= $project->id ?>"/>                <div class="row">                    <div class="col-md-6">                        <div class="form-group">                            <label>  <?= translate('name') ?> <?= translate('arabic') ?></label>                            <div class="input-group">                                <div class="input-group-prepend">                                    <span class="input-group-text"><i class="fas fa-align-justify"></i></span>                                </div>                                <input type="text" class="form-control" name="name_ar" id="name_ar"                                       value="<?= $project->name_ar ?>"/>                            </div>                        </div>                        <?php if (form_error('name_ar')) {                            echo "<span style='color:red'>" . form_error('name_ar') . "</span>";                        } ?>                    </div>                    <div class="col-md-6">                        <div class="form-group">                            <label>  <?= translate('name') ?> <?= translate('english') ?></label>                            <div class="input-group">                                <div class="input-group-prepend">                                    <span class="input-group-text"><i class="fas fa-align-justify"></i></span>                                </div>                                <input type="text" class="form-control" name="name_en" id="name_en"                                       value="<?= $project->name_en ?>"/>                            </div>                        </div>                        <?php if (form_error('name_en')) {                            echo "<span style='color:red'>" . form_error('name_en') . "</span>";                        } ?>                    </div>                    <div class="col-md-6">                        <div class="form-group">                            <label>   <?= translate('name') ?> <?= translate('russian') ?></label>                            <div class="input-group">                                <div class="input-group-prepend">                                    <span class="input-group-text"><i class="fas fa-align-justify"></i></span>                                </div>                                <input type="text" class="form-control" name="name_ru" id="name_ru"                                       value="<?= $project->name_ru ?>"/>                            </div>                        </div>                        <?php if (form_error('name_ru')) {                            echo "<span style='color:red'>" . form_error('name_ru') . "</span>";                        } ?>                    </div>                    <div class="col-md-6">                        <div class="form-group">                            <label>  <?= translate('main_image') ?> </label>                            <?php if (!empty($project->image)) { ?>                                <a data-toggle="modal" data-target="#myModal-mainImage" style="color: #007bff;">                                    <i class="fa fa-eye" title=" قراءة"></i>للإطلاع </a>                                <!-- modal view -->                                <div class="modal fade" id="myModal-mainImage" tabindex="-1"                                     role="dialog" aria-labelledby="myModalLabel">                                    <div class="modal-dialog modal-lg" role="document">                                        <div class="modal-content">                                            <div class="modal-header">                                                <button type="button" class="close" data-dismiss="modal"                                                        aria-label="Close"><span                                                            aria-hidden="true">&times;</span>                                                </button>                                                <h4 class="modal-title" id="myModalLabel">الصورة</h4>                                            </div>                                            <div class="modal-body">                                                <img src="<?php if (!empty($project->image) && (file_exists('uploads/news/' . $project->image))) {                                                    echo base_url() . 'uploads/news/' . $project->image;                                                } else {                                                    echo base_url() . 'uploads/defult_image.jpg';                                                } ?>"                                                     class="" style="width: 100%;" alt="">                                            </div>                                            <div class="modal-footer">                                                <button type="button" class="btn btn-default"                                                        data-dismiss="modal">                                                    إغلاق                                                </button>                                            </div>                                        </div>                                    </div>                                </div>                                <!-- modal view -->                            <?php } ?>                            <div class="input-group">                                <div class="input-group-prepend">                                    <span class="input-group-text"><i class="fa fa-image"></i></span>                                </div>                                <input type="file" class="form-control" name="image" id="image" accept="image/*"/>                            </div>                        </div>                        <?php if (form_error('image')) {                            echo "<span style='color:red'>" . form_error('image') . "</span>";                        } ?>                    </div>                    <div class="col-md-6">                        <div class="form-group">                            <label>  <?=translate('images')?> </label>                            <div class="input-group">                                <div class="input-group-prepend">                                    <span class="input-group-text"><i class="fa fa-image"></i></span>                                </div>                                <input type="file" class="form-control" name="images[]" id="images" multiple  accept="image/*"  />                            </div>                        </div>                        <?php if (form_error('images')) {                            echo "<span style='color:red'>" . form_error('images') . "</span>";                        } ?>                    </div>                </div>                <div class="row">                    <div class="col-md-12">                        <div class="form-group">                            <label>  <?= translate('description') ?> <?= translate('arabic') ?></label>                            <div class="">                                <textarea name="description_ar" class="form-control textarea" id="description_ar">                                    <?= $project->description_ar ?></textarea>                            </div>                        </div>                    </div>                </div>                <div class="row">                    <div class="col-md-12">                        <div class="form-group">                            <label>   <?= translate('description') ?>  <?= translate('english') ?> </label>                            <div class="">                                <textarea name="description_en" class="form-control textarea" id="description_en">                                    <?= $project->description_en ?></textarea>                            </div>                        </div>                    </div>                </div>                <div class="row">                    <div class="col-md-12">                        <div class="form-group">                            <label>    <?= translate('description') ?>  <?= translate('russian') ?> </label>                            <div class="">                                <textarea name="description_ru" class="form-control textarea" id="description_ru">                                    <?= $project->description_ru ?></textarea>                            </div>                        </div>                    </div>                </div>                <div class="form-group">                    <button type="submit" class="btn btn-labeled btn-success " name="add"                            value="add"><i class="fa fa-paper-plane"></i>حفظ                    </button>                </div>                <?php echo form_close(); ?>                <!-- /.row -->            </div>            <!-- /.card-body -->        </div>        <!-- /.card -->    </div></section>
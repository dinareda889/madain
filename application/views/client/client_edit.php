<style>    .form-group .help-block.form-error {        display: block !important;        position: unset !important;    }</style><section class="content">    <div class="container-fluid">        <!-- SELECT2 EXAMPLE -->        <div class="card card-primary card-outline">            <div class="card-header">                <h3 class="card-title"> تعديل العميل </h3>                <div class="card-tools">                    <div class="float-left">                        <a href="<?= site_url('Client') ?>" class="btn btn-warning btn-flat">                            <i class="fa fa-undo"></i>                            رجوع</a>                    </div>                </div>            </div>            <!-- /.card-header -->            <div class="card-body">                <?php echo form_open_multipart('Client/edit_client/' . $client->id,array("id"=>'form_div')); ?>                <input type="hidden" name="id" value="<?= $client->id ?>"/>                <div class="row">                    <div class="col-md-6">                        <div class="form-group">                            <label>  الاسم بالعربي</label>                            <div class="input-group">                                <div class="input-group-prepend">                                    <span class="input-group-text"><i class="fas fa-align-justify"></i></span>                                </div>                                <input type="text" class="form-control" name="name" id="name"  value="<?=$client->name?>"  />                            </div>                        </div>                        <?php if (form_error('name')) {                            echo "<span style='color:red'>" . form_error('name') . "</span>";                        } ?>                    </div>                    <div class="col-md-6">                        <div class="form-group">                            <label>  الاسم بالانجليزي</label>                            <div class="input-group">                                <div class="input-group-prepend">                                    <span class="input-group-text"><i class="fas fa-align-justify"></i></span>                                </div>                                <input type="text" class="form-control" name="name_en" id="name_en"  value="<?=$client->name_en?>"  />                            </div>                        </div>                        <?php if (form_error('name_en')) {                            echo "<span style='color:red'>" . form_error('name_en') . "</span>";                        } ?>                    </div>                    <div class="col-md-6">                        <div class="form-group">                            <label>  اللوجو </label>                            <?php if(!empty($client->image)){ ?>                                <a data-toggle="modal" data-target="#myModal-mainImage" style="color: #007bff;">                                    <i class="fa fa-eye" title=" قراءة"></i>للإطلاع </a>                                <!-- modal view -->                                <div class="modal fade" id="myModal-mainImage" tabindex="-1"                                     role="dialog" aria-labelledby="myModalLabel">                                    <div class="modal-dialog modal-lg" role="document">                                        <div class="modal-content">                                            <div class="modal-header">                                                <button type="button" class="close" data-dismiss="modal"                                                        aria-label="Close"><span                                                            aria-hidden="true">&times;</span>                                                </button>                                                <h4 class="modal-title" id="myModalLabel">الصورة</h4>                                            </div>                                            <div class="modal-body">                                                <img src="<?php if (!empty($client->image) && (file_exists('uploads/client/' . $client->image))) {                                                    echo base_url() . 'uploads/client/' .$client->image;                                                } else {                                                    echo base_url() . 'uploads/defult_image.jpg';                                                } ?>"                                                     class="" style="width: -webkit-fill-available;" alt="">                                            </div>                                            <div class="modal-footer">                                                <button type="button" class="btn btn-default"                                                        data-dismiss="modal">                                                    إغلاق                                                </button>                                            </div>                                        </div>                                    </div>                                </div>                                <!-- modal view -->                            <?php } ?>                            <div class="input-group">                                <div class="input-group-prepend">                                    <span class="input-group-text"><i class="fa fa-image"></i></span>                                </div>                                <input type="file" class="form-control" name="image" id="image"  accept="image/*"  />                            </div>                        </div>                        <?php if (form_error('image')) {                            echo "<span style='color:red'>" . form_error('image') . "</span>";                        } ?>                    </div>                    <div class="col-md-6">                        <div class="form-group">                            <label> اللينك</label>                            <div class="input-group">                                <div class="input-group-prepend">                                    <span class="input-group-text"><i class="fas fa-link"></i></span>                                </div>                                <input type="text" name="link" value="<?=$client->link?>"                                       class="form-control"/>                            </div>                        </div>                        <?php if (form_error('link')) {                            echo "<span style='color:red'>" . form_error('link') . "</span>";                        } ?>                    </div>                    <!--<div class="col-md-3">                        <div class="form-group">                            <label> الوصف</label>                            <div class="input-group">                                <div class="input-group-prepend">                                    <span class="input-group-text">@</span>                                </div>                                <input type="text" name="address" value="<?= set_value('address') ?>"                                       class="form-control"/>                            </div>                        </div>                        <?php if (form_error('address')) {                        echo "<span style='color:red'>" . form_error('address') . "</span>";                    } ?>                    </div>-->                </div>                <div class="row">                    <div class="col-md-12">                        <div class="form-group">                            <label>  الوصف بالعربي</label>                            <div class="">                                <textarea name="description" class="form-control textarea"  id="description">                                    <?=$client->description?></textarea>                            </div>                        </div>                    </div>                </div>                <div class="row">                    <div class="col-md-12">                        <div class="form-group">                            <label>  الوصف بالانجليزي</label>                            <div class="">                                <textarea name="description_en" class="form-control textarea"  id="description_en">                                    <?=$client->description_en?></textarea>                            </div>                        </div>                    </div>                </div>                <div class="form-group">                    <button type="submit" class="btn btn-labeled btn-success "   name="add"                            value="add"><i class="fa fa-paper-plane"></i>حفظ                    </button>                </div>                <?php echo form_close(); ?>                <!-- /.row -->            </div>            <!-- /.card-body -->        </div>        <!-- /.card -->    </div></section>
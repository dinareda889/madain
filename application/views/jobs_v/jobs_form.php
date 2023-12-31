<section class="content">
    <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title"><?=translate('Add A new Job')?></h3>
                <div class="card-tools">
                    <div class="float-right">
                        <a href="<?= site_url('Jobs_c') ?>" class="btn btn-warning btn-flat">
                            <i class="fa fa-undo"></i>
                            <?=translate('Back')?></a>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <?php echo form_open_multipart('Jobs_c/add_jobs'); ?>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label><?=translate('The Date')?>  </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-align-justify"></i></span>
                                </div>
                                <input type="date" name="date" value="<?=date('Y-m-d')?>"
                                       class="form-control"/>
                            </div>
                        </div>
                        <?php if (form_error('date')) {
                            echo "<span style='color:red'>" . form_error('date') . "</span>";
                        } ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label><?=translate('Job title in Arabic')?></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-align-justify"></i></span>
                                </div>
                                <input type="text" name="title" value="<?= set_value('title') ?>"
                                       class="form-control"/>
                            </div>
                        </div>
                        <?php if (form_error('title')) {
                            echo "<span style='color:red'>" . form_error('title') . "</span>";
                        } ?>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label><?=translate('Job title in English')?></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-align-justify"></i></span>
                                </div>
                                <input type="text" name="title_en" value="<?= set_value('title_en') ?>"
                                       class="form-control"/>
                            </div>
                        </div>
                        <?php if (form_error('title_en')) {
                            echo "<span style='color:red'>" . form_error('title_en') . "</span>";
                        } ?>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label><?=translate('Job title in Russian')?></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-align-justify"></i></span>
                                </div>
                                <input type="text" name="title_ru" value="<?= set_value('title_ru') ?>"
                                       class="form-control"/>
                            </div>
                        </div>
                        <?php if (form_error('title_ru')) {
                            echo "<span style='color:red'>" . form_error('title_ru') . "</span>";
                        } ?>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label><?=translate('Job Details in Arabic')?></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <textarea name="details" class="form-control textarea"><?=set_value('details')?></textarea>
                            </div>
                        </div>
                        <?php if (form_error('details')) {
                            echo "<span style='color:red'>" . form_error('details') . "</span>";
                        } ?>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label><?=translate('Job Details in English')?></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <textarea name="details_en" class="form-control textarea"><?=set_value('details_en')?></textarea>
                            </div>
                        </div>
                        <?php if (form_error('details_en')) {
                            echo "<span style='color:red'>" . form_error('details_en') . "</span>";
                        } ?>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label><?=translate('Job Details in Russian')?></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <textarea name="details_ru" class="form-control textarea"><?=set_value('details_ru')?></textarea>
                            </div>
                        </div>
                        <?php if (form_error('details_ru')) {
                            echo "<span style='color:red'>" . form_error('details_ru') . "</span>";
                        } ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label><?=translate('Job responsibilities in Arabic')?></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <textarea name="responsibilities" class="form-control textarea"><?=set_value('responsibilities')?></textarea>
                            </div>
                        </div>
                        <?php if (form_error('responsibilities')) {
                            echo "<span style='color:red'>" . form_error('responsibilities') . "</span>";
                        } ?>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label><?=translate('Job responsibilities in English')?></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <textarea name="responsibilities_en" class="form-control textarea"><?=set_value('responsibilities_en')?></textarea>
                            </div>
                        </div>
                        <?php if (form_error('responsibilities_en')) {
                            echo "<span style='color:red'>" . form_error('responsibilities_en') . "</span>";
                        } ?>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label><?=translate('Job responsibilities in Russian')?></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <textarea name="responsibilities_ru" class="form-control textarea"><?=set_value('responsibilities_ru')?></textarea>
                            </div>
                        </div>
                        <?php if (form_error('responsibilities_ru')) {
                            echo "<span style='color:red'>" . form_error('responsibilities_ru') . "</span>";
                        } ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label><?=translate('Job Education and Experience in Arabic')?></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <textarea name="education_experience" class="form-control textarea"><?=set_value('education_experience')?></textarea>
                            </div>
                        </div>
                        <?php if (form_error('education_experience')) {
                            echo "<span style='color:red'>" . form_error('education_experience') . "</span>";
                        } ?>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label><?=translate('Job Education and Experience in English')?></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <textarea name="education_experience_en" class="form-control textarea"><?=set_value('education_experience_en')?></textarea>
                            </div>
                        </div>
                        <?php if (form_error('education_experience_en')) {
                            echo "<span style='color:red'>" . form_error('education_experience_en') . "</span>";
                        } ?>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label><?=translate('Job Education and Experience in Russian')?></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <textarea name="education_experience_ru" class="form-control textarea"><?=set_value('education_experience_ru')?></textarea>
                            </div>
                        </div>
                        <?php if (form_error('education_experience_ru')) {
                            echo "<span style='color:red'>" . form_error('education_experience_ru') . "</span>";
                        } ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label><?=translate('Job Skills in Arabic')?></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <textarea name="skills" class="form-control textarea"><?=set_value('skills')?></textarea>
                            </div>
                        </div>
                        <?php if (form_error('skills')) {
                            echo "<span style='color:red'>" . form_error('skills') . "</span>";
                        } ?>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label><?=translate('Job Skills in English')?></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <textarea name="skills_en" class="form-control textarea"><?=set_value('skills_en')?></textarea>
                            </div>
                        </div>
                        <?php if (form_error('skills_en')) {
                            echo "<span style='color:red'>" . form_error('skills_en') . "</span>";
                        } ?>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label><?=translate('Job Skills in Russian')?></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <textarea name="skills_ru" class="form-control textarea"><?=set_value('skills_ru')?></textarea>
                            </div>
                        </div>
                        <?php if (form_error('skills_ru')) {
                            echo "<span style='color:red'>" . form_error('skills_ru') . "</span>";
                        } ?>
                    </div>
                </div>
                <div class="form-group text-center">
                    <button type="submit" name="<?= $page ?>" class="btn btn-success btn-flat"><i
                            class="fa fa-paper-plane"></i><?=translate('Save')?>
                    </button>
                </div>
                <?php echo form_close(); ?>
                <!-- /.row -->
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</section>
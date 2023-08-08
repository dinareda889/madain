<style>
    .form-group .help-block.form-error {
        display: block !important;
        position: unset !important;
    }
</style>
<section class="content">
    <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title"> إضافة احصائيات الشركة</h3>
                <div class="card-tools">
                    <div class="float-left">
                        <a href="<?= site_url('Company_stats_c') ?>" class="btn btn-warning btn-flat">
                            <i class="fa fa-undo"></i>
                            رجوع</a>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <?php echo form_open_multipart('Company_stats_c/edit_company_stats/' . $company_stats->id,array("id"=>'form_div')); ?>
                <input type="hidden" name="id" value="<?= $company_stats->id ?>"/>
                <div class="row">


                    <div class="col-md-4">
                        <div class="form-group">
                            <label>  عملاء الشركة </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-align-justify"></i></span>
                                </div>
                                <input type="number" class="form-control" name="company_clients" id="company_clients"  value="<?= $company_stats->company_clients ?>"  />

                            </div>
                        </div>
                        <?php if (form_error('company_clients')) {
                            echo "<span style='color:red'>" . form_error('company_clients') . "</span>";
                        } ?>

                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label> الخدمات </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-align-justify"></i></span>
                                </div>
                                <input type="number" class="form-control" name="company_services" id="company_services"  value="<?= $company_stats->company_services ?>"  />

                            </div>
                        </div>
                        <?php if (form_error('company_services')) {
                            echo "<span style='color:red'>" . form_error('company_services') . "</span>";
                        } ?>

                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>المشاريع </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-align-justify"></i></span>
                                </div>
                                <input type="number" class="form-control" name="company_projects" id="company_projects"   value="<?= $company_stats->company_projects ?>"  />

                            </div>
                        </div>
                        <?php if (form_error('company_projects')) {
                            echo "<span style='color:red'>" . form_error('company_projects') . "</span>";
                        } ?>

                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>  المشاريع التى تم تنفيذها </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-align-justify"></i></span>
                                </div>
                                <input type="number" class="form-control" name="company_projects_done" id="company_projects_done"   value="<?= $company_stats->company_projects_done ?>"  />

                            </div>
                        </div>
                        <?php if (form_error('company_projects_done')) {
                            echo "<span style='color:red'>" . form_error('company_projects_done') . "</span>";
                        } ?>

                    </div>


                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-labeled btn-success "   name="add"
                            value="add"><i class="fa fa-paper-plane"></i>حفظ
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

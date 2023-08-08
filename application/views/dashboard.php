<section class="content">

    <div class="container-fluid">

        <?php
        if ($_SESSION['level'] == 1) {

            $display = '';
        } elseif ($_SESSION['level'] == 2) {
            $display = 'none';
        }

        ?>
        <!-- Info boxes -->
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3" style="display:<?= $display ?>;">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-info elevation-1">
                        <i class="fas fa-user "></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">المستخدمين</span>
                        <a href="<?= site_url('User') ?>"><span class="info-box-number">
                  <?= $this->fungsi->count_users(); ?>
                </span></a>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <!-- /.col -->
            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <?php
            // print_r($all_orders->result());
            ?>
          <!--  <div class="col-12 col-sm-6 col-md-2">
                <div class="info-box">
                    <span class="info-box-icon bg-maroon elevation-1">
                       <i class="fas fa-archive"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">الأصناف</span>
                        <a href="<?/*= site_url('Products') */?>">
                        <span class="info-box-number">
                <?/*= $this->fungsi->count_product(); */?>
                </span></a>
                    </div>
                </div>
            </div>-->

            <!--<div class="col-12 col-sm-6 col-md-3" style="display:<?/*= $display */?>;">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1">
                    <i class="fas fa-list-ol"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">الطلبات الأونلاين</span>
                        <a href="<?/*= site_url('Store_orders') */?>">
                        <span class="info-box-number">
                             <?/*= $this->fungsi->count_status_store_order(''); */?></span>
                        </a>
                    </div>
                </div>
            </div>-->

            <div class="col-12 col-sm-6 col-md-3" style="display:<?= $display ?>;">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1">
                    <i class="fas fa-envelope"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">الرسائل الجديدة</span>
                        <a href="<?= site_url('Msg/msgs') ?>">
                        <span class="info-box-number">
                        <?= $this->fungsi->count_new_msg('reading'); ?></span>
                        </a>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>


            <!-- /.col -->
        </div>
        <?php ?>


    </div>
</section>


<!------------------------------------------------------------------------------------------------------------------------>

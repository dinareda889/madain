<!DOCTYPE html>
<html lang="en">
<?php if ($this->session->userdata('site_lang') && ($this->session->userdata('site_lang') == 'english')) { ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- favicon css -->
        <link rel="shortcut icon" href="<?= base_url() . 'assets_web/assets' ?>/images/favicon.png"
              type="image/x-icon"/>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600;700;900&display=swap"
              rel="stylesheet"/>
        <title>My tech 4 you</title>
        <!-- font-awesome -->
        <link rel="stylesheet" href="<?= base_url() . 'assets_web/assets' ?>/css/all.min.css">
        <!-- bootstrap -->
        <link rel="stylesheet" href="<?= base_url() . 'assets_web/assets' ?>/css/bootstrap.min.css">
        <!-- animation -->
        <link rel="stylesheet" href="<?= base_url() . 'assets_web/assets' ?>/css/animate.css">
        <link href="<?= base_url() . 'assets_web/assets' ?>/css/aos.css" rel="stylesheet">
        <!-- flaticon -->
        <link rel="stylesheet" href="<?= base_url() . 'assets_web/assets' ?>/font/flaticon.css">
        <!-- menu -->
        <link rel="stylesheet" href="<?= base_url() . 'assets_web/assets' ?>/css/menu.css">
        <!-- venobox -->
        <link rel="stylesheet" href="<?= base_url() . 'assets_web/assets' ?>/css/venobox.css">
        <!-- swiper-slider -->
        <link rel="stylesheet" href="<?= base_url() . 'assets_web/assets' ?>/css/swiper-bundle.min.css">
        <!-- skillbar -->
        <link rel="stylesheet" href="<?= base_url() . 'assets_web/assets' ?>/css/pro-bars.css">
        <!-- style -->
        <link rel="stylesheet" href="<?= base_url() . 'assets_web/assets' ?>/css/style.css">
        <!-- responsive -->
        <link rel="stylesheet" href="<?= base_url() . 'assets_web/assets' ?>/css/responsive.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
              integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N"
              crossorigin="anonymous">

    </head>
<?php } else { ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- favicon css -->
        <link rel="shortcut icon" href="<?= base_url() . 'assets_web/assets' ?>/images/favicon.png"
              type="image/x-icon"/>
        <link href="https://fonts.googleapis.com/css?family=Almarai|Roboto&display=swap" rel="stylesheet">
        <title>My tech 4 you</title>
        <!-- font-awesome -->
        <link rel="stylesheet" href="<?= base_url() . 'assets_web/assets' ?>/css/all.min.css">
        <!-- bootstrap -->
        <link rel="stylesheet" href="<?= base_url() . 'assets_web/assets' ?>/css/bootstrap.minar.css">
        <!-- animation -->
        <link rel="stylesheet" href="<?= base_url() . 'assets_web/assets' ?>/css/animate.css">
        <link href="<?= base_url() . 'assets_web/assets' ?>/css/aos.css" rel="stylesheet">
        <!-- flaticon -->
        <link rel="stylesheet" href="<?= base_url() . 'assets_web/assets' ?>/font/flaticon.css">
        <!-- menu -->
        <link rel="stylesheet" href="<?= base_url() . 'assets_web/assets' ?>/css/menuar.css">
        <!-- venobox -->
        <link rel="stylesheet" href="<?= base_url() . 'assets_web/assets' ?>/css/venobox.css">
        <!-- swiper-slider -->
        <link rel="stylesheet" href="<?= base_url() . 'assets_web/assets' ?>/css/swiper-bundle.min.css">
        <!-- skillbar -->
        <link rel="stylesheet" href="<?= base_url() . 'assets_web/assets' ?>/css/pro-bars.css">
        <!-- style -->
        <link rel="stylesheet" href="<?= base_url() . 'assets_web/assets' ?>/css/stylear.css">
        <!-- responsive -->
        <link rel="stylesheet" href="<?= base_url() . 'assets_web/assets' ?>/css/responsivear.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
              integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N"
              crossorigin="anonymous">

    </head>
<?php } ?>
<body>
<!-- start preloader area -->
<?php if (isset($loader) && !empty($loader) && ($loader == 'not')) {

} else { ?>
    <div class="preloader">
        <div class="circle1"></div>
        <div class="circle2"></div>
    </div>
<?php } ?>
<!-- end preloader area -->
<header>
    <!-- start menubar area -->
    <section class="home1 menubar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar p-0">
                        <!-- header logo -->
                        <a class="navbar-brand p-0" href="index.html">
                            <img src="<?= base_url() . 'assets_web/assets' ?>/images/logo2.png" alt="Logo"/>
                        </a>
                        <div class="header-menu position-static">
                            <ul class="menu">

                                <?php $url_text= $this->uri->segment(1, 'home'); ?>

                                <li class="<?php  if ($url_text == 'home'){echo 'active' ;} ?>"><a href="<?= base_url() ?>"><?= $this->lang->line('home') ?></a></li>
                                <li class="<?php  if ($url_text == 'about_us'){echo 'active' ;} ?>"><a href="<?= base_url() ?>about_us"><?= $this->lang->line('about_text_2') ?></a>
                                </li>
                                <li class="<?php  if (($url_text == 'services')|| ($url_text == 'services_details')){echo 'active' ;} ?>"><a href="<?= base_url() ?>services"><?= $this->lang->line('services') ?></a></li>
                                <li class="<?php  if (($url_text == 'products')|| ($url_text == 'product_details')){echo 'active' ;} ?>">
                                    <a href="#!"><?= $this->lang->line('our_works') ?></a>
                                    <ul>
                                        <?php
                                        if (!empty($this->jobs_tasnif)) {
                                            foreach ($this->jobs_tasnif as $row) {
                                                if ($this->session->userdata('site_lang') && ($this->session->userdata('site_lang') == 'english')) {
                                                    ?>
                                                    <li>
                                                        <a href="<?= base_url() . 'products/' . base64_encode($row->id) ?>"> <?= $row->name_en ?>  </a>
                                                    </li>
                                                <?php } else {
                                                    ?>
                                                    <li>
                                                        <a href="<?= base_url() . 'products/' . base64_encode($row->id) ?>"> <?= $row->name ?>  </a>
                                                    </li>
                                                <?php } ?>
                                                <?php
                                            }
                                        } ?>
                                        <!--                                        <li><a  href="<? /*= base_url() . 'all_products' */ ?>"><? /*=$this->lang->line('all_works')*/ ?></a></li>
-->
                                    </ul>
                                </li>
                                <li class="<?php  if (($url_text == 'works')|| ($url_text == 'all_works')){echo 'active' ;} ?>">
                                    <a href="#!"><?= $this->lang->line('projects') ?></a>
                                    <ul>
                                        <?php
                                        if (!empty($this->product_tasnif)) {
                                            foreach ($this->product_tasnif as $row) {
                                                if ($this->session->userdata('site_lang') && ($this->session->userdata('site_lang') == 'english')) {
                                                    ?>
                                                    <li>
                                                        <a href="<?= base_url() . 'all_works/' . base64_encode($row->id) ?>"> <?= $row->name_en ?>  </a>
                                                    </li>
                                                <?php } else {
                                                    ?>
                                                    <li>
                                                        <a href="<?= base_url() . 'all_works/' . base64_encode($row->id) ?>"> <?= $row->name ?>  </a>
                                                    </li>
                                                <?php } ?>
                                                <?php
                                            }
                                        } ?>
                                        <!--                                        <li><a  href="<? /*= base_url() . 'all_products' */ ?>"><? /*=$this->lang->line('all_works')*/ ?></a></li>
-->
                                    </ul>
                                </li>
                                <li class="<?php  if (($url_text == 'clients')){echo 'active' ;} ?>"><a href="<?= base_url() ?>clients"><?= $this->lang->line('customers') ?></a></li>
                                <li class="<?php  if (($url_text == 'launch_project')){echo 'active' ;} ?>">
                                    <a href="<?= base_url() ?>launch_project"><?= $this->lang->line('launch_project') ?></a>
                                </li>
                                <li class="<?php  if (($url_text == 'contact')){echo 'active' ;} ?>"><a href="<?= base_url() ?>contact"><?= $this->lang->line('contact_us') ?></a></li>
                                <!--<li>
                                    <a href="#!">Language</a>
                                    <ul>
                                        <li><a href="indexar.html">Arabic</a></li>
                                        <li><a href="index.html">  English</a></li>
                                    </ul>
                                </li>-->
                                <?php if ($this->session->has_userdata('site_lang')) {
                                    $set_lang = $this->session->userdata('site_lang');
                                } else {
                                    $set_lang = 'english';
                                }
                                if ($set_lang == 'english') {
                                    $class_en = 'active';
                                    $class_ar = '';
                                    $lang_text = 'english';
                                    $lang_img = base_url() . 'assets_web/photo/united-states.png';
                                } else {
                                    $class_ar = 'active';
                                    $class_en = '';
                                    $lang_text = 'العربية';
                                    $lang_img = base_url() . 'assets_web/photo/egypt.png';
                                } ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="" id="navbarDropdown" role="button"
                                       data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="<?= $lang_img ?>">
                                        <?= $lang_text ?>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item <?= $class_en ?>"
                                               href="<?php echo base_url() . 'LanguageSwitcher/switchLang/english' ?>">
                                                <img src="<?= base_url() . 'assets_web/photo/united-states.png' ?>">
                                                <?= $this->lang->line('English') ?></a></li>
                                        <li><a class="dropdown-item <?= $class_ar ?>"
                                               href="<?php echo base_url() . 'LanguageSwitcher/switchLang/arabic' ?>">
                                                <img src="<?= base_url() . 'assets_web/photo/egypt.png' ?>">
                                                <?= $this->lang->line('Arabic') ?></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- <div class="right-part">
                             <a href="file.pdf" target="_blank" class="button-style1">Company Profile</a>
                         </div>-->
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- start banner area -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <?php
    if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
    }
    unset($_SESSION['message']);
    ?>
    <?php $this->load->view($subview); ?>
</header>
<!-- start footer area -->
<footer class="home1 footer direction" data-img="<?= base_url() ?>assets_web/assets/images/footer-bg.jpg">
    <!-- start footer-mid area -->
    <section class="footer-mid">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="content">
                        <div class="title">
                            <img src="<?= base_url() . 'assets_web/assets' ?>/images/logo2.png">
                        </div>
                        <div class="newsletter">
                            <?php if ($this->session->userdata('site_lang') && ($this->session->userdata('site_lang') == 'english')) { ?>

                                <p> <?= $this->about_us[0]->about_us_short_en ?></p>
                            <?php } else { ?>
                                <p> <?= $this->about_us[0]->about_us_short ?></p>

                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="content">
                        <div class="title">
                            <h5><?=$this->lang->line('Main Menu')?></h5>
                        </div>
                        <ul class="navigation">
                            <li><a href="<?= base_url() ?>"><?= $this->lang->line('home') ?></a></li>
                            <li><a href="<?= base_url() ?>about_us"><?= $this->lang->line('about_text_2') ?></a></li>
                            <li><a href="<?= base_url() ?>services"><?= $this->lang->line('services') ?></a></li>

                            <li><a href="<?= base_url() ?>clients"><?= $this->lang->line('customers') ?></a></li>
                            <li><a href="<?= base_url() ?>launch_project"><?= $this->lang->line('launch_project') ?></a>
                            </li>
                            <li><a href="<?= base_url() ?>contact"><?= $this->lang->line('contact_us') ?></a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="content">
                        <div class="title">
                            <h5><?= $this->lang->line('our_works') ?></h5>
                        </div>
                        <ul class="company">
                            <?php
                            if (!empty($this->jobs_tasnif)) {
                                foreach ($this->jobs_tasnif as $row) {
                                    if ($this->session->userdata('site_lang') && ($this->session->userdata('site_lang') == 'english')) {
                                        ?>
                                        <li>
                                            <a href="<?= base_url() . 'products/' . base64_encode($row->id) ?>"> <?= $row->name_en ?>  </a>
                                        </li>
                                    <?php } else {
                                        ?>
                                        <li>
                                            <a href="<?= base_url() . 'products/' . base64_encode($row->id) ?>"> <?= $row->name ?>  </a>
                                        </li>
                                    <?php } ?>
                                    <?php
                                }
                            } ?>

                        </ul>
                        <!--<ul class="company">
                            <li><a href="products.html">web design</a></li>
                            <li><a href="products.html">development</a></li>
                            <li><a href="products.html">SEO & PPC</a></li>
                            <li><a href="products.html">Ecommerce</a></li>
                            <li><a href="products.html">branding</a></li>
                        </ul>-->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="content">
                        <div class="title">
                            <h5><?= $this->lang->line('contact_us') ?></h5>
                        </div>
                        <ul class="address">
                            <li class="d-flex align-items-center">
                                <i class="fas fa-map-marker-alt"></i>
                                <?php if ($this->session->userdata('site_lang') && ($this->session->userdata('site_lang') == 'english')) { ?>

                                    <p> <?= $this->company_data->address_en ?></p>
                                <?php } else { ?>
                                    <p> <?= $this->company_data->address_en ?></p>

                                <?php } ?>
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="fas fa-phone-alt"></i>
                                <p><?=$this->company_data->telepon_code?></p>
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="far fa-envelope"></i>
                                <p><?= $this->company_data->email ?></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end footer-mid area -->
    <!-- start footer-bottom area -->
    <section class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                <p> &copy; 2023 All Right Reserved To My tech 4 you </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
<!-- start top-tp button -->
<button class="top-btn">
    <i class="fas fa-angle-double-up"></i>
</button>
<!-- whatsapp -->
<a class="whats-btn" href="https://wa.me/+966570127111" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>
<!-- messenger -->
<a class="messenger-btn" href="https://m.me/SaSmartTracks" target="_blank">
    <i class="fab fa-facebook-messenger"></i>
</a>
<!-- jquery -->
<script src="<?= base_url() . 'assets_web/assets' ?>/plugins/jquery-3.4.1.min.js"></script>
<!-- bootstrap -->
<script src="<?= base_url() . 'assets_web/assets' ?>/js/bootstrap.bundle.min.js"></script>
<!-- menu -->
<script src="<?= base_url() . 'assets_web/assets' ?>/plugins/menu.min.js"></script>
<!-- parallax -->
<script src="<?= base_url() . 'assets_web/assets' ?>/plugins/parallax.js"></script>
<!-- venobox -->
<script src="<?= base_url() . 'assets_web/assets' ?>/plugins/venobox.min.js"></script>
<!-- mixitup -->
<script src="<?= base_url() . 'assets_web/assets' ?>/plugins/mixitup.min.js"></script>
<!-- swiper slider -->
<script src="<?= base_url() . 'assets_web/assets' ?>/plugins/swiper-bundle.min.js"></script>
<!-- counterup -->
<script src="<?= base_url() . 'assets_web/assets' ?>/plugins/waypoint.js"></script>
<script src="<?= base_url() . 'assets_web/assets' ?>/plugins/jquery.counterup.min.js"></script>
<!-- skillbar hover -->
<script src="<?= base_url() . 'assets_web/assets' ?>/plugins/jquery-ui.min.js"></script>
<script src="<?= base_url() . 'assets_web/assets' ?>/plugins/visible.min.js"></script>
<script src="<?= base_url() . 'assets_web/assets' ?>/plugins/pro-bars.js"></script>
<!-- directional hover -->
<script src="<?= base_url() . 'assets_web/assets' ?>/plugins/jquery.directional-hover.min.js"></script>
<!-- script -->
<script src="<?= base_url() . 'assets_web/assets' ?>/js/script.js"></script>
<!-- animation -->
<script src="<?= base_url() . 'assets_web/assets' ?>/js/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>
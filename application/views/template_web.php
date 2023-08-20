<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description"
          content="Some tags are vital for SEO. Others have little or no impact on rankings. Here's every type of meta tag you need to know about.The purpose of a meta description is to reflect the essence of a page, but with more details and context."/>
    <meta name="author" content="Madain Properties">
    <meta name="msvalidate.01" content="D833B4C3E519991F1F6DDEB57D2EDDB6">
    <meta name="keywords"
          content="Madain Properties , Marina Arcade ,Madain Square,Madain Tower , مدائن, مدائن للعقارات,مدائن دبى,مدائن شركة">
    <title>MADA'IN Properties</title>

    <link rel="canonical" href="https://engyota.github.io/madain/">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="article">
    <meta property="og:title" content='Madain Properties'>
    <meta property="og:description" content=' Madain Properties'>
    <meta property="og:url" content="https://engyota.github.io/madain/">
    <meta property="og:site_name" content="Yoko Co.">
    <meta property="article:tag" content="facebook">
    <meta property="article:section" content="Advice">
    <!-- Custom CSS -->
    <link href="<?= base_url() . 'assets_web/css' ?>/styles.css" rel="stylesheet">
    <link href="<?= base_url() . 'assets_web/css' ?>/responsive.css" rel="stylesheet">
<!--    <link href="--><?//= base_url() . 'assets_web/fontawesome/css/' ?><!--all.css" rel="stylesheet">-->

    <link rel="stylesheet" type="text/css" href="<?= base_url() . 'assets_web/jssocials' ?>/jssocials.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() . 'assets_web/jssocials' ?>/jssocials-theme-plain.css" />

    <!-- <link href="<?= base_url() . 'assets_web/css' ?>/Style-rtl.css" rel="stylesheet"> -->
</head>

<body>

<!-- .noti -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.css"
      integrity="sha256-p+PhKJEDqN9f5n04H+wNtGonV2pTXGmB4Zr7PZ3lJ/w=" crossorigin="anonymous"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.js"
        integrity="sha256-xzc5zu2WQtJgvCwRGTXiHny3T+KQZa6tQF24RVDRlL0=" crossorigin="anonymous"></script>
<style>
    .btn-space {
        margin: 5px;
    }
    .table-bordered.dataTable th, table.table-bordered.dataTable td {
        border-left-width: 1px;
    }
</style>
<span id="message">

</span>
<script>
    <?php if($this->session->flashdata('success') || $this->session->flashdata('error')){
    $msg = $this->session->flashdata('success') ? 'success' : 'error';
    /*            print_r($this->session->flashdata());*/
    ?>
    let n = new Noty({
        theme: 'metroui'
        , text: '<?= $this->session->flashdata($msg) ?>'
        , layout: 'topRight'
        , type: "<?= $msg ?>"
        , timeout: 1500
        , killer: true
    });
    n.show();
    <?php } ?>
</script>
<style>
    .jssocials-share-link:hover, .jssocials-share-link:focus, .jssocials-share-link:active {
        border: none;
        color: #9b6505;
    }
    .jssocials-share-link {

        border-radius: unset;
        border: none;
</style>
<div id="preloader">
    <div class="preloader"><span></span><span></span></div>
</div>

<div id="main-wrapper">

    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->
    <!-- Start Navigation -->
    <div class="header header-transparent change-logo">
        <div class="container">
            <nav id="navigation" class="navigation navigation-landscape">
                <div class="nav-header">
                    <a class="nav-brand static-logo" href="index.html"><img
                                src="<?= base_url() . 'assets_web/img' ?>/logo-light.png" class="logo"
                                alt="images"/></a>
                    <a class="nav-brand fixed-logo" href="index.html"><img
                                src="<?= base_url() . 'assets_web/img' ?>/logo.png" class="logo" alt="images"/></a>
                    <div class="nav-toggle"></div>
                </div>
                <div class="nav-menus-wrapper" style="transition-property: none;">
                    <ul class="nav-menu">
                        <li class="active"><a href="<?=base_url()?>"><?=translate_web('Home')?></a></li>

                        <li><a href="<?=base_url()?>about_us"><?=translate_web('About')?></a></li>

                        <li><a href="<?=base_url()?>projects"><?=translate_web('Projects')?></a></li>

                        <li><a href="<?=base_url()?>blogs"><?=translate_web('Blog')?></a></li>

                        <li><a href="<?=base_url()?>contact_us"><?=translate_web('Contact_Us')?></a></li>

                        <li><a href="#!"><?=translate_web('English')?> <span class="submenu-indicator"></span></a>
                            <ul class="nav-dropdown nav-submenu">
                                <li><a href="#!"><?=translate_web('Arabic')?></a></li>
                                <li><a href="#!"><?=translate_web('Russian')?></a></li>
                            </ul>

                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <?php
    if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
    }
    unset($_SESSION['message']);
    ?>
    <?php $this->load->view($subview); ?>
    <!-- End Navigation -->
    <div class="clearfix"></div>
    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->

    <!-- ============================ Footer Start ================================== -->
    <footer class="dark-footer skin-dark-footer">
        <div>
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="footer-widget">
                            <img src="<?= base_url() . 'assets_web/img' ?>/logo-light.png" class="img-footer"
                                 alt="images"/>
                            <p>At Mada’in Properties PJSC, we exist to create innovative, boutique properties that
                                surpass all expectations in detail, design and 5-star experiences.
                                boutique properties that surpass all expectations in detail, design and 5-star
                                experiences.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="footer-widget">
                            <h4 class="widget-title">Contact Info</h4>
                            <div class="footer-add">
                                <p><i class="fa-solid fa-location-dot"></i>Marina Arcade Tower - Al Naseem St - Dubai
                                    Marina - Dubai.</p>
                                <p><a><i class="fa-solid fa-phone"></i>+971 56 477 7666 </a></p>
                                <p><a><i class="fa-solid fa-envelope"></i>Sales@madain.ae </a></p>
                                <p><a><i class="fa-solid fa-envelope"></i>Info@madain.ae</a></p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="widget-title">Our Pages</h4>
                            <ul class="footer-menu">
                                <li><i class="fa-solid fa-arrow-right"></i><a href="Careers.html">Careers</a></li>
                                <li><i class="fa-solid fa-arrow-right"></i><a href="projects.html">Projects</a></li>
                                <li><i class="fa-solid fa-arrow-right"></i><a href="Blog.html">Blog</a></li>
                                <li><i class="fa-solid fa-arrow-right"></i><a href="sitemap.html">Sitemap</a></li>
                                <li><i class="fa-solid fa-arrow-right"></i><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="widget-title">About us</h4>
                            <ul class="footer-menu">
                                <li><i class="fa-solid fa-arrow-right"></i><a href="about-us.html">About Us</a></li>
                                <li><i class="fa-solid fa-arrow-right"></i><a href="about-us.html#team">Our Team</a>
                                </li>
                                <li><i class="fa-solid fa-arrow-right"></i><a
                                            href="about-us.html#about-section">Mission</a></li>
                                <li><i class="fa-solid fa-arrow-right"></i><a
                                            href="about-us.html#about-section">Vission</a></li>
                                <li><i class="fa-solid fa-arrow-right"></i><a
                                            href="about-us.html#about-section">History</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6 col-md-6">
                        <p class="mb-0">© 2023 MADA'IN. All Rights Reserved</p>
                    </div>

                    <div class="col-lg-6 col-md-6 text-right">
                        <ul class="footer-bottom-social">
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- ============================ Footer End ================================== -->

    <!-- float -->
    <section class="floatBtns">
        <a class="main">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                 xmlns:svgjs="http://svgjs.com/svgjs" width="24" height="24" x="0" y="0" viewBox="0 0 512 512"
                 style="enable-background:new 0 0 512 512" xml:space="preserve">
				<g>
                    <g data-name="Layer 16">
                        <circle cx="256" cy="256" r="70.71" fill="#000000" data-original="#000000"></circle>
                        <path
                                d="M442.78 282.43a48.59 48.59 0 0 0-15.7 11.66l-73.25-24.9a98.1 98.1 0 0 1-12.25 36l73.28 24.91a48.63 48.63 0 1 0 27.92-47.64zM69.22 131.78c.75-.35 1.49-.72 2.21-1.1l97.4 79a99.34 99.34 0 0 1 24-29.48l-97.47-79.04a48.61 48.61 0 1 0-26.14 30.62zM322.23 394.23l-17.52-52.4a97.91 97.91 0 0 1-36 12.07l17.5 52.37c-1 .74-1.92 1.5-2.85 2.3a58.93 58.93 0 1 0 38.9-14.34zM337.91 201l90.67-90.67a58 58 0 1 0-26.87-26.87L311 174.09A99.57 99.57 0 0 1 337.91 201zM174.18 311.17l-99.77 100.1a53 53 0 1 0 26.91 26.83L201.1 338a99.6 99.6 0 0 1-26.92-26.83z"
                                fill="#000000" data-original="#000000"></path>
                    </g>
                </g>
			  </svg>
        </a>
        <div class="subs">
            <!-- sub -->
            <a href="#!" target="_blank"> <i class="fa-brands fa-linkedin-in"></i> </a>
            <!-- sub -->
            <a href="#!" target="_blank"> <i class="fa-brands fa-instagram"></i> </a>
            <!-- sub -->
            <a href="#!" target="_blank"> <i class="fa-brands fa-twitter"></i> </a>
            <!-- sub -->
            <a href="#!" target="_blank"> <i class="fa-brands fa-tiktok"></i> </a>
            <!-- sub -->
            <a href="#!" target="_blank"> <i class="fa-brands fa-youtube"></i>
                <!-- sub -->
                <a href="#!" target="_blank"> <i class="fa-brands fa-snapchat"></i>
                </a>
                <!-- sub -->
                <a href="#!" target="_blank"> <i class="fa-sharp fa-solid fa-location-dot"></i> </a>
                </span>
        </div>
    </section>

    <!-- Sign Up Modal -->
    <div class="modal fade signup" id="register" tabindex="-1" role="dialog" aria-labelledby="sign-up"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
            <div class="modal-content" id="sign-up">
                <span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"></span>
                <div class="modal-body">
                    <h4 class="modal-header-title">Register Your Interset</h4>
                    <div class="login-form">
                        <form>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <input type="text" class="form-control" placeholder="First Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <input type="text" class="form-control" placeholder="Last Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <input type="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <input type="text" class="form-control" placeholder="Phone">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <select class="form-control">
                                                <option>Nationality</option>
                                                <option>Albanian</option>
                                                <option>American</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-md full-width btn-theme-light-2 rounded">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
    <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="fa-solid fa-arrow-up"></i></a>

    <div class="ba-we-love-subscribers-wrap">
        <div class="ba-we-love-subscribers popup-ani">
            <header>
                <h1>Contact us</h1>
                <p>Use the form below to contact us!</p>
            </header>
            <form action="" method="post" target="popupwindow">
                <input name="name" placeholder="Your Name" type="text" value=""><br>
                <input name="email" placeholder="Your Email" type="email" value=""><br>
                <input name="phone" placeholder="Your Phone" type="tel" value=""><br>
                <textarea placeholder="Type Your Message"></textarea>
                <input class="logo-ani" name="submit" type="submit"> <input name="uri" type="hidden"
                                                                            value="barreldotim">
            </form>
        </div>
        <div class="ba-we-love-subscribers-fab">
            <div class="wrap">
                <i class="fas fa-envelope"></i>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->


<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?= base_url() . 'assets_web/js' ?>/jquery.min.js"></script>
<script src="<?= base_url() . 'assets_web/js' ?>/popper.min.js"></script>
<script src="<?= base_url() . 'assets_web/js' ?>/bootstrap.min.js"></script>
<script src="<?= base_url() . 'assets_web/js' ?>/select2.min.js"></script>
<script src="<?= base_url() . 'assets_web/js' ?>/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url() . 'assets_web/js' ?>/slick.js"></script>
<script src="<?= base_url() . 'assets_web/js' ?>/slider-bg.js"></script>
<script src="<?= base_url() . 'assets_web/js' ?>/lightbox.js"></script>
<script src="<?= base_url() . 'assets_web/js' ?>/imagesloaded.js"></script>
<script src="<?= base_url() . 'assets_web/js' ?>/custom.js"></script>

<script>
    $('#Types').select2({
        placeholder: "<?=translate_web('Type')?>",
        allowClear: true
    });
    $('#ptypes').select2({
        placeholder: "<?=translate_web('Bedrooms')?>",
        allowClear: true
    });
    $('#location').select2({
        placeholder: "<?=translate_web('AED_750K_-_AED_1M')?>",
        allowClear: true
    });
</script>

<!--<script defer src="--><?//= base_url() . 'assets_web/fontawesome/js/' ?><!--/all.js"></script>-->

<script src="<?= base_url() . 'assets_web/jssocials' ?>/jssocials.js"></script>
<script>
    var shares = (typeof window.orientation !== "undefined" ? [ "twitter", "facebook", "linkedin", "whatsapp","telegram","messenger"] : [ "twitter", "facebook", "linkedin", "whatsapp","telegram","messenger"]);
    var title_page=$(document).find("title").text();
    var jsSocials;
    $(document).ready(function() {

        jsSocials= $("#share").jsSocials({
            url: decodeURIComponent(window.location.href),
            showCount: false,
            showLabel: false,
            shareIn: "popup",
            text: title_page,
            shares: shares,
        });
    });
</script>
</body>
</html>
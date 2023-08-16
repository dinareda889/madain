<div class="clearfix"></div>
<!-- ============================================================== -->
<!-- Top header  -->
<!-- ============================================================== -->

<!-- ============================ Hero Banner  Start================================== -->
<div class="hero-banner vedio-banner">
    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="<?= base_url() . 'assets_web/img' ?>/vedio/vedio.mp4" type="video/mp4">
    </video>
    <div class="container">
        <!-- <div class="logo-banner-div">
            <img src="<?= base_url() . 'assets_web/img' ?>/logo.png" alt="logo-image" class="banner-img-logo">
        </div> -->

        <div class="full-search-2 eclip-search italian-search hero-search-radius shadow">
            <div class="hero-search-content">

                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 b-r">
                        <div class="form-group">
                            <div class="input-with-icon">
                                <select id="Types" class="form-control">
                                    <option value="">&nbsp;</option>
                                    <option value="1">All</option>
                                    <option value="2">Apartments</option>
                                    <option value="3">Villas</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="form-group">
                            <div class="input-with-icon">
                                <select id="ptypes" class="form-control">
                                    <option value="">&nbsp;</option>
                                    <option value="1">0.5</option>
                                    <option value="2">1</option>
                                    <option value="3">1.5</option>
                                    <option value="4">2</option>
                                    <option value="5">2.5</option>
                                    <option value="6">3</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="form-group">
                            <div class="input-with-icon b-l">
                                <select id="location" class="form-control">
                                    <option value="">&nbsp;</option>
                                    <option value="1">AED 750K - AED 1M</option>
                                    <option value="2">AED 1M - AED 2M</option>
                                    <option value="3">AED 2M - AED 3M</option>
                                    <option value="4">AED 3M - AED 4M</option>
                                    <option value="5">AED 4M - AED 5M</option>
                                    <option value="6">AED 5M - AED 6M</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-2 col-sm-12">
                        <div class="form-group">
                            <a href="#" class="btn search-btn" data-bs-toggle="modal" data-bs-target="#register">Search</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================ Hero Banner End ================================== -->

<!-- ============================ About us Start ========================================= -->
<div class="about-us-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="about-us-img-wrap about-img-left">
                    <img src="<?php if (!empty($this->company_data->about_image) && (file_exists('uploads/main/' . $this->company_data->about_image))) {

                        echo base_url() . "uploads/main/" .$this->company_data->about_image;

                    } else {

                        echo base_url() . 'uploads/defult_image.jpg';


                    } ?>" alt="About Us Image">
                    <div class="about-us-img-info  about-us-img-info-3">

                        <div class="ltn__video-img ltn__animation-pulse1">
                            <img src="<?php if (!empty($this->company_data->about_image) && (file_exists('uploads/main/' . $this->company_data->about_image))) {

                                echo base_url() . "uploads/main/" .$this->company_data->about_image;

                            } else {

                                echo base_url() . 'uploads/defult_image.jpg';


                            } ?>" alt="images">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="about-us-info-wrap">
                    <div class="section-title-area ltn__section-title-2--- mb-20">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color"><?=translate_web('About_us')?></h6>
                        <h1 class="section-title"><?=translate_web('Welcome_To_Mada’in._Setting_The_Benchmark_For_Tomorrow’s_Living..')?></h1>
                        <p><?php if ($this->session->userdata('site_lang') && ($this->session->userdata('site_lang') == 'english')) {
                          echo $about_us[0]->about_us_en;
                        }elseif($this->session->userdata('site_lang') && ($this->session->userdata('site_lang') == 'russian')){
                                echo $about_us[0]->about_us_ru;
                            }else{
                                echo $about_us[0]->about_us_ar;
                            }
                        ?>
                        </p>
                    </div>
                    <ul class="about-us-list clearfix">
                        <li>
                            <i class="flaticon-home-2"></i>
                            Smart Home Design
                        </li>
                        <li>
                            <i class="flaticon-mountain"></i>
                            Beautiful Scene Around
                        </li>
                        <li>
                            <i class="flaticon-heart"></i>
                            Exceptional Lifestyle
                        </li>
                        <li>
                            <i class="flaticon-secure"></i>
                            Complete 24/7 Security
                        </li>
                    </ul>
                    <div class="about-callout bg-overlay-theme-05  mt-30">
                        <p>"Discover our meticulously designed apartments and unlock a world designed apartments and unlock a world" </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ==================================== About us End =================================== -->
<!-- ============================ Projects Start ================================== -->
<section class="bg-light projects">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10 text-center">
                <div class="sec-heading center">
                    <h2>our Projects</h2>
                    <p>Discover our meticulously designed apartments and unlock a world of elegance and comfort
                        that will surpass your expectations. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="location-property-wrap">
                    <div class="location-property-thumb">
                        <a href="project-details.html">
                            <img src="<?= base_url() . 'assets_web/img' ?>/projects/project-5.jpeg" class="img-fluid" alt="images" /></a>
                    </div>
                    <div class="location-property-content">
                        <div class="lp-content-flex">
                            <h4 class="lp-content-title">Marina Arcade_The Good Life</h4>
                            <span>Project | Category</span>
                        </div>
                        <div class="lp-content-right">
                            <a href="project-details.html" class="lp-property-view">
                                <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="location-property-wrap">
                    <div class="location-property-thumb">
                        <a href="project-details.html"><img src="<?= base_url() . 'assets_web/img' ?>/c-2.jpg" class="img-fluid" alt="images" /></a>
                    </div>
                    <div class="location-property-content">
                        <div class="lp-content-flex">
                            <h4 class="lp-content-title">Madain Square</h4>
                            <span>Project | Category</span>
                        </div>
                        <div class="lp-content-right">
                            <a href="project-details.html" class="lp-property-view"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="location-property-wrap">
                    <div class="location-property-thumb">
                        <a href="project-details.html"><img src="<?= base_url() . 'assets_web/img' ?>/c-6.jpeg" class="img-fluid" alt="images" /></a>
                    </div>
                    <div class="location-property-content">
                        <div class="lp-content-flex">
                            <h4 class="lp-content-title">Madain Tower</h4>
                            <span>Project | Category</span>
                        </div>
                        <div class="lp-content-right">
                            <a href="project-details.html" class="lp-property-view"><i class="fas fa-arrow-right"></i></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="location-property-wrap">
                    <div class="location-property-thumb">
                        <a href="project-details.html"><img src="<?= base_url() . 'assets_web/img' ?>/c-2.jpg" class="img-fluid" alt="images" /></a>
                    </div>
                    <div class="location-property-content">
                        <div class="lp-content-flex">
                            <h4 class="lp-content-title">Madain Square</h4>
                            <span>Project | Category</span>
                        </div>
                        <div class="lp-content-right">
                            <a href="project-details.html" class="lp-property-view"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="location-property-wrap">
                    <div class="location-property-thumb">
                        <a href="project-details.html"><img src="<?= base_url() . 'assets_web/img' ?>/c-1.jpg" class="img-fluid" alt="images" /></a>
                    </div>
                    <div class="location-property-content">
                        <div class="lp-content-flex">
                            <h4 class="lp-content-title">Madain Tower</h4>
                            <span>Project | Category</span>
                        </div>
                        <div class="lp-content-right">
                            <a href="project-details.html" class="lp-property-view"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="location-property-wrap">
                    <div class="location-property-thumb">
                        <a href="project-details.html"><img src="<?= base_url() . 'assets_web/img' ?>/c-3.jpg" class="img-fluid" alt="images" /></a>
                    </div>
                    <div class="location-property-content">
                        <div class="lp-content-flex">
                            <h4 class="lp-content-title">Marina Arcade</h4>
                            <span>Project | Category</span>
                        </div>
                        <div class="lp-content-right">
                            <a href="project-details.html" class="lp-property-view"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <a href="projects.html" class="btn btn-theme-light rounded">Browse More Projects</a>
            </div>
        </div>
    </div>
</section>
<!-- ============================ Projects End ================================== -->
<!-- ============================ How To Use Start ================================== -->
<section>
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10 text-center">
                <div class="sec-heading center">
                    <h2>How It Works?</h2>
                    <p>Discover our meticulously designed apartments and unlock a world of elegance and comfort
                        that will surpass your expectations</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="middle-icon-features-item">
                    <div class="icon-features-wrap">
                        <div class="middle-icon-large-features-box f-light-success">
                            <i class="fa-solid fa-map-location-dot"></i></div></div>
                    <div class="middle-icon-features-content">
                        <h4>Evaluate Property</h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have Ipsum available.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="middle-icon-features-item">
                    <div class="icon-features-wrap">
                        <div class="middle-icon-large-features-box f-light-success">
                            <i class="fa-solid fa-user-group"></i></div></div>
                    <div class="middle-icon-features-content">
                        <h4>Meet Your Agent</h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have Ipsum available.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="middle-icon-features-item remove">
                    <div class="icon-features-wrap">
                        <div class="middle-icon-large-features-box f-light-success">
                            <i class="fa-solid fa-clipboard-check"></i></div></div>
                    <div class="middle-icon-features-content">
                        <h4>Close The Deal</h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have Ipsum available.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<div class="clearfix"></div>
<!-- ============================ How To Use End ====================== -->

<!-- ================================= Blog Start ================================== -->
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10 text-center">
                <div class="sec-heading center">
                    <h2>Our Blog</h2>
                    <p>Discover our meticulously designed apartments and unlock a world of elegance and
                        comfort that will surpass your expectations</p>
                </div>
            </div>
        </div>
        <div class="row">

            <!-- Single blog Grid -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-wrap-grid">

                    <div class="blog-thumb">
                        <a href="blog-detail.html"><img src="<?= base_url() . 'assets_web/img' ?>/p-11.jpeg" class="img-fluid" alt="images" /></a>
                    </div>

                    <div class="blog-info">
                        <span class="post-date"><i class="fa-regular fa-calendar-days"></i>30 Mars 2023</span>
                    </div>

                    <div class="blog-body">
                        <h4 class="bl-title"><a href="#!">Why people choose us for own properties</a></h4>
                        <p>At Mada’in Properties PJSC, we exist to create innovative, boutique properties that surpass all expectations in detail </p>
                        <a href="blog-detail.html" class="bl-continue">Read more <i class="fas fa-arrow-right"></i></a>
                    </div>

                </div>
            </div>

            <!-- Single blog Grid -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-wrap-grid">

                    <div class="blog-thumb">
                        <a href="blog-detail.html"><img src="<?= base_url() . 'assets_web/img' ?>/p-8.jpeg" class="img-fluid" alt="images" /></a>
                    </div>

                    <div class="blog-info">
                        <span class="post-date"><i class="fa-regular fa-calendar-days"></i>10 August 2022</span>
                    </div>

                    <div class="blog-body">
                        <h4 class="bl-title"><a href="#!">List of benifits and impressive MADA'IN services</a></h4>
                        <p>At Mada’in Properties PJSC, we exist to create innovative, boutique properties that surpass all expectations in detail </p>
                        <a href="blog-detail.html" class="bl-continue">Read more <i class="fas fa-arrow-right"></i></a>
                    </div>

                </div>
            </div>

            <!-- Single blog Grid -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-wrap-grid">

                    <div class="blog-thumb">
                        <a href="blog-detail.html"><img src="<?= base_url() . 'assets_web/img' ?>/p-10.jpeg" class="img-fluid" alt="images" /></a>
                    </div>

                    <div class="blog-info">
                        <span class="post-date"><i class="fa-regular fa-calendar-days"></i>30 April 2023</span>
                    </div>

                    <div class="blog-body">
                        <h4 class="bl-title"><a href="#!">What people says about MADA'IN properties</a></h4>
                        <p>At Mada’in Properties PJSC, we exist to create innovative, boutique properties that surpass all expectations in detail </p>
                        <a href="blog-detail.html" class="bl-continue">Read more  <i class="fas fa-arrow-right"></i> </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- =================================== Blog  End ====================================== -->

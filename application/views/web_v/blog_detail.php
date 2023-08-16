<!-- ============================ Page Title Start================================== -->
<div class="page-title">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                <h2 class="ipt-title"><?= translate_web('Blog_details') ?></h2>
                <span class="ipn-subtitle"><?= translate_web('Our_Latest_News') ?></span>

            </div>
        </div>
    </div>
</div>
<!-- ============================ Page Title End ================================== -->
<!--<pre>
    <?php /*print_r($one_blog) */?>
</pre>-->
<?php
if (isset($_SESSION['site_lang']) && (!empty($_SESSION['site_lang']))) {
    switch ($_SESSION['site_lang']) {
        case 'arabic':
            $name = 'name_ar';
            $description = 'description_ar';
            break;
        case 'english':
            $name = 'name_en';
            $description = 'description_en';
            break;
        case 'russian':
            $name = 'name_ru';
            $description = 'description_ru';
            break;
        default:
            $name = 'name_en';
            $description = 'description_en';
            break;
    }
}

?>
<!-- ============================ Agency List Start ================================== -->
<section class="gray-simple">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="blog-details single-post-item format-standard">
                    <div class="post-details">
                        <div class="featured_slick_gallery gray">
                            <div class="featured_slick_gallery-slide">
                                <?php if (isset($one_blog->imgs) && (!empty($one_blog->imgs))) {
                                    foreach ($one_blog->imgs as $img){
                                        if (isset($img->image) && (!empty($img->image))) {
                                            $img_url = base_url() . 'uploads/news/' . $img->image;
                                        } else {
                                            $img_url = base_url() . 'assets_web/img/p-1.jpg';

                                        }

                                    ?>
                                        <div class="featured_slick_padd"><a href="<?=$img_url?>" class="mfp-gallery">
                                                <img src="<?=$img_url?>" class="img-fluid mx-auto" alt="images"/>
                                            </a></div>
                                <?php }} ?>
                             <!--   <div class="featured_slick_padd"><a href="assets/img/p-1.jpg" class="mfp-gallery">
                                        <img src="<?= base_url() . 'assets_web/img' ?>/p-1.jpg" class="img-fluid mx-auto" alt="images"/>
                                    </a></div>
                                <div class="featured_slick_padd"><a href="assets/img/p-2.jpg" class="mfp-gallery">
                                        <img src="<?= base_url() . 'assets_web/img' ?>/p-2.jpg" class="img-fluid mx-auto" alt="images"/>
                                    </a></div>
                                <div class="featured_slick_padd"><a href="assets/img/p-3.jpg" class="mfp-gallery">
                                        <img src="<?= base_url() . 'assets_web/img' ?>/p-3.jpg" class="img-fluid mx-auto" alt="images"/>
                                    </a></div>
                                <div class="featured_slick_padd"><a href="assets/img/p-8.jpg" class="mfp-gallery">
                                        <img src="<?= base_url() . 'assets_web/img' ?>/p-8.jpg" class="img-fluid mx-auto" alt="images"/>
                                    </a></div>-->
                            </div>
                        </div>
                        <div class="post-top-meta">
                            <ul class="meta-comment-tag">
                                <li><a href="#"><span class="icons"><i class="fa-solid fa-user"></i></span>by Rosalina
                                        Doe</a></li>
                                <li><a href="#"><span class="icons"><i class="fa-solid fa-comment"></i></span>45
                                        Comments</a></li>
                            </ul>
                        </div>
                        <h2 class="post-title"><?= $one_blog->$name ?></h2>
                        <p><?= $one_blog->$description ?> </p>
                      <!--  <blockquote>
                            <span class="icon"><i class="fas fa-quote-left"></i></span>
                            <p class="text">Rove Hotels currently has four operational hotels in Dubai: Rove Downtown,
                                Rove City Centre, Rove Healthcare City and Rove Trade Centre..</p>
                            <h5 class="name">- MR Ahmed Mohamed</h5>
                        </blockquote>-->
                        <div class="post-bottom-meta">
                           <!-- <div class="post-tags">
                                <h4 class="pbm-title">Related Tags</h4>
                                <ul class="list">
                                    <li><a href="#">Apartment</a></li>
                                    <li><a href="#">Villas</a></li>
                                </ul>
                            </div>-->
                            <div class="post-share">
                                <h4 class="pbm-title">Social Share</h4>
                                <ul class="list">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-snapchat"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Comment -->
                <div class="blog-details single-post-item format-standard">

                    <div class="comment-area">
                        <div class="all-comments">
                            <h3 class="comments-title">03 Comments</h3>
                            <div class="comment-list">
                                <ul>
                                    <li class="single-comment">
                                        <article>
                                            <div class="comment-author">
                                                <img src="<?= base_url() . 'assets_web/img' ?>/team-1.png" alt="images">
                                            </div>
                                            <div class="comment-details">
                                                <div class="comment-meta">
                                                    <div class="comment-left-meta">
                                                        <h4 class="author-name">Mohamed Ahmed <span
                                                                    class="selected"></span></h4>
                                                        <div class="comment-date">19th May 2023</div>
                                                    </div>
                                                    <div class="comment-reply">
                                                        <a href="#" class="reply"><span class="icona"></span> Reply</a>
                                                    </div>
                                                </div>
                                                <div class="comment-text">
                                                    <p>How we make the difference, and what sets us apart, is our
                                                        passion for innovative design, superior product value, timely
                                                        delivery and meticulous standards.
                                                        By striving to raise every bar in the development industry.</p>
                                                </div>
                                            </div>
                                        </article>
                                        <ul class="children">
                                            <li class="single-comment">
                                                <article>
                                                    <div class="comment-author">
                                                        <img src="<?= base_url() . 'assets_web/img' ?>/team-1.png" alt="images">
                                                    </div>
                                                    <div class="comment-details">
                                                        <div class="comment-meta">
                                                            <div class="comment-left-meta">
                                                                <h4 class="author-name">Ahmed Ali </h4>
                                                                <div class="comment-date">20th May 2023</div>
                                                            </div>
                                                            <div class="comment-reply">
                                                                <a href="#" class="reply"><span class="icons"></span>
                                                                    Reply</a>
                                                            </div>
                                                        </div>
                                                        <div class="comment-text">
                                                            <p>How we make the difference, and what sets us apart, is
                                                                our passion for innovative design,
                                                                superior product value, timely delivery and meticulous
                                                                standards.</p>
                                                        </div>
                                                    </div>
                                                </article>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="single-comment">
                                        <article>
                                            <div class="comment-author">
                                                <img src="<?= base_url() . 'assets_web/img' ?>/team-1.png" alt="images">
                                            </div>
                                            <div class="comment-details">
                                                <div class="comment-meta">
                                                    <div class="comment-left-meta">
                                                        <h4 class="author-name">Ali Mohamed</h4>
                                                        <div class="comment-date">19th May 2023</div>
                                                    </div>
                                                    <div class="comment-reply">
                                                        <a href="#" class="reply"><span class="icons"></span> Reply</a>
                                                    </div>
                                                </div>
                                                <div class="comment-text">
                                                    <p>How we make the difference, and what sets us apart, is our
                                                        passion for innovative design, superior product value, timely
                                                        delivery and meticulous standards.
                                                        By striving to raise every bar in the development industry.</p>
                                                </div>
                                            </div>
                                        </article>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="comment-box submit-form">
                            <h3 class="reply-title">Post Comment</h3>
                            <div class="comment-form">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <textarea name="comment" class="form-control" cols="30" rows="6"
                                                          placeholder="Type your comments...."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <a href="#" class="btn btn-theme-light-2 rounded full-width">Send
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>


            </div>

            <!-- Single blog Grid -->
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">

                <!-- Trending Posts -->
                <div class="single-widgets widget_thumb_post">
                    <h4 class="title">Trending Posts</h4>
                    <ul>
                        <li>
										<span class="left">
											<img src="<?= base_url() . 'assets_web/img' ?>/p-1.jpg" alt="images" class="">
										</span>
                            <span class="right">
											<a class="feed-title"
                                               href="#">Why People Choose MADA'IN For Own Properties.</a>
											<span class="post-date"><i
                                                        class="fa-solid fa-calendar"></i>10 Min ago</span>
										</span>
                        </li>
                        <li>
										<span class="left">
											<img src="<?= base_url() . 'assets_web/img' ?>/p-8.jpg" alt="images" class="">
										</span>
                            <span class="right">
											<a class="feed-title"
                                               href="#">Why People Choose MADA'IN For Own Properties.</a>
											<span class="post-date"><i
                                                        class="fa-solid fa-calendar"></i>2 Hours ago</span>
										</span>
                        </li>
                        <li>
										<span class="left">
											<img src="<?= base_url() . 'assets_web/img' ?>/p-11.jpeg" alt="images" class="">
										</span>
                            <span class="right">
											<a class="feed-title"
                                               href="#">Why People Choose MADA'IN For Own Properties.</a>
											<span class="post-date"><i
                                                        class="fa-solid fa-calendar"></i>4 Hours ago</span>
										</span>
                        </li>
                        <li>
										<span class="left">
											<img src="<?= base_url() . 'assets_web/img' ?>/p-10.jpeg" alt="images" class="">
										</span>
                            <span class="right">
											<a class="feed-title"
                                               href="#">Why People Choose MADA'IN For Own Properties.</a>
											<span class="post-date"><i
                                                        class="fa-solid fa-calendar"></i>7 Hours ago</span>
										</span>
                        </li>
                        <li>
										<span class="left">
											<img src="<?= base_url() . 'assets_web/img' ?>/p-6.jpg" alt="images" class="">
										</span>
                            <span class="right">
											<a class="feed-title"
                                               href="#">Why People Choose MADA'IN For Own Properties.</a>
											<span class="post-date"><i
                                                        class="fa-solid fa-calendar"></i>3 Days ago</span>
										</span>
                        </li>
                    </ul>
                </div>


            </div>

        </div>
        <!-- /row -->

    </div>

</section>
<!-- ============================ Agency List End ================================== -->


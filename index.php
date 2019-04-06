<?php include 'cms/lib/Session.php' ?>
<?php include 'cms/constants/constants.php'; ?>
<?php include 'cms/lib/Database.php' ?>
<?php include 'cms/lib/Main.php' ?>

<?php $con = new Main(); ?>
<?php include "inc/top_header.php" ?>

<body>
<!-- Preloader -->
<div class="preloader d-flex align-items-center justify-content-center">
    <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>


<?php include "inc/navigation.php"; ?>

<!-- ##### Hero Area Start ##### -->
<section class="hero--area section-padding-80">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-12 col-md-7 col-lg-8">
                <div class="tab-content">
                    <!--                        Todo: Banner Section -->

                    <?php $results = $con->getLimitData("contents", 1);
                    //                        print_r($results);

                    foreach ($results as $result) {
                        ?>
                        <div class="tab-pane fade show active" id="post-1" role="tabpanel" aria-labelledby="post-1-tab">
                            <!-- Single Feature Post -->
                            <div class="single-feature-post video-post bg-img"
                                 style="background-image: url(cms/<?php echo $result['postal_img'] ?>);">
                                <!-- Play Button -->
                                <a href="video_post.php?id=<?php echo $result['id'] ?>" class="btn play-btn"><i
                                            class="fa fa-play" aria-hidden="true"></i></a>

                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="catBycontent.php?cat_id=<?php echo $result['postal_img'] ?>"
                                       class="post-cata"><?php echo $result['cat_id'] ?></a>
                                    <a href="single_post.php" class="post-title"><?php echo $result['title'] ?></a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
                                        <a href="#"><i class="fa fa-eye"
                                                       aria-hidden="true"></i> <?php echo $result['view'] ?></a>
                                            <div id="likeCountHide"
                                               onclick="likeUpdate(<?php echo $result['id']; ?>, <?php echo $result['like_count']; ?>)"><i
                                                        class="fa fa-thumbs-o-up"
                                                        aria-hidden="true"></i> <?php echo $result['like_count'] ?></div>
                                        <div id="likeCount"></div>
                                    </div>
                                </div>

                                <!-- Video Duration -->
                                <span class="video-duration">05.03</span>
                            </div>
                        </div>
                    <?php } ?>

                    <!--                        TODO: Releted Content-->
                    <div class="tab-pane fade" id="post-2" role="tabpanel" aria-labelledby="post-2-tab">
                        <!-- Single Feature Post -->
                        <div class="single-feature-post video-post bg-img"
                             style="background-image: url(assets/img/bg-img/8.jpg);">
                            <!-- Play Button -->
                            <a href="video_post.php" class="btn play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>

                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="post-cata">Sports</a>
                                <a href="single_post.php" class="post-title">Reunification of migrant toddlers, parents
                                    should be completed Thursday</a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>
                                </div>
                            </div>

                            <!-- Video Duration -->
                            <span class="video-duration">05.03</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-5 col-lg-4">
                <ul class="nav vizew-nav-tab" role="tablist">

                    <?php
                    $results = $con->getData('contents');
                    foreach ($results as $result) {
                        ?>

                        <li class="nav-item">
                            <a class="nav-link" href="video_post.php?id=<?php echo $result['id']; ?>" role="tab"
                               aria-controls="post-5" aria-selected="false">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post style-2 d-flex align-items-center">
                                    <div class="post-thumbnail">
                                        <img src="cms/<?php echo $result['postal_img']; ?>" alt="">
                                    </div>
                                    <div class="post-content">
                                        <h6 class="post-title"><?php echo $result['title']; ?></h6>
                                        <div class="post-meta d-flex justify-content-between">
                                            <span><i class="fa fa-comments-o" aria-hidden="true"></i> 14</span>
                                            <span><i class="fa fa-eye"
                                                     aria-hidden="true"></i> <?php echo $result['view']; ?></span>
                                            <span><i class="fa fa-thumbs-o-up"
                                                     aria-hidden="true"></i> <?php echo $result['like_count']; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>

                    <?php } ?>

                </ul>
            </div>
        </div>
    </div>
</section>
<!-- ##### Hero Area End ##### -->

<!-- ##### Trending Posts Area Start ##### -->
<section class="trending-posts-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Heading -->
                <div class="section-heading">
                    <h4>Trending Videos</h4>
                    <div class="line"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Single Blog Post -->


            <?php $results = $con->getLimitData("contents", 3);
            //                        print_r($results);

            foreach ($results as $result) {
                ?>
                <div class="col-12 col-md-4">
                    <div class="single-post-area mb-80">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="cms/<?php echo $result['postal_img']; ?>"
                                 alt="cms/<?php echo $result['title']; ?>">

                            <!-- Video Duration -->
                            <span class="video-duration">05.03</span>
                        </div>

                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="#" class="post-cata cata-sm cata-success"><?php echo $result['cat_id']; ?></a>
                            <a href="single_post.php" class="post-title"><?php echo $result['short_desc']; ?></a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 22</a>
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i><?php echo $result['view']; ?>
                                </a>
                                <a href="#" onclick="alert(<?php echo $result['like_count']; ?>)"><i
                                            class="fa fa-thumbs-o-up"
                                            aria-hidden="true"></i><?php echo $result['like_count']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </div>

    </div>
</section>
<!-- ##### Trending Posts Area End ##### -->

<!-- ##### Vizew Post Area Start ##### -->
<section class="vizew-post-area mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-7 col-lg-8">
                <div class="all-posts-area">
                    <!-- Section Heading -->
                    <div class="section-heading style-2">
                        <h4>Featured Videos</h4>
                        <div class="line"></div>
                    </div>

                    <!-- Featured Post Slides -->
                    <div class="featured-post-slides owl-carousel mb-30">
                        <!-- Single Feature Post -->
                        <div class="single-feature-post video-post bg-img"
                             style="background-image: url(assets/img/bg-img/14.jpg);">
                            <!-- Play Button -->
                            <a href="video_post.php" class="btn play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>

                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="post-cata">Sports</a>
                                <a href="single_post.php" class="post-title">Reunification of migrant toddlers, parents
                                    should be completed Thursday</a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>
                                </div>
                            </div>

                            <!-- Video Duration -->
                            <span class="video-duration">05.03</span>
                        </div>

                        <!-- Single Feature Post -->
                        <div class="single-feature-post video-post bg-img"
                             style="background-image: url(assets/img/bg-img/7.jpg);">
                            <!-- Play Button -->
                            <a href="video_post.php" class="btn play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>

                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="post-cata">Sports</a>
                                <a href="single_post.php" class="post-title">Reunification of migrant toddlers, parents
                                    should be completed Thursday</a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>
                                </div>
                            </div>

                            <!-- Video Duration -->
                            <span class="video-duration">05.03</span>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Single Blog Post -->
                        <div class="col-12 col-md-6">
                            <div class="single-post-area mb-80">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <img src="assets/img/bg-img/12.jpg" alt="">

                                    <!-- Video Duration -->
                                    <span class="video-duration">05.03</span>
                                </div>

                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="#" class="post-cata cata-sm cata-danger">Game</a>
                                    <a href="single_post.php" class="post-title">Searching for the 'angel' who held me
                                        on Westminste Bridge</a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 28</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 17</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="col-12 col-md-6">
                            <div class="single-post-area mb-80">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <img src="assets/img/bg-img/13.jpg" alt="">

                                    <!-- Video Duration -->
                                    <span class="video-duration">05.03</span>
                                </div>

                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="#" class="post-cata cata-sm cata-primary">Business</a>
                                    <a href="single_post.php" class="post-title">Love Island star's boyfriend found dead
                                        after her funeral</a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 38</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <!-- Section Heading -->
                            <div class="section-heading style-2">
                                <h4>Sport Videos</h4>
                                <div class="line"></div>
                            </div>

                            <!-- Sports Video Slides -->
                            <div class="sport-video-slides owl-carousel mb-50">
                                <!-- Single Blog Post -->
                                <div class="single-post-area">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="assets/img/bg-img/15.jpg" alt="">

                                        <!-- Video Duration -->
                                        <span class="video-duration">05.03</span>
                                    </div>

                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="post-cata cata-sm cata-success">Sports</a>
                                        <a href="single_post.php" class="post-title">Searching for the 'angel' who held
                                            me on Westminster Bridge</a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 38</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-post-area">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="assets/img/bg-img/13.jpg" alt="">

                                        <!-- Video Duration -->
                                        <span class="video-duration">05.03</span>
                                    </div>

                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="post-cata cata-sm cata-success">Sports</a>
                                        <a href="single_post.php" class="post-title">Searching for the 'angel' who held
                                            me on Westminster Bridge</a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 38</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-6">
                            <!-- Section Heading -->
                            <div class="section-heading style-2">
                                <h4>Business Videos</h4>
                                <div class="line"></div>
                            </div>

                            <!-- Business Video Slides -->
                            <div class="business-video-slides owl-carousel mb-50">
                                <!-- Single Blog Post -->
                                <div class="single-post-area">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="assets/img/bg-img/17.jpg" alt="">

                                        <!-- Video Duration -->
                                        <span class="video-duration">05.03</span>
                                    </div>

                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="post-cata cata-sm cata-primary">Business</a>
                                        <a href="single_post.php" class="post-title">Full article Prince Charles's
                                            'urgent' global research</a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 38</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-post-area">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="assets/img/bg-img/13.jpg" alt="">

                                        <!-- Video Duration -->
                                        <span class="video-duration">05.03</span>
                                    </div>

                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="post-cata cata-sm cata-primary">Business</a>
                                        <a href="single_post.php" class="post-title">Full article Prince Charles's
                                            'urgent' global research</a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 38</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-30">
                        <!-- Single Blog Post -->
                        <div class="col-12 col-lg-6">
                            <div class="single-blog-post style-3 d-flex mb-50">
                                <div class="post-thumbnail">
                                    <img src="assets/img/bg-img/16.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="single_post.php" class="post-title">Epileptic boy's cannabis let through
                                        border</a>
                                    <div class="post-meta d-flex justify-content-between">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 16</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 26</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 17</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="col-12 col-lg-6">
                            <div class="single-blog-post style-3 d-flex mb-50">
                                <div class="post-thumbnail">
                                    <img src="assets/img/bg-img/18.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="single_post.php" class="post-title">Paramedics 'drilled into boat death
                                        woman'</a>
                                    <div class="post-meta d-flex justify-content-between">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 16</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 26</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 17</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="col-12 col-lg-6">
                            <div class="single-blog-post style-3 d-flex mb-50">
                                <div class="post-thumbnail">
                                    <img src="assets/img/bg-img/19.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="single_post.php" class="post-title">Tory vice-chairs quit over PM's Brexit
                                        plan</a>
                                    <div class="post-meta d-flex justify-content-between">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 16</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 26</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 17</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="col-12 col-lg-6">
                            <div class="single-blog-post style-3 d-flex mb-50">
                                <div class="post-thumbnail">
                                    <img src="assets/img/bg-img/20.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="single_post.php" class="post-title">Do This One Simple Action for an
                                        Absolutely</a>
                                    <div class="post-meta d-flex justify-content-between">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 16</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 26</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 17</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section Heading -->
                    <div class="section-heading style-2">
                        <h4>Latest News</h4>
                        <div class="line"></div>
                    </div>

                    <!-- Featured Post Slides -->
                    <div class="featured-post-slides owl-carousel mb-30">
                        <!-- Single Feature Post -->
                        <div class="single-feature-post video-post bg-img"
                             style="background-image: url(assets/img/bg-img/14.jpg);">
                            <!-- Play Button -->
                            <a href="video_post.php" class="btn play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>

                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="post-cata">Sports</a>
                                <a href="single_post.php" class="post-title">Reunification of migrant toddlers, parents
                                    should be completed Thursday</a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>
                                </div>
                            </div>

                            <!-- Video Duration -->
                            <span class="video-duration">05.03</span>
                        </div>

                        <!-- Single Feature Post -->
                        <div class="single-feature-post video-post bg-img"
                             style="background-image: url(assets/img/bg-img/7.jpg);">
                            <!-- Play Button -->
                            <a href="video_post.php" class="btn play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>

                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="post-cata">Sports</a>
                                <a href="single_post.php" class="post-title">Reunification of migrant toddlers, parents
                                    should be completed Thursday</a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>
                                </div>
                            </div>

                            <!-- Video Duration -->
                            <span class="video-duration">05.03</span>
                        </div>
                    </div>

                    <!-- Single Post Area -->
                    <div class="single-post-area mb-30">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-6">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <img src="assets/img/bg-img/21.jpg" alt="">

                                    <!-- Video Duration -->
                                    <span class="video-duration">05.03</span>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <!-- Post Content -->
                                <div class="post-content mt-0">
                                    <a href="#" class="post-cata cata-sm cata-success">Sports</a>
                                    <a href="single_post.php" class="post-title mb-2">May fights on after Johnson
                                        savages Brexit approach</a>
                                    <div class="post-meta d-flex align-items-center mb-2">
                                        <a href="#" class="post-author">By Jane</a>
                                        <i class="fa fa-circle" aria-hidden="true"></i>
                                        <a href="#" class="post-date">Sep 08, 2018</a>
                                    </div>
                                    <p class="mb-2">Quisque mollis tristique ante. Proin ligula eros, varius id
                                        tristique sit amet, rutrum non ligula.</p>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 32</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 42</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 7</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Post Area -->
                    <div class="single-post-area mb-30">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-6">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <img src="assets/img/bg-img/22.jpg" alt="">

                                    <!-- Video Duration -->
                                    <span class="video-duration">05.03</span>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <!-- Post Content -->
                                <div class="post-content mt-0">
                                    <a href="#" class="post-cata cata-sm cata-danger">Game</a>
                                    <a href="single_post.php" class="post-title mb-2">Thailand cave rescue: Boys 'doing
                                        well' after spending night</a>
                                    <div class="post-meta d-flex align-items-center mb-2">
                                        <a href="#" class="post-author">By Jane</a>
                                        <i class="fa fa-circle" aria-hidden="true"></i>
                                        <a href="#" class="post-date">Sep 08, 2018</a>
                                    </div>
                                    <p class="mb-2">Quisque mollis tristique ante. Proin ligula eros, varius id
                                        tristique sit amet, rutrum non ligula.</p>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 32</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 42</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 7</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Post Area -->
                    <div class="single-post-area mb-30">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-6">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <img src="assets/img/bg-img/23.jpg" alt="">

                                    <!-- Video Duration -->
                                    <span class="video-duration">05.03</span>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <!-- Post Content -->
                                <div class="post-content mt-0">
                                    <a href="#" class="post-cata cata-sm cata-primary">Business</a>
                                    <a href="single_post.php" class="post-title mb-2">Theresa May battles Brexiteer
                                        backlash amid disquiet</a>
                                    <div class="post-meta d-flex align-items-center mb-2">
                                        <a href="#" class="post-author">By Jane</a>
                                        <i class="fa fa-circle" aria-hidden="true"></i>
                                        <a href="#" class="post-date">Sep 08, 2018</a>
                                    </div>
                                    <p class="mb-2">Quisque mollis tristique ante. Proin ligula eros, varius id
                                        tristique sit amet, rutrum non ligula.</p>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 32</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 42</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 7</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Post Area -->
                    <div class="single-post-area mb-30">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-6">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <img src="assets/img/bg-img/24.jpg" alt="">

                                    <!-- Video Duration -->
                                    <span class="video-duration">05.03</span>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <!-- Post Content -->
                                <div class="post-content mt-0">
                                    <a href="#" class="post-cata cata-sm cata-danger">Game</a>
                                    <a href="single_post.php" class="post-title mb-2">Theresa May warned Brexit strategy
                                        'risks putting Jeremy Corbyn</a>
                                    <div class="post-meta d-flex align-items-center mb-2">
                                        <a href="#" class="post-author">By Jane</a>
                                        <i class="fa fa-circle" aria-hidden="true"></i>
                                        <a href="#" class="post-date">Sep 08, 2018</a>
                                    </div>
                                    <p class="mb-2">Quisque mollis tristique ante. Proin ligula eros, varius id
                                        tristique sit amet, rutrum non ligula.</p>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 32</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 42</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 7</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-12 col-md-5 col-lg-4">
                <div class="sidebar-area">

                    <!-- ***** Single Widget ***** -->
                    <div class="single-widget followers-widget mb-50">
                        <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span
                                    class="counter">198</span><span>Fan</span></a>
                        <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span
                                    class="counter">220</span><span>Followers</span></a>
                        <a href="#" class="google"><i class="fa fa-google" aria-hidden="true"></i><span class="counter">140</span><span>Subscribe</span></a>
                    </div>

                    <!-- ***** Single Widget ***** -->
                    <div class="single-widget latest-video-widget mb-50">
                        <!-- Section Heading -->
                        <div class="section-heading style-2 mb-30">
                            <h4>Latest Video</h4>
                            <div class="line"></div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-post-area mb-30">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="assets/img/bg-img/13.jpg" alt="">

                                <!-- Video Duration -->
                                <span class="video-duration">05.03</span>
                            </div>

                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="post-cata cata-sm cata-success">Sports</a>
                                <a href="single_post.php" class="post-title">Full article Prince Charles's 'urgent'
                                    global research</a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 38</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post d-flex">
                            <div class="post-thumbnail">
                                <img src="assets/img/bg-img/1.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single_post.php" class="post-title">DC Shoes: gymkhana five; the making of</a>
                                <div class="post-meta d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 29</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 08</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 23</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post d-flex">
                            <div class="post-thumbnail">
                                <img src="assets/img/bg-img/2.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single_post.php" class="post-title">Sweet Yummy Chocolatea Tea</a>
                                <div class="post-meta d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 17</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 33</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 26</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post d-flex">
                            <div class="post-thumbnail">
                                <img src="assets/img/bg-img/35.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single_post.php" class="post-title">How To Make Orange Chicken Recipe?</a>
                                <div class="post-meta d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 11</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 42</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 21</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ***** Single Widget ***** -->
                    <div class="single-widget add-widget mb-50">
                        <a href="#"><img src="assets/img/bg-img/add.png" alt=""></a>
                    </div>

                    <!-- ***** Sidebar Widget ***** -->
                    <div class="single-widget youtube-channel-widget mb-50">
                        <!-- Section Heading -->
                        <div class="section-heading style-2 mb-30">
                            <h4>Hot Channels</h4>
                            <div class="line"></div>
                        </div>

                        <!-- Single YouTube Channel -->
                        <div class="single-youtube-channel d-flex align-items-center">
                            <div class="youtube-channel-thumbnail">
                                <img src="assets/img/bg-img/25.jpg" alt="">
                            </div>
                            <div class="youtube-channel-content">
                                <a href="single_post.php" class="channel-title">Music Channel</a>
                                <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o"
                                                                         aria-hidden="true"></i> Subscribe</a>
                            </div>
                        </div>

                        <!-- Single YouTube Channel -->
                        <div class="single-youtube-channel d-flex align-items-center">
                            <div class="youtube-channel-thumbnail">
                                <img src="assets/img/bg-img/26.jpg" alt="">
                            </div>
                            <div class="youtube-channel-content">
                                <a href="single_post.php" class="channel-title">Trending Channel</a>
                                <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o"
                                                                         aria-hidden="true"></i> Subscribe</a>
                            </div>
                        </div>

                        <!-- Single YouTube Channel -->
                        <div class="single-youtube-channel d-flex align-items-center">
                            <div class="youtube-channel-thumbnail">
                                <img src="assets/img/bg-img/27.jpg" alt="">
                            </div>
                            <div class="youtube-channel-content">
                                <a href="single_post.php" class="channel-title">Travel Channel</a>
                                <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o"
                                                                         aria-hidden="true"></i> Subscribe</a>
                            </div>
                        </div>

                        <!-- Single YouTube Channel -->
                        <div class="single-youtube-channel d-flex align-items-center">
                            <div class="youtube-channel-thumbnail">
                                <img src="assets/img/bg-img/28.jpg" alt="">
                            </div>
                            <div class="youtube-channel-content">
                                <a href="single_post.php" class="channel-title">Sport Channel</a>
                                <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o"
                                                                         aria-hidden="true"></i> Subscribe</a>
                            </div>
                        </div>

                        <!-- Single YouTube Channel -->
                        <div class="single-youtube-channel d-flex align-items-center">
                            <div class="youtube-channel-thumbnail">
                                <img src="assets/img/bg-img/29.jpg" alt="">
                            </div>
                            <div class="youtube-channel-content">
                                <a href="single_post.php" class="channel-title">TV Show Channel</a>
                                <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o"
                                                                         aria-hidden="true"></i> Subscribe</a>
                            </div>
                        </div>
                    </div>

                    <!-- ***** Single Widget ***** -->
                    <div class="single-widget newsletter-widget mb-50">
                        <!-- Section Heading -->
                        <div class="section-heading style-2 mb-30">
                            <h4>Newsletter</h4>
                            <div class="line"></div>
                        </div>
                        <p>Subscribe our newsletter gor get notification about new updates, information discount,
                            etc.</p>
                        <!-- Newsletter Form -->
                        <div class="newsletter-form">
                            <form action="#" method="post">
                                <input type="email" name="nl-email" class="form-control mb-15" id="emailnl"
                                       placeholder="Enter your email">
                                <button type="submit" class="btn vizew-btn w-100">Subscribe</button>
                            </form>
                        </div>
                    </div>

                    <!-- ***** Single Widget ***** -->
                    <div class="single-widget mb-50">
                        <!-- Section Heading -->
                        <div class="section-heading style-2 mb-30">
                            <h4>Most Viewed Playlist</h4>
                            <div class="line"></div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post d-flex">
                            <div class="post-thumbnail">
                                <img src="assets/img/bg-img/1.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single_post.php" class="post-title">DC Shoes: gymkhana five; the making of</a>
                                <div class="post-meta d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post d-flex">
                            <div class="post-thumbnail">
                                <img src="assets/img/bg-img/2.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single_post.php" class="post-title">How To Make Orange Chicken Recipe?</a>
                                <div class="post-meta d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post d-flex">
                            <div class="post-thumbnail">
                                <img src="assets/img/bg-img/36.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single_post.php" class="post-title">Sweet Yummy Chocolate in the</a>
                                <div class="post-meta d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post d-flex">
                            <div class="post-thumbnail">
                                <img src="assets/img/bg-img/37.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single_post.php" class="post-title">DC Shoes: gymkhana five; the making of</a>
                                <div class="post-meta d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post d-flex">
                            <div class="post-thumbnail">
                                <img src="assets/img/bg-img/38.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single_post.php" class="post-title">How To Make Orange Chicken Recipe?</a>
                                <div class="post-meta d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Vizew Psot Area End ##### -->


<?php include 'inc/footer.php'; ?>

<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="assets/js/jquery-1.11.3.min.js"></script>
<script src="assets/js/jquery-2.1.4.min.js"></script>
<script src="assets/js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="assets/js/bootstrap/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="assets/js/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="assets/js/plugins/plugins.js"></script>
<!-- Active js -->
<script src="assets/js/active.js"></script>


<script>
    function likeUpdate(id, value) {

        value = value + 1;

        $.ajax({
            type: "GET",
            cache: false,
            url: "api/likeUpdate.php",
            data: "id=" + id + "&value=" + value,
            success: function (data) {
                console.log(data);
                $('#likeCountHide').addClass("text-hide");
                document.getElementById('likeCount').innerHTML = "<a href='#'><i class='fa fa-thumbs-o-up' aria-hidden='true'></i> " + data + "</a>";

                // document.getElementById('likeCount').innerHTML = data;
            }
        });
    }
</script>
</body>

</html>
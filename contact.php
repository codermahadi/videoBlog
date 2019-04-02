<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Vizew - Blog &amp; Magazine HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" href="assets/img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

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

<?php include 'inc/navigation.php'; ?>

<!-- ##### Breadcrumb Area Start ##### -->
<div class="vizew-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Contact Area Start ##### -->
<section class="contact-area mb-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-7 col-lg-8">
                <!-- Section Heading -->
                <div class="section-heading style-2">
                    <h4>Contact</h4>
                    <div class="line"></div>
                </div>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.</p>

                <!-- Contact Form Area -->
                <div class="contact-form-area mt-50">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="name">Name*</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email*</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="message">Message*</label>
                            <textarea name="message" class="form-control" id="message" cols="30" rows="10"></textarea>
                        </div>
                        <button class="btn vizew-btn mt-30" type="submit">Send Now</button>
                    </form>
                </div>
            </div>

            <div class="col-12 col-md-5 col-lg-4">
                <div class="sidebar-area">
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
                    <div class="single-widget add-widget">
                        <a href="#"><img src="assets/img/bg-img/add.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Contact Area End ##### -->

<?php include 'inc/footer.php'; ?>

<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="assets/js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="assets/js/bootstrap/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="assets/js/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="assets/js/plugins/plugins.js"></script>
<!-- Active js -->
<script src="assets/js/active.js"></script>
</body>

</html>
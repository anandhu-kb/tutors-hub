<?php session_start(); ?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>EduMall - LMS &amp; e-Learning Platform Template</title>
    <meta name="robots" content="noindex, follow">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicons/images-favicon.png">

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400&amp;display=swap" rel="stylesheet">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="css/vendor-fontawesome-all.min.css">
    <link rel="stylesheet" href="css/vendor-edumall-icon.css">
    <link rel="stylesheet" href="css/vendor-bootstrap.min.css">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="css/plugins-aos.css">
    <link rel="stylesheet" href="css/plugins-swiper-bundle.min.css">
    <link rel="stylesheet" href="css/plugins-perfect-scrollbar.css">
    <link rel="stylesheet" href="css/plugins-jquery.powertip.min.css">
    <link rel="stylesheet" href="css/plugins-glightbox.min.css">
    <link rel="stylesheet" href="css/plugins-flatpickr.min.css">
    <link rel="stylesheet" href="css/plugins-ion.rangeSlider.min.css">
    <link rel="stylesheet" href="css/plugins-select2.min.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/css-style.css">
    <link rel="stylesheet" href="css/rating.css">

</head>

<body class="dashboard-page">

    <!-- Dashboard Nav Start -->
    <div class="dashboard-nav offcanvas offcanvas-start" id="offcanvasDashboard">

        <!-- Dashboard Nav Wrapper Start -->
        <div class="dashboard-nav__wrapper">
            <!-- Dashboard Nav Header Start -->
            <div class="offcanvas-header dashboard-nav__header dashboard-nav-header">

                <div class="dashboard-nav__toggle d-xl-none">
                    <button class="toggle-close" data-bs-dismiss="offcanvas"><i class="fas fa-times"></i></button>
                </div>

                <div class="dashboard-nav__logo">
                    <a class="logo" href="index.php"><img src="images/images-dark-logo.png" alt="Logo" width="148" height="62"></a>
                </div>

            </div>
            <!-- Dashboard Nav Header End -->

                       <!-- Dashboard Nav Content Start -->



                <?php
                        include 'default/dashboard.php'; 

                        generateDashboardMenu($user_id);
                ?>



            
            <!-- Dashboard Nav Content End -->
            <div class="offcanvas-footer"></div>
        </div>
        <!-- Dashboard Nav Wrapper End -->

    </div>
    <!-- Dashboard Nav End -->

    <!-- Dashboard Menu Start -->
    <div class="dashboard-menu">

        <!-- Dashboard Menu Close Start -->
        <div class="dashboard-menu__close">
            <button class="close-btn"><i class="fas fa-times"></i></button>
        </div>
        <!-- Dashboard Menu Close End -->

        <!-- Dashboard Menu Content Start -->
        <div class="dashboard-menu__content">
            <div class="dashboard-menu__image">
                <img src="images/images-canvas-menu-image.png" alt="Images" width="984" height="692">
            </div>
            <div class="dashboard-menu__main-menu">
                <ul class="dashboard-menu__menu-link">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Courses</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <div class="dashboard-menu__search">
                    <form action="#">
                        <input type="text" placeholder="Search&hellip;">
                        <button class="search-btn"><i class="far fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Dashboard Menu Content End -->

    </div>
    <!-- Dashboard Menu End -->


    <!-- Dashboard Main Wrapper Start -->
    <main class="dashboard-main-wrapper">

                <!-- Dashboard Header Start -->
        

                <?php 
            include 'default/gd.php';
            gd($row);
            
        ?>


        <!-- Dashboard Header End -->





        <!-- Dashboard Content Start -->
        <div class="dashboard-content">

            <div class="container">
                <h4 class="dashboard-title">Wishlist</h4>

                <!-- Dashboard Wishlist Start -->
                <div class="dashboard-wishlist">
                    <div class="row gy-6">
                        <div class="col-xxl-3 col-lg-4 col-md-6">

                            <!-- Course Start -->
                            <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                <div class="course-header">
                                    <div class="course-header__thumbnail rounded-0">
                                        <a href="course-single-layout-01.php"><img src="images/courses-courses-2.jpg" alt="courses" width="330" height="220"></a>
                                    </div>
                                </div>
                                <div class="course-info-02">
                                    <span class="course-info-02__badge-text badge-all">All Levels</span>
                                    <div class="course-info-02__category">
                                        <a href="#">Productivity</a>
                                    </div>
                                    <h3 class="course-info-02__title"><a href="course-single-layout-01.php">Time Management Mastery: Do More, Stress Less</a></h3>
                                    <div class="course-info-02__description">
                                        <p>If you&rsquo;re someone who has a LOT on their plate &hellip;</p>
                                    </div>
                                    <div class="course-info-02__price">
                                        <span class="sale-price">$39.<small class="separator">00</small></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">

                            <!-- Course Start -->
                            <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                <div class="course-header">
                                    <div class="course-header__thumbnail rounded-0">
                                        <a href="course-single-layout-01.php"><img src="images/courses-courses-3.jpg" alt="courses" width="330" height="220"></a>
                                    </div>
                                </div>
                                <div class="course-info-02">
                                    <span class="course-info-02__badge-text badge-beginner">Beginner</span>
                                    <div class="course-info-02__category">
                                        <a href="#">Programming Languages</a>
                                    </div>
                                    <h3 class="course-info-02__title"><a href="course-single-layout-01.php">Angular &ndash; The Complete Guide (2020 Edition)</a></h3>
                                    <div class="course-info-02__description">
                                        <p>From Setup to Deployment, this course covers it all! You&rsquo;ll learn all &hellip;</p>
                                    </div>
                                    <div class="course-info-02__price">
                                        <span class="sale-price">$39.<small class="separator">00</small></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">

                            <!-- Course Start -->
                            <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                <div class="course-header">
                                    <div class="course-header__thumbnail rounded-0">
                                        <a href="course-single-layout-01.php"><img src="images/courses-courses-4.jpg" alt="courses" width="330" height="220"></a>
                                    </div>
                                    <div class="course-header__badge">
                                        <span class="free">Free</span>
                                    </div>
                                </div>
                                <div class="course-info-02">
                                    <span class="course-info-02__badge-text badge-beginner">Beginner</span>
                                    <div class="course-info-02__category">
                                        <a href="#">Management</a>
                                    </div>
                                    <h3 class="course-info-02__title"><a href="course-single-layout-01.php">Consulting Approach to Problem Solving</a></h3>
                                    <div class="course-info-02__description">
                                        <p>Do you feel that you already know all possible frameworks of business &hellip;</p>
                                    </div>
                                    <div class="course-info-02__price">
                                        <span class="free">Free</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">

                            <!-- Course Start -->
                            <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                <div class="course-header">
                                    <div class="course-header__thumbnail rounded-0">
                                        <a href="course-single-layout-01.php"><img src="images/courses-courses-8.jpg" alt="courses" width="330" height="220"></a>
                                    </div>
                                    <div class="course-header__badge">
                                        <span class="free">Free</span>
                                    </div>
                                </div>
                                <div class="course-info-02">
                                    <span class="course-info-02__badge-text badge-all">All Levels</span>
                                    <div class="course-info-02__category">
                                        <a href="#">Strategy &amp; Analytics</a>
                                    </div>
                                    <h3 class="course-info-02__title"><a href="course-single-layout-01.php">The Business Intelligence Analyst Course 2022</a></h3>
                                    <div class="course-info-02__description">
                                        <p>Our program is different than the rest of the materials &hellip;</p>
                                    </div>
                                    <div class="course-info-02__price">
                                        <span class="free">Free</span>
                                    </div>
                                    <div class="course-info-02__rating">

                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 100%;"></div>
                                        </div>

                                        <span>(2)</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">

                            <!-- Course Start -->
                            <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                <div class="course-header">
                                    <div class="course-header__thumbnail rounded-0">
                                        <a href="course-single-layout-01.php"><img src="images/courses-courses-1.jpg" alt="courses" width="330" height="220"></a>
                                    </div>
                                    <div class="course-header__badge">
                                        <span class="free">Free</span>
                                    </div>
                                </div>
                                <div class="course-info-02">
                                    <span class="course-info-02__badge-text badge-all">All Levels</span>
                                    <div class="course-info-02__category">
                                        <a href="#">Communications</a>
                                    </div>
                                    <h3 class="course-info-02__title"><a href="course-single-layout-01.php">Successful Negotiation: Master Your Negotiating Skills</a></h3>
                                    <div class="course-info-02__description">
                                        <p>Negotiation is a skill well worth mastering &ndash; by putting &hellip;</p>
                                    </div>
                                    <div class="course-info-02__price">
                                        <span class="free">Free</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">

                            <!-- Course Start -->
                            <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                <div class="course-header">
                                    <div class="course-header__thumbnail rounded-0">
                                        <a href="course-single-layout-01.php"><img src="images/courses-courses-3.jpg" alt="courses" width="330" height="220"></a>
                                    </div>
                                </div>
                                <div class="course-info-02">
                                    <span class="course-info-02__badge-text badge-all">All Levels</span>
                                    <div class="course-info-02__category">
                                        <a href="#">Productivity</a>
                                    </div>
                                    <h3 class="course-info-02__title"><a href="course-single-layout-01.php">Time Management Mastery: Do More, Stress Less</a></h3>
                                    <div class="course-info-02__description">
                                        <p>Do you feel that you already know all possible frameworks of business &hellip;</p>
                                    </div>
                                    <div class="course-info-02__price">
                                        <span class="sale-price">$39.<small class="separator">00</small></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">

                            <!-- Course Start -->
                            <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                <div class="course-header">
                                    <div class="course-header__thumbnail rounded-0">
                                        <a href="course-single-layout-01.php"><img src="images/courses-courses-7.jpg" alt="courses" width="330" height="220"></a>
                                    </div>
                                </div>
                                <div class="course-info-02">
                                    <span class="course-info-02__badge-text badge-beginner">Beginner</span>
                                    <div class="course-info-02__category">
                                        <a href="#">Programming Languages</a>
                                    </div>
                                    <h3 class="course-info-02__title"><a href="course-single-layout-01.php">Angular &ndash; The Complete Guide (2020 Edition)</a></h3>
                                    <div class="course-info-02__description">
                                        <p>From Setup to Deployment, this course covers it all! You&rsquo;ll learn all &hellip;</p>
                                    </div>
                                    <div class="course-info-02__price">
                                        <span class="sale-price">$39.<small class="separator">00</small></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">

                            <!-- Course Start -->
                            <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                <div class="course-header">
                                    <div class="course-header__thumbnail rounded-0">
                                        <a href="course-single-layout-01.php"><img src="images/courses-courses-11.jpg" alt="courses" width="330" height="220"></a>
                                    </div>
                                </div>
                                <div class="course-info-02">
                                    <span class="course-info-02__badge-text badge-all">All Levels</span>
                                    <div class="course-info-02__category">
                                        <a href="#">Photography Fundamentals</a>
                                    </div>
                                    <h3 class="course-info-02__title"><a href="course-single-layout-01.php">The Ultimate Photography Course &ndash; Beginner to Advanced</a></h3>
                                    <div class="course-info-02__description">
                                        <p>Do you feel that you already know all possible frameworks of business &hellip;</p>
                                    </div>
                                    <div class="course-info-02__price">
                                        <span class="sale-price">$55.<small class="separator">00</small></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">

                            <!-- Course Start -->
                            <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                <div class="course-header">
                                    <div class="course-header__thumbnail rounded-0">
                                        <a href="course-single-layout-01.php"><img src="images/courses-courses-12.jpg" alt="courses" width="330" height="220"></a>
                                    </div>
                                </div>
                                <div class="course-info-02">
                                    <span class="course-info-02__badge-text badge-all">All Levels</span>
                                    <div class="course-info-02__category">
                                        <a href="#">Programming Languages</a>
                                    </div>
                                    <h3 class="course-info-02__title"><a href="course-single-layout-01.php">Internationally Accredited Diploma in Weight Loss</a></h3>
                                    <div class="course-info-02__description">
                                        <p>If you&rsquo;re struggling to lose weight or stick to a &hellip;</p>
                                    </div>
                                    <div class="course-info-02__price">
                                        <span class="sale-price">$9.<small class="separator">99</small></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">

                            <!-- Course Start -->
                            <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                <div class="course-header">
                                    <div class="course-header__thumbnail rounded-0">
                                        <a href="course-single-layout-01.php"><img src="images/courses-courses-32.jpg" alt="courses" width="330" height="220"></a>
                                    </div>
                                </div>
                                <div class="course-info-02">
                                    <span class="course-info-02__badge-text badge-beginner">Beginner</span>
                                    <div class="course-info-02__category">
                                        <a href="#">Photography Fundamentals</a>
                                    </div>
                                    <h3 class="course-info-02__title"><a href="course-single-layout-01.php">Photography Masterclass: A Complete Guide to Photography</a></h3>
                                    <div class="course-info-02__description">
                                        <p>This online photography course will teach you how to take &hellip;</p>
                                    </div>
                                    <div class="course-info-02__price">
                                        <span class="sale-price">$49.<small class="separator">00</small></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">

                            <!-- Course Start -->
                            <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                <div class="course-header">
                                    <div class="course-header__thumbnail rounded-0">
                                        <a href="course-single-layout-01.php"><img src="images/courses-courses-34.jpg" alt="courses" width="330" height="220"></a>
                                    </div>
                                </div>
                                <div class="course-info-02">
                                    <span class="course-info-02__badge-text badge-all">All Levels</span>
                                    <div class="course-info-02__category">
                                        <a href="#">Leadership</a>
                                    </div>
                                    <h3 class="course-info-02__title"><a href="course-single-layout-01.php">Succeed, Influence and Inspire as a Woman in Leadership</a></h3>
                                    <div class="course-info-02__description">
                                        <p>Most importantly your body language has a tremendous impact on &hellip;</p>
                                    </div>
                                    <div class="course-info-02__price">
                                        <span class="sale-price">$75.<small class="separator">00</small></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">

                            <!-- Course Start -->
                            <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                <div class="course-header">
                                    <div class="course-header__thumbnail rounded-0">
                                        <a href="course-single-layout-01.php"><img src="images/courses-courses-35.jpg" alt="courses" width="330" height="220"></a>
                                    </div>
                                </div>
                                <div class="course-info-02">
                                    <span class="course-info-02__badge-text badge-all">All Levels</span>
                                    <div class="course-info-02__category">
                                        <a href="#">Career Development</a>
                                    </div>
                                    <h3 class="course-info-02__title"><a href="course-single-layout-01.php">Building Influence at Work</a></h3>
                                    <div class="course-info-02__description">
                                        <p>Listening Skills are the quiet soft skills sauce that can &hellip;</p>
                                    </div>
                                    <div class="course-info-02__price">
                                        <span class="sale-price">$42.<small class="separator">00</small></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                    </div>
                </div>
                <!-- Dashboard Wishlist End -->
            </div>


        </div>
        <!-- Dashboard Content End -->


    </main>
    <!-- Dashboard Main Wrapper End -->

    

    <!-- JS Vendor, Plugins & Activation Script Files -->

    <!-- Vendors JS -->
    <script src="js/vendor-modernizr-3.11.7.min.js"></script>
    <script src="js/vendor-jquery-3.6.0.min.js"></script>
    <script src="js/vendor-jquery-migrate-3.3.2.min.js"></script>
    <script src="js/vendor-bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="js/plugins-aos.js"></script>
    <script src="js/plugins-parallax.js"></script>
    <script src="js/plugins-swiper-bundle.min.js"></script>
    <script src="js/plugins-perfect-scrollbar.min.js"></script>
    <script src="js/plugins-jquery.powertip.min.js"></script>
    <script src="js/plugins-nice-select.min.js"></script>
    <script src="js/plugins-glightbox.min.js"></script>
    <script src="js/plugins-jquery.sticky-kit.min.js"></script>
    <script src="js/plugins-imagesloaded.pkgd.min.js"></script>
    <script src="js/plugins-masonry.pkgd.min.js"></script>
    <script src="js/plugins-flatpickr.js"></script>
    <script src="js/plugins-range-slider.js"></script>
    <script src="js/plugins-select2.min.js"></script>


    <!-- Activation JS -->
    <script src="js/js-main.js"></script>


</body>

</html>

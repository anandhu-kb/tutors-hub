<?php session_start(); ?>
<!DOCTYPE html><html class="no-js" lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>EduMall - LMS &amp; e-Learning Platform Template</title>
    <meta name="robots" content="noindex, follow">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400&amp;display=swap" rel="stylesheet">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/edumall-icon.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/perfect-scrollbar.css">
    <link rel="stylesheet" href="css/jquery.powertip.min.css">
    <link rel="stylesheet" href="css/glightbox.min.css">
    <link rel="stylesheet" href="css/flatpickr.min.css">
    <link rel="stylesheet" href="css/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="css/select2.min.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
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
                    <a class="logo" href="index.php"><img src="images/dark-logo.png" alt="Logo" width="148" height="62"></a>
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
                <img src="images/canvas-menu-image.png" alt="Images" width="984" height="692">
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
                        <input type="text" placeholder="Search…">
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
                <h4 class="dashboard-title">Enrolled Courses</h4>

                <!-- Dashboard Course Start -->
                <div class="dashboard-course">

                    <!-- Dashboard Tabs Start -->
                    <div class="dashboard-tabs-menu">
                        <ul>
                            <li><a class="active" href="#">All Courses</a></li>
                            <li><a href="#">Active Courses</a></li>
                            <li><a href="#">Completed Courses</a></li>
                        </ul>
                    </div>
                    <!-- Dashboard Tabs End -->

                    <!-- Dashboard Course List Start -->
                    <div class="dashboard-course-list">

                        <!-- Dashboard Course Item Start -->
                        <div class="dashboard-course-item">
                            <a class="dashboard-course-item__link" href="course-single-layout-01.php">
                                <div class="dashboard-course-item__thumbnail">
                                    <img src="images/courses-4.jpg" alt="Courses" width="260" height="160">
                                </div>
                                <div class="dashboard-course-item__content">
                                    <div class="dashboard-course-item__rating">
                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 80%;"></div>
                                        </div>
                                    </div>
                                    <h3 class="dashboard-course-item__title">Consulting Approach to Problem Solving</h3>
                                    <div class="dashboard-course-item__meta">
                                        <ul class="dashboard-course-item__meta-list">
                                            <li>
                                                <span class="meta-label">Total Lessons:</span>
                                                <span class="meta-value">6</span>
                                            </li>
                                            <li>
                                                <span class="meta-label">Completed Lessons:</span>
                                                <span class="meta-value">0/6</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dashboard-course-item__progress-bar-wrap">
                                        <div class="dashboard-course-item__progress-bar">
                                            <div class="dashboard-course-item__progress-bar-line" style="width: 22%;"></div>
                                        </div>
                                        <div class="dashboard-course-item__progress-bar-text">22% Complete</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Dashboard Course Item End -->

                        <!-- Dashboard Course Item Start -->
                        <div class="dashboard-course-item">
                            <a class="dashboard-course-item__link" href="course-single-layout-01.php">
                                <div class="dashboard-course-item__thumbnail">
                                    <img src="images/courses-9.jpg" alt="Courses" width="260" height="160">
                                </div>
                                <div class="dashboard-course-item__content">
                                    <div class="dashboard-course-item__rating">
                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 80%;"></div>
                                        </div>
                                    </div>
                                    <h3 class="dashboard-course-item__title">Essential Digital Tools for Student Engagement</h3>
                                    <div class="dashboard-course-item__meta">
                                        <ul class="dashboard-course-item__meta-list">
                                            <li>
                                                <span class="meta-label">Total Lessons:</span>
                                                <span class="meta-value">5</span>
                                            </li>
                                            <li>
                                                <span class="meta-label">Completed Lessons:</span>
                                                <span class="meta-value">5/5</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dashboard-course-item__progress-bar-wrap">
                                        <div class="dashboard-course-item__progress-bar">
                                            <div class="dashboard-course-item__progress-bar-line" style="width: 100%;"></div>
                                        </div>
                                        <div class="dashboard-course-item__progress-bar-text">100% Complete</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Dashboard Course Item End -->

                        <!-- Dashboard Course Item Start -->
                        <div class="dashboard-course-item">
                            <a class="dashboard-course-item__link" href="course-single-layout-01.php">
                                <div class="dashboard-course-item__thumbnail">
                                    <img src="images/courses-10.jpg" alt="Courses" width="260" height="160">
                                </div>
                                <div class="dashboard-course-item__content">
                                    <div class="dashboard-course-item__rating">
                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 100%;"></div>
                                        </div>
                                    </div>
                                    <h3 class="dashboard-course-item__title">Adobe Lightroom For Beginners : Complete Photo/Image Editing</h3>
                                    <div class="dashboard-course-item__meta">
                                        <ul class="dashboard-course-item__meta-list">
                                            <li>
                                                <span class="meta-label">Total Lessons:</span>
                                                <span class="meta-value">6</span>
                                            </li>
                                            <li>
                                                <span class="meta-label">Completed Lessons:</span>
                                                <span class="meta-value">5/6</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dashboard-course-item__progress-bar-wrap">
                                        <div class="dashboard-course-item__progress-bar">
                                            <div class="dashboard-course-item__progress-bar-line" style="width: 100%;"></div>
                                        </div>
                                        <div class="dashboard-course-item__progress-bar-text">100% Complete</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Dashboard Course Item End -->

                        <!-- Dashboard Course Item Start -->
                        <div class="dashboard-course-item">
                            <a class="dashboard-course-item__link" href="course-single-layout-01.php">
                                <div class="dashboard-course-item__thumbnail">
                                    <img src="images/courses-33.jpg" alt="Courses" width="260" height="160">
                                </div>
                                <div class="dashboard-course-item__content">
                                    <div class="dashboard-course-item__rating">
                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 100%;"></div>
                                        </div>
                                    </div>
                                    <h3 class="dashboard-course-item__title">Boost Your Productivity: Adapt, Improve, Do!</h3>
                                    <div class="dashboard-course-item__meta">
                                        <ul class="dashboard-course-item__meta-list">
                                            <li>
                                                <span class="meta-label">Total Lessons:</span>
                                                <span class="meta-value">5</span>
                                            </li>
                                            <li>
                                                <span class="meta-label">Completed Lessons:</span>
                                                <span class="meta-value">5/5</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dashboard-course-item__progress-bar-wrap">
                                        <div class="dashboard-course-item__progress-bar">
                                            <div class="dashboard-course-item__progress-bar-line" style="width: 100%;"></div>
                                        </div>
                                        <div class="dashboard-course-item__progress-bar-text">100% Complete</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Dashboard Course Item End -->

                        <!-- Dashboard Course Item Start -->
                        <div class="dashboard-course-item">
                            <a class="dashboard-course-item__link" href="course-single-layout-01.php">
                                <div class="dashboard-course-item__thumbnail">
                                    <img src="images/courses-28.jpg" alt="Courses" width="260" height="160">
                                </div>
                                <div class="dashboard-course-item__content">
                                    <div class="dashboard-course-item__rating">
                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 40%;"></div>
                                        </div>
                                    </div>
                                    <h3 class="dashboard-course-item__title">Ultimate Photoshop Training: From Beginner to Pro</h3>
                                    <div class="dashboard-course-item__meta">
                                        <ul class="dashboard-course-item__meta-list">
                                            <li>
                                                <span class="meta-label">Total Lessons:</span>
                                                <span class="meta-value">1</span>
                                            </li>
                                            <li>
                                                <span class="meta-label">Completed Lessons:</span>
                                                <span class="meta-value">1/1</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dashboard-course-item__progress-bar-wrap">
                                        <div class="dashboard-course-item__progress-bar">
                                            <div class="dashboard-course-item__progress-bar-line" style="width: 100%;"></div>
                                        </div>
                                        <div class="dashboard-course-item__progress-bar-text">100% Complete</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Dashboard Course Item End -->

                        <!-- Dashboard Course Item Start -->
                        <div class="dashboard-course-item">
                            <a class="dashboard-course-item__link" href="course-single-layout-01.php">
                                <div class="dashboard-course-item__thumbnail">
                                    <img src="images/courses-13.jpg" alt="Courses" width="260" height="160">
                                </div>
                                <div class="dashboard-course-item__content">
                                    <div class="dashboard-course-item__rating">
                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 90%;"></div>
                                        </div>
                                    </div>
                                    <h3 class="dashboard-course-item__title">Adobe Illustrator CC – Essentials Training Course</h3>
                                    <div class="dashboard-course-item__meta">
                                        <ul class="dashboard-course-item__meta-list">
                                            <li>
                                                <span class="meta-label">Total Lessons:</span>
                                                <span class="meta-value">1</span>
                                            </li>
                                            <li>
                                                <span class="meta-label">Completed Lessons:</span>
                                                <span class="meta-value">1/1</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dashboard-course-item__progress-bar-wrap">
                                        <div class="dashboard-course-item__progress-bar">
                                            <div class="dashboard-course-item__progress-bar-line" style="width: 86%;"></div>
                                        </div>
                                        <div class="dashboard-course-item__progress-bar-text">86% Complete</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Dashboard Course Item End -->

                        <!-- Dashboard Course Item Start -->
                        <div class="dashboard-course-item">
                            <a class="dashboard-course-item__link" href="course-single-layout-01.php">
                                <div class="dashboard-course-item__thumbnail">
                                    <img src="images/courses-23.jpg" alt="Courses" width="260" height="160">
                                </div>
                                <div class="dashboard-course-item__content">
                                    <div class="dashboard-course-item__rating">
                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 80%;"></div>
                                        </div>
                                    </div>
                                    <h3 class="dashboard-course-item__title">Mental Health: Change your Brain</h3>
                                    <div class="dashboard-course-item__meta">
                                        <ul class="dashboard-course-item__meta-list">
                                            <li>
                                                <span class="meta-label">Total Lessons:</span>
                                                <span class="meta-value">0</span>
                                            </li>
                                            <li>
                                                <span class="meta-label">Completed Lessons:</span>
                                                <span class="meta-value">0/0</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dashboard-course-item__progress-bar-wrap">
                                        <div class="dashboard-course-item__progress-bar">
                                            <div class="dashboard-course-item__progress-bar-line" style="width: 0%;"></div>
                                        </div>
                                        <div class="dashboard-course-item__progress-bar-text">0% Complete</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Dashboard Course Item End -->

                    </div>
                    <!-- Dashboard Course List End -->

                </div>
                <!-- Dashboard Course End -->
            </div>


        </div>
        <!-- Dashboard Content End -->


    </main>
    <!-- Dashboard Main Wrapper End -->


    <!-- JS Vendor, Plugins & Activation Script Files -->

    <!-- Vendors JS -->
    <script src="js/modernizr-3.11.7.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery-migrate-3.3.2.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="js/aos.js"></script>
    <script src="js/parallax.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/perfect-scrollbar.min.js"></script>
    <script src="js/jquery.powertip.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/glightbox.min.js"></script>
    <script src="js/jquery.sticky-kit.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/flatpickr.js"></script>
    <script src="js/range-slider.js"></script>
    <script src="js/select2.min.js"></script>


    <!-- Activation JS -->
    <script src="js/main.js"></script>




</body></html>
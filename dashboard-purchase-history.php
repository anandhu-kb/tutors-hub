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
                <h4 class="dashboard-title">Purchase History</h4>

                <!-- Dashboard Purchase History Start -->
                <div class="dashboard-purchase-history">
                    <div class="dashboard-table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="id">ID</th>
                                    <th class="courses">Courses</th>
                                    <th class="amount">Amount</th>
                                    <th class="status">Status</th>
                                    <th class="date">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">ID</div>
                                        <div class="dashboard-table__text">#10887</div>
                                    </td>
                                    <td class="course-info">
                                        <div class="dashboard-table__mobile-heading">Courses</div>
                                        <div class="dashboard-table__text">
                                            <p>Learn Algebra The Easy Way!</p>
                                        </div>
                                    </td>
                                    <td class="correct">
                                        <div class="dashboard-table__mobile-heading">Amount</div>
                                        <div class="dashboard-table__text">
                                            <span class="sale-price">$45.<small class="separator">00</small></span>
                                        </div>
                                    </td>
                                    <td class="incorrect">
                                        <div class="dashboard-table__mobile-heading">Status</div>
                                        <div class="dashboard-table__text">Processing</div>
                                    </td>
                                    <td class="earned">
                                        <div class="dashboard-table__mobile-heading">Date</div>
                                        <div class="dashboard-table__text">February 1, 2022</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">ID</div>
                                        <div class="dashboard-table__text">#10852</div>
                                    </td>
                                    <td class="course-info">
                                        <div class="dashboard-table__mobile-heading">Courses</div>
                                        <div class="dashboard-table__text">
                                            <p>Internationally Accredited Diploma in Weight Loss</p>
                                            <p>Investment Management Specialization</p>
                                        </div>
                                    </td>
                                    <td class="correct">
                                        <div class="dashboard-table__mobile-heading">Amount</div>
                                        <div class="dashboard-table__text">
                                            <span class="sale-price">$43.<small class="separator">99</small></span>
                                        </div>
                                    </td>
                                    <td class="incorrect">
                                        <div class="dashboard-table__mobile-heading">Status</div>
                                        <div class="dashboard-table__text hold">On Hold</div>
                                    </td>
                                    <td class="earned">
                                        <div class="dashboard-table__mobile-heading">Date</div>
                                        <div class="dashboard-table__text">January 31, 2022</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">ID</div>
                                        <div class="dashboard-table__text">#10839</div>
                                    </td>
                                    <td class="course-info">
                                        <div class="dashboard-table__mobile-heading">Courses</div>
                                        <div class="dashboard-table__text">
                                            <p>Photography Masterclass: A Complete Guide to Photography</p>
                                        </div>
                                    </td>
                                    <td class="correct">
                                        <div class="dashboard-table__mobile-heading">Amount</div>
                                        <div class="dashboard-table__text">
                                            <span class="sale-price">$49.<small class="separator">00</small></span>
                                        </div>
                                    </td>
                                    <td class="incorrect">
                                        <div class="dashboard-table__mobile-heading">Status</div>
                                        <div class="dashboard-table__text">Processing</div>
                                    </td>
                                    <td class="earned">
                                        <div class="dashboard-table__mobile-heading">Date</div>
                                        <div class="dashboard-table__text">January 30, 2022</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">ID</div>
                                        <div class="dashboard-table__text">#10833</div>
                                    </td>
                                    <td class="course-info">
                                        <div class="dashboard-table__mobile-heading">Courses</div>
                                        <div class="dashboard-table__text">
                                            <p>Mastering Data Modeling Fundamentals</p>
                                            <p>Investment Management Specialization</p>
                                            <p>Illustrator 2020 MasterClass</p>
                                            <p>Photography Masterclass: A Complete Guide to Photography</p>
                                            <p>Mechanical Engineering and Electrical Engineering Explained</p>
                                        </div>
                                    </td>
                                    <td class="correct">
                                        <div class="dashboard-table__mobile-heading">Amount</div>
                                        <div class="dashboard-table__text">
                                            <span class="sale-price">$235.<small class="separator">00</small></span>
                                        </div>
                                    </td>
                                    <td class="incorrect">
                                        <div class="dashboard-table__mobile-heading">Status</div>
                                        <div class="dashboard-table__text">Processing</div>
                                    </td>
                                    <td class="earned">
                                        <div class="dashboard-table__mobile-heading">Date</div>
                                        <div class="dashboard-table__text">January 29, 2022</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">ID</div>
                                        <div class="dashboard-table__text">#10764</div>
                                    </td>
                                    <td class="course-info">
                                        <div class="dashboard-table__mobile-heading">Courses</div>
                                        <div class="dashboard-table__text">
                                            <p>Mechanical Engineering and Electrical Engineering Explained</p>
                                            <p>Learn Algebra The Easy Way!</p>
                                            <p>The Ultimate Photography Course – Beginner to Advanced</p>
                                            <p>Illustrator 2020 MasterClass</p>
                                        </div>
                                    </td>
                                    <td class="correct">
                                        <div class="dashboard-table__mobile-heading">Amount</div>
                                        <div class="dashboard-table__text">
                                            <span class="sale-price">$373.<small class="separator">00</small></span>
                                        </div>
                                    </td>
                                    <td class="incorrect">
                                        <div class="dashboard-table__mobile-heading">Status</div>
                                        <div class="dashboard-table__text">Processing</div>
                                    </td>
                                    <td class="earned">
                                        <div class="dashboard-table__mobile-heading">Date</div>
                                        <div class="dashboard-table__text">January 23, 2022</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">ID</div>
                                        <div class="dashboard-table__text">#10676</div>
                                    </td>
                                    <td class="course-info">
                                        <div class="dashboard-table__mobile-heading">Courses</div>
                                        <div class="dashboard-table__text">
                                            <p>Investment Management Specialization</p>
                                        </div>
                                    </td>
                                    <td class="correct">
                                        <div class="dashboard-table__mobile-heading">Amount</div>
                                        <div class="dashboard-table__text">
                                            <span class="sale-price">$34.<small class="separator">00</small></span>
                                        </div>
                                    </td>
                                    <td class="incorrect">
                                        <div class="dashboard-table__mobile-heading">Status</div>
                                        <div class="dashboard-table__text">Processing</div>
                                    </td>
                                    <td class="earned">
                                        <div class="dashboard-table__mobile-heading">Date</div>
                                        <div class="dashboard-table__text">January 12, 2022</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">ID</div>
                                        <div class="dashboard-table__text">#10568</div>
                                    </td>
                                    <td class="course-info">
                                        <div class="dashboard-table__mobile-heading">Courses</div>
                                        <div class="dashboard-table__text">
                                            <p>Investment Management Specialization</p>
                                        </div>
                                    </td>
                                    <td class="correct">
                                        <div class="dashboard-table__mobile-heading">Amount</div>
                                        <div class="dashboard-table__text">
                                            <span class="sale-price">$34.<small class="separator">00</small></span>
                                        </div>
                                    </td>
                                    <td class="incorrect">
                                        <div class="dashboard-table__mobile-heading">Status</div>
                                        <div class="dashboard-table__text">Processing</div>
                                    </td>
                                    <td class="earned">
                                        <div class="dashboard-table__mobile-heading">Date</div>
                                        <div class="dashboard-table__text">January 2, 2022</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">ID</div>
                                        <div class="dashboard-table__text">#9503</div>
                                    </td>
                                    <td class="course-info">
                                        <div class="dashboard-table__mobile-heading">Courses</div>
                                        <div class="dashboard-table__text">
                                            <p>Internationally Accredited Diploma in Weight Loss</p>
                                            <p>Artificial Intelligence &amp; Machine Learning</p>
                                            <p>Excel Crash Course: Master Excel for Financial Analysis</p>
                                            <p>Beginning Project Management: Project Management Level One</p>
                                            <p>Investment Management Specialization</p>
                                        </div>
                                    </td>
                                    <td class="correct">
                                        <div class="dashboard-table__mobile-heading">Amount</div>
                                        <div class="dashboard-table__text">
                                            <span class="sale-price">$128.<small class="separator">97</small></span>
                                        </div>
                                    </td>
                                    <td class="incorrect">
                                        <div class="dashboard-table__mobile-heading">Status</div>
                                        <div class="dashboard-table__text cancelled">Cancelled</div>
                                    </td>
                                    <td class="earned">
                                        <div class="dashboard-table__mobile-heading">Date</div>
                                        <div class="dashboard-table__text">November 2, 2021</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">ID</div>
                                        <div class="dashboard-table__text">#9461</div>
                                    </td>
                                    <td class="course-info">
                                        <div class="dashboard-table__mobile-heading">Courses</div>
                                        <div class="dashboard-table__text">
                                            <p>Investment Management Specialization</p>
                                            <p>Photography Masterclass: A Complete Guide to Photography</p>
                                        </div>
                                    </td>
                                    <td class="correct">
                                        <div class="dashboard-table__mobile-heading">Amount</div>
                                        <div class="dashboard-table__text">
                                            <span class="sale-price">$83.<small class="separator">00</small></span>
                                        </div>
                                    </td>
                                    <td class="incorrect">
                                        <div class="dashboard-table__mobile-heading">Status</div>
                                        <div class="dashboard-table__text hold">On Hold</div>
                                    </td>
                                    <td class="earned">
                                        <div class="dashboard-table__mobile-heading">Date</div>
                                        <div class="dashboard-table__text">October 31, 2021</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">ID</div>
                                        <div class="dashboard-table__text">#3564</div>
                                    </td>
                                    <td class="course-info">
                                        <div class="dashboard-table__mobile-heading">Courses</div>
                                        <div class="dashboard-table__text">
                                            <p>Illustrator 2020 MasterClass</p>
                                        </div>
                                    </td>
                                    <td class="correct">
                                        <div class="dashboard-table__mobile-heading">Amount</div>
                                        <div class="dashboard-table__text">
                                            <span class="sale-price">$22.<small class="separator">00</small></span>
                                        </div>
                                    </td>
                                    <td class="incorrect">
                                        <div class="dashboard-table__mobile-heading">Status</div>
                                        <div class="dashboard-table__text cancelled">Cancelled</div>
                                    </td>
                                    <td class="earned">
                                        <div class="dashboard-table__mobile-heading">Date</div>
                                        <div class="dashboard-table__text">December 15, 2020</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">ID</div>
                                        <div class="dashboard-table__text">#3374</div>
                                    </td>
                                    <td class="course-info">
                                        <div class="dashboard-table__mobile-heading">Courses</div>
                                        <div class="dashboard-table__text">
                                            <p>Mechanical Engineering and Electrical Engineering Explained</p>
                                            <p>Start Trading Stocks Using Technical Analysis!</p>
                                            <p>Successful Negotiation: Master Your Negotiating Skills</p>
                                        </div>
                                    </td>
                                    <td class="correct">
                                        <div class="dashboard-table__mobile-heading">Amount</div>
                                        <div class="dashboard-table__text">
                                            <span class="sale-price">$133.<small class="separator">00</small></span>
                                        </div>
                                    </td>
                                    <td class="incorrect">
                                        <div class="dashboard-table__mobile-heading">Status</div>
                                        <div class="dashboard-table__text completed">Completed</div>
                                    </td>
                                    <td class="earned">
                                        <div class="dashboard-table__mobile-heading">Date</div>
                                        <div class="dashboard-table__text">December 14, 2020</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Dashboard Purchase History End -->
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
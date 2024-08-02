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
                <!-- Dashboard Withdraw Box Start -->
                <div class="dashboard-content-box">
                    <h4 class="dashboard-content-box__title">Current Balance</h4>
                    <div class="dashboard-content-box__content">
                        <p>You currently have <strong><span class="sale-price">$8.<small class="separator">01</small></span></strong> and this is insufficient balance to withdraw.</p>
                    </div>
                    <div class="dashboard-content-box__content">
                        <i class="fas fa-question-circle"></i>
                        <p>The preferred payment method is selected as Bank Transfer. You can change your <a href="dashboard-settings-withdraw.php"> withdrawal preference </a></p>
                    </div>
                </div>
                <!-- Dashboard Withdraw Box End -->

                <!-- Dashboard Withdraw Box Start -->
                <div class="dashboard-content-box">
                    <h4 class="dashboard-content-box__title">Withdrawal History</h4>

                    <div class="dashboard-table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Withdrawal Method</th>
                                    <th>Requested On</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Withdrawal Method</div>
                                        <div class="dashboard-table__withdraw-method">
                                            <img src="images/images-icon-paypal.svg" alt="Paypal">
                                            <p>
                                                <strong class="name">PayPal</strong>
                                                <small>in****r@edumall.com</small>
                                            </p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Requested On</div>
                                        <div class="dashboard-table__text">December 24, 2020 10:05 am</div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Amount</div>
                                        <div class="dashboard-table__price">
                                            <span class="sale-price">$100.<small class="separator">00</small></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Status</div>
                                        <div class="dashboard-table__withdraw-status approved">Approved</div>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Withdrawal Method</div>
                                        <div class="dashboard-table__withdraw-method">
                                            <img src="images/images-icon-paypal.svg" alt="Paypal">
                                            <p>
                                                <strong class="name">PayPal</strong>
                                                <small>in****r@edumall.com</small>
                                            </p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Requested On</div>
                                        <div class="dashboard-table__text">December 23, 2020 5:58 am</div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Amount</div>
                                        <div class="dashboard-table__price">
                                            <span class="sale-price">$100.<small class="separator">00</small></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Status</div>
                                        <div class="dashboard-table__withdraw-status pending">Pending</div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__text">
                                            <button class="question-icon" data-bs-tooltip="tooltip" data-bs-placement="left" title="Withdrawal request is pending for approval, please hold tight.">
                                                <i class="fas fa-question-circle"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Withdrawal Method</div>
                                        <div class="dashboard-table__withdraw-method">
                                            <img src="images/images-icon-paypal.svg" alt="Paypal">
                                            <p>
                                                <strong class="name">PayPal</strong>
                                                <small>in****r@edumall.com</small>
                                            </p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Requested On</div>
                                        <div class="dashboard-table__text">December 15, 2020 2:40 am</div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Amount</div>
                                        <div class="dashboard-table__price">
                                            <span class="sale-price">$90.<small class="separator">00</small></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Status</div>
                                        <div class="dashboard-table__withdraw-status pending">Pending</div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__text">
                                            <button class="question-icon" data-bs-tooltip="tooltip" data-bs-placement="left" title="Withdrawal request is pending for approval, please hold tight.">
                                                <i class="fas fa-question-circle"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Withdrawal Method</div>
                                        <div class="dashboard-table__withdraw-method">
                                            <img src="images/images-icon-paypal.svg" alt="Paypal">
                                            <p>
                                                <strong class="name">PayPal</strong>
                                                <small>in****r@edumall.com</small>
                                            </p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Requested On</div>
                                        <div class="dashboard-table__text">December 15, 2020 2:40 am</div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Amount</div>
                                        <div class="dashboard-table__price">
                                            <span class="sale-price">$95.<small class="separator">00</small></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Status</div>
                                        <div class="dashboard-table__withdraw-status rejected">Rejected</div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__text">
                                            <button class="question-icon" data-bs-tooltip="tooltip" data-bs-placement="left" title="Please contact the site administrator for more information.">
                                                <i class="fas fa-question-circle"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Withdrawal Method</div>
                                        <div class="dashboard-table__withdraw-method">
                                            <img src="images/images-icon-paypal.svg" alt="Paypal">
                                            <p>
                                                <strong class="name">PayPal</strong>
                                                <small>in****r@edumall.com</small>
                                            </p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Requested On</div>
                                        <div class="dashboard-table__text">December 14, 2020 4:12 am</div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Amount</div>
                                        <div class="dashboard-table__price">
                                            <span class="sale-price">$85.<small class="separator">00</small></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Status</div>
                                        <div class="dashboard-table__withdraw-status approved">Approved</div>
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Dashboard Withdraw Box End -->

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

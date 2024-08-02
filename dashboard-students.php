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
        <h4 class="dashboard-title">My Students</h4>


        <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Name</th>
                        <th scope="col">class</th>
                        <th scope="col">subject</th>
                        <th scope="col">fee_paid</th>
                        <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
include '../connection/connection.php';
$tid = $_SESSION['id'];
$sql = mysqli_query($con, "SELECT * FROM tutor_classes_subjects WHERE tutor_id = $tid");

if (!$sql) {
    die("Database query failed: " . mysqli_error($con));
}

while ($row1 = mysqli_fetch_assoc($sql)) {
    $c_id = $row1['id'];
    $sql3 = mysqli_query($con, "SELECT * FROM `classes` WHERE `id`='" . $row1['class_id'] . "'");
    $row2 = mysqli_fetch_assoc($sql3);

    if (!$sql3) {
        die("Database query failed: " . mysqli_error($con));
    }

    $sql4 = mysqli_query($con, "SELECT * FROM `subjects` WHERE `id`='" . $row1['subject_id'] . "'");
    $row3 = mysqli_fetch_assoc($sql4);

    if (!$sql4) {
        die("Database query failed: " . mysqli_error($con));
    }

    $sql2 = mysqli_query($con, "SELECT * FROM student WHERE course_selected = $c_id");

    if (!$sql2) {
        die("Database query failed: " . mysqli_error($con));
    }

    while ($row4 = mysqli_fetch_assoc($sql2)) {
        $stu_id = $row4['id'];
        $sql5 = mysqli_query($con, "SELECT * FROM `fee` WHERE `tutor_classes_subjects_id`='" . $row1['id'] . "' AND `stu_id`='$stu_id'");
        $row5 = mysqli_fetch_assoc($sql5);

        if (!$row5) {
            // Handle the case where fee data for this student and class is not found.
        } else {
            $fee_paid = $row5['fee_paid'];
            if ($fee_paid == 0) {
                $fee_paid = "Not Paid";
            } else {
                $fee_paid = "Paid";
            }
            // Your HTML output here...
        }

?>

                



                        <tr>
                        <td>
                        <div class="dashboard-table__student-info">
                            <div class="dashboard-table__student-avatar">
                                <img src="../<?php echo $row4['photo']; ?>" alt="" width="50px" height="50px">
                            </div>
                            <div class="dashboard-table__title">
                                <?php echo $row4['name']; ?>
                        </div>
                        </td>
                        <td><div class="dashboard-table__text"><?php echo $row2['class_name'];?></div></td>
                        <td><div class="dashboard-table__text"><?php echo $row3['subject_name'];?></div></td> 
                        <td><div class="dashboard-table__text"><?php echo $fee_paid;?></div></td> 

                        <td>delete</td>
                        </tr>




                    <?php
                }
            }

            ?>
            
            </tbody>
                    </table>



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

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
    <!-- boot strap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>








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
                <h4 class="dashboard-title">My Courses</h4>

                <!-- Dashboard My Courses Start -->
                <div class="dashboard-courses">
                    <!-- Dashboard Course Item Start -->


                                    <!-- Dashboard Course Item Start -->

                                    <div class="dashboard-courses__item">


                                    <?php
$query = "
SELECT
    tutors.id AS tutor_id,
    tutor_classes_subjects.*,  -- Select all columns from tutor_classes_subjects
    classes.class_name AS taught_class,
    subjects.subject_name AS taught_subject
FROM
    tutor_classes_subjects
INNER JOIN tutors ON tutor_classes_subjects.tutor_id = tutors.id
INNER JOIN classes ON tutor_classes_subjects.class_id = classes.id
INNER JOIN subjects ON tutor_classes_subjects.subject_id = subjects.id
WHERE
    tutors.id = $id
ORDER BY tutors.id;
";

$result = mysqli_query($con, $query);

// Check for query execution error
if (!$result) {
    die("Database error: " . mysqli_error($con));
}
?>

<table class="table">
  <thead class="thead-dark">
    <tr>
        <th>#</th>
        <th>Taught Class</th>
        <th>Taught Subject</th>
        <th>Starts</th>
        <th>Ends</th>
        <th>Slot</th>
        <th>Rate</th>
        <th>Time</th>
        <th>Action</th>
    </tr>
</thead>
<?php
$currentTutorId = null;
$rowCounter = 1;

while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>' . $rowCounter . '</td>';
    echo '<td>' . $row['taught_class'] . '</td>';
    echo '<td>' . $row['taught_subject'] . '</td>';
    echo '<td>' . $row['starts'] . '</td>';
    echo '<td>' . $row['ends'] . '</td>';
    echo '<td>' . $row['slot'] . '</td>';
    echo '<td>' . $row['rate'] . '</td>';
    
    // Format the time in 12-hour format
    $time_from = date('h:i A', strtotime($row['time_from']));
    $time_to = date('h:i A', strtotime($row['time_to']));
    
    echo '<td>' . $time_from . ' - ' . $time_to . '</td>';
    
    echo '<td><a href="default/edit_course/action.php?id=' . $row['id'] . '">Edit</a></td>';
    echo '</tr>';
    $rowCounter++;

}
?>
</table>



</div>


                                    <h4 class="dashboard-title">Add Courses</h4>
<div class="dashboard-courses__item">
    <form method="post">
        <?php
        include '../connection/connection.php';
        $query = "SELECT * FROM classes";
        $result = mysqli_query($con, $query);
        foreach ($result as $class) {
            $classId = $class['id'];
            $className = $class['class_name'];
            echo '<fieldset>';
            echo '<legend>' . $className . '</legend>';
            echo '<input type="checkbox" name="selected_classes[]" value="' . $classId . '"> ' . $className . '<br>';

            $sql = mysqli_query($con, "SELECT * FROM subjects WHERE class_id = $classId");

            while ($sub = mysqli_fetch_assoc($sql)) {
                $subjectId = $sub['id'];
                $subjectName = $sub['subject_name'];
                echo '<label>';
                echo '<input type="checkbox" name="selected_subjects[' . $classId . '][]" value="' . $subjectId . '"> ' . $subjectName . ' ';
                echo '</label>';
            }

            echo '</fieldset>';
        }
        ?>
        <button type="submit" name="submit">Submit</button>
    </form>
</div>


                    <?php
if (isset($_POST['submit'])) {
    $tutorId = $_SESSION['id'];

    if (isset($_POST['selected_classes']) && is_array($_POST['selected_classes'])) {
        $selectedClasses = $_POST['selected_classes'];

        foreach ($selectedClasses as $classId) {
            if (isset($_POST['selected_subjects'][$classId]) && is_array($_POST['selected_subjects'][$classId])) {
                $selectedSubjects = $_POST['selected_subjects'][$classId];

                foreach ($selectedSubjects as $subjectId) {
                    $checkQuery = mysqli_query($con, "SELECT * FROM `tutor_classes_subjects` WHERE `tutor_id` = $tutorId AND `class_id` = $classId AND `subject_id` = $subjectId");

                    if (mysqli_num_rows($checkQuery) == 0) {
                        $insertQuery = mysqli_query($con, "INSERT INTO `tutor_classes_subjects`(`tutor_id`, `class_id`, `subject_id`) VALUES ($tutorId, $classId, $subjectId)");
                    } else {
                        echo "<script>alert(Record already exists k.)</script>";
                    }
                }
            }
        }
    }
}

?>
















                    <div class="dashboard-courses__item">
                        <div class="dashboard-courses__thumbnail">
                            <a href="course-single-layout-01.php"><img src="images/courses-courses-32.jpg" alt="Courses" width="260" height="174"></a>
                        </div>
                        <div class="dashboard-courses__content">
                            <div class="dashboard-courses__rating">
                                <div class="rating-star">
                                    <div class="rating-label" style="width: 0%;"></div>
                                </div>
                                <span>(0)</span>
                            </div>
                            <h3 class="dashboard-courses__title"><a href="course-single-layout-01.php">Photography</a></h3>
                            <ul class="dashboard-courses__meta">
                                <li>
                                    <span class="meta-label">Status:</span>
                                    <span class="meta-value">Pending</span>
                                </li>
                                <li>
                                    <span class="meta-label">Duration:</span>
                                    <span class="meta-value">1h 5m </span>
                                </li>
                                <li>
                                    <span class="meta-label">Students:</span>
                                    <span class="meta-value">0</span>
                                </li>
                            </ul>
                            <div class="dashboard-courses__footer">
                                <div class="dashboard-courses__price">
                                    <span class="sale-price">$100.<small class="separator">00</small></span>
                                </div>
                                <div class="dashboard-courses__action">
                                    <a class="action" href="#"><i class="fas  fa-pencil-alt"></i> Edit</a>
                                    <a class="action delete" href="#"><i class="fas  fa-trash-alt"></i> Delete</a>
                                    <a class="action" href="#"><i class="fas  fa-clone"></i> Duplicate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dashboard Course Item End -->

                    <!-- Dashboard Course Item Start -->
                    <div class="dashboard-courses__item">
                        <div class="dashboard-courses__thumbnail">
                            <a href="course-single-layout-01.php"><img src="images/courses-courses-6.jpg" alt="Courses" width="260" height="174"></a>
                        </div>
                        <div class="dashboard-courses__content">
                            <div class="dashboard-courses__rating">
                                <div class="rating-star">
                                    <div class="rating-label" style="width: 60%;"></div>
                                </div>
                                <span>(8)</span>
                            </div>
                            <h3 class="dashboard-courses__title"><a href="course-single-layout-01.php">ENV 101: Introduction to Environmental Science</a></h3>
                            <ul class="dashboard-courses__meta">
                                <li>
                                    <span class="meta-label">Status:</span>
                                    <span class="meta-value">Draft</span>
                                </li>
                                <li>
                                    <span class="meta-label">Duration:</span>
                                    <span class="meta-value">2h 10m </span>
                                </li>
                                <li>
                                    <span class="meta-label">Students:</span>
                                    <span class="meta-value">5</span>
                                </li>
                            </ul>
                            <div class="dashboard-courses__footer">
                                <div class="dashboard-courses__price">
                                    <span class="sale-price">$100.<small class="separator">00</small></span>
                                </div>
                                <div class="dashboard-courses__action">
                                    <a class="action" href="#"><i class="fas  fa-pencil-alt"></i> Edit</a>
                                    <a class="action delete" href="#"><i class="fas  fa-trash-alt"></i> Delete</a>
                                    <a class="action" href="#"><i class="fas  fa-clone"></i> Duplicate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dashboard Course Item End -->

                    <!-- Dashboard Course Item Start -->
                    <div class="dashboard-courses__item">
                        <div class="dashboard-courses__thumbnail">
                            <a href="course-single-layout-01.php"><img src="images/courses-courses-2.jpg" alt="Courses" width="260" height="174"></a>
                        </div>
                        <div class="dashboard-courses__content">
                            <div class="dashboard-courses__rating">
                                <div class="rating-star">
                                    <div class="rating-label" style="width: 20%;"></div>
                                </div>
                                <span>(4)</span>
                            </div>
                            <h3 class="dashboard-courses__title"><a href="course-single-layout-01.php">Time Management Mastery: Do More, Stress Less</a></h3>
                            <ul class="dashboard-courses__meta">
                                <li>
                                    <span class="meta-label">Status:</span>
                                    <span class="meta-value">Draft</span>
                                </li>
                                <li>
                                    <span class="meta-label">Duration:</span>
                                    <span class="meta-value">1h 50m </span>
                                </li>
                                <li>
                                    <span class="meta-label">Students:</span>
                                    <span class="meta-value">1</span>
                                </li>
                            </ul>
                            <div class="dashboard-courses__footer">
                                <div class="dashboard-courses__price">
                                    <span class="sale-price">$120.<small class="separator">00</small></span>
                                </div>
                                <div class="dashboard-courses__action">
                                    <a class="action" href="#"><i class="fas  fa-pencil-alt"></i> Edit</a>
                                    <a class="action delete" href="#"><i class="fas  fa-trash-alt"></i> Delete</a>
                                    <a class="action" href="#"><i class="fas  fa-clone"></i> Duplicate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dashboard Course Item End -->

                    <!-- Dashboard Course Item Start -->
                    <div class="dashboard-courses__item">
                        <div class="dashboard-courses__thumbnail">
                            <a href="course-single-layout-01.php"><img src="images/courses-courses-32.jpg" alt="Courses" width="260" height="174"></a>
                        </div>
                        <div class="dashboard-courses__content">
                            <div class="dashboard-courses__rating">
                                <div class="rating-star">
                                    <div class="rating-label" style="width: 80%;"></div>
                                </div>
                                <span>(2)</span>
                            </div>
                            <h3 class="dashboard-courses__title"><a href="course-single-layout-01.php">Successful Negotiation: Master Your Negotiating Skills</a></h3>
                            <ul class="dashboard-courses__meta">
                                <li>
                                    <span class="meta-label">Status:</span>
                                    <span class="meta-value">Draft</span>
                                </li>
                                <li>
                                    <span class="meta-label">Duration:</span>
                                    <span class="meta-value">50m </span>
                                </li>
                                <li>
                                    <span class="meta-label">Students:</span>
                                    <span class="meta-value">15</span>
                                </li>
                            </ul>
                            <div class="dashboard-courses__footer">
                                <div class="dashboard-courses__price">
                                    <span class="free">Free</span>
                                </div>
                                <div class="dashboard-courses__action">
                                    <a class="action" href="#"><i class="fas  fa-pencil-alt"></i> Edit</a>
                                    <a class="action delete" href="#"><i class="fas  fa-trash-alt"></i> Delete</a>
                                    <a class="action" href="#"><i class="fas  fa-clone"></i> Duplicate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dashboard Course Item End -->

                    <!-- Dashboard Course Item Start -->
                    <div class="dashboard-courses__item">
                        <div class="dashboard-courses__thumbnail">
                            <a href="course-single-layout-01.php"><img src="images/courses-courses-3.jpg" alt="Courses" width="260" height="174"></a>
                        </div>
                        <div class="dashboard-courses__content">
                            <div class="dashboard-courses__rating">
                                <div class="rating-star">
                                    <div class="rating-label" style="width: 0%;"></div>
                                </div>
                                <span>(0)</span>
                            </div>
                            <h3 class="dashboard-courses__title"><a href="course-single-layout-01.php">Time Management Mastery: Do More, Stress Less</a></h3>
                            <ul class="dashboard-courses__meta">
                                <li>
                                    <span class="meta-label">Status:</span>
                                    <span class="meta-value">Pending</span>
                                </li>
                                <li>
                                    <span class="meta-label">Duration:</span>
                                    <span class="meta-value">2h 5m </span>
                                </li>
                                <li>
                                    <span class="meta-label">Students:</span>
                                    <span class="meta-value">0</span>
                                </li>
                            </ul>
                            <div class="dashboard-courses__footer">
                                <div class="dashboard-courses__price">
                                    <span class="sale-price">$80.<small class="separator">00</small></span>
                                </div>
                                <div class="dashboard-courses__action">
                                    <a class="action" href="#"><i class="fas  fa-pencil-alt"></i> Edit</a>
                                    <a class="action delete" href="#"><i class="fas  fa-trash-alt"></i> Delete</a>
                                    <a class="action" href="#"><i class="fas  fa-clone"></i> Duplicate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dashboard Course Item End -->

                    <!-- Dashboard Course Item Start -->
                    <div class="dashboard-courses__item">
                        <div class="dashboard-courses__thumbnail">
                            <a href="course-single-layout-01.php"><img src="images/courses-courses-33.jpg" alt="Courses" width="260" height="174"></a>
                        </div>
                        <div class="dashboard-courses__content">
                            <div class="dashboard-courses__rating">
                                <div class="rating-star">
                                    <div class="rating-label" style="width: 80%;"></div>
                                </div>
                                <span>(3)</span>
                            </div>
                            <h3 class="dashboard-courses__title"><a href="course-single-layout-01.php">Boost Your Productivity: Adapt, Improve, Do!</a></h3>
                            <ul class="dashboard-courses__meta">
                                <li>
                                    <span class="meta-label">Status:</span>
                                    <span class="meta-value">Draft</span>
                                </li>
                                <li>
                                    <span class="meta-label">Duration:</span>
                                    <span class="meta-value">2h 30m </span>
                                </li>
                                <li>
                                    <span class="meta-label">Students:</span>
                                    <span class="meta-value">8</span>
                                </li>
                            </ul>
                            <div class="dashboard-courses__footer">
                                <div class="dashboard-courses__price">
                                    <span class="sale-price">$99.<small class="separator">00</small></span>
                                </div>
                                <div class="dashboard-courses__action">
                                    <a class="action" href="#"><i class="fas  fa-pencil-alt"></i> Edit</a>
                                    <a class="action delete" href="#"><i class="fas  fa-trash-alt"></i> Delete</a>
                                    <a class="action" href="#"><i class="fas  fa-clone"></i> Duplicate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dashboard Course Item End -->
                </div>
                <!-- Dashboard My Courses End -->


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

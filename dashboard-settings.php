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
            $id=$_SESSION['id'];
            gd($row);
        ?>


        <!-- Dashboard Header End -->





        <!-- Dashboard Content Start -->
        <div class="dashboard-content">

            <div class="container">
                <h4 class="dashboard-title">Settings</h4>

                <!-- Dashboard Settings Start -->
                <div class="dashboard-settings">

                    <!-- Dashboard Tabs Start -->
                    <div class="dashboard-tabs-menu">
                        <ul>
                            <li><a class="active" href="dashboard-settings.php">Profile</a></li>
                            <li><a href="dashboard-settings-reset-password.php?id=<?php echo $id; ?>">Reset Password</a></li>
                        </ul>
                    </div>
                    <!-- Dashboard Tabs End -->
                    <?php
                        include '../connection/connection.php';
                        $id=$_SESSION['id'];
                        $sql="SELECT * FROM tutors WHERE id='$id'";
                        $result=mysqli_query($con,$sql);
                        $row=mysqli_fetch_assoc($result);

                        if (isset($_POST['submit'])) {
                            // Get the submitted data
                            $name = mysqli_real_escape_string($con, $_POST['name']);
                            $mail = mysqli_real_escape_string($con, $_POST['mail']);
                            $exp = mysqli_real_escape_string($con, $_POST['exp']);
                            $quali = mysqli_real_escape_string($con, $_POST['quali']);
                            $about = mysqli_real_escape_string($con, $_POST['bio']);
                            $uname = mysqli_real_escape_string($con, $_POST['uname']);
                            $rate = mysqli_real_escape_string($con, $_POST['rate']);
                            $slot = mysqli_real_escape_string($con, $_POST['slot']);

                            if ($_FILES['photo']['error'] === UPLOAD_ERR_OK) {
                                $photoFileName = $_FILES['photo']['name'];
                                $photoTempPath = $_FILES['photo']['tmp_name'];
                                $photoDestination = "../img/" . $photoFileName;
                        
                                if (move_uploaded_file($photoTempPath, $photoDestination)) {
                                    $photo = "img/" . $photoFileName;
                                } else {
                                    echo "Error uploading photo.";
                                    exit;
                                }
                            } else {
                                // No photo was uploaded, keep the existing photo value
                                $photo = $row['photo'];
                            }
                        
                        
                            // Update the user's information in the database
                            $id = $_SESSION['id'];
                            $sql = "UPDATE tutors SET
                            name='$name',
                            mail='$mail',
                            exp='$exp',
                            quali='$quali',
                            about='$about',
                            uname='$uname',
                            photo='$photo',
                            rate='$rate',
                            slot='$slot'
                            WHERE id='$id'";

                        
                            if (mysqli_query($con, $sql)) {
                                // Success message
                                echo "Profile updated successfully!";
                            } else {
                                // Error message
                                echo "Error updating profile: " . mysqli_error($con);
                            }
                        }
                    ?>
                    <form method="post" enctype="multipart/form-data">
                        <div class="row gy-6">
                            <div class="col-lg-6">

                                <!-- Dashboard Settings Info Start -->
                                <div class="dashboard-content-box">

                                    <h4 class="dashboard-content-box__title">Contact information</h4>
                                    <p>Provide your details below to create your account profile</p>

                                    <div class="row gy-4">
                                        <div class="col-md-6">
                                            <!-- Account Account details Start -->
                                            <div class="dashboard-content__input">
                                                <label class="form-label-02">Name</label>
                                                <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>">
                                            </div>
                                            <!-- Account Account details End -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Account Account details Start -->
                                            <div class="dashboard-content__input">
                                                <label class="form-label-02">Last name</label>
                                                <input type="text" class="form-control" name="mail" value="<?php echo $row['mail']; ?>">
                                            </div>
                                            <!-- Account Account details End -->
                                        </div>
                                        <div class="col-md-4">
                                            <!-- Account Account details Start -->
                                            <div class="dashboard-content__input">
                                                <label class="form-label-02">Work Experience</label>
                                                <input type="text" class="form-control" name="exp" value="<?php echo $row['exp']; ?>">
                                            </div>
                                            <!-- Account Account details End -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Account Account details Start -->
                                            <div class="dashboard-content__input">
                                                <label class="form-label-02">Qualifications</label>
                                                <input type="text" class="form-control" name="quali" value="<?php echo $row['quali']; ?>">
                                            </div>
                                            <!-- Account Account details End -->
                                        </div>
                                        <div class="col-md-12">
                                            <!-- Account Account details Start -->
                                            <div class="dashboard-content__input">
                                                <label class="form-label-02">Bio</label>
                                                <textarea class="form-control" name="bio" value=""><?php echo $row['about']; ?></textarea>
                                            </div>
                                            <!-- Account Account details End -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Account Account details Start -->
                                            <div class="dashboard-content__input">
                                                <label class="form-label-02">Username</label>
                                                <input type="text" class="form-control" name="uname" value="<?php echo $row['uname']; ?>">
                                            </div>
                                            <!-- Account Account details End -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Account Account details Start -->
                                            <div class="dashboard-content__input">
    
                                            </div>
                                            <!-- Account Account details End -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Account Account details Start -->
                                            <div class="dashboard-content__input">
      
                                            </div>
                                            <!-- Account Account details End -->
                                        </div>
                                       
                                    </div>

                                </div>
                                <!-- Dashboard Settings Info End -->

                            </div>
                            <div class="col-lg-6">

                                <!-- Dashboard Settings Info Start -->
                                <div class="dashboard-content-box">

                                    <h4 class="dashboard-content-box__title">Photo</h4>
                                    <p>Upload your profile photo.</p>

                                    <div id="dashboard-profile-cover-photo-editor" class="dashboard-settings-profile">
                                        <input id="dashboard-photo-dialogue-box" class="dashboard-settings-profile__input" type="file" accept=".png,.jpg,.jpeg" name="photo">

                                        <div id="dashboard-cover-area" class="dashboard-settings-profile__cover" data-fas="" lback="assets/images/cover-photo.jpg" style="background-image:url(../<?php echo $row['photo']; ?>)">
                                            <span class="cover-deleter">
                                                <i class="fas fa-trash-alt"></i>
                                            </span>
                                            
                                        </div>

                                        <div id="photo-meta-area" class="dashboard-settings-profile__photo-meta">
                                            <img src="images/info-icon.svg" alt="icon">
                                            <span>Profile Photo Size: <strong>200x200</strong> pixels,</span>
                                            <span>Cover Photo Size: <strong>700x430</strong> pixels,</span>
                                            <input type=file name="photo" id="photo" style="">
                                        </div>

                                        <div id="profile-photo" class="dashboard-settings-profile__photo" name="photo" data-fas="" lback="../<?php echo $row['photo']; ?>" style="background-image:url(../<?php echo $row['photo']; ?>)">
                                            <div class="overlay">
                                                <i class="fas fa-camera"></i>
                                            </div>
                                        </div>

                                        <div id="profile-photo-option" class="dashboard-settings-profile__photo-option">
                                            <span class="profile-photo-uploader"><i class="fas fa-upload"></i> Upload Photo</span>
                                            <span class="profile-photo-deleter"><i class="fas fa-trash-alt"></i> Delete</span>
                                        </div>
                                    </div>

                                   

                                </div>
                                <!-- Dashboard Settings Info End -->

                            </div>
                        </div>

                        <div class="dashboard-settings__btn">
                            <button class="btn btn-primary btn-hover-secondary" name="submit">Update Profile</button>
                        </div>
                    </form>

                </div>
                <!-- Dashboard Settings End -->
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
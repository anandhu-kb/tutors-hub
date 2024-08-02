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

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- ajax -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


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
            include '../connection/connection.php';
            $id = $_SESSION['id'];
            $query1=mysqli_query($con,"SELECT * FROM `tutor_classes_subjects` WHERE `tutor_id`='$id'");

            $query2=mysqli_query($con,"SELECT * FROM `tutors` WHERE `id`='$id'");

            $query3=mysqli_query($con,"SELECT * FROM `subjects`");
            $query4=mysqli_query($con,"SELECT * FROM `classes`");
            
       


        // <!-- Dashboard Header End -->

       
        // Check if the "show" button is pressed
        if (isset($_POST['show'])) {
            // Get the selected class ID
            $selectedClassID = $_POST['selected_class'];
        
            // Query to fetch subjects for the selected class
            $subjectQuery = mysqli_query($con, "SELECT * FROM subjects WHERE class_id='$selectedClassID'");
        
            // Display subjects in the selected class

        }
        ?>
        
        <!-- Dashboard Content Start -->
        <div class="dashboard-content">

            <div class="container">
                <h4 class="dashboard-title">Announcement</h4>

                <!-- Dashboard Announcement Start -->
                <div class="dashboard-announcement">

                    <!-- Dashboard Announcement Box Start -->
                    <div class="dashboard-content-box">

                        <!-- Dashboard Announcement Add Start -->
                        <div class="dashboard-announcement-add">

                            <div class="dashboard-announcement-add__content-wrap">
                                <div class="dashboard-announcement-add__icon">
                                    <i class="fas fa-bell"></i>
                                </div>
                                <div class="dashboard-announcement-add__content">
                                    <small>Share links</small>
                                    <p><strong>Notify all students of your course</strong></p>
                                </div>
                            </div>
                            <div class="dashboard-announcement-add__btn">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mdoModal">Share class link</button>
                            </div>




                            <div class="modal fade" id="mdoModal" tabindex="-1" role="dialog" aria-labelledby="mdoModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="mdoModalLabel">Share link:</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="default/message/send_message.php?id=<?php echo $id; ?>">
                                                <div class="form-group">
                                                    <select class="form-control" id="classSelect" name="class_id">



                                                    </select>
                                                </div>


                                                <div class="form-group">
                                                    <select class="form-control" name="selected_subject" id="subjectSelect">
                                                        <!-- The options will be loaded dynamically using AJAX -->
                                                    </select>
                                                </div>




                                                <div class="form-group">
                                                    <label for="message-text" class="col-form-label">Message:</label>
                                                    <textarea class="form-control" id="message-text" name="message"></textarea>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <input type="submit" class="btn btn-primary" name="share" value="Send Message">
                                                </div>
                                         </form>
                                         <div id="messageResponse"></div>



                                        <!-- ajax -->
                                         <!-- ... (Your HTML structure remains the same) ... -->

                                         <script>
                                            $(document).ready(function(){
                                                // Populate the class dropdown on page load
                                                $.ajax({
                                                    type: "GET",
                                                    url: "default/message/get_classes.php",
                                                    success: function(data){
                                                        $("#classSelect").html(data);
                                                    }
                                                });

                                                // When the class dropdown changes, update the subject dropdown
                                                $("#classSelect").change(function(){
                                                    var classId = $(this).val();
                                                    $.ajax({
                                                        type: "GET",
                                                        url: "default/message/get_subjects.php",
                                                        data: {class_id: classId},
                                                        success: function(data){
                                                            $("#subjectSelect").html(data);
                                                        }
                                                    });
                                                });

                                                // Handle form submission
                                                // $("#messageForm").submit(function(event){
                                                //     event.preventDefault();

                                                //     // Get form data
                                                //     var formData = $(this).serialize();

                                                //     // Send the message
                                                //     $.ajax({
                                                //         type: "POST",
                                                //         url: "default/message/send_message.php",
                                                //         data: formData,
                                                //         success: function(response){
                                                //             $("#messageResponse").html(response);
                                                //         }
                                                //     });
                                                // });
                                            });
                                        </script>






            </div>
        </div>
    </div>
</div>









                        </div>
                        <!-- Dashboard Announcement Add End -->

                    </div>
                    <!-- Dashboard Announcement Box End -->

                    <!-- Dashboard Announcement Box Start -->

                    <!-- Dashboard Announcement Box End -->

                    <!-- Dashboard Table Box Start -->
                    <div class="dashboard-table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="date">Date-Time</th>
                                    <th >Class</th>
                                    <th >Subject</th>
                                    <th class="announcements">Message</th>
                                    <th class="announcements">Action</th>




                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query1=mysqli_query($con,"SELECT * FROM `tutor_classes_subjects` WHERE `tutor_id`=$id");

                                    while($row1=mysqli_fetch_assoc($query1)){
                                        $course_id=$row1['id'];
                                        $class_id=$row1['class_id'];
                                        $subject_id=$row1['subject_id'];
                                        $query2=mysqli_query($con,"SELECT * FROM `messages_db` WHERE tutor_classes_subjects_id=$course_id");
                                        $query3=mysqli_query($con,"SELECT * FROM `classes` WHERE id=$class_id");
                                        $query4=mysqli_query($con,"SELECT * FROM `subjects` WHERE id=$subject_id");
                                        $class_name=mysqli_fetch_assoc($query3)['class_name'];
                                        $subject_name=mysqli_fetch_assoc($query4)['subject_name'];
                                        

                                        while($row2=mysqli_fetch_assoc($query2))
                                        {
                                    
                                    


                                        ?>
                                <tr>
                                    <td>
                                            <?php echo $row2['sent_time']; ?>
                                    </td>
                                    <td>
                                        <?php echo $class_name; ?>
                                    </td>
                                    <td>
                                            <?php echo $subject_name; ?>
                                    </td>
                                    <td>
                                        <?php echo $row2['message_text']; ?>
                                    </td>
                                    <td>
                                        <a href="default/message/delete_message.php?id=<?php echo $row2['id']; ?>&tid=<?php echo $id ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <?php }} ?>

                            </tbody>
                        </table>
                    </div>
                    <!-- Dashboard Table End -->

                </div>
                <!-- Dashboard Announcement End -->
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
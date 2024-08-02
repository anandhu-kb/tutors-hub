<?php

    $user_id = $_SESSION['id'];
if (!isset($_SESSION['id'])) {
    // Redirect to the login page if the user is not logged in
    header("Location: ../login.php");
    }
function generateDashboardMenu($user_id) {
    //echo '<!-- Dashboard Nav Menu Start -->';
    //echo '<div class="dashboard-nav__menu">';
    // Add your menu HTML code here...
    echo '<!-- Dashboard Nav Content Start -->
    <div class="offcanvas-body dashboard-nav__content navScroll">

        <!-- Dashboard Nav Menu Start -->
        <div class="dashboard-nav__menu">
            <ul class="dashboard-nav__menu-list">
                <li>
                    <a href="index.php?id='.$user_id.'">
                        <i class="edumi edumi-layers"></i>
                        <span class="text">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard-profile.php?id='.$user_id.'">
                        <i class="edumi edumi-follower"></i>
                        <span class="text">My Profile</span>
                    </a>
                </li>
                
            </ul>
            <ul class="dashboard-nav__menu-list">
                <li>
                    <span class="dashboard-nav__title">Instructor</span>
                </li>
                <li>
                    <a href="dashboard-my-courses.php?id='.$user_id.'">
                        <i class="edumi edumi-youtuber"></i>
                        <span class="text">My Courses</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard-announcement.php?id='.$user_id.'">
                        <i class="edumi edumi-announcement"></i>
                        <span class="text">Announcements</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard-withdraw.php?id='.$user_id.'">
                        <i class="edumi edumi-wallet"></i>
                        <span class="text">Withdrawals</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard-notes.php?id='.$user_id.'">
                        <i class="edumi edumi-support"></i>
                        <span class="text">Notes</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard-question-answer.php?id='.$user_id.'">
                        <i class="edumi edumi-question"></i>
                        <span class="text">Question &amp; Answer</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard-assignments.php?id='.$user_id.'">
                        <i class="edumi edumi-checklist"></i>
                        <span class="text">Assignments</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard-students.php?id='.$user_id.'">
                        <i class="edumi edumi-users"></i>
                        <span class="text">My Students</span>
                    </a>
                </li>
            </ul>
            <ul class="dashboard-nav__menu-list">
                <li>
                    <a href="dashboard-settings.php?id='.$user_id.'">
                        <i class="edumi edumi-settings"></i>
                        <span class="text">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="../logout.php">
                        <i class="edumi edumi-sign-out"></i>
                        <span class="text">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Dashboard Nav Menu End -->';
    echo '</div>';
    echo '<!-- Dashboard Nav Menu End -->';
}

?>
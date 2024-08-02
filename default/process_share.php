<?php
if (isset($_POST['share'])) {
    $selectedClass = $_POST['selected_class'];
    $selectedSubject = $_POST['selected_subject'];
    $message = $_POST['lnk'];
    echo "<script>alert('$selectedClass');</script>";
    echo "<script>alert('$selectedSubject');</script>";
    echo "<script>alert('$message');</script>";

    // Now you can use $selectedClass, $selectedSubject, and $message in your PHP logic
    // Perform any actions you need with this data
    // For example, you can store it in a database or perform other processing
}
?>
<?php
include 'connection.php';
$id = intval($_GET['id']);
// Retrieve form data
$classId = $_POST['class_id'];
$subjectId = $_POST['selected_subject'];
$message = $_POST['message'];

// Query to get students enrolled in the selected class and subject
$query1 = mysqli_query($con, "SELECT * FROM tutor_classes_subjects WHERE class_id='$classId' AND subject_id='$subjectId'");
$row1 = mysqli_fetch_assoc($query1);

if ($row1) {
    $studentId = $row1['id'];
    $tid = $row1['id'];

    $sent_time = date("Y-m-d H:i:s");
    $insertQuery = "INSERT INTO messages_db (tutor_classes_subjects_id, message_text, sent_time)
                    VALUES ($studentId, $tid, '$message', '$sent_time')";
    $insertResult = mysqli_query($con, $insertQuery);

    if ($insertResult) {
        header("location:../../dashboard-announcement.php?id=$id");
    } else {
        echo "Error inserting message into the database: " . mysqli_error($con);
    }
} else {
    echo "No students found for the selected class and subject.";
}
?>
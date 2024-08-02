<?php
include '../connection/connection.php';

if(isset($_POST['class_id'])) {
    $selectedClassID = $_POST['class_id'];
    
    $subjectQuery = mysqli_query($con, "SELECT * FROM subjects WHERE class_id='$selectedClassID'");
    
    if (!$subjectQuery) {
        // Add error handling here to display any database errors
        echo "Database Error: " . mysqli_error($con);
    } else {
        $subjects = array();
        while ($subjectRow = mysqli_fetch_assoc($subjectQuery)) {
            $subjectId = $subjectRow['id'];
            $subjectName = $subjectRow['subject_name'];
            $subjects[$subjectId] = $subjectName;
        }

        // Return subjects as JSON
        echo json_encode($subjects);
    }
} else {
    echo "Invalid request";
}
?>

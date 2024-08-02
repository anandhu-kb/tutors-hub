

<?php
session_start();
// Connect to your database here
include 'connection.php';

$id = $_SESSION['id'];
$classId = $_GET['class_id'];

echo '<option>select a subject </option>';

// Create an array to store unique class IDs
$subIds = array();

$sql = mysqli_query($con, "SELECT * FROM `tutor_classes_subjects` WHERE tutor_id='$id'");
while ($r = mysqli_fetch_assoc($sql)) {
    $subId = $r['subject_id'];
    
    // Check if the class_id is not already in the array
    if (!in_array($subId, $subIds)) {
        $subIds[] = $subId; // Add unique class_id to the array
        
        // Query to retrieve classes
        $query = "SELECT id, subject_name FROM subjects WHERE class_id = $classId AND id='$subId'";
        $result = mysqli_query($con, $query);
        
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='" . $row['id'] . "'>" . $row['subject_name'] . "</option>";
            }
        }
    }
}
?>

<?php
session_start();
// Connect to your database here
include 'connection.php';

$id = $_SESSION['id'];
echo '<option>select a class </option>';

// Create an array to store unique class IDs
$classIds = array();

$sql = mysqli_query($con, "SELECT * FROM `tutor_classes_subjects` WHERE tutor_id='$id'");
while ($r = mysqli_fetch_assoc($sql)) {
    $classId = $r['class_id'];
    
    // Check if the class_id is not already in the array
    if (!in_array($classId, $classIds)) {
        $classIds[] = $classId; // Add unique class_id to the array
        
        // Query to retrieve classes
        $query = "SELECT id, class_name FROM classes where id='$classId'";
        $result = mysqli_query($con, $query);
        
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='" . $row['id'] . "'>" . $row['class_name'] . "</option>";
            }
        }
    }
}
?>

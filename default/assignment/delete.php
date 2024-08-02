<?php
    $id=intval($_GET['id']);
    include '../../../connection/connection.php';
    $sql="DELETE FROM `assignment` WHERE id='$id'";
    $result=mysqli_query($con,$sql);
    header("location:../../dashboard-assignments.php?id=$id");

?>
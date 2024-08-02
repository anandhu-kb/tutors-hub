<?php
    $id=intval($_GET['id']);
    $tid=intval($_GET['tid']);
    include 'connection.php';
    $sql="DELETE FROM `messages_db` WHERE id='$id'";
    $result=mysqli_query($con,$sql);
    header("location:../../dashboard-announcement.php?id=$tid");

?>
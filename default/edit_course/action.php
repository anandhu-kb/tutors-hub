<html>
<head>
<title>Assignment</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>


<?php
    include '../../../connection/connection.php';
    $id=intval($_GET['id']);
    $sql="SELECT * FROM `tutor_classes_subjects` WHERE id='$id'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);    
    
    if(isset($_POST['edit'])){
        $starts=$_POST['s_date'];
        $ends=$_POST['e_date'];
        $slot=$_POST['slot']; 
        $rate=$_POST['rate'];
        $t_f=$_POST['t_f'];
        $t_t=$_POST['t_t'];

        $sql="UPDATE `tutor_classes_subjects` SET `starts`='$starts',`ends`='$ends',`slot`='$slot',`rate`='$rate',`time_from`='$t_f',`time_to`='$t_t' WHERE id='$id'";
        $result=mysqli_query($con,$sql);
        header("location:../../dashboard-my-courses.php");
    }
    else if(isset($_POST['close'])){
        header("location:../../dashboard-my-courses.php");
    }
?>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Start on</label>
            <input type="date" class="form-control" name="s_date" value="<?php echo $row['starts']; ?>" aria-describedby="emailHelp" >  
            <label for="exampleInputEmail1">Ends on</label>
            <input type="date" class="form-control" name="e_date" value="<?php echo $row['ends']; ?>" aria-describedby="emailHelp" > 
            <label for="exampleInputEmail1">Number of Slot</label>
            <input type="text" class="form-control" name="slot" value="<?php echo $row['slot']; ?>" aria-describedby="emailHelp" > 
            <label for="exampleInputEmail1">Rate</label>
            <input type="text" class="form-control" name="rate" value="<?php echo $row['rate']; ?>" aria-describedby="emailHelp" > 
            <label for="exampleInputEmail1">Time From</label>
            <input type="time" class="form-control" name="t_f" value="<?php echo $row['time_from']; ?>" aria-describedby="emailHelp" > 
            <label for="exampleInputEmail1">Time To</label>
            <input type="time" class="form-control" name="t_t" value="<?php echo $row['time_to']; ?>" aria-describedby="emailHelp" > 


    </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary"  name="close">Close</button>
        <button type="submit" class="btn btn-primary" name="edit">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>


<script>
// JavaScript to open the modal automatically
$(document).ready(function() {
  $('#exampleModalCenter').modal('show');
});
</script>


</body>
<html>
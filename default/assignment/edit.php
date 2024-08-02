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
    $sql="SELECT * FROM `assignment` WHERE id='$id'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);    
    
    if(isset($_POST['edit'])){
        $name=$_POST['name'];
        $sql="UPDATE `assignment` SET `assignment`='$name' WHERE id='$id'";
        $result=mysqli_query($con,$sql);
        header("location:../../dashboard-assignments.php");
    }
    else if(isset($_POST['close'])){
        header("location:../../dashboard-assignments.php");
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
            <label for="exampleInputEmail1">Assignment Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $row['assignment']; ?>" aria-describedby="emailHelp" placeholder="Enter Assignment Name">  

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
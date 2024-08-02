<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Pure CSS Table Highlight (vertical &amp; horizontal)</title>
  <link rel="stylesheet" href="view/style.css">

</head>
<body>
	<?php
		$id=intval($_GET['id']);
		include '../../../connection/connection.php';
		$sql=mysqli_query($con,"SELECT * FROM `assignment_upload` WHERE assignment_id='$id'");

		$a=mysqli_fetch_assoc($sql);
		$t=mysqli_query($con,"SELECT * FROM `assignment` WHERE id='$id'");
		$topic=mysqli_fetch_assoc($t)['assignment'];

	?>
<!-- partial:index.partial.html -->
<div class="container">
	<table>
		<thead>
			<tr>
				<th>Student Name</th>
				<th>Topic</th>
				<th>File</th>
			</tr>
		</thead>
		<tbody>
			<?php
				while($row=mysqli_fetch_assoc($sql)){
					$stu_id=$row['stu_id'];
					$stu=mysqli_query($con,"SELECT * FROM `student` WHERE id='$stu_id'");
					$stu_name=mysqli_fetch_assoc($stu)['name'];
					?>
					<tr>
						<td><?php echo $stu_name; ?></td>
						<td><?php echo $topic; ?></td>
						<td><a href="../../../<?php echo $row['file']; ?>" >View</a></td>
					</tr>
					<?php
				}
			?>

			
		</tbody>
	</table>
</div>
<!-- partial -->
  
</body>
</html>

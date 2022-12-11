<html>
<head>
	<title> Student details</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php 
include("func.php");
if(isset($_POST['class_six_submit']))
{
	$student_id=$_POST['search'];
	$query="SELECT * FROM class_six WHERE student_id='$student_id';";
	$result=mysqli_query($con,$query);
	echo "<div class='container-fluid' >
	<div class 'card'>
	<img src='school1.png' class='card-img-top'><div class='card-body' style='background-color:#3498DB;color: #ffffff'>
	<div class='card-body'><a href='student_details.php' class='btn btn-light'>Go Back</a></div>
		<table class='table table-hover'>
  <thead>
    <tr> 
      <th scope='col'>roll</th>
      <th scope='col'>student_name</th>
      <th scope='col'>student_id</th>
       <th scope='col'>class</th>
    </tr>
  </thead>
  <tbody>";
	while ($row=mysqli_fetch_array($result)) {
	$roll=$row['roll'];
    $student_name=$row['student_name'];
    $student_id=$row['student_id'];
	$class=$row['class'];
	echo "<tr>
	<td>$roll</td>
	<td>$student_name</td>
	<td>$student_id</td>
	<td>$class</td>
	</tr>";
	}
	echo "</tbody></table></div></div></div>";
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

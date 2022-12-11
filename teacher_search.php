<html>
<head>
	<title> Teacher details</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php 
include("func1.php");
if(isset($_POST['teacher_submit']))
{
	$teacher_id=$_POST['search'];
	$query="SELECT * FROM teacher WHERE teacher_id='$teacher_id';";
	$result=mysqli_query($con,$query);
	echo "<div class='container-fluid' >
	<div class 'card'>
	<img src='school1.png' class='card-img-top'><div class='card-body' style='background-color:#3498DB;color: #ffffff'>
	<div class='card-body'><a href='teacher_details.php' class='btn btn-light'>Go Back</a></div>
		<table class='table table-hover'>
  <thead>
    <tr> 
      <th scope='col'>teacher_name</th>
      <th scope='col'>teacher_id</th>
       <th scope='col'>post</th>
    </tr>
  </thead>
  <tbody>";
	while ($row=mysqli_fetch_array($result)) {
    $teacher_name=$row['teacher_name'];
    $teacher_id=$row['teacher_id'];
	$post=$row['post'];
	echo "<tr>
	<td>$teacher_name</td>
	<td>$teacher_id</td>
	<td>$post</td>
	</tr>";
	}
	echo "</tbody></table></div></div></div>";
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

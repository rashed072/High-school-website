<?php
$con=mysqli_connect("localhost","root","","school");
if (isset($_POST['login_submit'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="SELECT * FROM admin WHERE username='$username' AND
	 password='$password'";
	$result=mysqli_query($con,$query);
	if(empty($username)||empty($password))
	{
		header("Location:index.php?signup=empty");
		exit();
	}
	if (mysqli_num_rows($result)>0) {
		header("Location:admin-panel.php");
	}
}
if (isset($_POST['pat_submit'])) {
	$roll=$_POST['roll'];
    $student_name=$_POST['student_name'];
	$student_id=$_POST['student_id'];
	$class=$_POST['class'];
	if ($class=='class six') {
		$query="INSERT INTO class_six(roll,student_name,student_id,class) values('$roll','$student_name','$student_id','$class');";
		mysqli_query($con,$query);
					header("Location:admin-panel.php?signup=success");
	}
	else if ($class=='class seven') {
		$query="INSERT INTO class_seven(roll,student_name,student_id,class) values('$roll','$student_name','$student_id','$class');";
		mysqli_query($con,$query);
					header("Location:admin-panel.php?signup=success");
	}
	else if ($class=='class eight') {
		$query="INSERT INTO class_eight(roll,student_name,student_id,class) values('$roll','$student_name','$student_id','$class');";
		mysqli_query($con,$query);
					header("Location:admin-panel.php?signup=success");
	}
	else if ($class=='class nine') {
		$query="INSERT INTO class_nine(roll,student_name,student_id,class) values('$roll','$student_name','$student_id','$class');";
		mysqli_query($con,$query);
					header("Location:admin-panel.php?signup=success");
	}
	else if ($class=='class ten') {
		$query="INSERT INTO class_ten(roll,student_name,student_id,class) values('$roll','$student_name','$student_id','$class');";
		mysqli_query($con,$query);
					header("Location:admin-panel.php?signup=success");
	}
	}
	function get_student_details(){
		global $con;
		$query="SELECT * FROM class_six";
		$result=mysqli_query($con,$query);
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
	}
?>
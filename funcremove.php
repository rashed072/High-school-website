<?php
$con=mysqli_connect("localhost","root","","school");
if (isset($_POST['submit'])) {
	$roll=$_POST['roll'];
    $student_name=$_POST['student_name'];
	$student_id=$_POST['student_id'];
	$class=$_POST['class'];
	if ($class=='class six') {
		$query="DELETE FROM class_six where student_id=$istudent_id;";
		mysqli_query($con,$query);
					header("Location:admin-panel.php?signup1=success");
	}
	else if ($class=='class seven') {
		$query="DELETE FROM class_seven where student_id=$student_id;";
		mysqli_query($con,$query);
					header("Location:admin-panel.php?signup=success");
	}
	else if ($class=='class eight') {
		$query="DELETE FROM class_eight where student_id=$student_id;";
		mysqli_query($con,$query);
					header("Location:admin-panel.php?signup=success");
	}
	else if ($class=='class nine') {
		$query="DELETE FROM class_nine where student_id=$student_id;";
		mysqli_query($con,$query);
					header("Location:admin-panel.php?signup=success");
	}
	else if ($class=='class ten') {
		$query="DELETE FROM class_six where student_id=$student_id;";
		mysqli_query($con,$query);
					header("Location:admin-panel.php?signup=success");
	}
	}
?>
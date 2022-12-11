<?php
$con=mysqli_connect("localhost","root","","school");
if (isset($_POST['teacher_add_submit'])) {
	$teacher_name=$_POST['teacher_name'];
    $teacher_id=$_POST['teacher_id'];
	$post=$_POST['post'];
	if ($post=='teacher') {
		$query="INSERT INTO teacher(teacher_name,teacher_id,post) values('$teacher_name','$teacher_id','$post');";
		mysqli_query($con,$query);
					header("Location:admin-panel.php?signup=success");
	}
	else if ($post=='assistant teacher') {
		$query="INSERT INTO assistant_teacher(teacher_name,teacher_id,post) values('$teacher_name','$teacher_id','$post');";
		mysqli_query($con,$query);
					header("Location:admin-panel.php?signup=success");
	}
	else if ($post=='headmaster') {
		$query="INSERT INTO headmaster(teacher_name,teacher_id,post) values('$teacher_name','$teacher_id','$post');";
		mysqli_query($con,$query);
					header("Location:admin-panel.php?signup=success");
	}
	
	}
	function get_teacher_details(){
		global $con;
		$query="SELECT * FROM teacher";
		$result=mysqli_query($con,$query);
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
	}
?>
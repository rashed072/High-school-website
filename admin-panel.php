<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="jumbotron" style="background: url('school1.png') no-repeat;background-size: cover; height: 500px ;"></div>
	<div class="container">
		<div class="row">

			<div class="col-md-8">
				<div class="card">
						<a href="" class="list-group-item" style="background-color: #3498DB;color: #ffffff"> Add a student</a>
					</div>
					<div class="card-body"> 
						<form class="form-group" action="func.php" method="post">
							<label>roll:</label>
							<input type="text" name="roll" class="form-control">
							<label>student_name:</label>
							<input type="text" name="student_name" class="form-control">
							<label>id:</label>
							<input type="text" name="student_id" class="form-control">
							<label>Class:</label>
							<select class="form-control" name="class">
								<option value="class six"> class six</option>
								<option value="class seven"> class seven</option>
								<option value="class eight"> class eight</option>
								<option value="class nine"> class nine</option>
								<option value="class ten"> class ten</option>
							</select><br>
							<input type="submit" class="btn btn-primary" name="pat_submit">
						</form>

					</div>
			</div>
			<div class="col-md-3">
				<div class="list-group">
					<a href="" class="list-group-item active" style="background-color: #3498DB;color: #ffffff">Teachers Details</a>
					<a href="teacher_details.php" class="list-group-item ">Teachers</a> 
					<a href="teacher_details.php" class="list-group-item ">Assistant Teachers</a> 
					<a href="teacher_details.php" class="list-group-item ">Headmasters</a>
				</div>
				<hr>
				<div class="list-group">
					<a href="" class="list-group-item active" style="background-color: #3498DB;color: #ffffff">Students Details</a>
					<a href="student_details.php" class="list-group-item ">class six</a> 
					<a href="student_details.php" class="list-group-item ">class seven</a> 
					<a href="student_details.php" class="list-group-item ">class eight</a> 
					<a href="student_details.php" class="list-group-item ">class nine</a> 
					<a href="student_details.php" class="list-group-item ">class ten</a> 
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3"></div>
			</div>
				<div class="col-md-8">
				<div class="card">
						<a href="" class="list-group-item" style="background-color: #3498DB;color: #ffffff"> Remove  a student</a>
					</div>
					<div class="card-body"> 
						<form class="form-group" action="funcremove.php" method="post">
							<label>roll:</label>
							<input type="text" name="roll" class="form-control">
							<label>student_name:</label>
							<input type="text" name="student_name" class="form-control">
							<label>id:</label>
							<input type="text" name="student_id" class="form-control">
							<label>Class:</label>
							<select class="form-control" name="class">
								<option value="class six"> class six</option>
								<option value="class seven"> class seven</option>
								<option value="class eight"> class eight</option>
								<option value="class nine"> class nine</option>
								<option value="class ten"> class ten</option>
							</select><br>
							<input type="submit" class="btn btn-primary" name="submit">
						</form>
					</div>
					</div>
			<div class="col-md-1"></div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="card">
						<a href="" class="list-group-item" style="background-color: #3498DB;color: #ffffff"> Add a teacher</a>
					</div>
					<div class="card-body"> 
						<form class="form-group" action="func1.php" method="post">
							<label>teacher_name:</label>
							<input type="text" name="teacher_name" class="form-control">
							<label>teacher_id:</label>
							<input type="text" name="teacher_id" class="form-control">
							<label>post:</label>
							<select class="form-control" name="post">
								<option value="teacher">teacher</option>
								<option value="assistant teacher"> assistant teacher</option>
								<option value="headmaster"> headmaster</option>
							</select><br>
							<input type="submit" class="btn btn-primary" name="teacher_add_submit">
						</form>
					</div>
			</div>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="card">
						<a href="" class="list-group-item" style="background-color: #3498DB;color: #ffffff"> Remove a teacher</a>
					</div>
					<div class="card-body"> 
						<form class="form-group" action="funcremove1.php" method="post">
							<label>teacher_name:</label>
							<input type="text" name="teacher_name" class="form-control">
							<label>teacher_id:</label>
							<input type="text" name="teacher_id" class="form-control">
							<label>post:</label>
							<select class="form-control" name="post">
								<option value="teacher">teacher</option>
								<option value="assistant teacher"> assistant teacher</option>
								<option value="headmaster"> headmaster</option>
							</select><br>
							<input type="submit" class="btn btn-primary" name="teacher_remove_submit">
						</form>
					</div>
			</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
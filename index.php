<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style type="text/css">
		#ab1:hover{cursor: pointer;}
	</style>
<body style="background: url('school.png') no-repeat; background-size: cover; height: 400px width:300px">
	<div class="container" style="width: 350px; margin-top:100px">
		<div class="card">
			<img src="school1.png" class="card-img-top">
			<div class="card-body">
		<form class="form-group" action="func.php" method="POST">
			<label>Username:</label><br>
			<input type="text" name="username" class="form-control" placeholder="enter Username"><br>
			<label>Password:</label><br>
			<input type="password" name="password" class="form-control" placeholder="enter Password"><br>
			<input type="submit" name="login_submit" id="ab1" class="btn btn-primary">
		</form>
		</div>
		</div>
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
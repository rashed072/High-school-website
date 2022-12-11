<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<title>Batbunia Collegiate School</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<script type="text/javascript">
				var images = ["Pictures/22.jpg",
				"Pictures/25.jpg",
				"Pictures/30.jpg",
				"Pictures/27.jpg",
				"Pictures/29.jpg"
				];
				var i=0;  
				function slides(){
					document.getElementById("slideimage").src = images[i];
					if (i<(images.length-1)) 
						i++;
						else
							i=0; 
				}
				setInterval(slides,2000)
			</script>
<div class="homepage">
	<div class="header">
		 <div>
      <img src="Pictures/Logo12.jpg" style="width: 230px;height:120px;float: left;padding-left: 50px; padding-right:25px;">
    </div>
		<div style="width: 430px;height:160px;float: left;padding-left: 120px; padding-top: 10px;">
			<center>
         <h6 style="color:white">Batbunia Collegiate School </h6>
         <h6 style="color:white">বটবুনিয়া কলেজিয়েট স্কুল</h6>
         <h6 style="color:white">Batbunia, Dacope, Khulna, Bangladesh</h6> 
         <h6 style="color: whitesmoke">Established:1928; EIIN:116931</h6>  
         </center>
		</div>
		<div>
			<a class="card-link" href="index.php" style="color: white;padding-left:120px;"> admin login</a>
	</div>
</div><hr>
<div class="linkpart">
	<ul>
		<li><a href="homepage.php">Home</a></li>
		<li><a href="">Student Information</a>
			<ul>
				<li><a href="student_details1.php">class six</a></li>
				<li><a href="student_details1.php">class seven</a></li>
				<li><a href="student_details1.php">class eight</a></li>
				<li><a href="student_details1.php">class nine</a></li>
				<li><a href="student_details1.php">class ten</a></li>
			</ul></li>
		<li><a href="">Administration</a>
			<ul>
				<li><a href="teacher_details1.php">teacher</a></li>
				<li><a href="teacher_details1.php">assistant teacher</a></li>
				<li><a href="teacher_details1.php">headmaster</a></li>
			</ul></li>
		<li><a href="contact.php">Contact</a></li>
	</ul>
</div><hr>
<div class="bodypart">
<div class="slideshow">
	<img src="Pictures/22.jpg" id="slideimage">
</div>
<div class="newspart">
	<h4><center>Contacts</center></h4>
</Center>
	<div class="news">
		<marquee direction="up" height="100%">
			<h4><br><h1>CONTACT INFORMATION</h1>
<p>
BATBUNIA COLLEGIATE SCHOOL <br><br>   
Address: BATBUNIA <br>
Post Office: BATBUNIA <br>
Post Code: 9270 <br>   
Thana: DACOPE <br>
District: KHULNA <br>
Division: KHULNA <br>
Phone Number: +8801724715510 

 <br>
Email:batbuniahighschool@gmail.com 
</p></h4><br>
		</marquee>
	</div>
</div>
</div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
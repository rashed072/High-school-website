<!DOCTYPE html>
<html>
<head>
	<style>
.slideshow{
width: 80%;
height: 700px;
margin:auto;
	
}
#slideimage{
	width: 100%;
	height: 550px;
}
</style>
</head>
<body>
	<script type="text/javascript">
				var images = ["Pictures/22.jpg",
				"Pictures/29.jpg",
				"Pictures/Logo12.jpg"
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
<div class="slideshow">
	<h1>
		Image slide show using html and javascript
	</h1>
	<hr>
	<img src="Pictures/22.jpg" id="slideimage">
</div>
</body>
</html>
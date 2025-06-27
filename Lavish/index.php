<!DOCTYPE>
<html>
	<head>
		<title>
			The Dream Hotel
		</title>
		<link rel="shortcut icon" href="Favicons/U/favicon.ico" type="image/x-icon">
	</head>
	<style>
		body {
			margin: 0px;
		}
		.border {
			border: 1px solid #ccc;
			border-radius: 5px;
			margin: 10px 5px;
			padding: 4px;
		}
		ul
		{
  			list-style-type: none;
			background-color: rgb(52, 53, 54);
			margin : 5px 10px 5px 10px;
			border-radius: 20px;
			color: white;
			padding: 0px;
			overflow: hidden;
			z-index: 1;
			position: sticky;
			top: 0px;
		}
		li
		{
			display: inline;
			float: left;
		}
		h1
		{
			background-color: rgb(52, 53, 54);
			color: white;
			margin : 10px 10px 5px 10px;
			border: 5px ;
			border-radius: 20px;
			padding: 15px;
			font-size: 60px;
			text-align: center;
			font-family: "Times New Roman";
		}
		h2
		{
			border: 10px;
			padding: 5px;
			font-size: 35px;
			text-align: center;
		}
		a:link, a:visited 
		{
			color: white;
			padding: 14px 25px;
			text-align: center; 
			text-decoration: none;
			display: block;
		}

		a:hover, a:active 
		{
			background-color: black;
			color: white;
		}
		.reserve_room
		{
			color: #000;
			background-color: rgb(52, 53, 54);
			border: 2px solid white;
			padding: 5px;
			font-size: 35px;
			text-align: center;
			text-shadow: 1px 1px white;
			width: 500px;
			margin: auto;
			border-radius: 50px;
		}
		.reserve_room:hover
		{
			color: white;
			border: 10px;
			padding: 14px;
			font-size: 35px;
			text-align: center;
			background-color:black;
			width: 500px;
			margin: auto;
			border-radius: 50px;
		}

		.headings
		{
			color: black;
			font-family: "Times New Roman";
			text-decoration: none;
		}

		.welcome1
		{
			color: black;
			font-family: "Courier New, monospace";
			font-size: 28px;
		}
		.welcome2
		{
			color: black;
			font-family: Snell Roundhand, cursive;
			font-size: 24px;
			color: teal;
		}
		.basic_box {
			border: 1px solid #ccc;
			border-radius: 5px;
			margin: 50px 170px 50px 170px;
			padding: 25px;
			box-shadow: 1px 1px 5px 2px black;
			background-color: #D7C0AE;
		}
		.card{
              		width: 300px;
              		height: 200px;
              		border: 2px solid black;
              		display: inline-block;
              		margin: 3%;
              		border-radius: 10px;
              		transition: 1s;
			border: 2px solid black;
                            }
		.card > img{
			width: 100%;
			height: 100%;
			opacity: 1;
			border-radius: 9px;
		}
		.desc > h2{
              		text-align: center;
			font-size: 20px;
		}
		.card:hover{
			box-shadow: 3px 3px 8px 1px black;
		}
		.r_room
		{
			color: #FFF;
			border: 10px;
			padding: 10px;
			font-size: 35px;
			text-align: center;
			text-shadow: 2px 2px #444444;
			background-color: rgb(52, 53, 54);
			width: 500px;
			margin: auto;
			border-radius: 40px;
		}
		
		footer {
			background-color: rgb(52, 53, 54);
			height: 50%;
			position:relative;
		}
		#about {
			width:60%;
			color: #FFF;
			font-family: 'Times New Roman', Times, serif;
              		font-size: 15px;
			position:absolute;
			top:25px;
			left:25px;
			
		}
		#features{
			background-color: rgb(52, 53, 54);
			margin : 5px 10px 5px 10px;
			border-radius: 0;
			color: white;
		}
		#contact{
			width:30%;
			color: #FFF;
			font-family: 'Times New Roman', Times, serif;
              		font-size: 15px;
			position:absolute;
			top:25px;
			right:25px;
		}
		* {box-sizing: border-box;}
		body {font-family: Verdana, sans-serif;}
		.mySlides {display: none;}
		img {
			vertical-align: middle;
			background-size: cover;
		}
		
		/* Slideshow container */
		.slideshow-container {
		  max-width: 10000px;
		  position: relative;
		  margin: 5px 10px 5px 10px;
		  padding: 0px;
		}

		/* Caption text */
		.text {
		  color: #f2f2f2;
		  font-size: 30px;
		  padding: 8px 12px;
		  position: absolute;
		  bottom: 8px;
		  width: 100%;
		  text-shadow: 4px 4px black;
		  text-align: center;
		}

		/* Number text (1/3 etc) */
		.numbertext {
		  color: #f2f2f2;
		  font-size: 12px;
		  padding: 8px 12px;
		  position: absolute;
		  top: 0;
		}

		/* The dots/bullets/indicators */
		.dot {
		  height: 15px;
		  width: 15px;
		  margin: 0 2px;
		  background-color: white;
		  border-radius: 50%;
		  display: inline-block;
		  transition: background-color 0.6s ease;
		}

		.active {
		  background-color: #717171;
		}

		/* Fading animation */
		.fade {
		  -webkit-animation-name: fade;
		  -webkit-animation-duration: 1.5s;
		  animation-name: fade;
		  animation-duration: 1.5s;
		}

		@-webkit-keyframes fade {
		  from {opacity: .4} 
		  to {opacity: 1}
		}

		@keyframes fade {
		  from {opacity: .4} 
		  to {opacity: 1}
		}
	</style>

	<body style="background: #EFE1D1;">
		
		<h1><p style="color: #FFF2D7; display: inline;">LAVISH INN</p></h1>

		<ul>
			<li><a href="index.php">HOME</a>
			<li><a href="admin_login.php">ADMIN LOGIN</a></li>
			<li><a href="user_login.php">USER LOGIN</a></li>
			<li><a href="roomgallery.php">ROOM GALLERY</a></li>
			<li><a href="image_gallery.php">IMAGE GALLERY</a>
			<li style="float: right;"><a href="#about">About</a></li>
		</ul>

		<div class="slideshow-container">

		<div class="mySlides fade">
		  <img id="1" src="Images/1.jpg" style="width:100%">
		  <div class="text">ENJOY THE DREAM EXPERIENCE</div>
		</div>

		<div class="mySlides fade">
		  <img id="2" src="Images/2.jpg" style="width:100%">
		  <div class="text">REDEfINE LUXURY</div>
		</div>

		<div class="mySlides fade">
		  <img id="3" src="Images/3.jpg" style="width:100%">
		  <div class="text">SAVOUR EVERY SERVE, EVERY SERVICE</div>
		</div>

		</div>
		<br>

		<div style="text-align:center">
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		</div>

		<script>
		var slideIndex = 0;
		showSlides();

		function showSlides() {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("dot");
		  for (i = 0; i < slides.length; i++) {
		    slides[i].style.display = "none";  
		  }
		  slideIndex++;
		  if (slideIndex > slides.length) {slideIndex = 1}    
		  for (i = 0; i < dots.length; i++) {
		    dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block";  
		  dots[slideIndex-1].className += " active";
		  setTimeout(showSlides, 4500); // Change image every 4.5 seconds
		}
		</script>
		<br><br>
		<a class="reserve_room" href="user_login.php">RESERVE A ROOM</a><br>

		<h2 class="welcome1">Experience a good stay, enjoy fantastic offers</h2><br>

		<h2 class="r_room">OUR ROOMS</h2><br>
		<div id="rooms_and_rates" class="basic_box">
			<div class="card">
				<img src="images/1.jpg" alt="Snow" style="width:100%">
				<div class="desc">
					<h2>Deluxe Room</h2>
				</div>
			</div>
			<div class="card">
				<img src="images/2.jpg" alt="Forest" style="width:100%">
				<div class="desc">
					<h2>Executive Room</h2>
				</div>
			</div>
			<div class="card">
				<img src="images/3.jpg" alt="Mountains" style="width:100%">
				<div class="desc">
					<h2>Standard Room</h2>
				</div>
			</div>
			
		</div><br>
		<footer>
			<div id="about">
        				<h3>About Lavish Inn</h3>
				<p>Welcome to Lavish Inn, the ultimate hotel management solution designed to streamline your hospitality experience. Our platform offers a range of powerful features tailored to meet the needs of both users and administrators.</p>
        				<h4>Key Features:</h4>
				<ul id="features">
            					<li>User Login: Access all booking tools and options for seamless room reservations.</li>
            					<li>Admin Login: Complete control over hotel management, including room management and administration.</li>
					<li>Image Gallery: Explore stunning visuals of our luxurious rooms and facilities.</li>
            					<li>Room Brochure: Easily view room rates and amenities available.</li>
            					<li>Room Booking History: Conveniently access your past room booking details for future reference.</li>
        				</ul>
        				<p>Experience the seamless blend of convenience and luxury with Lavish Inn. Elevate your hotel management experience today!</p>
    			</div>
			<div id="contact">
				<h3>Contact Us</h3>
				<h4>Developers :</h4>
				<h5>G Udaykiran(R22EH152)</h5>
				<h5>K Karthik(R22EH155)</h5>
				<p>Reva University ,Rukmini Knowledge Park, Yelahanka, Kattigenahalli, Bengaluru, Sathanur, Karnataka 560064</p>
			</div>
		</footer>
	</body>
</html>


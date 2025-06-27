<!-- <!DOCTYPE>
<html>
	<head>
		<title>Image Gallery</title>
	</head>
	<style type="text/css">
		body {
			background: #f2f2f2;
			margin: 0px;
		}
		.basic_box {
			border: 1px solid #ccc;
			border-radius: 5px;
			margin: 10px 220px;
			padding: 50px;
			box-shadow: 0 10px 20px rgba(0,0,0,0.19);
		}
		ul
		{
  			list-style-type: none;
			background-color: rgba(09,41,98,0.99);
			margin-bottom: 10px;
			color: white;
			margin-top: -38px;
			padding: 0px;
			overflow: hidden;
			margin-left: -10px;
			margin-right: -10px;
			z-index: 1;
			position: sticky;
			top: 0px;
		}
		.footer {
			background-color: rgba(09,41,98,0.99);
			bottom: 0px;
			margin: 0px;
			margin-bottom: 0px;
			padding: 10px,0;
		}
		.foot-text {
			color: #D6FEFF;
			text-align: left;
		}
		li
		{
			display: inline;
			float: left;
		}
		* {box-sizing: border-box;}

		body {font-family: Verdana, sans-serif;}

		.mySlides {display: none;}

		h1
		{
			background-color: rgba(09,41,98,0.99);
			color: white;
			border: 10px;
			margin-left: -10px;
			margin-right: -10px;
			margin-top: -10px;
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
			background-color: white;
			color: #094198;
		}

		img {
			vertical-align: middle;
			background-size: cover;
		}
		.row {
  			display: flex;
		}

		.column {
  			flex: 33.33%;
  			padding: 5px;
		}
		.r_room
		{
			color: #FFF;
			border: 10px;
			padding: 10px;
			font-size: 35px;
			text-align: center;
			text-shadow: 2px 2px black;
			background-color: rgba(09,41,98,0.99);
			width: 500px;
			margin: auto;
			border-radius: 40px;
		}
	</style>
	<body>
		<h1>THE <p style="color: #e6b800; display: inline;">DELUXE</p> HOTEL</h1>
		<ul>
			<li><a href="index.php">HOME</a>
			<li><a href="admin_login.php">ADMIN LOGIN</a></li>
			<li><a href="user_login.php">USER LOGIN</a></li>
			<li><a href="#rooms_and_rates">ROOM GALLERY</a></li>
			<li><a href="image_gallery.php">IMAGE GALLERY</a>
			<li style="float: right;"><a href="#contact">Contact Details</a></li>
		</ul>
		<br>
		<h2 class="r_room">IMAGE GALLERY</h2><br>
		<div class="row">
  			<div class="column">
    			<img src="images/1.jpg" alt="Snow" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/2.jpg" alt="Forest" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/3.jpg" alt="Mountains" style="width:100%">
  			</div>
		</div><br>
		<div class="row">
  			<div class="column">
    			<img src="images/A1.jpg" alt="Snow" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/A2.jpg" alt="Forest" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/A3.jpg" alt="Mountains" style="width:100%">
  			</div>
		</div><br>
		<div class="row">
  			<div class="column">
    			<img src="images/A4.jpg" alt="Snow" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/A5.jpg" alt="Forest" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/A6.jpg" alt="Mountains" style="width:100%">
  			</div>
		</div><br><br><br>
		<h2 id="rooms_and_rates" class="r_room">OUR ROOMS</h2>
		<div class="basic_box">
			<div class="row">
  				<div class="column">
    				<img src="images/1.jpg" alt="Snow" style="width:100%">
  				</div>
  				<div class="column">
    				<img src="images/2.jpg" alt="Forest" style="width:100%">
  				</div>
  				<div class="column">
    				<img src="images/3.jpg" alt="Mountains" style="width:100%">
  				</div>
			</div>
			<div class="row">
  				<div class="column">
    				<h3>Deluxe Room</h3>
  				</div>
  				<div class="column">
    				<h3>Executive Room</h3>
  				</div>
  				<div class="column">
    				<h3>Standard Room</h3>
  				</div>
			</div>
		</div><br>
		<div id="contact" class="footer">
			<hr>
			<h2 class="foot-text">Contact Us!</h2>
			<h3 class="foot-text">Developers: VV, PKK</h3><br>
		</div>
	</body> -->


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
                            .card > a{
                                          width: 100%;
			height: 100%;
                                          padding : 0px;
                            }
		.card > a >img{
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
		img {
			vertical-align: middle;
			background-size: cover;
		}
		.row {
  			display: flex;
		}

		.column {
  			flex: 33.33%;
  			padding: 5px;
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

		<h2 class="welcome1">Experience a good stay, enjoy fantastic offers</h2><br>
		<h2 class="r_room">IMAGE GALLERY</h2><br>
		<div class="row">
  			<div class="column">
    			<img src="images/1.jpg" alt="Snow" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/2.jpg" alt="Forest" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/3.jpg" alt="Mountains" style="width:100%">
  			</div>
		</div><br>
		<div class="row">
  			<div class="column">
    			<img src="images/A1.jpg" alt="Snow" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/A2.jpg" alt="Forest" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/A3.jpg" alt="Mountains" style="width:100%">
  			</div>
		</div><br>
		<div class="row">
  			<div class="column">
    			<img src="images/A4.jpg" alt="Snow" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/A5.jpg" alt="Forest" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/A6.jpg" alt="Mountains" style="width:100%">
  			</div>
		</div><br><br><br>

		<h2 class="r_room">OUR ROOMS</h2><br>
		<div id="rooms_and_rates" class="basic_box">
			<div class="card">
				<a href="deluxe.php"><img src="images/1.jpg" alt="Snow" style="width:100%"></a>
				<div class="desc">
					<h2>Deluxe Room</h2>
				</div>
			</div>
			<div class="card">
				<a href="executive.php"><img src="images/2.jpg" alt="Forest" style="width:100%"></a>
				<div class="desc">
					<h2>Executive Room</h2>
				</div>
			</div>
			<div class="card">
				<a href="standard.php"><img src="images/3.jpg" alt="Mountains" style="width:100%"></a>
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

	
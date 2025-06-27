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


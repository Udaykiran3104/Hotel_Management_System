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
                                          height:250px;
		}
		.row {
  			display: flex;
                                          padding:15px;
                                          
		}

		.column {
  			flex: 33.33%;
  			padding: 5px;
                                          height:200px;
                                          margin:10px;
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
		</ul><br>
		<h2 class="r_room">Executive Rooms</h2><br>
                            <div class="row">
  			<div class="column">
    			<img src="images/e11.jpg" alt="Snow" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/e2.jpg" alt="Forest" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="Images/e3.jpg" alt="Mountains" style="width:100%">
  			</div>
		</div><br>
		<div class="row">
  			<div class="column">
    			<img src="images/e4.jpg" alt="Snow" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/e5.jpg" alt="Forest" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/e6.jpg" alt="Mountains" style="width:100%">
  			</div>
		</div><br>
		<div class="row">
  			<div class="column">
    			<img src="images/e7.jpg" alt="Snow" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/e8.jpg" alt="Forest" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/e9.jpg" alt="Mountains" style="width:100%">
  			</div>
		</div><br><br><br>

		
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


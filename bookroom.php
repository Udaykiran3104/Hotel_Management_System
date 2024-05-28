

<!DOCTYPE html>
<html>
<head>
	<title>User Room Book</title>
</head>
<style>
	body {
	  margin: 0;
	  background: #f2f2f2;
	  background: #EFE1D1;
	}
	table {
		font-size: 30px;
	}
	td {
		padding: 5px;
		font-size:23px;
		text-align: left;
	}
	
	#td1
	{
		background-color: rgb(52, 53, 54);
		color: white;
		border: 10px;
		margin-top: -10px;
		padding: 10px;
		text-align: center;
		border-radius:10px;
	}
	ul {
	  	list-style-type: none;
	  	margin: 10px;
		margin-bottom:20px;
	  	padding: 0;
	  	width: 20%;
	  	font-size: 24px;
		background-color: rgb(52, 53, 54);
	  	text-decoration: none;
	  	position: fixed;
	  	height: 600px;
	  	overflow: auto;
		border-radius:10px;
	}
	li {
		color: white;
	}
	li a {
	  	display: block;
	  	color: white;
	  	padding: 8px 16px;
	  	text-decoration: none;
	}
	li a:visited {
	  	background-color: #e6b800;
	  	color: white;	
	}
	li a:active {
	  	background-color: #e6b800;
	  	color: white;	
	}
	li a:hover {
	  	background-color: black;
	  	color: white;
	}
	li a.active {
	  	background-color: black;
	  	color: white;
	}
	
	.basic_box {
		background: white;
		border: 1px solid #ccc;
		border-radius: 15px;
		width: 500px;
		padding: 20px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
		text-align:center;
		font-size:23px;
		position:absolute;
		top:350px;
		right:80px;
		
	}
	#room{
		border: 1px solid #ccc;
		background: white;
		border-radius: 15px;
		width: 500px;
		height:500px;
		padding: 20px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
		text-align:center;
		font-size:10px;
		position:absolute;
		top:700px;
		left:350px;
		
	}
	.decor {
		font-family: Times New Roman;
	}
	/* Slideshow container */
	.slideshow-container {
		  width: 550px;
		  height:300px;
		  margin: 5px 10px 5px 10px;
		  padding: 0px;
	}
	#slideshow1{
		position:absolute;
		top:20px;
	}
	#slideshow2{
		position: absolute;
		top:20px;
		left:600px;
	}
	#slideshow3{
		position: absolute;
		top:350px;
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
<body>
	<?php
		$conn = new mysqli("localhost","root","", "iwp");
		if($conn->connect_error)
		{
			die("Connection failed: ".$conn->connect_error);
		}
		$sql = "SELECT * from temp_session";
		$result=mysqli_query($conn, $sql);
		$row=mysqli_fetch_row($result); ?>
	<table style="width: 100%;position:sticky;top:0px;z-index:1;">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 48px;"> <p style="color: #FFF2D7; font-size: 48px; display: inline;">LAVISH INN</p></td>
			<td id="td1" style="font-size: 25px; text-align: center;">Hello, <?php echo $row[2]; ?></td>
		</tr>
	</table>
	<ul>
		<li><a href="user_view.php" >My Info</a></li>
		<li><a href="bookroom.php" class="active">Book A Room</a></li>
		<li><a href="user_room_status.php">Show Booking Status</a></li>
		<li><a href="user_payment.php">Payment</a></li>
		<li><a href="user_booking_history.php">Booking History</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div style="margin-left:20%;padding:1px 16px;height:100%; position :relative;">
	<div class="slideshow-container" id="slideshow1">
            <div class="mySlides fade">
                <img src="Images/d111.png" style="width:100%">
                <div class="text">Deluxe Rooms</div>
            </div>
            <div class="mySlides fade">
                <img src="Images/d222.png" style="width:100%">
                <div class="text">Deluxe Rooms</div>
            </div>
            <div class="mySlides fade">
                <img src="Images/d333.png" style="width:100%">
                <div class="text">Deluxe Rooms</div>
            </div>
            <div style="text-align:center">
                <span class="dot"></span> 
                <span class="dot"></span> 
                <span class="dot"></span> 
            </div>
        </div>

        <div class="slideshow-container" id="slideshow2">
            <div class="mySlides fade">
                <img src="Images/e111.png" style="width:100%">
                <div class="text">Executive Rooms</div>
            </div>
            <div class="mySlides fade">
                <img src="Images/e222.png" style="width:100%">
                <div class="text">Executive Rooms</div>
            </div>
            <div class="mySlides fade">
                <img src="Images/e333.png" style="width:100%">
                <div class="text">Executive Rooms</div>
            </div>
            <div style="text-align:center">
                <span class="dot"></span> 
                <span class="dot"></span> 
                <span class="dot"></span> 
            </div>
        </div>

        <div class="slideshow-container" id="slideshow3">
            <div class="mySlides fade">
                <img src="Images/s111.png" style="width:100%">
                <div class="text">Standard Rooms</div>
            </div>
            <div class="mySlides fade">
                <img src="Images/s22.png" style="width:100%">
                <div class="text">Standard Rooms</div>
            </div>
            <div class="mySlides fade">
                <img src="Images/s33.png" style="width:100%">
                <div class="text">Standard Rooms</div>
            </div>
            <div style="text-align:center">
                <span class="dot"></span> 
                <span class="dot"></span> 
                <span class="dot"></span> 
            </div>
        </div>

        <script>
            function showSlides(slideshowId) {
                var slideIndex = 0;
                var slides = document.querySelectorAll('#' + slideshowId + ' .mySlides');
                var dots = document.querySelectorAll('#' + slideshowId + ' .dot');
                function displaySlides() {
                    for (var i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    slideIndex++;
                    if (slideIndex > slides.length) {slideIndex = 1}
                    for (var i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex-1].style.display = "block";
                    dots[slideIndex-1].className += " active";
                    setTimeout(displaySlides, 4500);
                }
                displaySlides();
            }

            showSlides('slideshow1');
            showSlides('slideshow2');
            showSlides('slideshow3');
        </script>
		<br>
		
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
			<table class="basic_box">
				<tr>
					<th colspan="3"><p style="font-size: 28px; text-align: center; text-decoration: underline;">Room Details</p></th>
				</tr>
				<tr>
					<th>Room Type</th>
					<th>Number of beds</th>
					<th>Price</th>
				</tr>
				<tr>
					<td>Single Bedded</td>
					<td>1</td>
					<td>1000</td>
				</tr>
				<tr>
					<td>Double Bedded</td>
					<td>2</td>
					<td>1800</td>
				</tr>
				<tr>
					<td>Four Bedded</td>
					<td>4</td>
					<td>3000</td>
				</tr>
			</table><br><br>
			<form id="room"  action="bookroom1.php" method="post">
				<table>
					<br><br>
					<tr>
						<td style="text-align: left; ">Select room type:</td>
						<td style="text-align: left;">
							<select name="rooms" required>
								<option value="">Select</option>
								<option value="Single bed">Single bedded</option>
								<option value="Double bed">Double bedded</option>
								<option value="Four bed">Four bedded</option>
							</select>
						</td>
					</tr>
					<tr>
						<td style="text-align: left;">Enter check-in date:</td>
						<td style="text-align: left;">
							<input type="date" name="checkin">
						</td>
					</tr>
					<tr>
						<td style="text-align: left;">Enter check-out date:</td>
						<td style="text-align: left;">
							<input type="date" name="checkout">
						</td>
					</tr>
				</table>
				<table>
					<br>
					<tr>
						<th style="font-size:26px;">Features</th>
						<th style="font-size:26px;">Service Cost per day</th>
					</tr>
					<tr>
						<td><input type="checkbox" name="ac" value="on">AC</td>
						<td style="text-align: center;">300</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="breakfast" value="on">Breakfast</td>
						<td style="text-align: center;">150</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="lunch" value="on">Lunch</td>
						<td style="text-align: center;">300</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="snacks" value="on">Evening Snacks</td>
						<td style="text-align: center;">120</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="dinner" value="on">Dinner</td>
						<td style="text-align: center;">250</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="swimming" value="on">Swimming Pool Access</td>
						<td style="text-align: center;">300</td>
					</tr>
					<tr><br></tr>
					<tr>
						<td colspan="2" style="text-align: center;"><input type="submit" value="Submit"></td>
					</tr>
				</table>
			</form>
	</div>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<style>
	body {
	  margin: 0;
	  background: #EFE1D1;
	}
	table {
		font-size: 22px;
	}
	td {
		text-align: center;
	}
	#td1
	{
		background-color: rgb(52, 53, 54);
		color: white;
		border: 10px;
		border-radius:20px;
		padding: 10px;
		position: sticky;
		
	}
	.basic_box {
		background-color:white;
		background-color: #f0ece2;

		border: 1px solid #ccc;
		border-radius: 15px;
		margin: 125px 150px 125px 220px;
		width: 600px;
		padding: 50px;
		box-shadow: 5px 5px 10px black;
	}
	th {
		font-weight: bold;
		padding-left: 15px;
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
	  	height: 575px;
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

	li a.active {
	  	background-color: black;
	  	color: white;
	}

	li a:hover:not(.active) {
	  	background-color: black;
	  	color: white;
	  	
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
		.roombox {
			width:1000px;
			border: 1px solid #ccc;
			border-radius: 5px;
			
			padding: 25px;
			box-shadow: 1px 1px 5px 2px black;
			background-color: #D7C0AE;
		}
		.card{
              		width: 265px;
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
</style>
<body>
	<br>
	<table style="width: 100%;position:sticky;top:0px;">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 48px;">
			<p style="color: #FFF2D7; display: inline;">LAVISH INN</p>
		</td>
		</tr>

	</table>
	<ul>
		<li><a href="admin_view.php" class="active">Rooms Info</a></li>
		<li><a href="add_room_admin.php">Add Room</a></li>
		<li><a href="remove_room_admin.php">Remove Rooms</a></li>
		<li><a href="admin_room_status.php">Booking Requests</a></li>
		<li><a href="confirmed_bookings.php">Confirmed Bookings</a></li>
		<li><a href="booking_history.php">Booking History</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:600px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
		<h2 class="r_room">OUR ROOMS</h2><br>
		<div id="rooms_and_rates" class="roombox">
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
			
		</div>
		<?php
			$conn = new mysqli("localhost","root","", "iwp");
			if($conn->connect_error)
			{
				die("Connection failed: ".$conn->connect_error);
			}
			$sql = "SELECT * from rooms_count";
			$result=mysqli_query($conn,$sql); ?>
		  	<table class="basic_box" >
				<tr>
					<th colspan="4"><p style="font-size: 28px; text-align: center; text-decoration: underline;">Rooms Info</p></th>
				</tr>
				<tr>
					<th>Room Type</th>
					<th>Available Rooms</th>
					<th>Occupied Rooms</th>
					<th>Price</th>
				</tr>
			<?php 
			while ($row=mysqli_fetch_row($result))
    		{	?>	
				<tr>
					<td><?php echo $row[0]; ?></td>
					<td><?php echo $row[1]; ?></td>
					<td><?php echo $row[2]; ?></td>
					<td><?php echo $row[3]; 
			} ?></td>
				</tr>
				<tr><td></td></tr><tr><td></td></tr>
			</table>			
	</div>
</body>
</html> 
<?php




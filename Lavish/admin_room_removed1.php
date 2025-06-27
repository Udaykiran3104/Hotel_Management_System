

<!DOCTYPE html>
<html>
<head>
	<title>Admin Room Removed</title>
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
		border: 1px solid #ccc;
		border-radius: 15px;
		position:absolute;
		top:40%;
		right:20%;
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
</style>
<body>
	<br>
	<table style="width: 100%;">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 48px;">
			<p style="color: #FFF2D7; display: inline;">LAVISH INN</p>
		</td>
		</tr>

	</table>
	<ul>
		<li><a href="admin_view.php">Rooms Info</a></li>
		<li ><a href="add_room_admin.php" >Add Room</a></li>
		<li><a href="remove_room_admin.php" class="active">Remove Rooms</a></li>
		<li><a href="admin_room_status.php">Booking Requests</a></li>
		<li><a href="confirmed_bookings.php">Confirmed Bookings</a></li>
		<li><a href="booking_history.php">Booking History</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:100%;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
			<table class="basic_box">
				<tr>
					<td>Admin Room removed successfully</td>
				</tr>
				<tr>
					<td><a href="admin_view.php">Click here to get redirected.</a></td>
				</tr>
			</table>
		</div>
	</body>
</body>
</html> 
<?php




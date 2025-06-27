<!DOCTYPE html>
<html>
<head>
	<title>Admin Confirm Booking</title>
</head>
<style>
	body {
	  margin: 0;
	  background: #f2f2f2;
	}
	table {
		font-size: 22px;
	}
	p {
		font-size: 24px;
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
	td {
		text-align: left;
	}
	th {
		font-weight: bold;
		text-align: left;
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
	a {
	  	display: block;
	  	color: white;
	  	padding: 8px 16px;
	  	text-decoration: none;
	}
	a:active {
	  	background-color: black;
	  	color: white;	
	}
	a:hover {
	  	background-color: black;
	  	color: white;
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
	<table style="width: 100%;">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 48px;"> <p style="color: #FFF2D7; font-size: 48px; display: inline;">LAVISH INN</p></td>
			<td id="td1" style="font-size: 25px; text-align: center;">Hello, <?php echo $row[2]; ?></td>
		</tr>
	</table>
	<ul>
		<li><a href="user_view.php">My Info</a></li>
		<li><a href="bookroom.php">Book A Room</a></li>
		<li><a href="user_room_status.php">Show Booking Status</a></li>
		<li><a href="user_payment.php">Payment</a></li>
		<li><a href="user_booking_history.php">Booking History</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p>Room Booking Request has been confirmed!<br></p>
		<P><br>Click Next to get redirected to home.</P>
		<a href="admin_view.php" style="width: 10%; text-align: center; background-color:rgb(52, 53, 54); color: white; border: 3px solid #e6b800;">Next</a>
	</div>
</body>
</html>
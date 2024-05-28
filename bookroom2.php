
<!DOCTYPE html>
<html>
<head>
	<title>Confirm Room Book</title>
</head>
<style>
	body {
	  margin: 0;
	  background: #f2f2f2;
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
		border: 1px solid #ccc;
		border-radius: 15px;
		width: 400px;
		padding: 20px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
		text-align:center;
		font-size:23px;
		position:absolute;
		top:5%;
		left:5%;
		
	}
	#room{
		border: 1px solid #ccc;
		border-radius: 15px;
		width: 500px;
		height:500px;
		padding: 20px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
		text-align:center;
		font-size:10px;
		position:absolute;
		top:5%;
		right:5%
	}
	.decor {
		font-family: Times New Roman;
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
		<li><a href="user_view.php" >My Info</a></li>
		<li><a href="bookroom.php" class="active">Book A Room</a></li>
		<li><a href="user_room_status.php">Show Booking Status</a></li>
		<li><a href="user_payment.php">Payment</a></li>
		<li><a href="user_booking_history.php">Booking History</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p>Room Booking Request is submitted successfully!<br>Now wait for the Admin to confirm the request.</p>
		<P><br>Click Next to get redirected to home page </P>
		<a href="user_view.php" style="width: 10%; text-align: center; color: white; border: 3px solid #e6b800;background-color: rgb(52, 53, 54);text-decoration:none;">Next</a>
	</div>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Room Status</title>
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
		position:absolute;
		top:18%;
		left:24%;
		width: 600px;
		padding: 50px;
		box-shadow: 5px 5px 10px black;
	}
	#booking_request{
		background-color:white;
		background-color: #f0ece2;
		border: 1px solid #ccc;
		border-radius: 15px;
		position:absolute;
		top:18%;
		right:3%;
		width: 490px;
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
		<li><a href="remove_room_admin.php" >Remove Rooms</a></li>
		<li><a href="admin_room_status.php" class="active">Booking Requests</a></li>
		<li><a href="confirmed_bookings.php">Confirmed Bookings</a></li>
		<li><a href="booking_history.php">Booking History</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:100%;">
		<table class="basic_box">
				<tr>
					<td colspan="6"><p style="font-size: 28px; text-align: center; text-decoration: underline;"><b>Admin Room Status</b></p>
				</td>
				<tr>
					<th>Booking ID</th>
					<th>Name</th>
					<th>Room Type</th>
					<th>Check-in Date</th>
					<th>Check-out Date</th>
					<th>Price</th>
				</tr>
				<tr>
				<?php
					$conn = new mysqli("localhost","root","", "iwp");
					if($conn->connect_error)
					{
						die("Connection failed: ".$conn->connect_error);
					}
					$sql1 = "SELECT * from user_room_book";
					if ($result=mysqli_query($conn,$sql1))
				  	{
				  		while ($row=mysqli_fetch_row($result))
				    	{
				    		if($row[13]=='Waiting'){
				    		?>
				    		<td><?php echo $row[15]; ?></td>
				   			<td><?php echo $row[1]; ?></td>
				   			<td><?php echo $row[3]; ?></td>
				   			<td><?php echo $row[4]; ?></td>
				    		<td><?php echo $row[5]; ?></td>
				    		<td><?php echo $row[14]; }?></td>
				</tr><?php
				    	}
				    	mysqli_free_result($result); 
				    }?>
		</table><br><br>
		<table id="booking_request">
			<tr>
				<td colspan="1">Enter Booking ID:</td>
				<td colspan="2">
					<form action="confirm_room.php" method="post">
						<input type="number" name="book_id">
				</td>
			</tr>
			<tr>
				<td></td>
				<td style="text-align: center;"><button type="submit">Confirm</button>
  				<button type="submit" formaction="cancel_room.php">Cancel Booking</button></td></form>	
			</tr>
		</table>
	</div>
</body>
</html> 
<?php




<!DOCTYPE html>
<html>
<head>
	<title>Admin Remove Rooms</title>
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
		top:20px;
		left:33%;
		width: 600px;
		padding: 50px;
		box-shadow: 5px 5px 10px black;
	}
	#remove{
		background-color:white;
		background-color: #f0ece2;
		border: 1px solid #ccc;
		border-radius: 15px;
		position:absolute;
		top:440%;
		right:24%;
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
		<li><a href="remove_room_admin.php" class="active">Remove Rooms</a></li>
		<li><a href="admin_room_status.php">Booking Requests</a></li>
		<li><a href="confirmed_bookings.php">Confirmed Bookings</a></li>
		<li><a href="booking_history.php">Booking History</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div style="margin-left:10%;padding:1px 16px;height:100%;position:relative;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
		<?php
			$conn = new mysqli("localhost","root","", "iwp");
			if($conn->connect_error)
			{
				die("Connection failed: ".$conn->connect_error);
			}
			$sql = "SELECT * from rooms_count";
			$result=mysqli_query($conn,$sql); ?>
		  	<table class="basic_box">
				<tr>
					<th colspan="4"><p style="font-size: 28px; text-align: center; text-decoration: underline;">Remove Rooms</p></th>
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
			</table>
			<br>
			<form id="remove" action="admin_room_removed.php" method="post">
			<table>
				<tr>
					<td style="text-align: left;"><b>Select room type:</td>
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
					<td style="text-align: left;">Enter number of rooms to remove:</td>
					<td style="text-align: left;"><input type="number" min="0" name="noofrooms" id="rooms" required></td>
				</tr>
			</table><br>
			<input style="margin-left: 43%;" type="submit" value="Submit">
			</form>
	</div>
</body>
</html> 
<?php




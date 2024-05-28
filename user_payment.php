
<!DOCTYPE html>
<html>
<head>
	<title>User Payment</title>
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
		padding: 15px;
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
		width: 600px;
		height : 450px;
		padding: 50px;
		margin-top:20px;
		margin-left:0px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
		
	}
	.decor {
		font-family: Times New Roman;
	}
	tr{
		font-size:15px;
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
		<li><a href="bookroom.php">Book A Room</a></li>
		<li><a href="user_room_status.php">Show Booking Status</a></li>
		<li><a href="user_payment.php" class="active">Payment</a></li>
		<li><a href="user_booking_history.php">Booking History</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:100% ;position:relative;">
			<div class="basic_box"><table>
				<h3 style="font-size: 28px; text-align: center;">Payment</h3>
				<tr style="font-size:25px;">
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
					$sql1 = "SELECT * from confirmed_booking";
					if ($result=mysqli_query($conn,$sql1))
				  	{
				  		while ($row=mysqli_fetch_row($result))
				    	{
				    		?>
				    		<td><?php echo $row[14]; ?></td>
				   			<td><?php echo $row[1]; ?></td>
				   			<td><?php echo $row[3]; ?></td>
				   			<td><?php echo $row[4]; ?></td>
				    		<td><?php echo $row[5]; ?></td>
				    		<td><?php echo $row[13]; ?></td>
				</tr><?php
				    	}
				    	mysqli_free_result($result); 
				    }?>
				</table><br><br>
				<table>
				<tr>
					<td colspan="1">Enter Booking ID:</td>
					<td colspan="2">
						<form action="payment.php" method="post">
							<input type="number" name="book_id" required>
							<tr><td>Pay using cash</td><td style="text-align: center;"><button type="submit">Pay Now</button></td></tr>
						</form>
					</td>
				</tr>
				<tr>
					
					
					
				</tr>
				
		</table><br></div>
	</div>
</body>
</html>


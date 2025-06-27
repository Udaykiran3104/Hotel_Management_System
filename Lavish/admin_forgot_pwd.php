<!DOCTYPE html>
<html>
<head>
	<title>Admin Forgot Password</title>
</head>
<style>
	body  {
		background-color: #D7C0AE;
		background-size: cover;
	  	background-attachment: fixed;
	  	font-family: sans-serif;
		opacity:1;
	}
	#back{
		background-color:white;
		width:90%;
		height:550px;
		border:3px solid black;
		margin:5%;
		position:relative;
	}
	#forgot {
		width: 40%;
		height: 70%;
		top:35px;
		left:35px;
		position: relative;
		font-size: 23px;
		font-weight:bold;
		padding-top: 25px;
		padding-bottom: 50px;
		box-shadow: 0 5px 5px black;
		color: black;
		border-radius: 5px;
		transition:1s;
	}
	#forgot:hover{
		box-shadow: 3px 5px 10px 2px black;
	}
	
	.input {
		font-size: 22px;
		text-align: center;
		opacity: 1;
		color:black;
	}
	table {
		width: 100%;
	}
	td {
		text-align: center;
	}
	a{
		color:black;
	}
	input:hover, input:active 
	{
		background-color: ##FFE8D6;
		box-shadow: 1px 1px 0.5px  black;
	}
	img{
		width:50%;
		height:85%;
		position:absolute;
		right:40px;
		top:40px;

	}

	
</style>
<body>
	<div id="back">
	<div id="forgot" style="background-color: #f2f2f2;">
		<form method="post" action="admin_forgot_pwd1.php">
			<table>
				<tr>
						<td colspan="2"><p style="font-size: 35px; font-family: 'Times New Roman', serif; color: black;"><b>Admin Forgot Password</b></p></td>
				</tr>
				<tr>
					<td>Enter UserID:</td>
					<td><input class="input" type="text" name="adminid" placeholder="Enter user ID" required></td>
				</tr>
				<tr>
					<td>Enter EmployeeID:</td>
					<td><input class="input" type="text" name="empid" placeholder="Enter emp ID" required></td>
				</tr>
				<tr><td><br></td></tr>
				<tr>
					<td colspan="2"><input style="font-size: 23px; background-color: #D7C0AE; border: 1px solid black; box-shadow: 1px 1px black; color: black; border-radius: 10px;" type="submit" value="Submit"></td>
				</tr>
			</table>
		</form>
	</div>
	<div id="sticker">
		<img src="Images/loginsticker.jpg" alt="Login">
	</div>
	</div>


	
	
</body>
</html>
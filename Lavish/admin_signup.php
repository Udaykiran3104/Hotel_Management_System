
<!DOCTYPE html>
<html>
<head>
	<title>Admin Signup</title>
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
	#signup {
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
	#signup:hover{
		box-shadow: 3px 5px 10px 2px black;
	}
	button, .button {
		background-color: #D7C0AE;
		color:black;
		border-radius:5px;
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
	button:link, button:visited, .button:link, .button:visited 
	{
		text-decoration: none;
		color: black;
		text-decoration: none;  
		font-size: 23px;
	}
	button:hover, button:active, .button:hover, .button:active
	{
		/* background-color: #FF6500;
		border: 5px solid #FF9F66; */
		box-shadow: 2px 2px #a6a6a6;
		color: black;
		text-decoration: none;  
		font-size: 23px;
	}
	input:hover, input:active 
	{
		background-color: #FFE8D6;
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
	<div id="signup" style="background-color: white;">
		<form action="admin_signed_up.php" method="post">
			<table>
				<tr>
					<td colspan="2"><p style="font-size: 35px; font-family: 'Times New Roman', serif; color: black;"><b>Admin SignUp</b></p></td>
				</tr>
				<tr>
					<td>User ID:</td>
					<td><input class="input" type="text" name="adminid"  placeholder="Enter user ID" required></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input class="input" type="password" name="password"  placeholder="Enter password" required></td>
				</tr>
				<tr>
					<td>Employee ID:</td>
					<td><input class="input" type="text" name="empid" placeholder="Enter emp ID" required></td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td colspan="2"><input style="font-size: 20px; background-color: #D7C0AE; border: 1px solid black; box-shadow: 2px 2px #a6a6a6; color: black; border-radius: 10px;" type="submit" value="Submit"></td>
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
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
	#login {
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
		position:relative;
	}
	#login:hover{
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
	.g-recaptcha{
		position:absolute;
		left:110px;
		top:240px;
	}
	.button{
		position:absolute;
		top:350px;
		left:200px;
	}

	
</style>
<body>
	<div id="back">
	<div id="login" style="background-color: white;">
	<form action="admin_db.php" method="post">
		<table>
			<tr>
				<td colspan="2"><p style="font-size: 35px; color: black;"><b>Admin Login</b></p></td>
			</tr>
			<tr >
				<td  style="padding-left: 20px;">User ID:</td>
				<td><input class="input" type="text" name="adminid" placeholder="Enter user ID" value="" required></td>
			</tr>
			<tr >
				<td style="padding-left: 20px;">Password:</td>
				<td><input class="input" type="password" name="password"  placeholder="Enter password" value="" required></td>
			</tr>
			<div class="g-recaptcha" data-sitekey="6LfBNukpAAAAAKupcjaq-fon3vDvH7P0gmUcCgda"></div>
			<tr><td><br></td></tr>
			<tr>
				<td colspan="2"><input class="button" style="font-size: 25px; " type="submit" value="Login"></td>
			</tr>
		</table>
	</form>
	</div >
	<div id="sticker">
		<img src="Images/loginsticker.jpg" alt="Login">
	</div>
	


	<!-- <table>
		<tr><td><br></td></tr>
			<tr>
				<td style="color: black;"><b>New Admin?</b></td>
				<td style="color: black;"><b>Unable to Login</b></td>
			</tr>
			<tr>
				<td><button type="button"><a style="text-decoration: none;  font-size: 20px;" href="admin_signup.php">User SignUp</a></button></td>
				<td><button type="button"><a style="text-decoration: none; font-size: 20px;" href="admin_forgot_pwd.php">Forgot Password</a></button></td>
			</tr>
		</table>
	</div> -->
	
</body>
</html>
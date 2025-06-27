



<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
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
	#abc{
		margin: 0px 230px 0px 
	}
	.g-recaptcha{
		position:absolute;
		left:110px;
		top:240px;
	}

	
</style>
<body>
	<div id="back">
	<div id="login" style="background-color: white;">
		<form action="user_logged_in.php" method="post">
			<table>
				<tr>
					<td colspan="2"><p style="font-size: 35px; color: black;"><b>User Login</b></p></td>
				</tr>
				<tr>
					<td>Phone number:</td>
					<td><input class="input" type="text" name="phone" placeholder="Enter phone" required></td>
					<br>
				</tr>
				<tr><td><br></td></tr>
				<tr>
					<td>Password:</td>
					<td><input class="input" type="password" name="password" placeholder="Enter password" required></td>
				</tr>
			</table>
			<div class="g-recaptcha" data-sitekey="6LfBNukpAAAAAKupcjaq-fon3vDvH7P0gmUcCgda"></div>
		<br>
		
		<input id="abc" class="button"style="font-size: 23px;" type="submit" value="Login">
		</form>
		<br>
		<table>
			<tr>
				<td style="color: #094198;"><b>New User?</b></td>
				<td style="color: #094198;"><b>Unable to Login</b></td>
			</tr><tr><td></td></tr><tr><td></td></tr>
			<tr>
				<td><button type="button"><a style="text-decoration: none;  font-size: 25px;" href="user_signup.php">User SignUp</a></button></td>
				<td><button type="button"><a style="text-decoration: none;  font-size: 25px;" href="user_forgot_pwd.php">Forgot Password</a></button></td>
			</tr>
		</table><br>
	</div>
	
	<div id="sticker">
		<img src="Images/loginsticker.jpg" alt="Login">
	</div>


	</div >	
</body>
</html>

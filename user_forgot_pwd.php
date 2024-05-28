
<!DOCTYPE html>
<html>
<head>
	<title>User Forgot Password</title>
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
	#abc{
		margin: 0px 230px 0px 230px;
	}

	
</style>
<body>
	<div id="back">
	<?php $email = 0;
		$dob = 0;
		?>
	<div id="forgot" style="background-color: #f2f2f2;">
		<table>
			<tr>
				<td colspan="2"><p style="font-size: 35px; font-family: 'Times New Roman', serif; color: black;"><b>User Forgot Password</b></p></td>
			</tr>
			<tr>
				<td><br></td>
			</tr>
			<form action="user_forgot_pwd1.php" method="post">
			<tr>
				<td>Enter User Email address: </td>
				<td><input class="input" type="email" name="email" placeholder="Enter email address" required></td>
			</tr>
			<tr><td><br></td>
			</tr>
			<tr>
				<td>Enter Date Of Birth:</td>
				<td> <input class="input" type="date" name="dob" required></td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td colspan="2"><input style="font-size: 24px; background-color: #D7C0AE;; border: 1px solid #a6a6a6; box-shadow: 2px 2px #a6a6a6; color: black; border-radius: 10px;" type="submit" value="Recover Password"></td>
			</tr>
			</form>
		</table>
	</div>
	
	<div id="sticker">
		<img src="Images/loginsticker.jpg" alt="Login">
	</div>


	</div >
	
</body>
</html>
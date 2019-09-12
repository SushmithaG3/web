<!DOCTYPE html>
<html>
<head>
<?php
include $_SERVER["DOCUMENT_ROOT"].'/vemana airlines/design1.html';
?>
</head>
<body>
<div class="topnav">
	<a class="active" href="index.php">User Login</a>
	<a href="adminlogin.php">Admin Login</a>
	<a href="contact.php">Contact Details</a>
	</div>
	<div class="bc1">
	<form method="post" action="login.php">
		<center>
			<h1 style="color: rgb(0,0,110);">USER LOGIN</h1>
			<div class="s1">
				<br/>
				<legend style="font-size: 50;font-weight: bold;">Login</legend><br/>
				<label style="font-size: 20;">Username</label><br/>
				<input type="text" autocomplete="off" name="username" style="font-size: 20;" required><br/><br/>
				<label style="font-size: 20;">Password</label><br/>
				<input type="password" name="password" style="font-size: 20" required><br/><br/>
				<center><button type="submit" id="submit" value="loggedin" name="submit">Login</button></center><br/>
				<a href="http://localhost/vemana airlines/forgot1.php">Forgot Password?</a><br/>
				<a href="http://localhost/vemana airlines/newuser1.php">New User?</a>
			</div>
		</center>
	</form>
</div>
</body>
</html>
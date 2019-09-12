<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="vemana1.css" type="text/css" />
<?php
include $_SERVER["DOCUMENT_ROOT"].'/vemana airlines/design1.html';
?>
</head>
<body>
	<div class="topnav">
	<a href="index.php">User Login</a>
	<a class="active" href="adminlogin.php">Admin Login</a>
	<a href="contact.php">Contact Details</a>
	</div>
	<div class="bc1">
	<form method="post" action="admin.php">
		<center>
			<h1 style="color: rgb(0,0,110)">ADMIN LOGIN</h1>
			<div class="s1">
				<br/>
				<legend style="font-size: 25;">Login</legend><br/>
				<label style="font-size: 20;">Username</label><br/>
				<input type="text" autocomplete="off" name="username" style="font-size: 20;" required><br/><br/>
				<label style="font-size: 20;">Password</label><br/>
				<input type="password" name="password" style="font-size: 20" required><br/><br/>
				<center><button type="submit" id="submit" value="submit" name="submit">Login</button></center><br/>
			</div>
		</center>
	</form>
</div>
</body>
</html>
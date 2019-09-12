<!DOCTYPE html>
<html>
</body>
<head>
	<title>Login Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./vemana1.css">
    <?php
include $_SERVER["DOCUMENT_ROOT"].'/vemana airlines/design1.html';
?>
	
		
</head>
<body style="background-image: url(plane.jpg);background-size: cover;color: white;">
	<div class="topnav">
	<a class="active" href="index.php">User Login</a>
	<a href="adminlogin.php">Admin Login</a>
	</div>
	<div class="bc1">
	<form method="post" action="forgot.php">
		<center>
			<h1 style="color: rgb(0,0,110);">FORGOT PASSWORD</h1>
			<div class="s1">
				<br/>
				<legend style="font-size: 25;font-weight: bold;">User Details</legend><br/>
				<label style="font-size: 20;">Name</label><br/>
				<input type="text" autocomplete="off" name="username" style="font-size: 20;" required><br/><br/>
				<label style="font-size: 20;">Email</label><br/>
				<input type="email" autocomplete="off" name="email" style="font-size: 20;" required><br/><br/>
				<center><button type="submit" id="submit" value="submit" name="submit">Submit</button></center><br/>
				<a href="http://localhost/vemana airlines/index.php">Login</a><br/>
			</div>
		</center>
	</form>
</div>
</body>
</html>
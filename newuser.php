
<?php

$db = mysqli_connect("localhost","root","","demo1") or mysqli_connect_error();
$u = $_POST['username'];
$p = $_POST['password'];
$e = $_POST['email'];
$u = stripcslashes($u);
$p = stripcslashes($p);
$u = mysqli_real_escape_string($db,$u);
$p = mysqli_real_escape_string($db,$p);
if (is_numeric($u)) {
	?>
 
		<script type="text/javascript">
		alert("please enter a valid username!");
		window.location.href = "newuser1.php";
		</script>

<?php
}
if(empty(trim($u)))
{
?>
 
		<script type="text/javascript">
		alert("please enter the username!");
		window.location.href = "newuser1.php";
		</script>

<?php
}
else if(empty(trim($e)))
{
?>
 
		<script type="text/javascript">
		alert("please enter the email adress!");
		window.location.href = "newuser1.php";
		</script>

<?php
}
else if(empty(trim($p)))
{
?>
 
		<script type="text/javascript">
		alert("please enter the password!");
		window.location.href = "newuser1.php";
		</script>

<?php
}
else
{
	$sql1 = "select * from `user` where username='$u'";
	$r1 = mysqli_query($db,$sql1);
	$c1 = mysqli_num_rows($r1);
	if($c1>=1)
	{
		?>
		<script type="text/javascript">
		alert("Username already exists!");
		window.location.href = "newuser1.php";
		</script>
		<?php
	}
	else{
	$sql = "insert into `user`(username,password,email) values ('$u','$p','$e')";
	$result = mysqli_query($db,$sql);

	?>
 
		<script type="text/javascript">
		alert("Your Account has been created.");
		window.location.href = "index.php";
		</script>

<?php

}
}
?>

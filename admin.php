<?php

session_start();

$db = mysqli_connect("localhost","root","","demo1") or mysqli_connect_error();
$u = $_POST['username'];
$p = $_POST['password'];
$u = stripcslashes($u);
$p = stripcslashes($p);
$u = mysqli_real_escape_string($db,$u);
$p = mysqli_real_escape_string($db,$p);

$sql = "select * from `admin` where username='$u' AND password='$p'";
$result = mysqli_query($db,$sql);
$count = mysqli_num_rows($result);

$sql1 = "select * from `user` where username='$u'";
$r1 = mysqli_query($db,$sql1);
$c1 = mysqli_num_rows($r1);

if(empty(trim($u)))
{
?>
 
		<script type="text/javascript">
		alert("please enter the username!");
		window.location.href = "index.php";
		</script>

<?php
}

if(isset($_POST['username']) && isset($_POST['password']))
{
	if($count>=1)
	{	
		$_SESSION['loggedin']=TRUE;
		header("Location: addf.php");
	}
	else if($c1>=1)
	{
?>

		<script type="text/javascript">
		alert("Wrong password!!!");
		window.location.href = "index.php";
		</script>

<?php
	}
	else
	{
?>

		<script type="text/javascript">
		alert("Username doesn't exist.");
		window.location.href = "index.php";
		</script>

<?php
	}

}

?>
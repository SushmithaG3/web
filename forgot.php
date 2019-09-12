<?php

$db = mysqli_connect("localhost","root","","demo1") or mysqli_connect_error();
$u = $_POST['username'];
$e = $_POST['email'];
$u = stripcslashes($u);
$u = mysqli_real_escape_string($db,$u);


if(empty(trim($u)))
{
?>
 
		<script type="text/javascript">
		alert("please enter the username!");
		window.location.href = "forgot1.php";
		</script>

<?php
}
else if(empty(trim($e)))
{
?>
 
		<script type="text/javascript">
		alert("please enter the email adress!");
		window.location.href = "forgot1.php";
		</script>

<?php
}
else
{
	$sql1 = "select password from `user` where username='$u' AND email='$e'";
	$r1 = mysqli_query($db,$sql1);
	$c1 = mysqli_num_rows($r1);
	if($c1<1)
	{
		?>
		<script type="text/javascript">
		alert("Username doesn't exist!");
		window.location.href = "forgot1.php";
		</script>
		<?php
	}
	else
	{
		while ($row = mysqli_fetch_assoc($r1)) {
			$str = $row['password'];
		}
	?>
		<script type="text/javascript">
		alert("your password is \'<?php echo $str; ?>\'");
		window.location.href = "index.php";
		</script>

<?php

}
}
?>

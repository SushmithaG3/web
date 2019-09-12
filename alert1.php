<?php

$db = mysqli_connect("localhost","root","","demo1") or mysqli_connect_error();
$source = $_POST['source'];
$dest = $_POST['dest'];
$fno = $_POST['fno'];
$date = $_POST['date'];
$dtime = $_POST['dtime'];
$atime = $_POST['atime'];
$ecseats = $_POST['ecseats'];
$fcseats = $_POST['fcseats'];
$bcseats = $_POST['bcseats'];
$ecprice = $_POST['ecprice'];
$fcprice = $_POST['fcprice'];
$bcprice = $_POST['bcprice'];

$dtime = date('H:i:s',strtotime($dtime));
$atime = date('H:i:s',strtotime($atime));
$date = date('Y-m-d',strtotime($date));

$sql = "insert into `flight`(source, dest, fno, date, dtime, atime, ecseats, fcseats, bcseats, ecprice, fcprice, bcprice) values ('$source','$dest','$fno','$date','$dtime','$atime','$ecseats','$fcseats','$bcseats','$ecprice','$fcprice','$bcprice')";
$result = mysqli_query($db,$sql);
if ($result==TRUE) {
?>
<script type="text/javascript">
		alert("Flight details added successfully!");
		window.location.href = "addf.php";
</script>
<?php
}
else{
?>
<script type="text/javascript">
		alert("Failed to add details!");
		window.location.href = "addf.php";
</script>
<?php
}
?>


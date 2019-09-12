<?php
include $_SERVER["DOCUMENT_ROOT"].'/vemana airlines/ticket.php';
$fno=$_POST['fno'];
$class=$_POST['class'];
$source=$_POST['source'];
$dest=$_POST['dest'];
$name=$_POST['name'];
$age=$_POST['age'];
$sex=$_POST['sex'];
$phno=$_POST['phno'];
$addr=$_POST['addr'];
$state=$_POST['state'];
$country=$_POST['country'];
$pin=$_POST['pin'];
$cardtype=$_POST['cardtype'];
$cnum=$_POST['cnum'];
$cvv=$_POST['cvv'];
$expm=$_POST['expm'];
$expy=$_POST['expy'];
$amount=$_POST['amount'];
$date=$_POST['date'];


$db = mysqli_connect("localhost","root","","demo1") or mysqli_connect_error();

if (is_numeric($name)) {
	?>
		<script type="text/javascript">
		alert("please enter a valid name!");
		history.go(-1);
		</script>
<?php
}
elseif (is_numeric($addr)) {
	?>
		<script type="text/javascript">
		alert("please enter a valid address!");
		history.go(-1);
		</script>
<?php
}
elseif (is_numeric($state)) {
	?>
		<script type="text/javascript">
		alert("please enter a valid state!");
		history.go(-1);
		</script>
<?php
}

else{
	$sql = "insert into `booked`(fno,class,name,age,sex,phno,addr,state,country,pin,cardtype,cnum,cvv,expm,expy,source,dest,amount,date) values ('$fno','$class','$name','$age','$sex','$phno','$addr','$state','$country','$pin','$cardtype','$cnum','$cvv','$expm','$expy','$source','$dest','$amount','$date')";
	$result = mysqli_query($db,$sql);
	if ($class=='Economic class') {
		$sql1 = "UPDATE `flight` SET ecseats=ecseats-1 where fno='$fno' and source='$source' and dest='$dest'";
		$r= mysqli_query($db,$sql1);
	}
	elseif ($class=='First class') {
		$sql2 = "UPDATE `flight` SET fcseats=fcseats-1 where fno='$fno' and source='$source' and dest='$dest'";
		$r= mysqli_query($db,$sql2);
	}
	elseif ($class=='Business class') {
		$sql3 = "UPDATE `flight` SET bcseats=bcseats-1 where fno='$fno' and source='$source' and dest='$dest'";
		$r= mysqli_query($db,$sql3);
	}
	
	?>
 
		<script type="text/javascript">
		alert("Your Ticket has been booked!");
		window.location.href = "success.php";
		</script>

<?php
}
?>


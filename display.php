<?php
include $_SERVER["DOCUMENT_ROOT"].'/vemana airlines/design.php';
$source = $_POST['source'];
$dest = $_POST['dest'];
$date = $_POST['date'];
$class = $_POST['class'];
$date = date('Y-m-d',strtotime($date));
$date1=date('Y-m-d');
if($date1<=$date)
{
$db = mysqli_connect("localhost","root","","demo1") or mysqli_connect_error();
$sql = "select * from `flight` where source='$source' AND dest='$dest' AND date='$date'";
$result = mysqli_query($db,$sql);
$count = mysqli_num_rows($result);
if ($class=='ec') {
	$s=6;
	$c=9;
}
elseif ($class=='fc') {
	$s=7;
	$c=10;
}
elseif ($class=='bc') {
	$s=8;
	$c=11;
}

if ($count > 0) {
?>
<div class="topnav" >
  <a href="javascript:history.go(-1);">Back</a>
  <a href="index.php" style="float: right;">logout</a>
</div>
<form method="post" action="card.php">
<div class="bc1">
</form>
<form method="post" action="ticket.php">
<div class="s7" style="float: left;" >
	<br/>
	<table>
	<tr>
	<td><label>From</label></td>
	<td><input type="text" name="source" value="<?php echo $source;?>" readonly="readonly"></td>
	</tr>
	<tr>
	<td><label>To</label></td>
	<td><input type="text" name="dest" value="<?php echo $dest;?>" readonly="readonly"></td>
	</tr>
	<tr>
	<td><label>Class</label></td>
	<td><input type="text" name="class" value="<?php if($class=='ec'){echo "Economic class";} elseif($class=='fc'){echo "First class";} if($class=='bc'){echo "Business class";} ?>" readonly="readonly"></td>
	</tr>
	</table>
	<br/>
	<table border="2">
	<tr>
		<td> </td><th>Flight Number</th><th>Depature time</th><th>Arrival Time</th><th>Seats Left</th><th>Price(.Rs)</th> 
	</tr>
	<?php
	while ($row=mysqli_fetch_row($result)) {
		if ($row[$s]>0) {
		?>
		<tr>
			<td><input type="radio" name="fno" value="<?php echo $row[2]; ?>" required></td>
			<td><?php echo $row[2]; ?></td>
			<td><?php echo date('h:i A',strtotime($row[4])); ?></td>
			<td><?php echo date('h:i A',strtotime($row[5])); ?></td>
			<td>
			<?php 
			echo $row[$s];
			 ?>
			</td>
			<td>
			<?php 
			echo $row[$c];
			 ?>
			</td>
		</tr>
	<?php
	}
	}
	?>
	</table>
	<br/>
	<center>
	<button type="submit" id="submit" value="submit" name="submit">Book ticket</button>
	</center>	
</div>
</form>
<?php
}
else{
	?>
	<script type="text/javascript">
		alert("Sorry, flights are not currently available for specified places!");
		window.location.href = "success.php";
</script>
<?php
}
}
else{
	?>
	<script type="text/javascript">
		alert("sorry the flights cannot be pre booked!");
		window.location.href = "success.php";
</script>
<?php
}
?>

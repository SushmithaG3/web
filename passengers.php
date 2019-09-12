<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
	header("Location: index.php");
}
include $_SERVER["DOCUMENT_ROOT"].'/vemana airlines/design.php';

$db = mysqli_connect("localhost","root","","demo1") or mysqli_connect_error();

if($db==false){
	?>
 
		<script type="text/javascript">
		alert("Unable to connect with the database!");
		window.location.href = "index.php";
		</script>

<?php
}
else{

$sql = "select * from `booked` WHERE 1";
$result = mysqli_query($db,$sql);
$count = mysqli_num_rows($result);

?>
<!Doctype html>
<head>
</head>
<body>
<div class="topnav" >
  <a href="addf.php">Add Flights</a>
  <a class="active" href="passengers.php">Conifrmed Passengers</a>
  <a href="index.php" style="float: right;">logout</a>
</div>
<div class="bc1">
<div class="s7" style="float: left;" >
	<br/>
	<center>
	<table border="2">
	<tr>
		<th>Name</th><th>Class</th><th>Flight No.</th><th>Date</th><th>Age</th><th>Sex</th><th>Phone</th><th>From</th><th>To</th><th>Amount Paid(.Rs)</th>
	</tr>
	<?php
	while ($row=mysqli_fetch_row($result)) {
		?>
		<tr>
			<td><?php echo $row[2]; ?></td>
			<td><?php echo $row[1]; ?></td>
			<td><?php echo $row[0]; ?></td>
			<td><?php echo $row[18]; ?></td>
			<td><?php echo $row[3]; ?></td>
			<td><?php echo $row[4]; ?></td>
			<td><?php echo $row[5]; ?></td>
			<td><?php echo $row[15]; ?></td>
			<td><?php echo $row[16]; ?></td>
			<td><?php echo $row[17]; ?></td>
		</tr>
	<?php
	}
	?>
</table>
</center>
</div>
<div class="s7" style="float: left;">
	<ul>
		<li>Flight No.-Flight Number</li>
	</ul>
</div>
</div>
<?php
}
?>
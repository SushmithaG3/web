<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
	header("Location: index.php");
}
include $_SERVER["DOCUMENT_ROOT"].'/vemana airlines/design.php';
?>
<!Doctype html>
<head>
	<style type="text/css">
		a.button {
			-webkit-appearance: button;
			-moz-appearance: button;
			appearance:button;
			text-decoration: none;
			color: initial;
			padding: 2px 2px;
				}
	</style>
</head>
<body>
<div class="topnav" >
  <a class="active" href="success.php">Check Flights</a>
  <a href="index.php" style="float: right;">logout</a>
</div>
<div class="bc1">
<form method="post" action="display.php">
<div class="s2" style="float: left;">
	<br/>
	<legend style="font-size: 25;">Search Flights</legend><br/>
	<label style="font-size: 20;">From</label><br/>
	<select name="source" style="font-size: 20;">
		<option value="Bangalore" selected>Bangalore</option>
		<option value="Delhi">Delhi</option>
		<option value="Kolkatta">Kolkatta</option>
		<option value="Mumbai">Mumbai</option>
		<option value="Chennai">Chennai</option>
	</select>
	<br/><br/>
	<label style="font-size: 20;">To</label><br/>
	<select name="dest" style="font-size: 20;">
		<option value="Dubai">Dubai</option>
		<option value="London">London</option>
		<option value="Hong Kong">Hong Kong</option>
		<option value="Switzerland">Switzerland</option>
		<option value="Sydney">Sydney</option>
		<option value="Melbourne">Melbourne</option>
		<option value="Los Angeles">Los Angeles</option>
		<option value="Guangzhou">Guangzhou</option>
		<option value="Cape Town">Cape Town</option>
		<option value="Paris">Paris</option>
		<option value="Turkey">Turkey</option>
		<option value="New York">New York</option>
	</select><br/><br/>
	<label style="font-size: 20;">Date</label><br/>
	<input type="Date" name="date" style="font-size: 20;" required><br/><br/>
	<label style="font-size: 20;">Class</label><br/>
	<select name="class" style="font-size: 20;">
		<option value="ec" selected>Economic Class</option>
		<option value="bc">Business Class</option>
		<option value="fc">First Class</option>
	</select><br/><br/>
	<center><button type="submit" id="submit" value="submit" name="submit">Submit</button></center><br/>
	<center><button type="reset" id="reset" value="reset" name="reset">Reset</button></center><br/>
	<center><a href="international.php" class="button">National flights</a></center>
	</center>
</div>
</form>


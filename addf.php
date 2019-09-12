<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
	header("Location: index.php");
}
include $_SERVER["DOCUMENT_ROOT"].'/vemana airlines/design.php';
?>
<!Doctype html>
<head>
</head>
<body>
<div class="topnav" >
  <a class="active" href="addf.php">Add Flights</a>
  <a href="passengers.php">Conifrmed Passengers</a>
  <a href="index.php" style="float: right;">logout</a>
</div>
<div class="bc1">
<form method="post" action="alert1.php">
<div class="s7" style="float: left;" >
	<br/>
	<center>
	<table border="2">
	<tr>
		<th>Source</th><th>Destination</th><th>Flight Number</th><th>Date</th><th>Depature time</th><th>Arrival Time</th>
	</tr>
	<tr>
		<td><select name="source" style="font-size: 20;">
		<option value="Bangalore" selected>Bangalore</option>
		<option value="Delhi">Delhi</option>
		<option value="Kolkatta">Kolkatta</option>
		<option value="Mumbai">Mumbai</option>
		<option value="Chennai">Chennai</option>
	</select>
</td>
<td>
	<select name="dest" style="font-size: 20;">
		<option value="Bangalore">Bangalore</option>
		<option value="Delhi" selected>Delhi</option>
		<option value="Kolkatta">Kolkatta</option>
		<option value="Mumbai">Mumbai</option>
		<option value="Chennai">Chennai</option>
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
	</select>
</td>
<td>
	<input type="text" name="fno" required>
</td>
<td>
	<input type="Date" name="date" required>
</td>
<td>
	<input type="time" name="dtime" required>
</td>
<td>
	<input type="time" name="atime" required>
</td>
</tr>
<tr>
	<th>ECSeats</th><th>FCSeats</th><th>BCSeats</th><th>ECPrice(.Rs)</th><th>FCPrice(.Rs)</th><th>BCPrice(.Rs)</th> 
</tr>
<tr>
<td>
	<input type="Number" name="ecseats" required>
</td>
<td>
	<input type="Number" name="fcseats" required>
</td>
<td>
	<input type="Number" name="bcseats" required>
</td>

<td>
	<input type="Number" name="ecprice" required>
</td>
<td>
	<input type="Number" name="fcprice" required>
</td>
<td>
	<input type="Number" name="bcprice" required>
</td>
</tr>
	</table><br>
	<button type="submit" id="submit" value="submit" name="submit">Add flight</button>
	</center>	
</div>
</form>
<div class="s7" style="float: left;">
	<ul>
		<li>Flight No. -> Flight Number</li>
		<li>ECseats -> EconomyClass Seats</li>
		<li>FCseats -> FirstClass Seats</li>
		<li>BCseats -> BusinessClass Seats</li>
		<li>ECPrice -> EconomyClass Price</li>
		<li>FCPrice -> FirstClass Price</li>
		<li>BCPrice -> BusinessClass Price</li>
	</ul>
</div>
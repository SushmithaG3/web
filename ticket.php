<?php
include $_SERVER["DOCUMENT_ROOT"].'/vemana airlines/design.php';
$fno=$_POST['fno'];
$class=$_POST['class'];
$source=$_POST['source'];
$dest=$_POST['dest'];

$db = mysqli_connect("localhost","root","","demo1") or mysqli_connect_error();

$sql = "select * from `flight` where source='$source' AND dest='$dest' AND fno='$fno'";
$result = mysqli_query($db,$sql);
$count = mysqli_num_rows($result);
while ($row=mysqli_fetch_row($result)) {
	$date=$row[3];
	$date = date('d-m-Y',strtotime($date));
	if ($class=='Economic class') {
		$amount=$row[9];
	}
	elseif ($class=='First class') {
		$amount=$row[10];
	}
	elseif ($class=='Business class') {
		$amount=$row[11];
	}
	
	}

?>
<div class="topnav" >
  <a href="javascript:history.go(-1);">Back</a>
  <a href="index.php" style="float: right;">logout</a>
</div>
<form method="post" action="tb.php">
<div class="bc1">
<div class="s7">
	<section style="float: left;padding: 30px 30px;">
	<table>
	<tr>
	<legend style="font-weight: bold;">Details</legend>
	</tr>
	<tr>
	<td><label style="font-size: 20;">Flight No</label></td>
	<td><input type="number" name="fno" style="font-size: 20;" value="<?php echo $fno; ?>" readonly="readonly"></td>
	</tr>
	<tr>
	<td><label>From</label></td>
	<td><input type="text" name="source" value="<?php echo $source;?>" readonly="readonly"></td>
	</tr>
	<tr>
	<td><label>To</label></td>
	<td><input type="text" name="dest" value="<?php echo $dest;?>" readonly="readonly"></td>
	</tr>
	<tr>
	<td><label style="font-size: 20;">Class</label></td>
	<td><input type="text" name="class" style="font-size: 20;" value="<?php echo $class; ?>" readonly="readonly"></td>
	</tr>
	<tr>
	<td><label style="font-size: 20;">Date</label></td>
	<td><input type="text" name="date" style="font-size: 20;" value="<?php echo $date; ?>" readonly="readonly"></td>
	</tr>
	<tr>
	<td><label style="font-size: 20;">Name</label></td>
	<td><input type="text" name="name" style="font-size: 20;" required></td>
	</tr>
	<tr>
	<td><label style="font-size: 20;">Age</label></td><br/>
	<td><input type="number" name="age" style="font-size: 20" min="1" max="90" required></td>
	</tr>
	<tr>
	<td><input type="radio" name="sex" value="female" required>Female<br/>
	<input type="radio" name="sex" value="male">Male<br/>
	</td>
	</tr>
	<tr>
	<td><label style="font-size: 20;">Phone number</label></td>
	<td><input type="text" name="phno" pattern="([0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9])" maxlength="10" autocomplete="off" placeholder="10 digit" style="font-size: 20" required></td>
</tr>

<tr>

	<td><label style="font-size: 20;">Address</label></td>
	<td><input type="text" name="addr" style="font-size: 20" required></td>
</tr>

<tr>
	<td><label style="font-size: 20;">State</label></td>
	<td><input type="text" name="state" style="font-size: 20" required></td>
</tr>

<tr>
	<td><label style="font-size: 20;">Country</label></td>
	<td><input type="text" name="country" style="font-size: 20"  value="India" readonly="readonly"></td>
</tr>
<tr>
	<td><label style="font-size: 20;">Pin</label></td>
	<td><input type="text" name="pin" pattern="([0-9][0-9][0-9][0-9][0-9][0-9])" placeholder="6 digit" style="font-size: 20" required></td>
</tr>
</table>
</section>
<section style="float: right;padding: 30px 30px;">
<table>
	<tr>
	<legend style="font-weight: bold;">Card Details</legend><br/>
	</tr>
	<tr>
	<td><label>Card type:</label></td>
	</tr>
	<tr>
	<td><input type="radio" name="cardtype" value="credit" required>Credit Card<br/>
	<input type="radio" name="cardtype" value="debit">Debit Card</td>
	</tr>
	<tr>
	<td>
	<label>Card Number</label>
	</td>
	<td>
	<input type="text" name="cnum" pattern="([0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9])" maxlength="16" placeholder="16 digit" style="font-size: 20;" autocomplete="off" required>
	</td>
	</tr>
	<tr>
	<td>
	<label>CVV</label>
	</td>
	<td>
	<input type="text" name="cvv" pattern="([0-9][0-9][0-9])" maxlength="3" style="font-size: 20;" placeholder="3 digit"autocomplete="off" required>
	</td>
	</tr>
	<tr>
	<td>
	<label>Expiry month</label>
	</td>
	<td>
	<select name="expm" style="font-size: 20;">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
	</select>
	</td>
</tr>
<tr>
	<td>
	<label>Expiry Year</label>
	</td>
	<td>
	<select name="expy" style="font-size: 20;">
		<option value="2019">2019</option>
		<option value="2020">2020</option>
		<option value="2021">2021</option>
		<option value="2022">2022</option>
		<option value="2023">2023</option>
		<option value="2024">2024</option>
		<option value="2025">2025</option>
		<option value="2026">2026</option>
		<option value="2027">2027</option>
		<option value="2028">2028</option>
		<option value="2029">2029</option>
		<option value="2030">2030</option>
	</select>
	</td>
	</tr>
	<tr>
	<td><label style="font-size: 20;">Amount(.Rs)</label></td>
	<td><input type="number" name="amount" style="font-size: 20;" value="<?php echo $amount ?>" readonly="readonly"></td>
	</tr>
</table>
</section>
<footer style="clear: both; padding-top: 30px;"><center><button type="submit" id="submit" value="submit" name="submit">Confirm</button></center></footer><br/>
</div>
</div>
</form>
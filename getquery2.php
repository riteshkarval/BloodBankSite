<html>
<head><meta http-equiv="refresh" content="10; url=query.htm" /></head>
<body>
<?php
		$result="";
		$con=mysqli_connect('localhost','root','','itproject');
		// Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
		  else{
		  $date=''.$_POST['year'].'-'.$_POST['month'].'-'.$_POST['day'].'';
		  echo $date;
		$result = mysqli_query($con,'SELECT * FROM availability where day="'.$date.'"');
		echo "<h1>List Of All Available Blood groups As On ".$date."</h1>";

echo "<table border='1'>
<tr>
<th>A-</th><th>A+</th><th>B-</th><th>B+</th><th>AB-</th><th>AB+</th><th>O-</th><th>O+</th>
</tr>";
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['a-'] . "</td>";echo "<td>" . $row['a+'] . "</td>";echo "<td>" . $row['b-'] . "</td>";
  echo "<td>" . $row['b+'] . "</td>";echo "<td>" . $row['ab-'] . "</td>";echo "<td>" . $row['ab+'] . "</td>";
  echo "<td>" . $row['o-'] . "</td>";echo "<td>" . $row['o+'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
			}
		mysqli_close($con);
		echo "<br/><br/>You will be automatically redirected to QUERY page after 10 seconds";
?></body></html>
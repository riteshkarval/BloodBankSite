<html>
<head>
<title>Donor</title>
<link href="website.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
 <div class="container">
  <div class="header">
<center><img src="logo.jpg" height=80 width=300>
<h1>Blood bank</h1></center>
  </div>
<div class="header1">
<div class="button">
<a href="home.htm"><h1>Home</h1></a>
</div>
<div class="button">
<a href="request.htm"><h1>Reqest</h1></a>
</div>
<div class="button">
<a href="query.htm"><h1>Query</h1></a>
</div>
<div class="button">
<a href="donor.htm"><h1>Donate</h1></a>
</div>
<div class="button">
<a href="contact.htm"><h1>Contact</h1></a>
</div>
<div class="button">
<a href="about.htm"><h1>About</h1></a>
</div>
</div>

  <div class="nav">
    <p><strong>Latest Events</strong></p>
    <marquee direction=up>
    <ul>
     <li>->Blood Donation Camp on 15-August</li>
     <li>->Visit of Honorable Chief Minister</li>
     <li>->Ranked State A class Blood bank</li>
    </ul></marquee>
  </div>

  <div class="content">
<?php
		$con=mysqli_connect('localhost','root','','itproject');
		$pass=rand(1111111,9999999);
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
		  else{
		  $result = mysqli_query($con,'SELECT max(id) FROM donor');
		  $row = mysqli_fetch_array($result);
		 // echo $row['max(id)'];
		  $newid=$row['max(id)']+1;
		  echo "<table border='1'>
			<tr>
			<th>Your User Id Is :</th><th>".$newid."</th>
			</tr>";
			echo "<tr>";
			  echo "<td>Your password Is:</td><td>". $pass . "</td>";
			  echo "</tr>";
			echo "</table>";
		mysqli_query($con,'INSERT INTO donor VALUES("'.$_POST['an'].'","'.$_POST['age'].'","'.$_POST['sex'].'","'.$_POST['city'].'","
		'.$_POST['contact'].'","'.$_POST['mail'].'","'.$_POST['des'].'","'.$_POST['desdes'].'","'.$newid.'")');
		mysqli_query($con,'INSERT INTO login values("'.$newid.'","'.$pass.'","donor")');
			echo "Request Submitted Successfully";
			}

		mysqli_close($con);
?>
  </div>

  <div class="right">
   <br/><br/>
<div class="header">
<center><img src="drop.jpg">
  </div>

  </div>

  <div class="footer">
   <p><center>Copyright © Blood Bank Moradabd. All rights reserved.<br/>Approved By National Blood Policy</center></p>
  </div>

 </div>
</body>
</html>                                 
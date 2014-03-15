<html>
<head>
<title>Query</title>
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
<a ><h1>Home</h1></a>
</div>
<div class="button">
<a ><h1>Reqest</h1></a>
</div>
<div class="button">
<a ><h1>Query</h1></a>
</div>
<div class="button">
<a ><h1>Donate</h1></a>
</div>
<div class="button">
<a ><h1>Contact</h1></a>
</div>
<div class="button">
<a ><h1>About</h1></a>
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
  <br/><br/><h1>User Details</h1><br/>
<?php
		$con=mysqli_connect('localhost','root','','itproject');
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
		  else{
		  $result = mysqli_query($con,'SELECT pass,type FROM login where user='.$_POST['name'].'');
		  $row = mysqli_fetch_array($result);
		  $pass=$row['pass'];
		  $type=$row['type'];
		  if($type=='donor' && $_POST['pass']==$pass)
		  {
		  $result = mysqli_query($con,'SELECT * FROM donor where id='.$_POST['name'].'');
		  $row = mysqli_fetch_array($result);
		  echo "<table border='1'>
		<tr><td>Name</td><td>". $row['name'] ."</td></tr>
		<tr><td>Age</td><td>".$row['age']."</td></tr>
		<tr><td>Sex</td><td>".$row['sex']."</td></tr>
		<tr><td>City</td><td>".$row['city']."</td></tr>
		<tr><td>Contact Number</td><td>".$row['contact_no']."</td></tr>
		<tr><td>E-mail</td><td>".$row['e_mail']."</td></tr>
		<tr><td>Status</td><td>".$row['status']."</td></tr>
		<tr><td>Description</td><td>".$row['description']."</td></tr>
		<tr><td>ID</td><td>".$row['id']."</td></tr>";
		echo "</table>";
		  }else if($type=='request' && $_POST['pass']==$pass)
		  {
		  $result = mysqli_query($con,'SELECT * FROM request where id='.$_POST['name'].'');
		  $row = mysqli_fetch_array($result);
		  echo "<table border='1'>
		<tr><td>Name</td><td>". $row['name'] ."</td></tr>
		<tr><td>Age</td><td>".$row['age']."</td></tr>
		<tr><td>Sex</td><td>".$row['sex']."</td></tr>
		<tr><td>City</td><td>".$row['city']."</td></tr>
		<tr><td>Hospital</td><td>".$row['hospital']."</td></tr>
		<tr><td>Disease</td><td>".$row['disease']."</td></tr>
		<tr><td>Blood Group</td><td>".$row['bgroup']."</td></tr>
		<tr><td>Date</td><td>".$row['date']."</td></tr>
		<tr><td>ID</td><td>".$row['id']."</td></tr>";
		echo "</table>";
		  }else if($type=='admin' && $_POST['pass']==$pass)
		  {
		  echo "Hello Admin! Have A Nice Day";
		  $page='admin.php';
		  echo "<form action=".$page." method=post><br/><input type=submit value=Delete_A_User name=delete><br/><br/>";
		  }else
		  echo "Incorrect Password Or Username<br/>";
			}
		mysqli_close($con);
?>

  </div>

  <div class="right">
 <br/><br/>
 <a href="home.htm"><h1><u>Logout</u></h1></a>
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
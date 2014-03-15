<html>
<head>
<title>ADMIN</title>
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
<?php
		$con=mysqli_connect('localhost','root','','itproject');
		// Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
		  else{
		   $result = mysqli_query($con,'SELECT user FROM login');
		   $page='delete.php';
		   echo "<br/><br/><h1>Select user to Delete</h1><br/>";
		   echo "<form action=".$page." method=post>";
		   echo "<select name=user>";
		  while($row = mysqli_fetch_array($result))
		  {
		  echo "<option value=".$row['user'].">";
		  echo $row['user'];
		  echo "</option>";
		  }
		  echo "</select><br/><br/>";
			}
		mysqli_close($con);
?>
<input type=submit value=delete></form>
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
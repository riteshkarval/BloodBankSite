<html>
<head>
<meta http-equiv="refresh" content="10; url=admin.php" />
</head>
<body>
<?php
		$con=mysqli_connect('localhost','root','','itproject');
		// Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
		  else{
		mysqli_query($con,'DELETE FROM login where user='.$_POST['user'].'');
		mysqli_query($con,'DELETE FROM donor where id='.$_POST['user'].'');
		mysqli_query($con,'DELETE FROM request where id='.$_POST['user'].'');
				  echo "<br/><br/>You will Be Automatically redirected after 10 seconds";
		}
		mysqli_close($con);
?>
</body>
</html>
<?php
	include('connection.php');
	#user_session();
	?>
	<!DOCTYPE HTML>
	<html>
	<head>
	<link rel="stylesheet" type="text/css" href="style4.css">
	</head>
	<body>
	<table><tr><td><h2><a href="a22.php">Back to main page</a> </h2></td></tr></table>
	<?php
			session_start();
		$P1=$_SESSION['P'];
		$sql="
		DELETE FROM pkg_day_plans
		where PackageID='$P1'";
		#.PackageID=pkg_day_plans.PackageID	
		$result=mysqli_query($conn,$sql);
		
		if($result)
	{
		#echo("$P1");
	echo"<script>window.location.href='d3.php';alert('Data deletion successful');</script>";	
	}
	else                                                            
	{
	echo"<script>window.location.href='d3.php';alert('Data deletion unsuccessful');</script>";	
	die();
	}
	
	?>
	
	</body>
	</html>
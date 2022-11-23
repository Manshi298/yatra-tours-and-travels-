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
	<?php
	session_start();
		
		$P1=$_SESSION['P'];
		
		$D1=$_GET['Dayno'];
		$D2=$_GET['Daydate'];
		$t1=$_GET['t1'];
		$t2=$_GET['t2'];
		$t3=$_GET['t3'];
	    
		$sql="
		UPDATE pkg_day_plans
		SET Dayno='$D1',Daydate='$D2',Trip_Desc1='$t1',Trip_Desc2='$t2',Trip_Desc3='$t3'
		WHERE PackageID='$P1'";
			
		$result=mysqli_query($conn,$sql);
		
		
		if($result)
	{
		
	echo"<script>window.location.href='d3.php';alert('Data updation successful');</script>";		
	}
	else                                                            #arithmetic1.php is a demo file.The filename of the desired php file must be put there.
	{
	echo"<script>window.location.href='d3.php';alert('Data updation unsuccessful');</script>";	
	die();
	}
	
	?>
	
	</body>
	</html>
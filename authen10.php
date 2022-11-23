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
		#$is=session_value("id");
		#if(isset($_POST['submit']))
		#{
		$P=$_POST['PackageID'];
		#}
		#$Package_Name=$_POST['Package_Name'];
		$D1=$_POST['Dayno'];
		$D2=$_POST['Daydate'];
		$t1=$_POST['t1'];
		$t2=$_POST['t2'];
		$t3=$_POST['t3'];
	    
		$sql="
		INSERT INTO pkg_day_plans
		(PackageID,Dayno,Daydate,Trip_Desc1,Trip_Desc2,Trip_Desc3) VALUES('$P','$D1','$D2','$t1','$t2','$t3')
		";
			
		$result=mysqli_query($conn,$sql);
		
		
		if($result)
	{
		
	echo"<script>window.location.href='a22.php';alert('Data insertion successful');</script>";	
	}
	else                                                            #arithmetic1.php is a demo file.The filename of the desired php file must be put there.
	{
	echo"<script>window.location.href='a22.php';alert('Data insertion unsuccessful');</script>";	
	die();
	}
	
	?>
	
	</body>
	</html>
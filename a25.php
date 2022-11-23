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
	<div id="form">
	<table>
	
	<tr>
	<td><h2><a href="a22.php">Back to main page</a> </h2>
	</td>
	</tr>
	
	<?php
		$P=$_GET['PackageID'];
		?>
		
		<tr>
		<td>
		<h3><font color="green"><?php
		echo "The PackageID: ".$P."</br>"; ?></font></h3>
		</td>
		</tr>
		
		<?php
		$s1="select * from package where Package_ID='$P'";
		$d=mysqli_query($conn,$s1);
		$data=mysqli_fetch_array($d);
		?>
		
		<tr>
		<td><h3><font color="green"><?php
		echo "The name of the package: ".$data['Package_Name'];?></font></h3>
		</td>
		</<tr>
	
		<center><h1>PACKAGE DAY PLANS </center></h1>
		<?php
			session_start();
			$_SESSION['P']=$_GET['PackageID'];
			?>
			
		
		<form name="f2" action="a24.php" onsubmit="return validation()" method="GET">

			<tr><td><input type="submit" id="btn" value="CONFIRM DELETION" /></td>
			
			</tr>
		</table>
		
		
	
	</body>
	</html>

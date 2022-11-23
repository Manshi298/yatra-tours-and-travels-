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
			
		
		<form name="f1" action="a12.php" onsubmit="return validation()" method="GET">
			
			<tr>
				<td><label><h3>Day duration</h3></label></td>
				
				<td><input type="text"placeholder="Enter Day duration" id="Dayno" name="Dayno" required></td>
			</tr>
			
			<tr>
			<td></td>
			<td></td>
			<td></td>
			</tr>
			
			<tr>
				<td><label><h3>Day Date</h3></label></td>
				
				<td><input type="date" placeholder="Enter in yyyy-mm-dd" id="Daydate" name="Daydate" required></td>
			</tr>
			
			<tr>
			<td> </td>
			<td> </td>
			<td> </td>
			</tr>
			
			<tr>
				<td><label><h3>Trip description 1</h3></label></td>
			</tr>
			<tr>
				<td><h3><textarea name="t1" id="t1" rows="7" cols="60" required></textarea></td>
				
			</tr>
			<tr>
				<td><label><h3>Trip description 2</h3></label></td>
			</tr>
			<tr>
				<td><h3><textarea name="t2" id="t2" name="t2" rows="7" cols="60" required></textarea></td>
				
			</tr>
			<tr>
				<td><label><h3>Trip description 3</h3></label></td>
			</tr>
			<tr>
				<td><h3><textarea name="t3" id="t3" name="t3" rows="7" cols="60" required></textarea></td>
				
			</tr>
				
			<tr>
			<td> </td>
			<td> </td>
			<td> </td>
			</tr>
			
			<tr>
			<td><input type="submit" id="btn" value="UPDATE" /></td>
			</tr>
		</table>
		
		
	
	</body>
	</html>

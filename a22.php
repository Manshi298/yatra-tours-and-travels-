<?php
	include('connection.php');
	#user_session();
	?>
	<!DOCTYPE HTML>
<html>
<head>
	<title>Tourism package-day-plan</title>
	<link rel="stylesheet" type="text/css" href="style4.css">
	<STYLE TYPE="text/css">
	
	 select {
      border-radius:5px;
	  width: 75%;
	  padding: 8px 10px;
	  border: none;
	  background-color: #f1f1f1;
	  }
	  
	 </STYLE>
</head>

<body id="bg">
<?php include "admin_header.php"; ?>
	<div id=form>
	
		<center><h3>PACKAGE DAY PLANS </center></h3>
		
		<form name="f1" action="authen10.php" onsubmit="return validation()" method="POST">
		<table width="50%" border =1 align=center>
		<tr>
				<td><label><h4>Package Name</h4></label></td>
				
				<td colspan=2><select name="PackageID"> 
				<option value=" ">-------------------SELECT---------------</option>
				<?php 
				$sql="SELECT * from package";
				$result=mysqli_query($conn,$sql);
				while($data=mysqli_fetch_array($result))
				{
					?>
					<option value="<?php echo $data['Package_ID'];?>"><?php echo $data['Package_Name'];?></option>
				<?php
				}
				?>
			</select>
			<input type="submit" name="submit" value="save" />
			</tr>			
				
			<!---<tr>
				<td><label><h3>Package name</h3></label></td>
				<td> </td>
				<td><h3><select>
				<option value=" ">-------------------SELECT----------------</option>
				<?php 
				$sql="SELECT * from package";
				$result=mysqli_query($conn,$sql);
				while($data=mysqli_fetch_array($result))
				{
					?>
					<option value=""><?php echo $data['Package_Name'];?></option>
				<?php
				}
				?>
				</select>--->
				
				
				</h3></td>
			</tr>
			
			<tr>
				<td><label><h4>Day duration</h4></label></td>
				
				<td colspan=2><input type="text"placeholder="Enter Day duration" id="Dayno" name="Dayno" required></td>
			</tr>
			
			<tr>
				<td><label><h4>Day Date</h4></label></td>
				<td colspan=2><input type="date" placeholder="Enter in yyyy-mm-dd" id="Daydate" name="Daydate" required></td>
			</tr>
			
			<tr>
				<td><label><h4>Trip description 1</h4></label></td>
				<td><label><h4>Trip description 2</h4></label></td>
				<td><label><h4>Trip description 3</h4></label></td>
			</tr>
			<tr>
				<td><textarea name="t1" id="t1" rows="4" cols="30" required></textarea></td>
				
			
				<td><textarea name="t2" id="t2" name="t2" rows="4" cols="30" required></textarea></td>
				
			
				<td><textarea name="t3" id="t3" name="t3" rows="4" cols="30" required></textarea></td>
				
			</tr>
			<tr>
			<td colspan=3><input type="submit" id="btn" value="Insert" /></td>
			</tr>
			
			<!--<tr>
			<td><a href="a7.php">Click here to delete some records</a></td>
			</tr>-->
			
			<tr>
			<td colspan=3><h2><a href="d3.php">Click here to display the tour packages</a></h2></td>
			</tr>
						
			</table>
				
		</form>
	
	</div>
	</body>
	</html>
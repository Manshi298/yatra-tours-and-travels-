<html>
<head>
<style TYPE="text/css">
#para1 
	{
	  color:black;		
	  text-align:center;
	   margin-left:40px;	
	  font-size:16px;
	  font-family:arial;
	  background-color: none;
	  border-style: dotted dashed;
	  width: 30%;
	  border: none;
	  border-radius:5px;
	}
     
    select 
	{
	  border-radius:5px;
	  width: 50%;
	  height:30px;
	  
	}
	input[type=submit]
	{
	  background-color:teal;
	  border: none;
	  color: white;
	  padding: 15px 32px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  font-size: 16px;
	  border-radius: 4px;
	}
	</style>
 </head>
<body>
<?php include "admin_header.php";  ?>
<form action="newpak.php" method="POST">
<label id="para1">Enter Package Name: </label>
<select name="Package_ID">

<?php 
	require "connection.php";
	$query2="select Package_Name,Package_ID from package";
	echo"<br> <br>";
	$result=mysqli_query($conn,$query2);
	//echo mysqli_error($conn);
	if(mysqli_num_rows($result)>0)
	{
		while($row = $result->fetch_assoc()) 
		{
				echo  "<option value=".$row["Package_ID"]. ">". $row["Package_Name"]. "</option>";
				
		}
	}
?>
</select>
<input type="submit" name="pkgbtn" value="Edit">
</form>
</body>
</body>
</html>
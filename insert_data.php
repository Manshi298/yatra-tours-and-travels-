<!--php code to insert customer data in database-->
<html>
<head><title>Insert record to package</title>
<STYLE TYPE="text/css">
    .details{ 
		
     background-color:rgb(216,191,216);
	width:750px;
	margin:auto;
		 
	}
	 .button1
	{
	  background-color:lightyellow;
	  border: solid;
	  color:purple;
	  padding: 10px 25px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  font-size: 14px;
	  border-radius: 4px;
	  
	}
</style>
</head>
<body style="background-color:rgb(216,191,216);">
<?php
include "admin_header.php";
require "connection.php";
   //$Package_ID=$_POST["Package_ID"];
  $Package_Name=$_POST["Package_Name"];
  $Package_Desc=$_POST["Package_Desc"];
  $place =$_POST["place"];
  $Source=$_POST["Source"];
  $Destination=$_POST["Destination"];
  $Startdate=$_POST["Startdate"];
  $Enddate=$_POST["Enddate"];
  $Totaldays=$_POST["Totaldays"];
  $Tour_type=$_POST["Tour_type"];
  $Full_pkg_rate=$_POST["Full_pkg_rate"];
  $Max_Head_Allowed=$_POST["Max_Head_Allowed"];
  
  $query="insert into package(Package_Name,Package_Desc,place,Source,Destination,Startdate,Enddate,
Totaldays,Tour_type,Full_pkg_rate,Max_Head_Allowed) values('$Package_Name','$Package_Desc','$place','$Source','$Destination','$Startdate','$Enddate',
'$Totaldays','$Tour_type','$Full_pkg_rate','$Max_Head_Allowed')";
  
  //$query="insert into package values('$Package_ID''$Package_Name','$Package_Desc','$place','$Source','$Destination','$Startdate','$Enddate',
//'$Totaldays','$Tour_type','$Full_pkg_rate','$Max_Head_Allowed')";
if(mysqli_query($conn,$query)){
echo "<div><center><b><h3><font face=Arial color=purple>Package details record inserted successfully</font></h3></b></center></div>";
}
else{
echo "<div><center><b><h3><font face=Arial color=red>Package record cannot be inserted </font> </h3></b> </center></div>";
}
?>
<br>
<br>
<div align=center>
<a href="newpak.php" class="button1">Update</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="delete.php" class="button1">Delete</a>
<p><img src="tour_package.jpg" width=700>
</p> 
</div>

</body>
</html>


 

	
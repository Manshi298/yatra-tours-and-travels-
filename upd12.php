<?php
include "admin_header.php";
include "connection.php";
$Package_ID=$_POST["Package_ID"];
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
//echo "<br>Package ID=".$Package_ID."<br>";
$query="update package set Package_Name='".$Package_Name."',Package_Desc='".$Package_Desc."',place='".$place."',Source='".$Source."',Destination='".$Destination."',
Startdate='".$Startdate."',Enddate='".$Enddate."',Totaldays='".$Totaldays."',Tour_type='".$Tour_type."',Full_pkg_rate='".$Full_pkg_rate."',Max_Head_Allowed='".$Max_Head_Allowed."' 
where Package_ID=". $Package_ID;
 if(mysqli_query($conn,$query))
 {
?>    <html>
	  <head>
	  <style>
	   div p {
		   background-color:white;
	   }
	   </style>
	   </head>
	   <body>
	   <?php
	    echo"<div> <b><p><font color='black'>Record Updated Successfully.</p> </b> </div>";
 }
  else
  {
	  echo "<div><b><p><font color='red'>Record cannot be Updated.</p></b></div>";
  }
  
 $conn->close();
?>
<div><a href="package.php">Back to Package entry </a></div>
</body></html>   
	 
<html>
<head>
<style>
.btn_reg{
background-color:white;
border:2px solid black;
color:black;
padding:10px 15px;
font-size:30px;
}

.tab{
font-size: 15px;
background-color:lavender;
}
th{
color:black;
}
td{
color:black;
}
#para1 
	{
	  color:black;
	  margin-left:20px;	
	  text-align: center;
	  font-size:16px;
	  font-family:arial;
	  background-color: none;
	  border-style: dotted dashed;
	  width: 10%;
	  border: none;
	  border-radius: 5px;
	  
	}
	input[type=text] 
	{
	  border-radius:5px;
	  width: 80%;
	  height:30px;
	  
	}
    textarea
	{
	  border-radius:5px;
	  width: 80%;
	 }
	 input[type=date] 
	{
	  border-radius:5px;
	  width: 50%;
	  height:30px;
	  
	}
	number
	{
	  border-radius:5px;
	  width:30%;
	  height:30px;
	}
	 select {
      border-radius:5px;
	  width: 25%;
	  padding: 8px 10px;
	  border: none;
	  background-color: #f1f1f1;
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
	
	</STYLE>
</HEAD>
</style>
</head>
<body>
<form action="upd12.php" method="POST">
<center>
<section id="upfun">
</section>

<?php
include "admin_header.php";
include "connection.php";

if (isset($_POST['pkgbtn']))
{
$a=$_POST['Package_ID'];
$query2="select * from package where Package_ID=".$a;

$result=mysqli_query($conn,$query2);
echo "<input type=hidden name=Package_ID value=".$a . ">";
if(mysqli_num_rows($result)!=0){
	while($row=$result->fetch_assoc())
	{
	$Package_ID=$row['Package_ID'];
	
	echo "<center><table cellspacing=10 cellpadding=10 class=tab border=0 width=85%>";
	echo "<tr><th colspan=2><h2>Package Details-Updation</h2></th></tr>";
	//echo $row['Package_Name'];
	echo "<tr><th>Package Name </th><td><input type=text name=Package_Name value='  ".$row['Package_Name']."'></td></th></tr>";
	echo "<tr><th> Package Description </th> <td><input type=text name=Package_Desc value='".$row['Package_Desc']."'></textarea></td></th></tr>";
	echo "<tr><th>Place </th> <td><input type=text name=place value='".$row['place']."'</td></th></tr>";
	echo "<tr><th>Source </th> <td><input type=text name=Source value='".$row['Source']."'</td></th></tr>";
	echo "<tr><th>Destination</th> <td><input type=text name=Destination value='".$row['Destination']."'</td></th></tr>";
	echo "<tr><th>Start Date</th><td><input type=text name=Startdate value='".$row['Startdate']."'</td></th></tr>";
	echo "<tr><th>End Date </th><td><input type=text name=Enddate value='".$row['Enddate']."'</td></th></tr>";
	echo "<tr><th>Total Days </th> <td><input type=number name=Totaldays value='".$row['Totaldays']."'</td></th></tr>";
	echo "<tr><th>Tour Type </th><td><input type=text name=Tour_type value='".$row['Tour_type']."'</td></th></tr>";
	echo "<tr><th>Full Package Rate </th>  <td><input type=text name=Full_pkg_rate value='".$row['Full_pkg_rate']."'</td></th></tr>";
	echo "<tr><th>Max Head Allowed </th><td><input type=text name=Max_Head_Allowed value='".$row['Max_Head_Allowed']."'</td></th></tr>";
	}
	echo "</table></center>";
	
	echo '<br><br><button class=button1 type=submit>Update</a>';
	
}
else{
echo '<br><h2>No such record present in database</h2><br>';
}
}

?>
</form>
</body>
</html>
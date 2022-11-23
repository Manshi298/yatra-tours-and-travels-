<html>
<head>
<style>
body{
	
}
#div_head{
	border:solid gray 1px;
	border-radius:10px;
	margin:auto;
	margin-left:40px;
	margin-right:40px;
	margin-top:30px;
	padding:20px;
	/*background-color:rgb(220,220,200);*/
	/*background:rgba(76,175,80,0.3);*/
}
#div_desc{
	
	border:solid gray 1px;
	width:95%;
	border-radius:10px;
	margin:auto;
	margin-top:30px;
	padding:20px;
	/*background-color:rgb(220,220,200);*/
	background:rgba(76,175,80,0.3);
}
#div_day{
	
	border:solid gray 1px;
	width:95%;
	border-radius:10px;
	margin:auto;
	margin-top:30px;
	padding:20px;
	/*background-color:rgb(220,220,200);*/
	background:rgba(176,175,80,0.3);
}
#div_Cost{
	
	border:solid gray 1px;
	width:95%;
	border-radius:10px;
	margin:auto;
	margin-top:30px;
	padding:20px;
	/*background-color:rgb(220,220,200);*/
	background:rgba(76,75,80,0.3);
}
#col_size{
	font-size:13px;
}
</head>
</style>
<body>
<?php
include "Client_header.php";
include "connection.php";
if(!isset($_SESSION))
session_start();
/*if (isset($_SESSION['Package_ID']))
	unset($_SESSION['Package_ID']);*/
//echo "<form action='checklogin.php' method='POST'>";
if(isset($_POST["Package_ID"]))
{
	
	$pkgID=$_POST["Package_ID"];
	$_SESSION['Package_ID']=$pkgID;
	/*$sql = "SELECT Package.*,pkg_day_plans.*,pkg_transport_cost.*,pkg_images.* ";
	$sql=$sql. " FROM Package,pkg_day_plans,pkg_transport_cost,pkg_images ";
	$sql=$sql." where Package.Package_ID=pkg_images.Package_ID";
	$sql=$sql." and Package.Package_ID=pkg_day_plans.PackageID";
	$sql=$sql." and Package.Package_ID=pkg_transport_cost.PackageID";
	$sql=$sql." and Package.Package_ID=".$pkgID;*/
	
	$sql = "SELECT Package.* FROM Package where Package.Package_ID=".$pkgID;
	
	$tableResults = mysqli_query($conn,$sql);
	
	$row = mysqli_fetch_row($tableResults);
	echo "<div  id='div_head'>";
	echo "<table border=0 cellspacing=20><tr><td colspan=2 width=750>";
	echo "<h2><font face='Tahoma' color=blue>".$row[1]."</font></h2></td>";
	echo "<td rowspan=4 valign=top>";
	$query = "SELECT pkg_images.* FROM pkg_images where pkg_images.Package_ID=".$pkgID;
	
	$Results = mysqli_query($conn,$query);
	echo "<a href='login-user.php'><input type=button value='BOOK NOW'></a>";
	while($data = mysqli_fetch_row($Results)){
		echo "<br><br><br><br><img src=". $data[2]." height=250 width=300><br>Place : <u>".$data[3]."</u><br>";
	}
	echo "</td>	</tr>";
	echo "<tr><td>";
	echo "<div id='div_desc'>";
	echo "<table border=0 cellspacing=7 height=400 width=750 id='col_size'>";
	echo "<font size=2 >";
	echo "<tr><td width=700><b>Description : </b><br><font size=2 >".$row[2]."</font></td></tr>";
	echo "<tr><td width=700>Place : ".$row[3]."</td></tr>";
	echo "<tr><td width=700>Source : <b>".$row[4]."</b> ||  Desination : <b>".$row[5]."</b></td></tr>";
	echo "<tr><td width=700>Start Date of tour : <b>".$row[6]."</b> || End date of tour  : <b>".$row[7]."</b> || Total days to spend : <b>".$row[8]."</b></td></tr>";	
	echo "<tr><td width=700>Type of package : <b>".$row[9]."</b> || Full Package  : <b>Rs.".$row[10]." Per head</b></td></tr>";
	echo "<tr><td width=700>Maximum Head allowed for the package : ".$row[11]."</td></tr>";
	echo "</font>";
	
	echo "</table>";
	echo "</div>";
	
	echo "<hr>";
	$sql = "SELECT pkg_day_plans.* FROM pkg_day_plans where pkg_day_plans.PackageID=".$pkgID;
	
	$tableResults = mysqli_query($conn,$sql);
	echo "<div id='div_day'>";
	echo "<table border=0 height=500 id='col_size'>";
	echo "<tr><td width=700 valign=top><b>Day Plans : </b></td></tr>";
	while($row = mysqli_fetch_row($tableResults)){
	
	echo "<tr><td width=700> Day ".$row[1].": <br></td></tr>";
	echo "<tr><td width=700> Trip Description <br> date : ".$row[2]."</td></tr>";
	echo "<tr><td width=700>  <br>".$row[3]."</td></tr>";
	echo "<tr><td width=700>  <br>".$row[4]."</td></tr>";
	echo "<tr><td width=700>  <br>".$row[5]."</td></tr>";
	}
	echo "</table>";
	echo "</div>";
	$sql = "SELECT pkg_transport_cost.* FROM pkg_transport_cost where pkg_transport_cost.PackageID=".$pkgID;
	
	$tableResults = mysqli_query($conn,$sql);
	echo "<div id='div_Cost'>";
	echo "<table border=0 height=200 id='col_size'>";
	echo "<tr><td width=700><b>Side Tour costs:</b> ";
	while($row = mysqli_fetch_row($tableResults)){
	
	echo "<tr><td width=700> Transport By:<b> ".$row[1]." </b><br></td></tr>";
	echo "<tr><td width=700> From : <b>".$row[2]."</b> To Desination : <b>".$row[3]. "</b><br></td></tr>";
	echo "<tr><td width=700> Rate of adult per head  :<b> ".$row[4]."</b> || Rate of infant per head :<b> ".$row[5]. " </b></td></tr>";
	
	}
	echo "</table>";
	echo "</td></tr>";
	echo "<tr><td colspan=2 align=right><a href='login-user.php'><input type=button value='BOOK NOW'></a></td></tr> </table>";
	echo "</form>";
}
echo "</div></body></html>";
?>
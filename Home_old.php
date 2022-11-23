<?php
$servername="localhost";
$user ="root";
$password="";
$db="tourism"; #the database name 
//connection to database
$conn=mysqli_connect($servername,$user,$password,$db);
if(!$conn){
die("Unable to connect".mysqli_connect_error());
}
?>
<html>
<head><title>View Data</title></head>
<body>
	<table width=80 cellspacing=10 border=1>
	
	<?php
		$countpic=1;
		$sql = "SELECT Package.Package_id,Package_name, Package_Desc, Place,Startdate,Enddate,Full_pkg_rate,Image_path ";
		$sql=$sql. " FROM Package,pkg_images where Package.Package_id=pkg_images.Package_id";
		//echo $sql;
		$result = $conn->query($sql);

		if ($result->num_rows > 0)   //if record exists
		{
			// output data of each row
			while($row = $result->fetch_assoc()) 
			{
				if ($countpic>3)
				{
					$countpic=1;
					echo "</tr>";
					echo "<tr>";
				}
				echo "<td>";
				echo "<Form action=# method=post>";
				echo "<input type=image src='".$row["Image_path"] . "' height=300 width=275 ><br><br>";
				echo  $row["Package_name"]. "<br>";
				echo  $row["Package_Desc"]	."<br>Place :  " . $row["Place"] ."<br>";
				echo "Duration : ". $row["Startdate"]. "    To    " . $row["Enddate"]. "<br>";
				echo "Cost per head : ".$row["Full_pkg_rate"];
				echo "<input type=submit value='Show More' name='more'>";
				echo "</form>";
				echo "</td>";
				$countpic++;
			}
			
			echo "</tr></table>";
		} 
		else                        //if query gives no record
		{
			echo "No results";
		}
		$conn->close();
	?>

	
</body>
</html>

?>
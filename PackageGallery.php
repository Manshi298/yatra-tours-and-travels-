<?php
	include "connection.php";
	include "Client_header.php";

	$query = "SELECT  distinct package_id FROM pkg_images";
	$tableResults = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Package Image View</title>
	<style>
		table,th,tr,td {
			border:0px solid black;
			
		}

		#editPkg {
			border: 2px solid skyblue;
			border-radius: 5px;
		}
		#viewPkg {
			border: 4px solid skyblue;
			border-radius: 15px;
			background:lightyellow;
		}
		
	</style>
</head>
<body>
	<h1>Package Image Entity</h1>
	<hr>
<?php
echo "<div id=editPkg>";

	if($_GET){
		$pkgId = $_GET['id'];
		$str="";
		$query = "SELECT Image_path,Place_name FROM pkg_images WHERE Package_ID =".$pkgId;

		$pkgResults = mysqli_query($conn,$query);
		echo "<h3>Name of Package : </h3>";
		echo getPackageName($pkgId);
		
		echo "<p><h3>IMAGES : </h3></p>";
		while($row = mysqli_fetch_assoc($pkgResults))
		{
		echo "<img src=".$row['Image_path']." width=100px height=100px />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";   
		$str=$str. "  ".$row['Place_name'];
		}
		echo "<p>".$str."</p>";
	}
?>
</div>
<div id="viewPkg">
	<table style="width:70%" align=center cellpadding=3>
		<tr>
			<th>NAME OF PACKAGE</th>
			<th>IMAGES</th>
			<th>PLACE</th>
			<th>ACTION</th>
		</tr>

<?php
	/*while($row = mysqli_fetch_row($tableResults)){
		echo "<tr>";
		echo "<td>".$row[1]."</td>";
		$strImgs = explode(",", $row[2]);
		echo "<td><img src=".$strImgs[0]." width=80px height=80px />  ";
		echo "<img src=".$strImgs[1]." width=80px height=80px /></td>";
		echo "<td>".$row[3]."</td>";
		// echo "<td><input class='btn_edit ".$row[1]."' name='edit' type='submit' value='edit' /></td>";
		echo "<td><a href='pkgImgEntityView.php?id=".$row[1]."'>edit</a></td>";
		echo "</tr>";
	}*/
	function getPackageName($pkgid)
	{
		include "connection.php";
		$sql1 = "SELECT Package_name  FROM package where package_id=".$pkgid;
		$results1 = mysqli_query($conn,$sql1);
		while($row1 = mysqli_fetch_row($results1)){
			return($row1[0]);
		}
	}
	while($row = mysqli_fetch_row($tableResults)){
		
		
		$sql = "SELECT Image_path,Place_name  FROM pkg_images where package_id=".$row[0];
		$results = mysqli_query($conn,$sql);
		$no=$results->num_rows;
		$pkgname=getPackageName($row[0]);
		echo "<tr><td rowspan=".$no ." width=150px valign=top>".$pkgname."</td>";
		while($row_img = mysqli_fetch_row($results)){
	
			echo "<td width=100px><img src=".$row_img[0]. " width=200px height=100px /></td>";
			echo "<td width=200px>".$row_img[1]."</td>";
			echo "<td width=80px><b><a href='PackageGallery.php?id=".$row[0]."'>View All</a><b></td>";
			echo "</tr>";
			echo "<tr>";
		}
		echo "</tr>";	
	}
?>
	</table>
	</div>
	
</body>
</html>
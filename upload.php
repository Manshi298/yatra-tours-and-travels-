<html>
<head><title>Package Images upload Status</title>
<link rel="stylesheet"
		type="text/css"
		href="style_upload.css" />
</head>

<?php include "admin_header.php"; ?>
<?php
error_reporting(0);
?>
<?php
$msg = "";

// If upload button is clicked ...
if (isset($_POST['uploadimg'])) {

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];	
	$folder = "image/".$filename;
	
	$packageid=$_POST['PackageID'];
	$place	=$_POST['place'];
	include('connection.php');

		// Get all the submitted data from the form
		$sql = "INSERT INTO pkg_images VALUES (0,".$packageid .",'".$folder."','".$place."')";
		
		// Execute query
		if(mysqli_query($conn, $sql))
		{
		// Now let's move the uploaded image into the folder: image
		if (move_uploaded_file($tempname, $folder)) 
		{
			$msg = "Image uploaded successfully";
		}else
		{
			$msg = "Failed to upload image";
		}
		}
	else
	{
			$msg = "Failed to upload image";
		}
		
echo "<div align=center><h3>".$msg."</h3></div>";
echo "<div align=center>
<p><a href='image_upload.php'><button>Back to edit page</button></a>
	<a href=''><button>Next to preview page</button></a>
</p>";
}
//$result = mysqli_query($db, "SELECT * FROM image");
?>

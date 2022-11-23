<html>
<head><title>Package Images upload</title>

<?php include "admin_header.php"; ?>
<?php include('connection.php'); ?>
<link rel="stylesheet"
		type="text/css"
		href="style_upload.css" />
		<script>
		var loadFile = function(event) {
			var image = document.getElementById('output');
			image.src = URL.createObjectURL(event.target.files[0]);
		};
		
		</script>
</head>

<body style="background-image:url('image/package2.jpg');background-position:center;	background-repeat:no-repeat;background-size:1200px 800px;">

<div align=center>
		<h2><font color=blue>Package Image upload<font></h2></div>
	<div id="img_div" align=center>
		<br><br>
		<form method="POST" action="upload.php" enctype="multipart/form-data">
		
			<div><Label id=para1>Name of package</label>
				<select name="PackageID"> 
				<option value=" ">-------------------SELECT-------------------</option>
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
			</select></div>
			<div> 
				<p><Label id=para1>Place of package</label>
				<input type=text name="place"> 
				</p></div>
			<div><p>Select Image</p>
			<img src="" width="200" id="output"  style="border: solid 1px;border-color:blue;"/>
			<input type="file" accept="image/*" id="file" onchange="loadFile(event)" name="uploadfile" value="" /></p>
			</div>
			<div><p>
				<button type="submit" name="uploadimg">UPLOAD</button></p>
			</div>
		</form>
	</div>
	
</body>
</html>
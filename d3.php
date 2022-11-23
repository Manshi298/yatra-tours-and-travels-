<?php
	include('connection.php');
	#user_session();
	?>
	<!DOCTYPE HTML>
	<html>
	<head>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">

	<!--<link rel="stylesheet" type="text/css" href="style.css">-->
	</head>
	<body>
	<table><tr><td><h2><a href="a22.php">Back to main page</a> </h2></td></tr></table>
	<?php
		
		$sql="SELECT * 
		FROM package,pkg_day_plans where package.Package_ID=pkg_day_plans.PackageID";
		
		$result=mysqli_query($conn,$sql);
		
	while($data=mysqli_fetch_array($result))
	{
	?>
	
	<div class="rom-btm">
				
				<div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
					<h4>Package Name: <?php echo $data['Package_Name'];?></h4>
					<h6>Dayno : <?php echo $data['Dayno'];?></h6>
					<p><b>Daydate :</b> <?php echo $data['Daydate'];?></p>
					<p><b>Features</b> <?php echo $data['Trip_Desc1'];?></p>
				</div>
				<div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
					
					<a href="a26.php?PackageID=<?php echo $data['Package_ID']; ?>" class="view">Edit</a>
					<a href="a25.php?PackageID=<?php echo $data['Package_ID']; ?>" class="view">Delete</a>
					
				</div>
				<div class="clearfix"></div>
			</div>
	<?php
	}
	?>
	</table>
	</body>
	</html>
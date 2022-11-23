<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Yatra-Tour and Travel Home Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style/SlideStyle.css">
	<style>
	li a:hover, .dropdown:hover .dropbtn {
  background-color: lightyellow;
	}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  font-size:15px;
  position: absolute;
  background-color: #F9E79F;
  min-width: 215px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: maroon;
  padding: 8px 12px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
 .button1
	{
	  background-color:lightyellow;
	  border: dotted;
	  color:blue;
	  padding: 10px 25px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  font-size: 14px;
	  border-radius: 7px;
	  margin-top:10px;
	}
</style>
</head>
<body>
<?php if(isset($_SESSION))
	{
		session_unset();
		session_destroy();
	} ?>
<div><img src="image/logo1.png" vspace=10><u><font color=blue size=50 face='Jazz LET, fantasy'>Yatra - </font><font face='Comic Sans MS, Comic Sans, cursive' size=40 color=green > Tour & Travels</font></u></div>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Travel Tourism</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					
					<li class="dropdown">
						<a href="javascript:void(0)" class="dropbtn">Booking</a>
						<div class="dropdown-content">
						  <a href="login_status.php">Preview Booking updates</a>
						  &nbsp;&nbsp;----------------------------<br>
						  <a href="loginCancel.php">Cancel Booking</a>
								
						</div>
					  </li>
					<li class="active"><a href="PackageGallery.php">Packages Gallary</a></li>
					<li><a href="About_us.php">About Us</a></li>
					<li><a href="contactus.php">Contacts</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right"><li><a href="cust_register1.php"><span class="glyphicon glyphicon-log-in"></span> Registration</a></li>
				
				<ul class="nav navbar-nav navbar-right"><li><a href="login_admin.php"><span class="glyphicon glyphicon-log-in"></span> Admin</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div class="slideshow-container">
		<div class="mySlides fade">
  			<div class="numbertext">1 / 5</div>
  			<img src="SlideImages/1.jpg" style="width:100%">
  			
		</div>

		<div class="mySlides fade">
  			<div class="numbertext">2 / 5</div>
  			<img src="SlideImages/2.jpg" style="width:100%">
  			
		</div>

		<div class="mySlides fade">
  			<div class="numbertext">3 / 5</div>
  			<img src="SlideImages/3.jpg" style="width:100%">
  			
		</div>

		<div class="mySlides fade">
  			<div class="numbertext">4 / 5</div>
  			<img src="SlideImages/4.jpg" style="width:100%">
 
		</div>

		<div class="mySlides fade">
  			<div class="numbertext">5 / 5</div>
  			<img src="SlideImages/5.jpg" style="width:100%">
  		</div>

	</div>
	<br>

	<div style="text-align:center">
  		<span class="dot"></span> 
  		<span class="dot"></span> 
  		<span class="dot"></span> 
  		<span class="dot"></span> 
  		<span class="dot"></span> 
	</div>

	<div class="container-fluid">
		<!-- For Slide bar  -->
		<div class="row content">
			<div class="col-sm-3 sidnav"><h4>Seasons</h4>
				<ul class="nav nav-pills nav-stacked">
					<li><a href="index.php?tourtype='Best selling'">BEST SELLING PACKAGE</a></li>
					<li><a href="index.php?tourtype='Family tour'">FAMILY PACKAGES</a></li>
					<li><a href="index.php?tourtype='Special'">SPECIAL PACKAGES</a></li>
					<li><a href="index.php?tourtype='Pilgrimage'">PILGRIMAGE & HERITAGE PACKAGE</a></li>
					<li><a href="index.php?tourtype='Short breaks'">SHORT BREAKS PACKEGE</a></li>
					<li><a href="index.php?tourtype='Honeymoon'">HONEYMOON PACKAGE</a></li>
					<li><a href="index.php?tourtype='Luxury holidays'">LUXURY HOLIDAYS PACKAGE</a></li>
					<li><a href="index.php?tourtype='Lost in nature'">LOST IN NATURE PACKAGE</a></li>
					<li><a href="index.php?tourtype='Weekend gateway'#">WEEKEND GETAWAY  PACKAGE</a></li>
					
				</ul><br>
				<h4>PLACE</h4>
				<ul class="nav nav-pills nav-stacked">
					<li><a href="index.php?place=Kashmir">KASHMIR</a></li>
					<li><a href="index.php?place=Kerala">KERALA</a></li>
					<li><a href="index.php?place=Rajasthan">RAJASTHAN</a></li>
					<li><a href="index.php?place=Mussoorie">MUSSOORIE</a></li>
					



				</ul><br>
				<h5>choose one season..</h5>
			</div>
		<!-- For Slide bar  -->
			<div class="col-sm-9">
		<!-- Row wise package view  -->
				<h2>Our Tour Packages&nbsp;&nbsp;<label id="choice"></label></h2>
				<?php
					include "connection.php";

					$countpic=1;
		
					if(isset($_GET["tourtype"]))
					{
						$tourtype=$_GET['tourtype'];
						
						$sql = "SELECT Package.Package_id,Package_name,Image_path,place ";
						$sql=$sql. " FROM Package,pkg_images where Package.Package_id=pkg_images.Package_id and Tour_type=".$tourtype;
						
						echo "<script language=javascript>document.getElementById('choice').innerHTML=".$tourtype ."</script>";
						
					}
					else if(isset($_GET["place"]))
					{	
						$place=$_GET['place'];
						$sql = "SELECT Package.Package_id,Package_name,Image_path,place ";
						$sql=$sql. " FROM Package,pkg_images where Package.Package_id=pkg_images.Package_id and Package.place like '%". $place ."%'";
						echo "<script language=javascript>document.getElementById('choice').innerHTML= ' - ".$place ."'</script>";
					}
					else
					{
						$sql = "SELECT Package.Package_id,Package_name,Image_path,place ";
						$sql=$sql. " FROM Package,pkg_images where Package.Package_ID=pkg_images.Package_ID";
						echo "<script language=javascript>document.getElementById('choice').innerHTML=''</script>";
					}
					
					$tableResults = mysqli_query($conn,$sql);
					
					$pkgCnt = 1;
					echo "<div class='container-fluid bg-3 text-center'>    
  								      <div class='row'>";
					while($row = mysqli_fetch_row($tableResults)){
							//$strImgs = explode(",", $row[2]);
							echo "<form action='viewpkgdetails.php' method='POST'>";
							echo "        <div class='col-sm-3' style='height:320px'>
							
								              <input type=image src='".$row[2]."' class='img-responsive' style='width:100%;height:160px' alt='Image'>
								              <p>".$row[1]."</p>
											  <p>".$row[3]."</p>
											  <input type=hidden name='Package_ID' value=".$row[0].">
								              <button class='button1' type=submit><a href='#'>Show more..</a></button>
							
								       </div>";
							echo "</form>";
						if($pkgCnt%4 == 0){
							echo "	  </div>
								  </div><br><br>";
							echo "<div class='container-fluid bg-3 text-center'>    
  								      <div class='row'>";
						}
						$pkgCnt += 1;
					}
					echo "	          </div>
								  </div><br><br>";
				?>
			</div>
			<!-- Row wise package view  -->
		</div>
	</div>
	<footer class="container-fluid text-center"><p>@ Yatra - Tours & Travels</p></footer>
</body>
<script type="text/javascript" src="JS/SlideJS.js"></script>
</html>
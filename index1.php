<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="Assets/Style/SlideStyle1.css">
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand"href="#">Travel Tourism</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="pkgImgEntityView.php">Packages</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Contact US</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right"><li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- <div class="jumbotron">
		<div class="container text-center">
		<div class="w3-content w3-section" style="max-width:600px">
	  			<img class="mySlides w3-animate-left" src="SlideImages/1.jpg" style="width:100%">
	  			<img class="mySlides w3-animate-left" src="SlideImages/2.jpg" style="width:100%">
	    		<img class="mySlides w3-animate-left" src="SlideImages/3.jpg" style="width:100%">
	    		<img class="mySlides w3-animate-left" src="SlideImages/4.jpg" style="width:100%">
	    		<img class="mySlides w3-animate-left" src="SlideImages/5.jpg" style="width:100%">
			</div>
		</div>
	</div> -->


	<div class="slideshow-container">
		<div class="mySlides fade">
  			<div class="numbertext">1 / 3</div>
  			<img src="SlideImages/1.jpg" style="width:100%">
  			<div class="text">Caption Text</div>
		</div>

		<div class="mySlides fade">
  			<div class="numbertext">2 / 3</div>
  			<img src="SlideImages/2.jpg" style="width:100%">
  			<div class="text">Caption Two</div>
		</div>

		<div class="mySlides fade">
  			<div class="numbertext">3 / 3</div>
  			<img src="SlideImages/3.jpg" style="width:100%">
  			<div class="text">Caption Three</div>
		</div>

		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>
	<br>

	<div style="text-align:center">
  		<span class="dot" onclick="currentSlide(1)"></span> 
  		<span class="dot" onclick="currentSlide(2)"></span> 
  		<span class="dot" onclick="currentSlide(3)"></span> 
	</div>

	<div class="container-fluid">
		<!-- For Slide bar  -->
		<div class="row content">
			<div class="col-sm-3 sidnav"><h4>Various Package</h4>
				<ul class="nav nav-pills nav-stacked">
					<li><a href="#">BEST SELLING PACKAGE</a></li>
					<li><a href="#">FAMILY PACKAGES</a></li>
					<li><a href="#">SPECIAL PACKAGES</a></li>
					<li><a href="#">PILGRIMAGE & HERITAGE PACKAGE</a></li>
					<li><a href="#">SHORT BREAKS PACKEGE</a></li>
					<li><a href="#">HONEYMOON PACKAGE</a></li>
					<li><a href="#">HONEYMOON PACKAGE</a></li>
					<li><a href="#">LUXURY HOLIDAYS PACKAGE</a></li>
					<li><a href="#">LOST IN NATURE PACKAGE</a></li>
					<li><a href="#">WEEKEND GETAWAY  PACKAGE</a></li>
					<li><a href="#">WEEKEND GETAWAY  PACKAGE</a></li>



				</ul><br>
				<h4>PLACE</h4>
				<ul class="nav nav-pills nav-stacked">
					<li><a href="#">KASHMIR</a></li>
					<li><a href="#">KERALA</a></li>
					<li><a href="#">RAJASTHAN</a></li>
					<li><a href="#">MUSSOORIE</a></li>
					



				</ul>
				<h5>choose one package</h5>
			</div>
	<div class="container-fluid">
		<!-- For Slide bar  -->
		<div class="row content">
			<!-- <div class="col-sm-3 sidnav"><h4>PLACE</h4>
				<ul class="nav nav-pills nav-stacked">
					<li><a href="#">KASHMIR</a></li>
					<li><a href="#">KERALA</a></li>
					<li><a href="#">RAJASTHAN</a></li>
					<li><a href="#">MUSSOORIE</a></li>
					



				</ul><br>
				<h5>choose one package</h5>
			</div> -->
		<!-- For Slide bar  -->
			<div class="col-sm-9">
		<!-- Row wise package view  -->
				<h2>Our Tour Packages</h2>
				<?php
					include "connectDB.php";

					$query = "SELECT * FROM pkg_images";
					$tableResults = mysqli_query($connect_db,$query);

					$pkgCnt = 1;
					echo "<div class='container-fluid bg-3 text-center'>    
  								      <div class='row'>";
					while($row = mysqli_fetch_row($tableResults)){
							$strImgs = explode(",", $row[2]);
							echo "        <div class='col-sm-3'>
								              <img src='".$strImgs[0]."' class='img-responsive' style='width:100%'' alt='Image'>
								              <p>".$row[3]."</p><br>
								              <a href='#'>show more..</a>
								       </div>";

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
	<footer class="container-fluid text-center"><p>All Copyright Reserved Under @ Travel Tourism</p></footer>
</body>
<script type="text/javascript" src="JS/SlideJS1.js"></script>

</html>
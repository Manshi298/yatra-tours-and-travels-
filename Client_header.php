<?php if(!isset($_SESSION)) session_start();?>
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
				<ul class="nav navbar-nav navbar-right"><li><a href="cust_register1.php"><span class="glyphicon glyphicon-log-in"></span>Registration</a></li>
				
				<ul class="nav navbar-nav navbar-right"><li><a href="login_admin.php"><span class="glyphicon glyphicon-log-in"></span> Admin</a></li>
				</ul>
			</div>
		</div>
	</nav>
</div>
</body>
</html>
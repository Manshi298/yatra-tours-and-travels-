<!DOCTYPE html>
<html>
<head>


<link rel="stylesheet" href="admin_header_css.css">

</head>
<body>

<div class="header">
<div>
  <p id="bordering"><img src="image/logo1.png" ><font face="Verdana" color=#F4D03F size=8>Yatra - Tour And Travels - </font><font face="Brush Script MT" color=#E8DAEF size=6> Admin Panel</font></p>
  </div>
</div>
<div>
  <ul>
  <li><a href="Admin_Panel.php">Home</a></li>
  <li><a href="BookingStatus">Update Booking Status</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Package</a>
    <div class="dropdown-content">
      <a href="package.php">Package-information</a>
      <a href="a22.php">Package-day plans</a>
      <a href="PkgTransportCost.php">Package-costs</a>
	  <a href="image_upload.php">Package-Images Upload</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Reports preview</a>
    <div class="dropdown-content">
      <a href="#">Package wise booking</a>
      <a href="#">Date wise Booking</a>
	  &nbsp;&nbsp;&nbsp;---------------------------<br>
      <a href="#">Place wise packages</a>
	  <a href="#">Type wise packages</a>
    </div>
  </li>
  <li>
  <?php session_start();
		if(isset($_SESSION))
			
			echo "<li><a href='logout.php'>Logout</a></li>";
		else
			echo "<li><a href=''></a></li>";
		?>
		</li>
</ul>
  </div>
</body>
</html>  


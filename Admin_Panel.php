<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  padding: 4px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 2px;
  text-align: center;
  background: #5D6D7E ;
}

.header h1 {
  font-size: 50px;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #76D7C4;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #B03A2E;
  text-align: center;
  padding: 6px 14px;
  text-decoration: none;
  font-family: 'Trebuchet MS', sans-serif;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  background-color: #f1f1f1;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 10px;
}

/* Add a card effect for articles */
.card {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}
#bordering { 
  border: 10px solid transparent;
  padding: 15px;
  border-image: url(borders-png-39741.png) 58 round;
}
p.groove {border-style: groove;}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #82E0AA ;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: maroon;
  font-size:13px;
  text-align: center;
  padding: 10px 12px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: #3498DB;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  font-size:13px;
  position: absolute;
  background-color: #F9E79F;
  min-width: 160px;
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

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
<div>
  <h1 id="bordering"><img src="image/logo1.png"><I><font face="Verdana" color=#F4D03F>Yatra Tour And Travels - </font></I><font face="Brush Script MT" color=#E8DAEF> Admin Panel</font></h1>
  </div>
</div>
<div>
  <ul>
  <li><a href="Admin_Panel.php">Home</a></li>
  <li><a href="BookingStatus.php">Update Booking Status</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Package</a>
    <div class="dropdown-content">
      <a href="Package.php">Package-information</a>
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
  <?php 
		/*if(!isset($_SESSION)) session_start();
		if(isset($_SESSION))*/
			
			echo "<li><a href='logout.php'>Logout</a></li>";
		/*else
			echo "<li><a href=''></a></li>";
		?>*/
		?>
		</li>
</ul>
  </div>
  
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>Welcome to Admin Panel</h2>
      <h5>You are now able to do several administrative activities for this site</h5>
      
	  <p>This admin panel lets you to do several administrative activities such as inclusion new Package details,updation of booking status, view of various analysis reports etc.</p>
      <p align=center><img src="image/admin_text.jpg" height=400 width=600></p>
    </div>
	
   </div>
   
  <div class="rightcolumn">
    <div class="card">
      <h2></h2>
      <div class="fakeimg" style="height:100px;"><img src="image/admin_login.jpg"></div>
      <p></p>
    </div>
    <div class="card">
      <h3>Popular sites</h3>
      <div class="fakeimg"><img src="image/KBSP_IMG_1.png"></div>
      
    </div>
    
  </div>
</div>

<div class="footer">
  <h3>copyright@Yatra 2021</h3>
</div>

</body>
</html>

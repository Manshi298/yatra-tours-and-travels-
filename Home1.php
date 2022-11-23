<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="homestyle.css">
</style>
</head>
<body>

<h2>Hawai Tourism</h2>
<div class="navbar">
  <a href="#home">Home</a>
  <a href="#news">News</a>
  <div class="dropdown">
    <button class="dropbtn">Dropdown 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div> 
</div>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="image/7.jpg" style="width:100%;height:300px">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="image/bb1.jpg" style="width:100%;height:300px">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="image/reg_image.jpg" style="width:100%;height:300px">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<div class="sidenav">
  <a href="Home1.php?tourtype=Holidays">Holidays</a>
  <a href="Home1.php?tourtype=Summer">Summer days</a>
  <a href="Home1.php?tourtype=Monsoon">Monsoon refreshment</a>
  <a href="Home1.php?tourtype=Puja Holidays">Puja Holidays</a>
  <a href="Home1.php?tourtype=Honeymoon">Honeymoon Package</a>
  <button class="dropdown-btn">Select Zone
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
	<button class="dropdown-btn">Domestic
    <i class="fa fa-caret-down"></i>
  </button>
	<div class="dropdown-container">
    <a href="Home1.php?place=Uttar Pradesh">Uttar Pradesh</a>
    <a href="Home1.php?place=North Bengal">North Bengal</a>
    <a href="Home1.php?place=Gujrat">Gujrat</a>
  </div>
  <a href="Home1.php?place=International">International</a>
  </div>
</div>

<div class="main">
	<table width=80 cellspacing=10 border=1>
	
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
		$countpic=1;
		
		if(isset($_GET["tourtype"]))
		{
			$tourtype=$_GET['tourtype'];
		
			$sql = "SELECT Package.Package_id,Package_name, Package_Desc, Place,Startdate,Enddate,Full_pkg_rate,Image_path ";
			$sql=$sql. " FROM Package,pkg_images where Package.Package_id=pkg_images.Package_id and Tour_type='".$tourtype ."'";
		}
		else if(isset($_GET["place"]))
		{	
			$place=$_GET['place'];
			$sql = "SELECT Package.Package_id,Package_name, Package_Desc, Place,Startdate,Enddate,Full_pkg_rate,Image_path ";
			$sql=$sql. " FROM Package,pkg_images where Package.Package_id=pkg_images.Package_id and Package.place='". $place ."'";
		}
		else
		{
			$sql = "SELECT Package.Package_id,Package_name, Package_Desc, Place,Startdate,Enddate,Full_pkg_rate,Image_path ";
			$sql=$sql. " FROM Package,pkg_images where Package.Package_id=pkg_images.Package_id";
		}
		//echo $sql;
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0)   //if record exists
		{
			// output data of each row
			while($row = $result->fetch_assoc()) 
			{
				if ($countpic>4)
				{
					$countpic=1;
					echo "</tr>";
					echo "<tr>";
				}
				echo "<td>";
				echo "<Form action=# method=post>";
				echo "<input type=image src='".$row["Image_path"] . "' height=100 width=255 ><br><br>";
				echo  $row["Package_name"]. "<br>";
				echo  $row["Package_Desc"]	."<br>Place :  " . $row["Place"] ."<br>";
				$date1=date_create_from_format("Y-m-d",$row["Startdate"]);
				$date2=date_create_from_format("Y-m-d",$row["Enddate"]);
				echo "Duration : ". date_format($date1,"d/m/Y"). "    To    " . date_format($date2,"d/m/Y"). "<br>";
				echo "Cost per head : Rs. ".$row["Full_pkg_rate"];
				echo "<input type=hidden value=".$row["Package_id"]. "><br>";
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

</div>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>

</body>
</html> 

<html>
<head>
<style>
* {
  box-sizing: border-box;
}
body {
  margin: 1;
  font-family: Arial, Helvetica, sans-serif;	
  background-color: #ffd699;
}

p {
  color: maroon;
  font-size: 14px;
} 
/* Style the side navigation */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #a9a9a9;
  overflow-x: hidden;
}
/* Side navigation links */
.sidenav a {
  color: white;
  padding: 16px;
  text-decoration: none;
  display: block;
}
/* Change color on hover */
.sidenav a:hover {
  background-color: black;
  color: white;
}

/* Style the content 
.content 
  background-color: Orange;
  height: 600px;
  width: 630px;
  padding: 1px;
  /*margin-left: 200px;
  padding-left: 20px;*/
}
}
/* Change color on hover */
.content a:hover {
  background-color: Orange;
  color: Orange;
}
div {
  border-radius: 1px;
  background-color: #e4c49b;
  height: 600px;
  width: 630px;
  padding: 1px; 
}
input[type=text], select {
  width: 40%;
  padding: 5px 5px;
  margin: 5px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 2px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 30%;
  background-color: #4CAF50;
  color: white;
  padding: 6px 6px;
  margin: 5px 0;
  border: none;
  border-radius: 2px;
  cursor: pointer;
}
</style>
</head>
<body><center>
<body><center>
<div class="sidenav">
  <a href="PkgTransportCost.php">Go to Previous Page</a>
</div>
<div class="content">
<form action="input2.php" method="post">
      <p><b>Package Name:</p>
<?php
    include('connection.php');
    $result3=mysqli_query($conn,"select * from package");
	$total3=mysqli_num_rows($result3);
	if($total3!=0)
	{
		echo "<select name='Package_Name' required><option value=''>----select----</option>";
		  while($row=mysqli_fetch_assoc($result3))
		  {
			  echo "<option value='".$row['Package_Name']."'>".$row['Package_Name']."</option>";
			  $pkgId=$row['Package_ID'];
		  }
		  echo "</select><br>";
    }		  
?>
	  <input type="submit" name="submit" value='GO' />
</form></div><center>
</body></html>
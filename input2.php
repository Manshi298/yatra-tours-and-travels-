<html lang="en">
<head>
<style>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
  width: 300px;
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
  background-color: #e4c49b;
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

<body>
<center>
<div class="sidenav">
  <a href="PkgTransportCost.php">Go to Main Page</a>
  <a href="input1.php">Go to Previous Page</a>
  <p>-------------------------------------</p>
  <p><img src="image/vacation_package.jpg"></p>
</div>
<div class="content">
<form action="connection1.php" method="post">
      <p><b>Package Name:</p>
<input type="text" name="Package_Name" value="<?php echo $_POST['Package_Name']?>" readonly />
<p>Package ID:</p> 
<?php 
	include('connection.php');
    $result=mysqli_query($conn,"select Package_ID from package where Package_Name='".$_POST['Package_Name']."'");
	$row=mysqli_fetch_assoc($result);
	$pkgId=$row['Package_ID'];
	echo "<input type='text' name='Package_ID' value='".$pkgId."' readonly />"		   
?>
      <p>Transport By:</p> <input type="text" name="TransportBy" required />
      <p>Source Transport By:</p> <input type="text" name="SourceTransportBy" required />
      <p>Destination Transport By:</p> <input type="text" name="DestiTransportBy" required />
      <p>Adult Rate:</p> <input type="text" name="AdultRate" required />
      <p>Infant Rate:</p> <input type="text" name="InfantRate" required /></b><br>
	  <input type="submit" name="submit" value='INSERT' />
</form></div><center>
</body></html>

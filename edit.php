<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
body {
  margin: 1;
  font-family: Arial, Helvetica, sans-serif;	
  background-color: LightGray;
}
p {
  color: #785807;
  font-size: 13px;
} 
/* Style the side navigation */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #808080;
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
  background-color: #556b2f;
  height: 600px;
  width: 630px;
  padding: 1px;
  /*margin-left: 200px;
  padding-left: 20px;*/
}
}
/* Change color on hover */
.content a:hover {
  background-color: #556b2f;
  color: #556b2f;
}
div {
  border-radius: 1px;
  background-color: #a4c171;
  height: 590px;
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
  width: 40%;
  background-color: #4CAF50;
  color: white;
  padding: 5px 5px;
  margin: 5px 0;
  border: none;
  border-radius: 2px;
  cursor: pointer;
}
</style>
</head>
<body><center>
<div class="sidenav">
  <a href="PkgTransportCost.php">Go to Main Page</a>
  <a href="connection1.php">Go to Report View</a>
</div>
<div class="content">
<form action="connection1.php" method="POST">
<?php
$PkgID=$_POST['Package_ID'];
$PkgName=$_POST['Package_Name'];
?>
      <p><b>Package Name:</p><input type='text' name='Package_Name' value='<?php echo $PkgName ?>' readonly />
      <p>Package ID:</p><input type='text' name='PackageID' value='<?php echo $PkgID ?>' readonly />
      <p>Transport By:</p> <input type="text" name="TransportBy" required />
      <p>Source Transport By:</p> <input type="text" name="SourceTransportBy" required />
      <p>Destination Transport By:</p> <input type="text" name="DestiTransportBy" required />
      <p>Adult Rate:</p> <input type="text" name="AdultRate" required />
      <p>Infant Rate:</b></p> <input type="text" name="InfantRate" required /><br>
	  <input type="submit" name="submit" value='UPDATE' /></center>
</form>
</div>
</center>
</body>
</html>
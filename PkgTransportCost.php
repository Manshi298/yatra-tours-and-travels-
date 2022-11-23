<html>
<head>
<style>
body, html {
  height: 95%;
  margin: 5;
}

.bg {
  /* The image used */
  background-image: url("image/transport1.jpg");
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: top;
  background-repeat: no-repeat;
  background-size: 1400px 560px;
}
p
{
	color: red;
} select {
      border-radius:5px;
	  width: 40%;
	  padding: 8px 10px;
	  border: solid;
	  border-color:purple;	
	  background-color: #f1f1f1;
	  }
	  
	 input[type=submit] 
	{
	  background-color:lightyellow;
	  border: solid;
	  color:purple;
	  padding: 10px 25px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  font-size: 14px;
	  border-radius: 4px;
	  
	}
</style>
</head>

<?php
	include "connection.php";
	include "admin_header.php"; ?>
<body>
<div class="bg">
<center><h1><b><u>Package Transport Cost</u><b></h1></center>
<form action="input1.php" method="post">
<input type="submit" name="submit" value='INSERT' />
</form>
<form action="connection1.php" method="post">
<label for="lname">Package Name:</label>
<?php
    
    $result3=mysqli_query($conn,"select * from package");
	$total3=mysqli_num_rows($result3);
	if($total3!=0)
	{
		echo "<select name='PackageName' required><option value=''>----select----</option>";
		  while($row=mysqli_fetch_assoc($result3))
		  {
			  echo "<option value='".$row['Package_Name']."'>".$row['Package_Name']."</option>";
			  $pkgId=$row['Package_ID'];
		  }
		  echo "</select>";
    }		  
?>
<input type="submit" name="submit" value='VIEW PARTICULAR RECORD' />
<input type="submit" name="submit" value='DELETE' />
</form>
<form action="connection1.php" method="post">
<input type="submit" name="submit" value='REPORT VIEW' />
</form>
<?php
if($_GET){
        echo "<p>".$_GET['NotFound']."</p>";       
    }
?>
</div>
</form>
</body>
</html>
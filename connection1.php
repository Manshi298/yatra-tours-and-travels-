<?php
 //include "admin_header.php"; 
function Insert()
{    
	error_reporting(0);
	include("input2.php");

    include('connection.php');
	  $P=$_POST["Package_Name"];
	  $pkgId=$_POST["Package_ID"];
	  $result="INSERT INTO pkg_transport_cost VALUES(".$pkgId.",'".$_POST["TransportBy"]."','".$_POST["SourceTransportBy"]."','".$_POST["DestiTransportBy"]."','".$_POST["AdultRate"]."','".$_POST["InfantRate"]."')";
      $row=mysqli_query($conn,$result);
	  ?>		  
    	<html>
           <head>
           <style>
                   h2 {
                       background-color: yellow;
                     }
           </style>
          </head><body>
<?php	
      if(!$row) 
      {	  
         echo "<b><h2><font color='red'>Record does not inserted.</font></h2></b>";
      }     
      else 
      {
         echo "<b><h2><font color='green'>Record Inserted successfully.</font></p>";
      }
    $conn->close();
}
function Display()//view particular record
{
	error_reporting(0);
   include('connection.php'); ?>
	<html>
		<head>
		<style>
        body {
               background-color:  #fff5e6;
             }

        h1 {
             color: Chocolate;
             text-align: center;
           }

        p {
            font-family: verdana;
            font-size: 20px;
          }

        div {
              background-color: AntiqueWhite;
              width: 370px;
              border: 16px solid BurlyWood;
              padding: 50px;
              margin: 20px;
            }
        </style>
		</head><?php
    $PackageName=$_POST['PackageName'];
    $result=mysqli_query($conn,"select * from package p,pkg_transport_cost pc where p.Package_ID=pc.PackageID and Package_Name='".$PackageName."'");
	$row=mysqli_fetch_assoc($result);
	if ($row) 
	{    echo "<center><div><h1><b><i><u>".$PackageName."</u></i><b></h1>";          
         echo "<p><br>PackageID:  ".$row["PackageID"]."<br><br>Transport By:  ".$row["Transport_By"]."<br><br>Source Transport By:  ".$row["Source_transport_By"]."<br><br>Destination Transport By:  ".$row["Desti_transport_By"]."<br><br>Adult Rate:  ".$row["Adult_Rate"]."<br><br>Infant Rate:  ".$row["Infant_Rate"]."</p></div></center>";
    }
    else 
	{
	 $NotFound="No Records Found for Package Name ".$PackageName."";	
	 header("Location:PkgTransportCost.php?NotFound=".$NotFound);	
    }
	echo "<br><center><a target='_blank' href='pkgTransportCost.php'>Click here Go to Main Page</a></center>";
	$conn->close();  
	?></html><?php
}
function Display1()//view all records
{
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
  background-color: #f1f1f1;
  padding: 20px;
  text-align: center;
}
/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}
/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
}
</style>
</head>
<body>
<?php include "admin_header.php";  ?>
<div class="header">
  <h2>Report View</h2>
  <p>All the Available records of Package Transport Cost</p>
  <div class="topnav">
  <a href="PkgTransportCost.php">Go to Main Page</a>
</div>
</div>
<div class="row">
  <div class="column">
<?php
error_reporting(0);
    include('connection.php');
    $result=mysqli_query($conn,"select * from package p,pkg_transport_cost pc where p.Package_ID=pc.PackageID");
	$total=mysqli_num_rows($result);
	if($total!=0)
	{
		?>
		<html>
		<head>
		<style>
        body {
               background-color: LightGray;
             }

        h1 {
             color: green;
             text-align: center;
           }

        p {
            font-family: verdana;
            font-size: 20px;
          }
        </style>
		</head>
		<table id="customers" bgcolor="#fffaf0">
		   <tr align="center">
		      <th>Package Name</th>
		      <th>Transport By</th>
			  <th>Source</th>
			  <th>Destination</th>
			  <th>Adult Rate</th>
			  <th>Infant Rate</th>
		   </tr> 
		<?php
		  while($row=mysqli_fetch_assoc($result))
		  {
			  $PkgID=$row['PackageID'];
		   echo "<tr align='center'><form action='edit.php' method='post'>
		             <td><input type='text' name='Package_Name' value='".$row['Package_Name']."' readonly  width=900/>
					 <input type='hidden' name='Package_ID' value='".$row['Package_ID']."' readonly  width=900/></td>
		             <td>".$row['Transport_By']."</td>
					 <td>".$row['Source_transport_By']."</td>
					 <td>".$row['Desti_transport_By']."</td>
					 <td>".$row['Adult_Rate']."</td>
					 <td>".$row['Infant_Rate']."</td>
					 <td><input type='submit' name='submit' value='EDIT' /><td></form>
		         </tr>";
		  }
	}
	else
	{
		echo "<p>No Record Found</p>";
	}
    ?></table>
	</div>
	</div></body></html>
<?php
	$conn->close();	
}
function Delete()
{   
	error_reporting(0);
    include('connection.php');  
      $PackageName=$_POST['PackageName'];
	  $query="delete from pkg_transport_cost where PackageID=(select Package_ID from package where Package_Name='".$PackageName."')";
	  $data=mysqli_query($conn,$query);
	  if($data)
	   { 
   ?>    <html>
          <head>
           <style>
               div {
                       background-color: yellow;
                     }
           </style>
          </head><body>
	<?php	 echo "<br><div><b><font color='green'>Record Deleted Successfully.</b></p></div>";
	   }
	  else
	   {
		echo "<br><div><p><b><font color='red'>Sorry,Delete Process Failed.</b></p></div></body></html>";
	   }
	$conn->close();
}
function Update()
{
	error_reporting(0);
	include("edit.php");
    include('connection.php');
	$PkgID=$_POST['PackageID'];
	$TransportBy=$_POST['TransportBy'];
	$SourceTransportBy=$_POST['SourceTransportBy'];
	$DestiTransportBy=$_POST['DestiTransportBy'];
	$AdultRate=$_POST['AdultRate'];
	$InfantRate=$_POST['InfantRate'];
	$query="update pkg_transport_cost set Transport_By='".$TransportBy."',Source_transport_By='".$SourceTransportBy."',Desti_transport_By='".$DestiTransportBy."',Adult_Rate='".$AdultRate."',Infant_Rate='".$InfantRate."' where PackageID=".$PkgID."";
	  $data=mysqli_query($conn,$query);
?>    <html>
           <head>
           <style>
                   h2 {
                       background-color: yellow;
                     }
           </style>
          </head><body>
<?php
	  if($data)
	   {	
		 echo "<b><center><h2><font color='green'>Record Updated Successfully.</font></h2></center></b>";
	   }
	  else
	   {
		echo "<b><center><h2><font color='red'>Sorry,Update Process Failed.</font></h2></center></b></body></html>";
	   }
	$conn->close();
}
if($_REQUEST['submit']=="VIEW PARTICULAR RECORD")
{
	Display();
}
else if($_REQUEST['submit']=="REPORT VIEW")
{
	Display1();
}
else if($_REQUEST['submit']=="INSERT")
{
	Insert();
}
else if($_REQUEST['submit']=="DELETE")
{
	?>
<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Float cancel and delete buttons and add an equal width */
.cancelbtn, .deletebtn {
  float: left;
  width: 50%;
}

/* Add a color to the cancel button */
.cancelbtn {
  background-color: #ccc;
  color: black;
}

/* Add a color to the delete button */
.deletebtn {
  background-color: #f44336;
}

/* Add padding and center-align text to the container */
.container {
  padding: 16px;
  text-align: center;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Modal Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and delete button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .deletebtn {
     width: 100%;
  }
}
</style>
<head>
</head>
<body>


<?php
include("PkgTransportCost.php");
?>
<button onclick="document.getElementById('id01').style.display='block'">Want to Delete?</button>
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-content" action="">
    <div class="container">
	  <h2>Delete Transport Cost Details</h2>
      <p>Are you sure you want to delete?</p>	
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
		<?php
             $PackageName=$_POST['PackageName'];
			 echo " <a href='Delete_TransportCost.php?PackageName=".$PackageName."'>
		<button id='gid' type='button' class='deletebtn'>Delete</button>
</a>" ?> </form>
      </div>
    </div>
  </form>
</div>

<script>
//get the model
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
} 
</script>
</body>
</html>
<?php
}
else if($_REQUEST['submit']=="UPDATE")
{
	Update();
}	
?>
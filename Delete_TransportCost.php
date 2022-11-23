<?php
    error_reporting(0);
    require 'PkgTransportCost.php'; 
    $servername='localhost';
    $username='root';
    $password='';
    $dbname="tourism";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn)
    {
	   die('Could not Connect My Sql:'.mysqli_connect_error());
    }
    else
    {
       //echo "Connection successful";
    }  
	  $PackageName=$_GET['PackageName'];
	  $query="delete from pkg_transport_cost where PackageID=(select Package_ID from package where Package_Name='".$PackageName."')";
	  $data=mysqli_query($conn,$query);
	  ?>
	   <html>
          <head>
           <style>
               div {
                       background-color: yellow;
                     }
           </style>
          </head><body>
	  <?php
	  if($data)
	   { 
          echo "<br><br><div><b><font color='green'>Record Deleted Successfully.<br><br></b></p></div>";
	   }
	  else
	   {
		echo "<br><div><p><b><font color='red'>Sorry,Delete Process Failed.</b></p></div></body></html>";
	   }
	$conn->close();
	?>

<html>
<head>
    <title> Login Form for cencel booking </title>
    <link rel="stylesheet" type="text/css" href="style3.css">   
</head>

    <body>
	<!--?php include "client_header.php" ?-->
	
    <div class="login-box">
    <img src="image/avatar.png" class="avatar">
        <h1>Login For Cancel Booking</h1>
            <form action="" method="post">
            <p>Userid</p>
            <input type="text" name="User_Id" placeholder="Enter Userid" required>
            <p>Password</p>
            <input type="password" name="Password" placeholder="Enter Password" required>
			<p>Booking No</p>
            <input type="text" name="Booking_No" placeholder="Enter Booking No" required>
            <input type="submit" name="Login" value="Login">
            <a href="password.php">Forget Password</a>    
            </form>
<?php
    if(isset($_POST['Login']))
    { 
		error_reporting(0);
          include "connection.php";
          $userid=$_POST['User_Id'];
		  $BookingNo=$_POST['Booking_No'];
          $result=mysqli_query($conn,"select * from customer_master c,booking b,package p where c.User_ID=b.User_id and b.PackageID=p.Package_ID and b.Booking_No='" .$BookingNo ."' and c.User_ID='".$userid."'");
          $row=mysqli_fetch_assoc($result);
        if($_POST['User_Id']==$row['User_ID'] && $_POST['Password']==$row['Password'])
        {  if($row['Booking_Status']=='Canceled')
			{
			   echo "<br><h2 style='background-color:Tomato;'>You have already Canceled.</h2><br>";	
			}
			else
			{
				$BookingNo=$row['Booking_No']; 
                $UserID=$row['User_ID'];
                $PackageID=$row['Package_ID'];
                $PackageName=$row['Package_Name'];		   
	            header("Location:BookCancel.php?BookingNo=".$BookingNo."&UserID=".$UserID."&PackageID=".$PackageID."&PackageName=".$PackageName);
			}
        }
	    else
	    {
		    echo "<br><h2 style='background-color:Tomato;'>Either UserId or Password is Invalid</h2><br>";
	    }
	}		
?>        
        </div>
    
    </body>
</html>

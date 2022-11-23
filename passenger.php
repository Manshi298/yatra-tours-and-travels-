<?php include "Client_header.php"; ?>
<HTML>
<HEAD><TITLE>Package Tour Booking</TITLE>
	<STYLE TYPE="text/css">
	.header	
	{
	  background-color: White;
	  border: none;
	  color: Red;
	  padding: 5px 16px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  font-size: 28px;
	  width:100%;
	  font-family:Castellar;
	}
	body{
	    background-image: url("image/trip.jpg");
		background-position:center;
		background-size:cover;
		margin:0;
		}
	.main{ 
	     background-color:rgba(246,230,120,0.5);
		 width:1000px;
		 margin:auto;
		 color:black;
		 border:solid 2px;
		 border-color:black;
		 border-radius:12px;
	     }
	     
   #para1 
	{
	  text-align: center;
	  font-size:16px;
	  font-family:arial;
	  background-color: none;
	  border-style: dotted dashed;
	  width: 80%;
	  border: none;
	  border-radius: 5px;
	  color:black;
	}
  input[type=text] 
	{
	  border-radius:5px;
	  width: 98%;
	  height:30px;
	  
	}
    textarea
	{
	  border-radius:5px;
	  width: 80%;
	 }	
	number
	{
		border-radius:5px;
	  width: 90%;
	  height:30px;
	}
	
select {
      border-radius: 4px;
	  width: 95%;
	  padding: 8px 20px;
	  border: solid 1px;
	  border-color:black;
	  background-color: white;
	  }	
   #emid{
  border-radius: 4px;
  width: 50%;
  height:30px;
	  }
   #pass {
   border-radius: 4px;
   width: 25%;
   height:30px;
	  } 
.button1
	{
	  background-color:teal;
	  border: none;
	  color: white;
	  padding: 15px 32px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  font-size: 16px;
	  border-radius: 4px;
	  
	}
option{
  font-size:12px;
}  
	
	</STYLE>
	</HEAD>
<BODY>
<?php

if(isset($_POST['booknow']))
{
	$Booking_No=$_POST['Booking_No'];
	$Booking_Date=$_POST['Booking_Date'];
	$User_ID=$_POST['User_ID'];
	$Contact_no=$_POST['Contact_no'];
	$Package_Name=$_POST['Package_Name'];
	$Package_ID=$_POST['Package_ID'];
	$Adult_Rate=$_POST['Adult_Rate'];
	$No_of_Adult=$_POST['No_of_Adult'];
	$Adult_Cost=$_POST['Adult_Cost'];
	$Infant_Rate=$_POST['Infant_Rate'];
	$No_of_Infants=$_POST['No_of_Infants'];
	$Infant_Cost=$_POST['Infant_Cost'];
	$Total_Pkg_Cost=$_POST['Total_Pkg_Cost'];
	$Booking_Status=$_POST['Booking_Status'];
	//array created for storing booking info
  $booking_data = [
    ["Booking_No" =>  $Booking_No, "Booking_Date" => $Booking_Date,"User_ID"=>$User_ID,"Email_ID"=>$User_ID,"Contact_no"=>$Contact_no,
	"Package_ID"=>$Package_ID,"No_of_Adult"=>$No_of_Adult,"No_of_Infants"=>$No_of_Infants,"Adult_Rate"=>$Adult_Rate,
	"Infant_Rate"=>$Infant_Rate,"Total_Pkg_Cost"=>$Total_Pkg_Cost,"Booking_Status"=>$Booking_Status]];
	
	if(!isset($_SESSION)) session_start();
	$_SESSION['booking_data']=$booking_data;
	$no_of_heads=$No_of_Adult+$No_of_Infants;
}
?>

<div class="header">Tour Package Booking</div>
	<div class="main">
	<form action="payment.php" method="post" >
	<h3> <center> <b>Passenger Information </b></center> </h3> <br> <br>
	
	<table border=0 width="98%" style="color:black" align=center>
	
	<tr><td width=200><label id="para1">Booking No. </label> </td>
	<td><input type="text" name="Booking_No" readonly REQUIRED="REQUIRED" value="<?php echo $Booking_No ?>">
	<input type="hidden" name="Total_Pkg_Cost" value="<?php echo $Total_Pkg_Cost ?>">
	<input type="hidden" name="Booking_Date" value="<?php echo $Booking_Date ?>"></td></tr>
	
	<tr><td width=300><label id="para1">Number of passengers</label> </td>
		<td><input type=number readonly name="no_of_person" value="<?php echo $no_of_heads ?>"></td>
	</tr>
	
	</table>
	
	<?php
		if($no_of_heads>0)
		{	
			echo"<table>";
			echo "<tr><td width=900> <label id ='para1'>First Name </label></td>
					<td width=900><label id ='para1'>Last Name </label></td>
					<td width=200><label id='para1'>Age </label></td>
					<td width=900><label id='para1'>Gender </label></td>
					<td width=700><label id='para1'>Category</label></td></tr>";
			$i=0;
			while($i<$no_of_heads)
			{
				echo "<tr><td><input type='text' name='First_Name[]' REQUIRED='REQUIRED'></td>
						<td><input type='text' name='Last_Name[]' REQUIRED='REQUIRED'></td>
	
						<td><input type=text name='Age[]'></td>
						<td><select name='Gender[]'>
								<option value=''></option>
								<option value='Male'>Male</option>
								<option value='Female'>Female</option>
							</select>
							</td>
						
						<td><select name='Category[]'>
								<option value=''></option>
								<option value='Adult'>Adult</option>
								<option value='Infant'>Infant</option>
							</select>
							</td>
						</tr>";
				$i=$i+1;
			}
			echo "</table>";
		}
	
	?>
	<p align=right><button class=button1 type=submit name="passenger">Submit and next to Payment</button></p>
	
	</form>
	</div>
	</body>
	</html>
<?php 
if(!isset($_SESSION)) session_start();
include "Client_header.php"; ?>
<HTML>


<HEAD><TITLE>Payments</TITLE>
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
	    background-image: url("image/tour_package.jpg");
		background-position:center;
		background-size:cover;

		margin:0;
		}
	.main{ 
	     background-color:rgba(254,160,250,0.5);
		 width:800px;
		 border:solid 2px;
		 border-radius:12px;
		 border-color:black;
		 margin:auto;
		 
		 color:red;
		 
	     }
	
     
   #para1 
	{
	  text-align: center;
	  font-size:16px;
	  font-family:arial;
	  background-color: none;
	  border-style: dotted dashed;
	  width: 70%;
	  border: none;
	  border-radius: 5px;
	}
  input[type=text] 
	{
	  border-radius:5px;
	  width: 75%;
	  height:30px;
	  margin-left:40px;
	}
	number
	{
	  border-radius:5px;
	  width: 75%;
	  height:50px;
	  
	}
    textarea
	{
	  border-radius:5px;
	  width: 80%;
	 }	
	
select {
      border-radius: 4px;
	  width: 80%;
	  padding: 16px 20px;
	  border: none;
	  background-color: #f1f1f1;
	  }	
   #emid{
  border-radius: 4px;
  width: 75%;
  height:30px;
	  }
   #pkg {
   border-radius: 4px;
   width: 	90%;
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
  font-size:16px;
}  
</STYLE>
</HEAD>
	
<?php
	
	if(!isset($_SESSION)) session_start();
	include "connection.php";
	
	if(isset($_POST["passenger"]))
	{
		$Booking_No=$_POST['Booking_No'];
		$Booking_Date=$_POST['Booking_Date'];
		$Total_Pkg_Cost=$_POST['Total_Pkg_Cost'];
		$no_of_person=$_POST['no_of_person'];
		$First_Name=$_POST["First_Name"];
		$Last_Name=$_POST["Last_Name"];
		$Age=$_POST["Age"];
		$Gender=$_POST["Gender"];
		$Category=$_POST["Category"];
		$pdata=array(array());
		for($i=0;$i<$no_of_person;$i++)
		{
			$fnm=$First_Name[$i];
			$lnm=$Last_Name[$i];
			$age=$Age[$i];
			$gender=$Gender[$i];
			$cat=$Category[$i];
			$_SESSION['pdata'][] = 
			array('First_Name' => $fnm,'Last_Name'=> $lnm,'Age'=>$age,'Gender'=>$gender,'Category'=>$cat);                  //store data in mydata() and kept in session

		}
		//print_r($_SESSION['pdata']);
	}
?>
	


<BODY>

	<div class="header">Tour Package Booking Payments </div>
	<div class="main">
	<form action="Confirm_Booking.php" method="post" name="f1" >
	<h3> <center> Booking Payments Informations</center> </h3> <br> <br>
	<table border=0 width="90%" align=center style="color:black" cellspacing=8 cellspacing=12>
	<tr><td colspan=2><label id="para1">Booking No. </label></td><td> <label id="para1">Date of payment</label> </td></tr>
	<tr><td  colspan=2><input type="text" name="Booking_No" readonly REQUIRED="REQUIRED" value="<?php echo $Booking_No ?>"></td>
	  
	<td><input type="text"  name="Payment_Date" readonly REQUIRED="REQUIRED" value="<?php echo $Booking_Date ?>"> </td></tr>
	<tr><td colspan=3><br><label id="para1">Card No</label></td></tr>
	<tr><td colspan=3><input type="text" name="card_no" REQUIRED="REQUIRED" id="emid" value=""></td></tr>
	
	<tr><td colspan=2><br><label id="para1"> Name of the bank </label></td><td><br><label id="para1">IFSC </label></td></tr>
		<tr><td colspan=2><input type=text name="Bank_Name"  value=""></td>
		<td colspan=2><input type=text name="Bank_IFSC"  value=""></td></tr>
		
		<tr><td><br><label id="para1">Account No<label></td><td colspan=2><br><label id="para1"> Name in account</label></td></tr>
		<tr><td><input type="text" name="Account_no" value=""></td><td colspan=2><input type="text" name="Account_Name" value=""></td></tr>
		
		
		<tr><td><br><label id="para1">Booking Amount paid </label></td></tr>
		<tr><td><input type="text" name="Book_amount" readonly value="<?php echo $Total_Pkg_Cost ?>" ></td>
	
		<tr><td colspan=3 align=center><button class=button1 type=submit name="payment">Submit</button> </td><td><span>  </span></td></tr>
		</div>
		</form>
		</body>
		</html>
		
		
		
		
			
	
   
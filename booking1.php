<?php 
if(!isset($_SESSION)) session_start();
include "Client_header.php"; ?>
<HTML>


<HEAD><TITLE>Tour Booking</TITLE>
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
	     background-color:rgba(254,200,120,0.5);
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
<script> 
	function CalcCost()
	{	
         var adultRate=eval(document.f1.Adult_Rate.value);
		 var InfantRate=eval(document.f1.Infant_Rate.value);
		 var adultNo=eval(document.f1.No_of_Adult.value);
		 var infantNo=eval(document.f1.No_of_Infants.value);
		 var totalCost=adultRate*adultNo+InfantRate*infantNo;
		 document.f1.Adult_Cost.value=adultRate*adultNo;
		 document.f1.Infant_Cost.value=InfantRate*infantNo;
		 document.f1.Total_Pkg_Cost.value=totalCost;
	}
	</script>
	</HEAD>
	
<?php
	
	if(!isset($_SESSION)) session_start();
	include "connection.php";
	$pkgid="";
	$infantRate="";
	$adultRate="";
	$pkgname="";
	//$userid=="";
	if(isset($_SESSION['Package_ID']))
		$pkgid=$_SESSION['Package_ID'];
	if(isset($_SESSION['email']))
		$userid=$_SESSION['email'];
	$sql = "SELECT pkg_transport_cost.* FROM pkg_transport_cost where pkg_transport_cost.PackageID=".$pkgid;
	
	$Results = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_row($Results)){
		$infantRate=$row[5];
		$adultRate=$row[4];
	}
	$BookNo=AutoGenerateBookNO();
	$bDate= date('d-m-Y');
	$sql = "SELECT package.package_name FROM package where Package_ID=".$pkgid;
	
	$Results = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_row($Results)){
		$pkgname=$row[0];
		
	}
	
?>
<?php
	function AutoGenerateBookNO()
	{
		include "connection.php";
		$bookno=0;
		$bookingNo=date('Y-m-d')."/";
		$sql="select max(SUBSTRING(Booking_No, 12)) AS ExtractString from Booking";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
			$row = mysqli_fetch_row($result);
			$bookno=(int)$row[0]+1;
		}
		else
		{
			$bookno=1;
		}
		$bookingNo=$bookingNo.$bookno;
		return $bookingNo;
	}
?>
<BODY>

	<div class="header">Tour Package Booking </div>
	<div class="main">
	<form action="passenger.php" method="post" name="f1" >
	<h3> <center> Booking Informations</center> </h3> <br> <br>
	<table border=0 width="90%" align=center style="color:black" cellspacing=8 cellspacing=12>
	<tr><td colspan=2><label id="para1">Booking No. </label></td><td> <label id="para1">Booking Date</label> </td></tr>
	<tr><td  colspan=2><input type="text" name="Booking_No" readonly REQUIRED="REQUIRED" value="<?php echo $BookNo ?>"></td>
	  
	<td><input type="text"  name="Booking_Date" readonly REQUIRED="REQUIRED" value="<?php echo $bDate ?>"> </td></tr>
	<tr><td colspan=2><br><label id="para1">User ID/ Email</label></td><td><label id="para1">Contact_no </label></td></tr>
	<tr><td colspan=2><input type="text" name="User_ID" readonly  REQUIRED="REQUIRED" id="emid" value="<?php echo $userid ?>"></td>	
	<td><input type="text" name="Contact_no"  placeholder="Enter your contact no." REQUIRED="REQUIRED"> </td></tr>
	
	<tr><td colspan=3><br><label id="para1"> Name of the Package </label></td></tr>
		<tr><td colspan=3><input type=text readonly name="Package_Name"  value="<?php echo $pkgname ?>">
		<input type=hidden readonly name="Package_ID"  value="<?php echo $pkgid ?>"></td>
		
		<tr><td><br><label id="para1">Adult Rate<label></td><td><br><label id="para1"> No.of Adult </label></td><td><br><label id="para1">Cost for Adults </label></td></tr>
		<tr><td><input type="text" readonly name="Adult_Rate" value="<?php echo $adultRate ?>"></td>
		
		<td><input type="number" name="No_of_Adult"  placeholder="Enter number of adult" onkeyup="CalcCost()"></td>
		<td><input type="text" name="Adult_Cost" readonly value="<?php echo $adultRate ?>"></td></tr>
		
		<tr><td><br><label id="para1">Infant Rate </label></td><td><br><label id="para1">No.of Infants </label></td><td><br><label id="para1">Cost for Infants </label></td></tr>
		<tr><td><input type="text" name="Infant_Rate" readonly value="<?php echo $infantRate ?>" ></td>
	
		<td><input type="number" name="No_of_Infants"  placeholder="Enter number of infants" onkeyup="CalcCost()"></td>
		<td><input type="text" name="Infant_Cost" readonly value="<?php echo $infantRate ?>"></td></tr>
		
		
		
		<tr><td colspan=2 align=right><label id="para1">Total Package Cost </label></td>
		<td><br><input type="text" name="Total_Pkg_Cost" readonly></td></tr>
		
		<tr><td align=right><label id="para1"><br>Booking Status </label></td>
		<td colspan=2><br><input type="text" name="Booking_Status" id="book_status" readonly value="Pending"></td></tr>
		
		<tr><td colspan=2><input class=button1 type=submit name="booknow" value="Submit and Next"> </td><td><span>  </span></td></tr>
		</table>
		</form>
		</div>
		
		</body>
		</html>
		
		
		
		
			
	
   
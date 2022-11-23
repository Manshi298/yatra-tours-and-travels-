<html>
<head>
<title>Complete Booking</title>
</head>
<body>
</center>
<?php 
include "Client_header.php";
include "connection.php";
if(!isset($_SESSION)) session_start();
if(isset($_POST['payment']))
{
	$Booking_No=$_POST['Booking_No'];
	$Payment_Date=$_POST['Payment_Date'];
	$date2=date_create_from_format("d-m-Y",$Payment_Date);
	$Payment_Date=date_format($date2,"Y/m/d");
	$card_no=$_POST['card_no'];
	$Bank_Name=$_POST['Bank_Name'];
	$Bank_IFSC=$_POST['Bank_IFSC'];
	$Account_no=$_POST['Account_no'];
	$Book_amount=$_POST['Book_amount'];
	$Account_Name=$_POST['Account_Name'];

	if(!isset($_SESSION)) session_start();
	$booking_data=$_SESSION['booking_data'];
	//The following code is to update booking, passenger and payment table
	
	$Booking_No=$booking_data[0]['Booking_No'];
	
	$Booking_Date=$booking_data[0]['Booking_Date'];
	$date1=date_create_from_format("d-m-Y",$Booking_Date);
	$Booking_Date=date_format($date1,"Y/m/d");
	$User_ID=$booking_data[0]['User_ID'];
	$Email_ID=$booking_data[0]['Email_ID'];
	$Contact_no=$booking_data[0]['Contact_no'];
	$Package_ID=$booking_data[0]['Package_ID'];
	$No_of_Adult=$booking_data[0]['No_of_Adult'];
	$No_of_Infants=$booking_data[0]['No_of_Infants'];
	$Adult_Rate=$booking_data[0]['Adult_Rate'];
	$Infant_Rate=$booking_data[0]['Infant_Rate'];
	$Total_Pkg_Cost=$booking_data[0]['Total_Pkg_Cost'];
	$Booking_Status=$booking_data[0]['Booking_Status'];

	$sql1="insert into booking values('".$Booking_No."','".$Booking_Date."','".$User_ID ."','".$Email_ID."','".$Contact_no."','"
	.$Package_ID."','".$No_of_Adult."','".$No_of_Infants."','".$Adult_Rate."','".$Infant_Rate."','"
	.$Total_Pkg_Cost."','".$Booking_Status."')";
	
	//echo $sql1;
	echo "<br>";
	$result1=mysqli_query($conn,$sql1);
	/*if($result1)
		echo "insertion successful in booking";
	else
		echo "Error in booking insertion";*/
	
	$Passenger=$_SESSION['pdata'];
	$len=count($Passenger);
	$i=0;
	while($i<$len)
	{
		$fnm=$Passenger[$i]['First_Name'];
		$lnm=$Passenger[$i]['Last_Name'];
		$age=$Passenger[$i]['Age'];
		$gender=$Passenger[$i]['Gender'];
		$cat=$Passenger[$i]['Category'];
		$sql2="insert into passenger_details values('".$Booking_No."','".$fnm."','".$lnm."',".$age.",'".$gender."','".$cat."')";
		$result2=mysqli_query($conn,$sql2);
		$i++;
	} 
	$sql3="insert into payment1 values(' ','".$Booking_No."','".$Payment_Date."','". $card_no."','". $Bank_IFSC."','". $Account_no."','". $Bank_Name."','". $Account_Name."','".  $Book_amount."', 0, 0)";
	//echo $sql3;
	$result3=mysqli_query($conn,$sql3);
	MakePdfandmail($Booking_No);
	if($result3 and $result1)  
	{ 
	echo "<h2>You have successfully booked this package<br>" ;
	echo " : Your booking details is mailed to your registered email id :</h2><br>";
	echo "<a href=''>View bill</a>";
	}
	else
	{
		echo "error in payment entry";
	}
	
	if(isset($_SESSION))
	{
		session_unset();
		session_destroy();
	}
}
function MakePdfandmail($Booking_No)
{
	include "connection.php";
	$result2=mysqli_query($conn,"select booking.*,package.Package_Name,package.Package_ID,
	 customer_master.user_name from booking,customer_master,package 
	where booking.packageID=package.Package_ID and booking.User_ID=customer_master.User_ID and 
	Booking_No='".$Booking_No."'");
		$row2=mysqli_fetch_assoc($result2);	
		require('fpdf182/fpdf.php');
		$file_name=md5(rand()).'.pdf';
		$pdf=new FPDF();
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',16);
		$pdf->MultiCell(1000,14,'Yatra  - Tour And Travels');
		$pdf->MultiCell(1000,14,'Dear '.$row2['user_name']);
		$pdf->MultiCell(1000,14,'Your Booking application is completed,see details below.');
		$pdf->MultiCell(1000,10,'Booking Number : '.$row2['Booking_No']);
		$pdf->MultiCell(1000,10,'Booking Date : '.$row2['BookingDate']);
		$pdf->MultiCell(1000,10,'User Id : '.$row2['User_id']);
		$pdf->MultiCell(1000,10,'Contact Number : '.$row2['contactno']);
		$pdf->MultiCell(1000,10,'Package ID : '.$row2['PackageID']);
		$pdf->MultiCell(1000,10,'Package Name : '.$row2['Package_Name']);
		$pdf->MultiCell(1000,10,'Number of Adults : '.$row2['No_of_Adult']);
		$pdf->MultiCell(1000,10,'Adult Rate : '.$row2['Adult_Rate']);
		$pdf->MultiCell(1000,10,'Number of Infants : '.$row2['No_of_Infant']);
		$pdf->MultiCell(1000,10,'Infant Rate : '.$row2['Infant_Rate']);
		$pdf->MultiCell(1000,10,'Total Package Cost : '.$row2['Total_Pkg_Cost']);
		$pdf->MultiCell(1000,10,'Booking Status : '.$row2['Booking_Status']);
		$file=$pdf->Output($file_name,'S');

		file_put_contents($file_name,$file); 
		// Recipient 
		$to=$row2['User_id'];

		// Sender 
		$from = 'yatratours2021@gmail.com'; 
		$fromName = 'Yatra - Tour And Travels'; 

		// Email subject 
		$subject = 'Booking Information';  

		// Attachment file 
		//$file = "files/codexworld.pdf";   

		// Email body content 
		$htmlContent = ' 
		<h3>Email with Attachment by Yatra Tour And Travels</h3> 
		<p>This Confirmation mail is sent from Yatra Tour And Travels with attachment.</p>
		'; 

		// Header for sender info 
		$headers = "From: $fromName"." <".$from.">"; 

		// Boundary  
		$semi_rand = md5(time());  
		$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";  

		// Headers for attachment  
		$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 

		// Multipart boundary  
		$message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" . 
		"Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";  

		// Preparing attachment 
		if(!empty($file_name) > 0)
		{ 
			//echo "hello".$file_name;
			if(is_file($file_name))
			{ 
				$message .= "--{$mime_boundary}\n"; 
				$fp =    @fopen($file_name,"rb"); 
				$data =  @fread($fp,filesize($file_name)); 

				@fclose($fp); 
				$data = chunk_split(base64_encode($data)); 
				$message .= "Content-Type: application/octet-stream; name=\"".basename($file_name)."\"\n" .  
				"Content-Description: ".basename($file_name)."\n" . 
				"Content-Disposition: attachment;\n" . " filename=\"".basename($file_name)."\"; size=".filesize($file_name).";\n" .  
				"Content-Transfer-Encoding: base64\n\n" . $data . "\n\n"; 
			} 
		}	
	
	$message .= "--{$mime_boundary}--"; 
	$returnpath = "-f" . $from; 	
	 // Send email		 
	 $mail = @mail($to, $subject, $message, $headers, $returnpath);
	 // Email sending status 
	 echo $mail?"<h2 style='background-color:Yellow;'>Booking application mail Sent Successfully to ".$to ."</h2>":"<h2 style='background-color:Yellow;'>Email sending failed.</h2>";	 
}

?>
<p align=center><img src="image/vacation_package.jpg" height=500 width=500 ></p>
</center>
</body>
</html> 
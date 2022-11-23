<html>
<head>
<style>
body {
	 background-color: #fff5cc;
	font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
.bg {
  /* The image used */
  background-image: url("image/CancelBookingPic.jpg");
  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: 1400px 605px;
}
h1 {
  color: #f2b926;
  text-align: center;
}
h2 {
  color: #408000;
}
div
{
	background-color: none;
}
</style>
</head>
<body>
<?php include "client_header.php" ?>
<div class="bg">
	<h1><b><u><i>Cancel Booking</i></u></b></h1>
<?php
    if (!isset($_SESSION)) session_start();
    include "connection.php";
	  $a=$_GET['BookingNo'];
	  $b=$_GET['Booking_cancel_Data'];
	  $c=$_GET['Reason_for_cancel'];
	  $d=$_GET['PackageID'];
	  $e=$_GET['UserID'];
    $r=mysqli_query($conn,"select * from booking where Booking_No='".$_GET['BookingNo']."'");
    if($r2=mysqli_fetch_assoc($r))
    {  //echo "Booking Status:".$r2['Booking_Status'];
       if($r2['Booking_Status']=='Canceled')   
       {
          echo "<b><h2><font color='red'>You have already Canceled your booking and cancelation mail is already sent at the time of cancellation.</font></h2></b>";
       } 
       else  
       {      
  	      $result="INSERT INTO cancel_booking(Booking_No,Booking_cancel_Date,Reason_for_cancel,Package_ID,User_id) VALUES('".$a."','".$b."','".$c."',".$d.",'".$e."')";
          $row=mysqli_query($conn,$result);
	        if(!$row) 
           {	 
              //echo "<b><h2><font color='red'>Record does not inserted.</font></h2></b>";
           }     
           else 
           {
		          //echo "<b><h2><font color='green'>Record Inserted successfully.</font></p>";
		          $result1=mysqli_query($conn,"update booking set Booking_Status='Canceled' where Booking_No='".$_GET['BookingNo']."'");
              if($result1)  
		          { //echo $_GET['BookingNo'];
		 	               $result2=mysqli_query($conn,"select * from cancel_booking c,booking b where c.Booking_No=b.Booking_No and c.Booking_No='".$_GET['BookingNo']."'");
		 	                 if($row2=mysqli_fetch_assoc($result2))
			                 {
			   	                require('fpdf182/fpdf.php');
                          $file_name=md5(rand()).'.pdf';
                          $pdf=new FPDF();
                          $pdf->AddPage();
                          $pdf->SetFont('Arial','B',16);
                          $pdf->MultiCell(1000,10,'Joyful Adventures');
                          $pdf->MultiCell(1000,10,'Dear Customer,');
                          $pdf->MultiCell(1000,10,'The Tour you have booked has been canceled,see details below.');
                          $pdf->MultiCell(1000,10,'Cancel Serial Number: '.$row2['Cancel_Srl_no']);
                          $pdf->MultiCell(1000,10,'Booking Number:'.$row2['Booking_No']);
                          $pdf->MultiCell(1000,10,'User Id:'.$row2['User_id']);
                          $pdf->MultiCell(1000,10,'Booking Cancel Date:'.$row2['Booking_cancel_Date']);
                          $pdf->MultiCell(1000,10,'Booking Status:'.$row2['Booking_Status']);
                          $file=$pdf->Output($file_name,'S');

                          file_put_contents($file_name,$file); 
                          // Recipient 
                          $to =$row2['User_id']; 
 
                          // Sender 
                          $from = 'mainakmitra22.2@gmail.com'; 
                          $fromName = 'Joyful Adventures'; 
 
                          // Email subject 
                          $subject = 'Booking Cancellation';  
 
                          // Attachment file 
                          //$file = "files/codexworld.pdf"; 
 
                          // Email body content 
                          $htmlContent = ' 
                                          <h3>Email with Attachment by Joyful Adventures</h3> 
                                          <p>This email is sent from Joyful Adventures with attachment.</p> 
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
                          echo $mail?"<h2 style='background-color:Yellow;'>You have successfully canceled Your Booking.<br>Email sent to ".$row2['User_id']."</h2>":"<h2 style='background-color:Yellow;'>Email sending failed.</h2>"; 
                        }  
			
		                    
              }
            }
        }  
    }    
 
    $conn->close();
?>
</div>
</body></html>
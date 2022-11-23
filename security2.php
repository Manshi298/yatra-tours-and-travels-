<?php
include("password.php");
include "connection.php";
error_reporting(0);
session_start();
	$user_id=$_POST['userid'];
	$seqQuestion=$_POST["SecurityQuestion"];
	$seqAnswer=$_POST["SecurityAnswer"];
	$result=mysqli_query($conn,"select * from customer where User_ID='".$_POST["userid"]."'");
	$row=mysqli_fetch_assoc($result);
	$fetch_user_id=$row['User_ID'];
	$SQuestion=$row['Securityquestion'];
	$SAnswer=$row['Securityanswer'];
	$password=$row['Password'];
	if($user_id==$fetch_user_id)
	{ 
       if($SAnswer=$seqAnswer && $SQuestion==$seqQuestion)
	   {   
		  $to=$fetch_user_id;
		            // Sender 
                          $from = 'yatratours2021@gmail.com'; 
                          $fromName = 'Yatra-Tours and Travels'; 
						   $htmlContent = ' 
                                          <h3>Yatra-Tours and Travels</h3> 
                                          <p>This Password Recovery email is sent from Joyful Adventures.</p> 
                                         '; 
		  // Header for sender info 
                          $headers = "From: $fromName"." <".$from.">"; 
          // Boundary  
                          $semi_rand = md5(time());  
                          $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
                          // Headers for attachment  
                          $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";						  
		  $subject="Password";
		  //$txt="Your password is: $password.";
		  //$headers="From: mainakmitra22.2@gmail.com"."\r\n"."CC: mainakmitra22.2@gmail.com";
		  // Multipart boundary  
                          $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" . 
                                    "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n Your password is: $password.";
		  if(mail($to,$subject,$message,$headers))
		  {
		    echo "<h3 style='background-color:Green;'>Email successfully sent to $fetch_user_id....Please check in mail box</h3><br>";
          }
          else
          {
	        echo "<h2 style='background-color:Tomato;'>mail failed to sent</h2><br>";
          }
	   }
       else
	   {
		    echo "<br><h2 style='background-color:Tomato;'>Either Sequrity Question or Sequrity Answer or both are incorrect.<br>";   
	   }		   
	}
	else
	{
		echo "<br><h2 style='background-color:Tomato;'>Invalid User ID<br>";
	}
?>
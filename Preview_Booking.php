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
table.scrolldown {
            width: 1220%;
              
            /* border-collapse: collapse; */
            border-spacing: 0;
            border: 2px solid black;
        }
/* To display the block as level element */
table.scrolldown tbody, table.scrolldown thead {
            display: block;
        } 
 thead tr th {
            height: 40px; 
            line-height: 40px;
        }        
table.scrolldown tbody {
              
            /* Set the height of table body */
            height: 350px; 
            width:  1220px;  
            /* Set vertical scroll */
            overflow-y: auto;
              
            /* Hide the horizontal scroll */
            overflow-x: auto; 
        }
        tbody { 
            border-top: 2px solid black;
        }
          
        tbody td, thead th {
            width : 200px;
            border-right: 2px solid black;
        }
        td {
            text-align:center;
        }

h1 {
    color: white;
    text-align: center; 
   }
p {
   font-family: verdana;
   font-size: 20px;

  }
.color_class
{
  color: green;
} 
 input[type=submit] {
        background-color: #62529c;
        border: none;
        color: #fff;
        padding: 7px 10px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
      } 
.buttonSubmitHide {
 display: none;
}	  
</style>
</head>
<body>
<?php include "Client_header.php"; ?>
<div class="header">
  <h1>My Booking Status preview</h1>
  <p>All the Available information about my Booking updates</p>
 </div>
<div class="row">
  <div class="column">
<?php
error_reporting(0);
   include "connection.php";
   if (!isset($_SESSION)) session_start();
    $result=mysqli_query($conn,"select * from customer_master c,booking b,package p where c.User_ID=b.User_id and b.PackageID=p.Package_ID and b.User_id='".$_POST['email'] ."'");
	$total=mysqli_num_rows($result);
	if($total!=0)
	{
?>    
		<table id="customers" bgcolor="#fffaf0" class="scrolldown">
		   <tr align="center">
              <th>Booking_No</th>
              <th>User_ID</th>
              <th>user_name</th>
              <th>Package Name</th>
              <th>PackageID</th>
              <th>BookingDate</th>
		      <th>contactno</th>
			  <th>No_of_Adult</th>
			  <th>No_of_Infant</th>
			  <th>Adult_Rate</th>
			  <th>Infant_Rate</th>
              <th>Total_Pkg_Cost</th>
              <th>Booking_Status</th>
		   </tr> 
<?php
		while($row=mysqli_fetch_assoc($result))
		{    session_start();
		     echo "<tr align='center'><form action='' method='post'>
                 <td><input type='text' style='width: 90px; height: 20px' name='Booking_No' value='".$row['Booking_No']."' readonly /></td>
                 <td><input type='text' name='User_ID' value='".$row['User_ID']."' readonly /></td>
                 <td><input type='text' style='width: 150px; height: 20px' name='user_name' value='".$row['user_name']."' readonly /></td>
		         <td><textarea rows=3 cols=20 name='Package_Name' value='".$row['Package_Name']."' readonly >".$row['Package_Name']."</textarea></td>
		         <td><input type='text' style='width: 60px; height: 20px' name='PackageID' value='".$row['PackageID']."' readonly /></td>
                 <td><input type='text' style='width: 80px; height: 20px' name='BookingDate' value='".$row['BookingDate']."' readonly /></td>
                 <td><input type='text' style='width: 82px; height: 20px' name='contactno' value='".$row['contactno']."' readonly /></td>
                 <td><input type='text' style='width: 63px; height: 23px'name='No_of_Adult' value='".$row['No_of_Adult']."' readonly /></td>
                 <td><input type='text' style='width: 63px; height: 23px' name='No_of_Infant' value='".$row['No_of_Infant']."' readonly /></td>
                 <td><input type='text' style='width: 80px; height: 20px' name='Adult_Rate' value='".$row['Adult_Rate']."' readonly /></td>
                 <td><input type='text' style='width: 80px; height: 20px' name='Infant_Rate' value='".$row['Infant_Rate']."' readonly /></td>
                 <td><input type='text' style='width: 80px; height: 20px' name='Total_Pkg_Cost' value='".$row['Total_Pkg_Cost']."' readonly /></td>
                 <td><input type='text' style='width: 80px; height: 20px' name='Booking_Status' value='".$row['Booking_Status']."' readonly /></td>";
			if($row['Booking_Status']=='Canceled' || $row['Booking_Status']=='Confirmed')       
            {  
            }   
            else 
		    {
			  echo "<td><input type='submit' name='Confirm' value='Confirm' /></td></form></tr>";	
       		}   
                
        } 
           
    }    
    else
	{
		echo "<p>No Record Found</p>";
	}
?></table>
	</div>
	</div></html> 
<?php
if(isset($_POST['Confirm']))	
{	
	$resultA=mysqli_query($conn,"select * from booking where Booking_No='".$_POST['Booking_No']."'");
	$rowA=mysqli_fetch_assoc($resultA);
		    if($rowA['Booking_Status']=='Confirmed')       
            {  
		      echo "<h2 style='background-color:Yellow;'>You have already confirmed ".$rowA['Booking_No'].", confirmation mail is sent at the time of confirmation.</h2>";
            }
			else
			{	
				
                   			   
			        $result1=mysqli_query($conn,"update booking set Booking_Status='Confirmed' where Booking_No='".$_POST['Booking_No']."'");
                    if($result1)  
                    { 
                        $result2=mysqli_query($conn,"select * from booking where Booking_No='".$_POST['Booking_No']."'");
	                    $row2=mysqli_fetch_assoc($result2);	
	                    require('fpdf182/fpdf.php');
                        $file_name=md5(rand()).'.pdf';
                        $pdf=new FPDF();
                        $pdf->AddPage();
                        $pdf->SetFont('Arial','B',16);
						$pdf->MultiCell(1000,14,'Yatra Tour And Travels');
                        $pdf->MultiCell(1000,14,'Dear Customer,');
                        $pdf->MultiCell(1000,14,'Your Booking is confirmed,see details below.');
                        $pdf->MultiCell(1000,10,'Booking Number : '.$_POST['Booking_No']);
                        $pdf->MultiCell(1000,10,'Booking Date : '.$_POST['BookingDate']);
                        $pdf->MultiCell(1000,10,'User Id : '.$_POST['User_ID']);
                        $pdf->MultiCell(1000,10,'Contact Number : '.$_POST['contactno']);
                        $pdf->MultiCell(1000,10,'Package ID : '.$_POST['PackageID']);
                        $pdf->MultiCell(1000,10,'Package Name : '.$_POST['Package_Name']);
                        $pdf->MultiCell(1000,10,'Number of Adults : '.$_POST['No_of_Adult']);
                        $pdf->MultiCell(1000,10,'Adult Rate : '.$_POST['Adult_Rate']);
                        $pdf->MultiCell(1000,10,'Number of Infants : '.$_POST['No_of_Infant']);
                        $pdf->MultiCell(1000,10,'Infant Rate : '.$_POST['Infant_Rate']);
                        $pdf->MultiCell(1000,10,'Total Package Cost : '.$_POST['Total_Pkg_Cost']);
	                    $pdf->MultiCell(1000,10,'Booking Status : '.$row2['Booking_Status']);
                        $file=$pdf->Output($file_name,'S');

                        file_put_contents($file_name,$file); 
                        // Recipient 
                        $to=$_POST['User_ID'];
 
                        // Sender 
                        $from = 'yatratours2021@gmail.com'; 
                        $fromName = 'Yatra Tour And Travels'; 
  
                        // Email subject 
                        $subject = 'Booking Confirmation';  
 
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
                    } 
                    $message .= "--{$mime_boundary}--"; 
                    $returnpath = "-f" . $from; 	
                     // Send email		 
                     $mail = @mail($to, $subject, $message, $headers, $returnpath);
                     // Email sending status 
                     echo $mail?"<h2 style='background-color:Yellow;'>Confirmation mail Sent Successfully!</h2>":"<h2 style='background-color:Yellow;'>Email sending failed.</h2>";	 
			}		
}			
                
	$conn->close();	
?>  	
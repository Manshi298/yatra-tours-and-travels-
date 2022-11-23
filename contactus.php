<!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" type="text/css" href="style/style.css">
    <!-- Add font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <title>Contact Us</title>
    </head>
     <body style="background:rgb(222,222,150);">
	 <?php include "Client_header.php"; ?>
   <!-- contact section -->
   <?php 
		 if (isset($_POST['send']))
		 {
		 $message = $_POST['message'];
		 $from=$_POST['email'];
		 $cname=$_POST['cname'];
		 $subject = $_POST["sub"];
		 $to="yatratours2021@gmail.com";
		 $headers = "From: ".$from . " = " .$cname;
		 $mail = @mail($to, $subject, $message, $headers);
                     // Email sending status 
         echo $mail?"<h2 style='background-color:Yellow;'>Thank you for contact us</h2>":"<h2 style='background-color:Yellow;'>Email sending failed.</h2>";
		 }
			 
		 ?>
         <section id="contact-section">
           <div class="container">
           	 <h2>Contact Us</h2>
              <p>Email us and keep upto date with our latest news</p>
             <div class="contact-form">

                  <!-- First grid -->
               <div>
                 <i class="fa fa-map-marker"></i><span class="form-info"> Kolkata West Bengal - 700032</span><br>
                 <i class="fa fa-phone" > </i><span class="form-info">  +91 0000000000</span><br>
                 <i class="fa fa-envelope"></i><span class="form-info">  yatratours2021@gmail.com</span>
                 
               </div>
               
                   <!-- second grid -->
           <div>        
             <form action=# method=post>
               <input type="text" name="cname" placeholder="Your Name" required>
               <br>
               <input type="Email" name="email" placeholder="Email" required><br>
               <input type="text" name="sub" placeholder="Subject of this message"><br>
               <textarea name="message" name="message" placeholder="Message" rows="5" cols=50 required></textarea><br>
               <button class="submit" type submit name="send" >Send Message</button> 
             </form>   
               </div>
             </div>
           </div>
         </section>

         
     </body>
        <html>
        <head>
        <style>
           body, html {
                        height: 100%;
                        margin: 3;
                      }
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
            body {
	               background-color: #fff5cc;
				   font-family: Arial, Helvetica, sans-serif;
				   }
             * {box-sizing: border-box
				   }
            input[type=text],textarea{
                   width: 30%;
                   padding: 5px;
                   margin: 4px 0 10px 0;
                   display: inline-block;
                   border: 1px solid red;
                   background: #f1f1f1;
				
				   
                  }

                   input[type=text]:focus{
                   background-color: #ddd;
				   border: 1 px solid green;
                   outline: 1 px solid green;
                  }
				  input[type=text]{
                   background-color: #04AA6D;
				   border: 1 px solid green;
                   outline: 1 px solid green;
				   color:black;
                  }
				   textarea{
                   background-color: #04AA6D;
				   border: 1 px solid green;
                   outline: 1 px solid green;
				   color:black;
                  }
					textarea:focus{
						background-color: #ddd;
				   border: 1 px solid green;
                   outline: 1 px solid green;
					}
                  .col-75 {
                     float: left;
                     width: 75%;
                     margin-top: 6px;
                  }
                  hr {
                       border: 1px solid #f1f1f1;
                       margin-bottom: 19px;
                     }
                  input[type=submit] {
                        background-color: #04AA6D;
                        color: white;
                        padding: 5px 8px;
                        margin: 4px 0;
                        border: 1 px solid green;
						border-color:green;
                        cursor: pointer;
                        width: 15%;
                        opacity: 0.9;
                      }
                   h1 {
                        color: #f2b926;
                        text-align: center;
                      }
                   p {
                        font-family: verdana;
                        font-size: 13px;
                     } 
        </style>
        </head>
        <body>
		<?php include "connection.php";
		include "client_header.php"; ?>
        <div class="bg" align=center><h1><b><u><i>Cancel Booking</i></u></b></h1>		
<?php
           error_reporting(0);
           $UserID=$_GET['UserID'];
	       $PackageID=$_GET['PackageID'];
           $PackageName=$_GET['PackageName'];
		   $BookingNumber=$_GET['BookingNo'];
?>		   
		   <form action='' method='post'><p><b> Booking No. :</b></p><input type='text' name='BookingNo' value='<?php echo $BookingNumber; ?>' readonly /></spacer>
<?php			
	       echo "<p><b> User ID:</b></p>   <input type='text' name='UserID' value='".$UserID."' readonly />";		
           echo "<p><b> Package ID:</b></p>  <input type='text' name='PackageID' value='".$PackageID."' readonly />";	
	       echo "<p><b> Package Name:</b></p>  <input type='text' name='Package_Name' value='".$PackageName."' readonly />";      
?>
        <body>
        <br>
        <label for="Reason_for_cancel"><p><b>Reason for cancel:</b></p></label>
<p><textarea id="Reason_for_cancel" placeholder="Enter reason for cancel..." name="Reason_for_cancel" rows="4" cols="50" required>
</textarea></p>
<?php 
           $value= date('Y/m/d');
           echo "<p><b> Booking cancel Date:</b></p><input type='text' name='Booking_cancel_Data'  value='".$value."' readonly />";
?>
        <br><input type="submit" name="submit" value='SUBMIT'></form></div></body></html>
<?php
            if($_REQUEST['submit']=="SUBMIT")
            {
?>	
               <html>
               <style>
                   body 
                   {
	                 font-family: Arial, Helvetica, sans-serif;
                   }
                   * {box-sizing: border-box;}

                   /* Set a style for all buttons */
                   button {
                            background-color: #f44336;
                            color: white;
                            padding: 14px 20px;
                            margin: 8px 0;
                            border: none;
                            cursor: pointer;
                            width: 100%;
                            opacity: 0.9;
                          }

                    button:hover {
                                    opacity:1;
                                 }

                     /* Float cancel and delete buttons and add an equal width */
                     .cancelbtn, .deletebtn {
                                              float: left;
                                              width: 50%;
                                            }

                      /* Add a color to the cancel button */
                      .cancelbtn {
                                     background-color: #ccc;
                                     color: black;
                                 }

                      /* Add a color to the delete button */
                      .deletebtn {
                                   background-color: #f44336;
                                 }

                      /* Add padding and center-align text to the container */
                      .container {
                                   padding: 16px;
                                   text-align: center;
                                 }

                      /* The Modal (background) */
                      .modal{
                                display: none; /* Hidden by default */
                                position: fixed; /* Stay in place */
                                z-index: 1; /* Sit on top */
                                left: 0;
                                top: 0;
                                width: 80%; /* Full width */
                                height: 80%; /* Full height */
                                overflow: auto; /* Enable scroll if needed */
                                background-color: #474e5d;
                                padding-top: 50px;
                            }

                       /* Modal Content/Box */
                      .modal-content {
                                       background-color: #fefefe;
                                       margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
                                       border: 1px solid #888;
                                       width: 80%; /* Could be more or less, depending on screen size */
                                     }

                        /* Style the horizontal ruler */
                        hr {
                            border: 1px solid #f1f1f1;
                            margin-bottom: 25px;
                           }
 
                        /* The Modal Close Button (x) */
                        .close {
                                 position: absolute;
                                 right: 35px;
                                 top: 15px;
                                 font-size: 40px;
                                 font-weight: bold;
                                 color: #f1f1f1;
                                }

                         .close:hover,
                         .close:focus {
                                        color: #f44336;
                                        cursor: pointer;
                                      }

                            /* Clear floats */
                            .clearfix::after {
                                                content: "";
                                                clear: both;
                                                display: table;
                                             }

                            /* Change styles for cancel button and delete button on extra small screens */
                            @media screen and (max-width: 300px) {
                           .cancelbtn, .deletebtn {
                                                    width: 100%;
                                                  }
                            }
                            </style>
                            <head></head>
                            <body>
                            <button onclick="document.getElementById('id01').style.display='block'">Want to Cancel?</button>
                            <div id="id01" class="modal">
                            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
                            <form class="modal-content" action="">
                            <div class="container">
	                        <h2>Cancel Booking</h2>
                            <p>Are you sure you want to cancel?</p>	
                            <div class="clearfix">
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Don't Cancel</button>
<?php
			                           $BookingNo=$_POST['BookingNo'];
			                            //echo $BookingNo."<br>";
			                           $UserID=$_POST['UserID'];
			                            //echo $UserID."<br>";
			                           $PackageID=$_POST['PackageID'];
			                            //echo $PackageID."<br>";
			                           $Reason_for_cancel=$_POST['Reason_for_cancel'];
			                            //echo $Reason_for_cancel."<br>";
			                           $Booking_cancel_Data=$_POST['Booking_cancel_Data'];
			                            //echo $Booking_cancel_Data."<br>";
			 
			                           echo " <a href='BookingCancel2.php?BookingNo=".$BookingNo."&UserID=".$UserID."&PackageID=".$PackageID."&Reason_for_cancel=".$Reason_for_cancel."&Booking_cancel_Data=".$Booking_cancel_Data."'>
		                                      <button id='gid' type='button' class='deletebtn'>Cancel</button></a>"; 
?>                          </form>
                            </div>
                            </div>
                            </form>
                            </div>

                            <script>
                                //get the model
                                var modal = document.getElementById('id01');

                               // When the user clicks anywhere outside of the modal, close it
                                window.onclick = function(event) {
                                if (event.target == modal) {
                                    modal.style.display = "none";
                                  }
                                } 
                            </script>
                            </body>
                            </html>
<?php
            }

?>    
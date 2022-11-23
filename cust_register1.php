<HTML>
<HEAD><TITLE>REGISTRATION FORM</TITLE>
	<STYLE TYPE="text/css">
	.header
	{
	  background-color: Skyblue;
	  border: none;
	  color: white;
	  padding: 15px 20px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  font-size: 36px;
	  width:100%;
	  font-family:Castellar;
	}
	body{
	    background-image: url("image/wall.jpg");
		background-position:center;
		background-size:cover;
		margin:0;
		}
	.main{ 
	     background-color:rgba(0,0,0,0.5);
		 width:800px;
		 margin:auto;
		 color:#FFFFFF;
		 
	     }
	#para1 
	{
	  color:white;	
	  margin-left:40px;	
	  text-align:center;
	  font-size:16px;
	  font-family:arial;
	  background-color: none;
	  border-style: dotted dashed;
	  width: 30%;
	  border: none;
	  border-radius:5px;
	 
	}
     
    input[type=text] 
	{
	  border-radius:5px;
	  width: 60%;
	  height:30px;
	 
	  
	}
    textarea
	{
	  border-radius:5px;
	  width: 60%;
	 }
select {
      border-radius:5px;
	  width: 80%;
	  padding: 16px 20px;
	  border: none;
	  background-color: #f1f1f1;
	  }	
   #emid{
  border-radius:5px;
  width: 50%;
  height:30px;
	  }
   #pass {
   border-radius:5px;
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
  font-size:16px;
}  

  
	
	</STYLE>
	
	<script>
	function validate(){
	var pass=document.getElementById("pass").value;
	var emid=document.getElementById("emid").value;
	var exp_email=/^([a-zA-Z0-9\.-]+)@([a-zA-Z0-9-]+).([a-z]{2,8})(.[a-z]{2,8})$/;
	pass=pass.trim();
	console.log(pw);
	var lower=pass.search(/[a-z]/);
	var upper=pass.search(/[A-Z]/);
	var num=pass.search(/[0-9]/);
	var special=pass.search(/[@#$%^&!~]]/);
	if(pass==""){      //check for null password
	document.getElementById("message").innerHTML="**Fill the password please!";
	return false;
	}
	else if(emid.trim()=""){     //check for null email id
	document.getElementById("message").innerHTML="";
	document.getElementById("emerr").innerHTML="Invalid";
	return false;
	}
	 else if(!exp_email.test(emid)){  // check for proper email id
       document.getElementById("message").innerHTML="";	 
	   document.getElementById("emerr").innerHTML="**Invalid";
        return false;
      }		
	else if(pass.length!=8){
	document.getElementById("message").innerHTML="**Length of Password must be 8";
	document.getElementById("emerr").innerHTML="";
	  return false;
	  }
	else if(lower==-1){
      	document.getElementById("message").innerHTML="**At least contain one lowercase letter";
		document.getElementById("emerr").innerHTML="";
		return false;
		}
	else if(upper==-1){
     	document.getElementById("message").innerHTML="**At least contain one uppercase letter";
		document.getElementById("emerr").innerHTML="";
		return false;
		}
	else if(num==-1){
    document.getElementById("message").innerHTML=" At least a number";
	document.getElementById("emerr").innerHTML="";
		return false;
		}
   else if(special==-1){
  	  document.getElementById("message").innerHTML="At least contain one special character";
	  document.getElementById("emerr").innerHTML="";
		return false;
		}	
		else{
		return true;
		}
		}
	</script> 
</HEAD>
<BODY>
<?php include "Client_header.php"; ?>
	<div class="header">Registration Form</div>
	<div class="scale"><marquee><font face="Verdana" color="purple" style="font-size:26px">  Please fill up the registration form  </font></marquee></div>
	<div class="main">
	<form action="data_indbms.php" method="POST" onsubmit="return validate()">
	<p align=center><label id="para1">E-Mail</label><br>
	<input type="email" style="color:black" name="User_ID" placeholder="Type your Email Id" REQUIRED="REQUIRED" id="emid">
	<span id="emerr" style="color:red"> </span> <br>
	</p>
	<p align=center> <label id="para1">Name of user</label> <br>
	<input type="text" style="color:black" name=uname id=uname placeholder="Enter your full name" REQUIRED="REQUIRED"> </p>
	<p align=center> <label id ="para1">Address</label> <br>
	<textarea style="color:black" rows=4 cols=30 name=address id ="address" placeholder="Type your address"></textarea> </p>
	<p align=center> <label id="para1">City</label> <br>
	<input type="text" style="color:black" name="city" id="city" placeholder="Enter your city" > </p>
	<p align=center> <label id="para1">Pin </label> </br>
	<input type="text"  style="color:black" name="pin" id ="pin" placeholder="Enter your pin number"> </p>
	<p align=center> <label id="para1">Contact_no </label> <br>
	<input type="text" style="color:black" name="Contact_no" id="contactno" placeholder="Enter your contact no." REQUIRED="REQUIRED"> </p>
    <p align=center> <label id ="para1">Adharcard_No </label> <br>
    <input type="text" style="color:black" name="Adharcard_no" id="adhar" placeholder="Enter your Adharcard no." > </p>
    <p align=center> <label id ="para1">Password </label> <br>
    <input type="password" style="color:black" name="Password" id="pass" placeholder="Enter the password"> <!pattern="(?=.*\d )(?=.*[a-z])(?=.*[A-Z])(?=.*[@$%^&~]).{8,}" title="Must contain at least one number and one uppercase 
	and lowercase letter,and at least 8 or more characters and at least one special character" required>  
	<span id="message" style="color:red"> </span> <br> <br> </p>
    <p align=center> <label id="para1">Security_Question</label> <br>
   <select name="security" style="color:black" id="sec" REQUIRED="REQUIRED" placeholder="Select any one security question">
			<option value="What is the name of your pet ?">What is the name of your pet ?</option>
			<option value="What is your nickname ?">What is your nickname ? </option>
			<option value="What is your favourite book ?">What is your favourite book ?</option>
			<option value="What is your favourite movie ?">What is your favourite movie ?</option>
			<option value="What is your mother's name ?">What is your mother's name ? </option>
		</select>
		</p> 
    <p align=center> <label id="para1">Security_answer</label> <br>
    <input type="text" style="color:black" name="securans" id="secans" REQUIRED="REQUIRED" placeholder="Enter the security answer"> </p>
<button class=button1>Submit</button>
		</p>
		</form>	
      </div>
	</BODY>
	</HTML>
<!DOCTYPE HTML>
<html> 
<head>
<style>
body {
  background-color: LightGray;
}

h1 {
  color: green;
  text-align: center;
}

p {
  font-family: verdana;
  font-size: 20px;
}
</style>
<title>Password recovery</title></head>
<body>
<?php include "connection.php";
		include "client_header.php"; ?>
<form action="security2.php" method="post">
<center><h1 style="border:2px solid Tomato;">Recover Password</h1><center>
<h2 style="background-color:Orange;"><p align="center"><b>Don't worry,happens to the best of us</p></h2><br><br>
<table style="background-color:lightgray;" border="5" bordercolor="red" bgcolor="yellow" height="70%" width="70%" cellpadding="9" cellspacing='5' align="center">
 <tr align="center">
   <td height="60"><b>Enter UserId:</td>
   <td height="60"><input type="text" name="userid" required></td>
 </tr>
 <tr align="center">
    <td height="60"><b>Select Security Question</td>
    <td height="60"><select name="SecurityQuestion" required style="width:400px;height:40px">
	       <option value=''>-----------------select-----------------</option>
           <option value="What is the name of your pet?">What is the name of your pet?</option>
           <option value="What is your nickname?">What is your nickname?</option>
           <option value="What is your favourite book?">What is your favourite book?</option>
           <option value="What is your favourite movie?">What is your favourite movie?</option>
           <option value="What is your mother's name?">What is your mother's name?</option>
        </select>
    </td>
 </tr>
 <tr align="center">
   <td height="60"><b>Security Answer:</td>
   <td height="60"><input type="text" name="SecurityAnswer" required></td>
 </tr>
 <tr align="center">
    <td Colspan="2" height="60"><input type="submit" name='submit' value='SUBMIT'></td>
 </tr>
</table>
</form>
</body>
</html>
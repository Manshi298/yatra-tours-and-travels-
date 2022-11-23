<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- <title>Popup Login Form Design | </title> -->
    <link rel="stylesheet" href="login.css">
    <!--script src="https://kit.fontawesome.com/a076d05399.js"></script-->
  </head>
  <body>
    <!--div class="center"-->
      <!--input type="checkbox" id="show" -->
      <!--label for="show" class="show-btn">ADMIN PANEL</label-->
      <div class="container">
        <label for="show" class="close-btn fas fa-times" title="close"></label>
        <div class="text">
Admin Login</div>
<form action="#" method=post>
          <div class="data">
            <label>User Name</label>
            <input type="text" name="user" required>
          </div>
<div class="data">
            <label>Password</label>
            <input type="password" name="pass" required>
          </div>

<div class="btn">
            <div class="inner">
</div>
<button type="submit" name="login">login</button>
          </div>

</form>
<?php 
	if (isset($_POST['login']))
	{
		$uid=$_POST['user'];
		$pass=$_POST['pass'];
		if($uid=='system' and $pass=='yatra2021')
		{
			if(isset($_SESSION))
			{
					session_unset();
					session_destroy();
			}
			session_start();
			$_SESSION["uid"]="Admin";
			header('Location: Admin_Panel.php');
		}
		else
		{
			echo "<b><font color=red >Incorrect login</font></b>";
		}
	}

?>
</div>
<!--/div-->
</body>
</html>

<!DOCTYPE html>
<?php 
session_start();
$errmsg="" ;
$userid="";
$pass="";
if (isset($_POST['login']))
{
	$userid=$_POST['email'];
	$pass=$_POST['password'];
	include "connection.php";
	$query="select * from customer_master where User_ID='".$userid ."' and Password='". $pass ."'";
	echo $query;
	$row=mysqli_query($conn,$query);
	if($row)
	{
		$_SESSION['USERID']=$userid;
		header('Location:booking1.php');
	}
	else
	{ echo "error";
		$errmsg="Incorrect login";
	}
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="login.php" method="POST" >
                    <h2 class="text-center">Login Form</h2>
                    <p class="text-center">Login with your email and password.</p>
                    
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $userid ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
					<div><?php echo $errmsg; ?></div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login">
                    </div>
                    <div class="link login-link text-center">Not yet a member? <a href="cust_register1.php">Signup now</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
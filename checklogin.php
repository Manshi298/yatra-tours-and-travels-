<?php

if(isset($_SESSION['USERID']))
{
	header('Location:booking1.php');
}
else
{
	header('Location:login.php');
}
?>
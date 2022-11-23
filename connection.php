<?php

$servername="localhost";
$user ="root";
$password="";
$db="tourism"; #the database name 
//connection to database
$conn=mysqli_connect($servername,$user,$password,$db);
if(!$conn){
	die("Unable to connect".mysqli_connect_error());
}
?>
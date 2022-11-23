<?php
	#if (isset($_POST["NAME1"]))
	/*if($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
	
	echo $_POST['NAME1'];
	echo $_POST['NAME2'];
	}
	else
	{
		echo "NOT POSTED";
	}*/
	if (isset($_GET["data"]))
	{
	$var=$_GET['data'];
	echo "The value from page1.php is".$var ;
	}
?>

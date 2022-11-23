<?php
include "admin_header.php";
include "connection.php";
echo "<div>";
if (isset($_POST['confirmdel']))
{
$a=$_POST['Package_ID'];
$reply=$_POST['reply'];
if($reply=='yes')
{
$sql="select * from booking where Package_ID=".$a;
$result=mysqli_query($conn,$sql);

//$row=$result->fetch_assoc();
if($result){
	 echo "<br><center><b><font size=10 color=red>Cannot delete.<br>This Package is used in booking ...try another </font></b></center>";
}
else
{
$query2="delete * from package where Package_ID=".$a;
$row1=mysqli_query($conn,$query2);
echo $row1;
    if($row1 )
	{
               echo "<br><center><b><font size=10 color=purple>Record deleted successfully </font></b></center>";
    }
     else{
                echo "<br><center><b><font size=10 color=red>no records to delete</font></b></center>";
         }
}
}
else
	echo "<br><center><b><font size=6 color=red>not deleted</font></b></center>";
}
echo "</div>";
echo "<p align=center><img src=Package1.jpg ></p>";
?>
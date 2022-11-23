<!--php code to insert customer data in database-->
<?php 
  include "connection.php";
  include "Client_header.php";
  $User_ID=$_POST["User_ID"];
  $uname=$_POST["uname"];
  $address =$_POST["address"];
  $city=$_POST["city"];
  $pin=$_POST["pin"];
  $Contact_no=$_POST["Contact_no"];
  $Adharcard_no=$_POST["Adharcard_no"];
  $Password=$_POST["Password"];
  $security=$_POST["security"];
  $securans=$_POST["securans"];
    
	$query1="select * from customer_master";
$flag=0;
$result=mysqli_query($conn,$query1);
while($row=$result->fetch_assoc()){
if($row["User_ID"]==$User_ID){
echo "<br><center><b><font size=10 color=blue>Record with this user id already exists...</font></b></center>";
$flag=1;
break;
}
}
if($flag==0){
$code = rand(999999, 111111);
$status = "verified";
$query2="insert into customer_master values('$User_ID','$uname','$address','$city','$pin','$Contact_no',
'$Adharcard_no','$Password','$security','$securans','$code', '$status')";
$row=mysqli_query($conn,$query2);

if($row)
{
echo "<br><center><b><font size=10 color=purple>Record inserted successfully</f
ont></b></center>";
}
else{
echo "<br><center><b><font size=10 color=purple>Database is not connected</font
></b></center>";
}
}
?>

</body>
</html>
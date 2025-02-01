<!-- for data insertion on homepackages_admin.php form using POST method -->
<?php 
 include("db_connection.php"); 
 session_start();
   


if(isset($_POST['submit'])){

$hpackages_name=$_POST['hpackages_name'];
$hmonth=$_POST['hmonth'];
$hprice=$_POST['hprice'];
$hdetails=$_POST['hdetails'];
$hdetails1=$_POST['hdetails1'];
$hdetails2=$_POST['hdetails2'];
$hsaving=$_POST['hsaving'];





$sql="insert into home_packages(hpackages_name,hmonth,hprice,hdetails,hdetails1,hdetails2,hsaving) values('$hpackages_name','$hmonth','$hprice','$hdetails','$hdetails1','$hdetails2','$hsaving');";
echo $sql;
if(mysqli_query($link, $sql)){
	session_start();
	$_SESSION["aemail"] = "$aemail";
header("Location:homepackages_admin.php");
}
else{
echo "<script>alert('invalid credentials');</script>";
}
}
?>
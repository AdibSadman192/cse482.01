<!-- for data insertion on homepackages_admin.php form using POST method -->
<?php 
 include("db_connection.php"); 
 session_start();
   


if(isset($_POST['submit'])){

$package_name=$_POST['package_name'];
$start_month=$_POST['start_month'];
$active_month=$_POST['active_month'];
$price=$_POST['price'];
$details=$_POST['details'];






$sql="insert into packages(package_name,start_month,active_month,price,details) values( '$package_name','$start_month','$active_month','$price','$details');";
echo $sql;
if(mysqli_query($link, $sql)){
	session_start();
	$_SESSION["aemail"] = "$aemail";
header("Location:packages_admin.php");
}
else{
echo "<script>alert('invalid credentials');</script>";
}
}
?>
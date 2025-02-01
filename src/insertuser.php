<!-- for data insertion on register.php form using POST method -->
<?php 
 include("db_connection.php"); 
 session_start();
   


if(isset($_POST['submit'])){

$username=$_POST['username'];
$number=$_POST['number'];
$location=$_POST['location'];
$address=$_POST['address'];
$email=$_POST['email'];
$password=$_POST['password'];
$customer_name=$_POST['customer_name'];

echo $username;



$sql="insert into customer(customer_name,username,location,address,number,password,email) values('$customer_name','$username','$location','$address','$number','$password','$email');";
echo $sql;
if(mysqli_query($link, $sql)){
	session_start();
	$_SESSION["email"] = "$email";
header("Location:index.php");
}
else{
echo "<script>alert('invalid credentials');</script>";
}
}
?>
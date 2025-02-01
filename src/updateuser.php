<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include("db_connection.php"); 
session_start();
  


if(isset($_POST['submit'])){

$customer_name=$_POST['customer_name'];
$username=$_POST['username'];
$password=$_POST['password'];
$location=$_POST['location'];
$number=$_POST['number'];
$address=$_POST['address'];
$email = $_SESSION["email"];


// Attempt update query execution
$sql = "UPDATE customer SET 
customer_name='$customer_name' , username='$username' , password='$password'
 ,location='$location' , number='$number' , address='$address' 
 WHERE email='$email'";
if(mysqli_query($link, $sql)){
    echo "Records were updated successfully.";
	$_SESSION["email"] = "$email";
header("Location:viewprofile.php");
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
}
?>
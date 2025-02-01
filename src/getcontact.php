<!-- for data insertion on homepackages_admin.php form using POST method -->
<?php 
 include("db_connection.php"); 
 session_start();
   


if(isset($_POST['submit'])){


$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];





$sql="insert into contacts(name,email,message) values('$name','$email','$message');";

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
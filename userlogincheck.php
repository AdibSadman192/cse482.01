<?php
session_start();

$link = mysqli_connect('localhost', 'root', '', 'online_service_agency' );
if($link){
}

$db = mysqli_select_db($link, 'online_service_agency');

if(isset($_POST['submit'])){

     $email = $_POST['email'];
     $password = $_POST['password'];

	$sql = " select * from  customer where email='$email' and password='$password' ";
	$query = mysqli_query($link,$sql);

	$row = mysqli_num_rows($query);
		if($row == 1){
			echo "login successful";
			$_SESSION['email'] = $email;
			header('location:index.php');
		}else{
			echo "login failed";
			header('location:signup.php');
		}

}


?>
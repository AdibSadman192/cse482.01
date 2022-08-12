<?php
session_start();

$link = mysqli_connect('localhost', 'root', '', 'online_service_agency' );
if($link){
}

$db = mysqli_select_db($link, 'online_service_agency');

if(isset($_POST['submit'])){

     $aemail = $_POST['aemail'];
     $password = $_POST['password'];

	$sql = " select * from  admin where aemail='$aemail' and password='$password' ";
	$query = mysqli_query($link,$sql);

	$row = mysqli_num_rows($query);
		if($row == 1){
			echo "login successful";
			$_SESSION['aemail'] = $aemail;
			header('location:dashboard.php');
		}else{
			echo "login failed";
			header('location:login.php');
		}

}


?>
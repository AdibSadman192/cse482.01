<?php
include 'db_connection.php';
$hpackages_id = $_GET['hpackages_id'];
$query = "DELETE FROM home_packages WHERE hpackages_id= $hpackages_id ";
$result = mysqli_query($link, $query);
if($result == true){

    echo 'Package deleted successfully';
    header("location:".'homepackages_admin.php');
   

}else{
    echo 'Failed to delete !';
    header("location:".'homepackages_admin.php');

}
?>
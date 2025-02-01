<?php
include 'db_connection.php';
$package_id = $_GET['package_id'];
$query = "DELETE FROM packages WHERE package_id= $package_id ";
$result = mysqli_query($link, $query);
if($result == true){

    echo 'Package deleted successfully';
    header("location:".'packages_admin.php');
   

}else{
    echo 'Failed to delete !';
    header("location:".'packages_admin.php');

}
?>
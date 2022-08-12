<?php
include 'db_connection.php';
$customer_id = $_GET['customer_id'];
$query = "DELETE FROM customer WHERE customer_id= $customer_id ";
$result = mysqli_query($link, $query);
if($result == true){

    echo 'User deleted successfully';
    header("location:".'customer_admin.php');
   

}else{
    echo 'Failed to delete !';
    header("location:".'customer_admin.php');

}
?>
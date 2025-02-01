<?php
include "db_connection.php";
$id = $_POST['id'];
$query="SELECT * from home_packages WHERE id = '" . $id . "'";
$result = mysqli_query($link,$query);
$cust = mysqli_fetch_array($result);
if($cust) {
echo json_encode($cust);
} else {
echo "Error: " . $sql . "" . mysqli_error($link);
}
?>
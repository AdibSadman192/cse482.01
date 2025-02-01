<?php
if(count($_POST)>0)
{    
include 'db_connection.php';
$hpackages_name=$_POST['hpackages_name'];
$hmonth=$_POST['hmonth'];
$hprice=$_POST['hprice'];
$hdetails=$_POST['hdetails'];
$hdetails1=$_POST['hdetails1'];
$hdetails2=$_POST['hdetails2'];
$hsaving=$_POST['hsaving'];
if(empty($_POST['hpackages_id'])){
$query = "INSERT INTO home_packages (hpackages_name,hmonth,hprice,hdetails,hdetails1,hdetails2,hsaving)
VALUES ('$hpackages_name','$hmonth','$hprice','$hdetails','$hdetails1','$hdetails2','$hsaving')";
}else{
$query = "UPDATE home_packages set hpackages_id='" . $_POST['hpackages_id'] . "', hpackages_name='" . $_POST['hpackages_name'] . "', hmonth='" . $_POST['hmonth'] . "', hprice='" . $_POST['hprice'] . "',hdetails='" . $_POST['hdetails'] . "' , hdetails1='" . $_POST['hdetails1'] . "', hdetails2='" . $_POST['hdetails2'] . "', hsaving='" . $_POST['hsaving'] . "' WHERE hpackages_id='" . $_POST['hpackages_id'] . "'"; 
}
$result = mysqli_query($link, $query);
if($result) {
echo json_encode($result);
} else {
echo "Error: " . $sql . "" . mysqli_error($link);
}
}
?>
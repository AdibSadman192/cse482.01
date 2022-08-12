<?php
session_start();

unset($_SESSION["email"]);
unset($_SESSION["aemail"]);
header("Location:index.php");
session_destroy();
?>
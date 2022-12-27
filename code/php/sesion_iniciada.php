<?php
session_start();
error_reporting(0);
$sesion_i = $_SESSION['cliente'];


if ($sesion_i != ""){
    header("location:usser.php");
}


?>
<?php
session_start();
$sesion_i = $_SESSION['cliente'];

if ($sesion_i != ""){
    header("location:usser.php");
}


?>
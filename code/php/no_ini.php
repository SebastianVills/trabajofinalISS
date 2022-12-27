<?php
error_reporting(0);
session_start();
$sesion_i = $_SESSION['cliente'];
if($sesion_i == null || $sesion_i = ""){
    echo '
    
    <script>
    alert("No tiene sesion activa");
    location.href = "access.php";
    </script>
    ';

    die();
    
}
?>
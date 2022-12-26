<?php

session_start();
include("../php/connection.php");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel App</title>
    <link rel="stylesheet" href="css/stylesUsser.css">
</head>
<body>

    <!-- ESTRUCTURA DEL ENCABEZADO -->
    <?php
            include("../php/session.php");
    ?>

    <main>
        <div class="main-content">
            <h1 class="primary-text">Hola <?php echo $_SESSION['cliente'] ?></h1>
            <h2 class="second-text">Bienvenido a su Panel de la App</h2>
            <div class="btns">
                <button class="btn-exp"><a href="../php/close_session.php" class="btn-exp">Cerrar Sesión</a></button>
                <button class="btn-personal"><a href="#" class="btn-personal">Ir a tareas</a></button>
                
            </div>
        </div>
    </main>

    <!-- AÑADIMOS LA FUNCION EN EL CUAL PERMITA VER LA INFORMACION DEL USUARIO UNA VEZ LOGEADO 26/12/22 -->
    <div class="perfil">
        <h1 class="aunsente">Información del perfil</h1>
        <div>
            <table class="tableStyle">
                <?php
                    $cliente = $_SESSION['cliente'];
                    $data = mysqli_query($connection,"select * from users where usser = '$cliente'");

                        while ($consulta = mysqli_fetch_array($data)) {
                ?>

                    <tr>
                        <th>Usuario:</th>
                        <td><?php echo $consulta['usser']; ?></td>
                    </tr>
                    <tr>
                        <th>Correo:</th>
                        <td><?php echo $consulta['email']; ?></td>
                    </tr>
                    <tr>
                        <th>Telefono:</th>
                        <td><?php echo $consulta['number']; ?></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>

        <div class="content_boton">
            <input type="button" class="btnoqicjio" name="Mod" value="Modificar datos">
            <input type="button" class="btnoqicjioaaaa" name="El" value="Eliminar Cuenta">
        </div>
    
    </div>

</body>
</html>
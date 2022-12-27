Documentación del proyecto:

Se ha dividido en subcarpetas que contienen los archivos necesarios para poder levantar dicha aplicación que funciona con el lenguaje de programación PHP y Xampp (Mysql) como
gestor de base de datos 'phpMyadmin' y Boostrap para facilitar la creación del material HTML como CSS


## clases creadas para el funcionamiento de la Base de datos

``` php

class db {
    // contiene atributos privados de la conexión de la base de datos 
    // como el host, nombre BD , usuario y contraseña de tipo privados
} function conexion(){
    /* función que captura la conexión y nos envia una excepcion en caso se 
     produzca y si no nos retorna un valor de la conexión
     */
}
```


```SQL
CREATE TABLE `tareas` (
  `id_tarea` int(10) NOT NULL,
  `name_tarea` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `users` (
  `id_usser` int(100) NOT NULL,
  `usser` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `number` varchar(80) NOT NULL,
  `role` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_usser`, `usser`, `password`, `email`, `number`, `role`) VALUES
(1, 'sebas', '123', 's@gmail.com', '123', 'cliente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_usser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_usser` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
```

---------------------------- CARPETA "en view o vista " ------------------------------------------------
es el apartado visual donde se tiene tanto el login, registrar, index o panel donde el usuario interactua con la app
pero tambien contiene archivos como verified.php, store.php que es donde se procesan los datos a través de bucles condicionales}
para poder hacer las validaciones correctas


``` php
    // instanciamos un objeto del archivo homeController
    $obj = new homeController();
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $confirmarContraseña = $_POST['confirmarContraseña'];
    $error = "";
    // si los campos estan vacíos mandamos a que el usuario vuelva a completarlos
    if(empty($correo) || empty($contraseña) || empty($confirmarContraseña)){
        $error .= "<li>Completa los campos</li>";
        header("Location:signup.php?error=".$error."&&correo=".$correo."&&contraseña=".$contraseña."&&confirmarContraseña=".$confirmarContraseña);
         // en caso de que contengan campos, verificar si las contraseñas son iguales
    }else if($correo && $contraseña && $confirmarContraseña){
        if($contraseña == $confirmarContraseña){ // de ser iguales, se accede a la funcion guardarUsuario del homeController
            if($obj->guardarUsuario($correo,$contraseña) == false){
                // si al guardar usuario se verifica si existe en la BD y nos manda un flase entonces 
                // de la variable error nos mandar un mensaje "el correo ha sido registrado"
            }else{
                // caso contrario seguir en el login.
                header("Location:login.php");
            }
        }else{ // si no se cumple que las contraseñas conincidan enviar desde la variable $error a registrar
            // se manda el valor de error en singn.up
        }
    }
``` 


RECURSOS USADOS: 

    https://getbootstrap.com/
    https://fontawesome.com/
    https://fonts.google.com/about
    http://localhost/phpmyadmin/




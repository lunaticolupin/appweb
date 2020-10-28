<?php
//Dirección del Servidor
$host = "localhost";
 
// Puerto del servidor MySQL
$puerto = "3306";

// Nombre de usuario del servidor MySQL
$usuario = "noticias";

// Contraseña del usuario
$passwd = "noticias01";

// Nombre de la base de datos
$baseDeDatos ="noticias";

$db = mysqli_connect($host, $usuario, $passwd, $baseDeDatos);

if (!$db){
    echo mysqli_connect_errno();
    die("No se puedo conectar a la base de datos");
}

echo "Conexión realizada\n";
echo mysqli_get_host_info($db);
?>
<?php
//Definimos los datos de nuestra Base de Datos
define('DBSERVER', 'localhost'); // Server
define('DBUSERNAME', 'root'); // Nombre de usuario
define('DBPASSWORD', ''); // Password
define('DBNAME', 'GRUPO4'); // Nombre de la Base De datos
/* Nos conectamos a la base de datos */
$db = mysqli_connect(DBSERVER, DBUSERNAME, DBPASSWORD, DBNAME);

// Comprobamos si se ha efectuado satisfactoriamente
if($db === false){
 die("Error: connection error. " . mysqli_connect_error());
}
?>
<?php
// Inicia la sesion
session_start();
// Si el usuario ya esta autenticado redirecciona a su perfil
if (isset($_SESSION["userid"]) && $_SESSION["userid"] === true) {
 header("location: welcome.php");
 exit;
}
?>

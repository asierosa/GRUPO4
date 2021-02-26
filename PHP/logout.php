<?php
// Iniciamos la sesion
session_start();
// Cerramos la sesion
if (session_destroy()) {
 // Redirigimos a la pagina principal
 header("Location: ../index.html");
 exit;
}
?>
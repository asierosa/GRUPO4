<?php
require_once "config.php";
require_once "session.php";
$error = '';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
 $email = trim($_POST['email']);
 $password = trim($_POST['password']);
 // Comprobamos si el email está vacio
 if (empty($email)) {
 $error .= '<p class="error">Introduzca su email</p>';
 }
 // Comprobamos si la contraseña está vacia
 if (empty($password)) {
 $error .= '<p class="error">Introduzca su contraseña.</p>';
 }
 //Comprobamos si las credenciales introducidas están en la Base de Datos
 if (empty($error)) {
 if($query = $db->prepare("SELECT * FROM users WHERE email = ?")) {
 $query->bind_param('s', $email);
 $query->execute();
 $row = $query->fetch();
 if ($row) {
 if (password_verify($password, $row['password'])) {
 $_SESSION["userid"] = $row['id'];
 $_SESSION["user"] = $row;

 //En caso afirmativo redirigimos al usuario a su perfil
 header("location: welcome.php");
 exit;
 } else {
 $error .= '<p class="error">La contraseña no es valida.</p>';
 }
 } else {
 $error .= '<p class="error">No existe nungun usuario con ese email.</p>';
 }
 }
 $query->close();
 }
 // Cerramos la conexión
 mysqli_close($db);
}
?>

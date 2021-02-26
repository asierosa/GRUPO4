<?php 
//Recogemos los parametros introducidos en la pestaña de consulta
if ($_POST["email"]<>'') { 
    $ToEmail = 'asierosa@gmail.com'; 
    $EmailSubject = 'Formulario contacto web'; 
    $mailheader = "From: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $MESSAGE_BODY = "Name: ".$_POST["nombre"].""; 
    $MESSAGE_BODY .= "Email: ".$_POST["email"].""; 
    $MESSAGE_BODY .= "Comment: ".nl2br($_POST["asunto"]).""; 
    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
?> 
Tu mensaje fue enviado
<?php 
} else { 
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link href="../CSS/estilos.css" rel="stylesheet">
    <link href="../CSS/consulta.css" rel="stylesheet">
    
</head>
<body>
<form action="../PHP/email.php" method="post">
    <div class="row">
      <div class="col-25">
        <label for="nombre">Nombre</label>
      </div>
      <div class="col-75">
        <input type="text" id="nombre" name="nombre" placeholder="Nombre">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Apellido</label>
      </div>
      <div class="col-75">
        <input type="text" id="apellido" name="apellido" placeholder="Apellido">
      </div>
    </div>
      <div class="row">
      <div class="col-25">
        <label for="email">Email</label>
      </div>
      <div class="col-75">
        <input type="text" id="email" name="email" placeholder="Email">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="pais">Pais</label>
      </div>
      <div class="col-75">
        <select id="pais" name="pais">
          <option value="españa">España</option>
          <option value="francia">Francia</option>
          <option value="alemania">Alemania</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="asunto">Asunto</label>
      </div>
      <div class="col-75">
        <textarea id="asunto" name="asunto" placeholder="Escriba su consulta" style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Enviar">
    </div>
  </form>
    </body>
</html>
<?php 
}; 
?>

<?php

// Llamando a los campos
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "teresita.1852@hotmail.com";
//$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Email: $email \n";
$carta .= "Asunto: $asunto \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:gracias-envio.html');
 
?>
 
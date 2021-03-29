<?php

$destinatario = 'saulrc05@hotmail.com';
// Correo al que se enviara

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];


$header = "Enviado desde la página de Iglesia Militante - Sitio: http://www.iglesiamilitante.com";
$mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre . "\nTelefono: " . $telefono . "\nCorreo: " . $email;

mail($destinatario, $asunto, $mensajeCompleto, $header);
echo "<script>alert('Correo enviado exitosamente')</script>";
echo "<script> setTimeout(\"location.href='index.php'\",1000)</script>";



?>
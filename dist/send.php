<?php
$web = 'Led-ls.co';
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$mail = $_POST['email'];
$ciudad = $_POST['ciudad'];

$header = 'From: ' . $web . " \r\n";
$header .= 'X-Mailer: PHP/' . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= 'Content-Type: text/plain';

$mensaje = "Nuevo registro desde led-ls.co \r\n \r\n";
$mensaje .= 'Nombre: ' . $nombre . "\r\n";
$mensaje .= 'Telefono: ' . $telefono . " \r\n";
$mensaje .= 'Email: ' . $mail . " \r\n";
$mensaje .= 'Ciudad: ' . $ciudad . " \r\n";
$mensaje .= 'Enviado el ' . date('d/m/Y', time());
// Info@led-ls.co
$para = 'brahyan805@gmail.com';
$asunto = 'Registro de Contacto';
if (mail($para, $asunto, utf8_decode($mensaje), $header)) {
    echo '<script type="text/javascript">
        alert("Formulario Enviado");
        window.location.href="index.html";
        </script>';
} else {
    echo 'Ha habido un error al enviar el formulario, inténtalo de nuevo por favor';
}
header('Location:/');
?>

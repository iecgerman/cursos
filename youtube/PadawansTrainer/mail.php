<?php
if($_SERVER['REQUEST_METHOD'] != 'POST' ) {
      header("Location: index.html");
}
/*
if( ! isset( $_POST['nombre'] ) ) {
      header("Location: index.html" );
}
*/
$nombre   = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email    = $_POST['email'];
$asunto   = $_POST['asunto'];
$mensaje  = $_POST['mensaje'];

// trim es para eliminar los espacios vacios
if( empty(trim($nombre)) ) $nombre = 'anonimo';
if( empty(trim($apellido)) ) $apellido = '';

$body = <<<HTML
    <h1>Contacto desde la web</h1>
    <p>De: $nombre $apellido / $email</p>
    <h2>Mensaje</h2>
    $mensaje
HTML;

//Los headers es una cadena de texto multilinea, son varios datos que van a estar separados por el retorno de linea (\r\n) y así lo van a encontrar en todos los ejemplos de php que hay en la tierra
$headers = "MIME-Version: 1.0 \r\n";
$headers.= "Content-type: text/html; charset=utf-8 \r\n";
$headers.= "From: $nombre $apellido <$email> \r\n";
$headers.= "To: Sitio web <german@pcymac.com> \r\n";

// $headers.= "Cc: copia@pcymac.com \r\n";
// $headers.= "Bcc: copia-oculta@pcymac.com \r\n";

//ESTO SERÁ EL CUERPO DEL MENSAJE
//REMITENTE (NOMBRE/APELLIDO - EMAIL)
//ASUNTO
//CUERPO

// var_dump($nombre);
$rta = mail('german@pcymac.com', "Mensaje web: $asunto", $body, $headers );
// var_dump($rta);

header("Location: gracias.html");


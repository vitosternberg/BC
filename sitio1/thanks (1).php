<?php



$nombre = $_POST["nombre"];
//$mail = $_POST["mail"];
$fono = $_POST["fono"];
$seleccion = $_POST["seleccion"];
$mensaje = $_POST["mensaje"];

$destino  = "primagen@gmail.com, soporte@bloquecreativo.cl";

$cabeceras  = "Formulario de contacto BC" . "\r\n";
$cabeceras .= "From: Recordatorio <contacto@bloquecreativo.cl>" . "\r\n";

header("Location: ./gracias.html");
$contenido = "Nombre del contacto ". $nombre ."\n Numero Telefonico" . $fono."\n Correo Electronico " . $mail .
"\n Seleccion " . $seleccion . "\n Mensaje " . $mensaje ;
mail($destino , $cabeceras, $contenido);
//mail($destino . $nombre . $mail .  $cabeceras);
echo "mail enviado";


?>
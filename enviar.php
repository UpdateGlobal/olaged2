<?php
$destino="mhbecerraf@gmail.com";
$nombre= $_POST["nombre"];
$correo= $_POST["correo"];
$asunto= $_POST["asunto"];
$telefono= $_POST["telefono"];
$cantidad= $_POST["cantidad"];
$mensaje= $_POST["mensaje"];

$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nAsunto: " . $asunto . "\nTelefono: " . $telefono . "\nCantidad: " . $cantidad . "\nMensaje: " . $mensaje;
mail($destino,"Olaged - Tienes un mensaje desde tu web de Contacto", $contenido);

header("Location:exito.php");

?>
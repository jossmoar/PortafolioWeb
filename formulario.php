<?php
// Recoge los datos del formulario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$mensaje = $_POST['mensaje'];

// Correo electrónico de destino
$destino = 'jmonteroa1@ucenfotec.ac.cr';

// Asunto del correo electrónico
$asunto = 'Nuevo mensaje del formulario de contacto';

// Cuerpo del correo electrónico
$cuerpoMensaje = "Nombre: $nombre\n";
$cuerpoMensaje .= "Apellidos: $apellidos\n";
$cuerpoMensaje .= "Email: $email\n";
$cuerpoMensaje .= "Teléfono: $telefono\n";
$cuerpoMensaje .= "Dirección: $direccion\n";
$cuerpoMensaje .= "Mensaje: $mensaje\n";

// Cabeceras del correo electrónico
$cabeceras = "From: $nombre <$email>";

// Enviar el correo electrónico
$mailEnviado = mail($destino, $asunto, $cuerpoMensaje, $cabeceras);

// Comprobar si el correo se envió correctamente
if ($mailEnviado) {
    echo json_encode(array('status' => 'success', 'message' => '¡El correo se envió correctamente!'));
} else {
    echo json_encode(array('status' => 'error', 'message' => 'Hubo un error al enviar el correo. Por favor, inténtalo de nuevo.'));
}
?>

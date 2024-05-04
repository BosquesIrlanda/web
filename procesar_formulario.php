<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];

   
    $destinatario = "osvaldo0ficial007@gmail.com";
    $asunto = "Nuevo mensaje de formulario de contacto";
    $cuerpoMensaje = "Nombre: $nombre\n";
    $cuerpoMensaje .= "Correo: $correo\n";
    $cuerpoMensaje .= "Teléfono: $telefono\n";
    $cuerpoMensaje .= "Mensaje: $mensaje\n";

    
    mail($destinatario, $asunto, $cuerpoMensaje);

    
    header("Location: gracias.html");
    exit;
}
?>

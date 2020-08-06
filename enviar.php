<?php

    $destino = "MitadelMundo20@hotmail.com";
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];

    $contenido = "Nombre: " . $nombre . "\ne-mail: " . $correo . "\nTeléfono: " . $telefono . "\nMensaje: " . $mensaje;
    mail($destino, "Mensaje enviado desde app Mitad del Mundo", $contenido);

    header("Location: contacto.html");
?>
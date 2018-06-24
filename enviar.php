<?php 
    $destino="correo@hotmail.com";
    $nombre=$_POST['nombre'];
    $correo=$_POST['email'];
    $telefono=$_POST['telefono'];
    $mensaje=$_POST['mensaje'];
    $asunto=$_POST['asunto'];
    $empresa=$_POST['empresa'];
    $contenido= "Nombre: ".$nombre."\nCorreo: ".$correo.
    "\nEmpresa: ".$empresa."\nTelefono: ".$telefono.
    "\nMensaje".$mensaje;
    mail($destino,$asunto,$contenido);
    header("Location:index.html");
?>  
<?php
//recuperar los datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
//validar datos
if (empty($nombre)||empty($correo)){
    echo "por favor; rellene todos los campos";
}else{
    echo "!Gracia por enviar su informacion! su nombre es $nombre y su correo electronico es $correo";
}
?>
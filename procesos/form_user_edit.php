<?php
require_once "../includes/class_user.php";
$usuario=new usuario();
$resp=$usuario->actualizar_usuario(
    $_POST['id_user'],
    $_POST['nombre_user'],
    $_POST['apell_user'],
    $_POST['correo_user']
);

?>
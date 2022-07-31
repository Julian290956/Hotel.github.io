<?php
require_once'conexion.php';
if (isset($POST['registrarse'])){
    $correo=$_POST['correo'];
    $usuario=$_POST['nombre'];
    $contraseña=$_POST['clave'];

    $sql = "INSERT INTO usuarios ($correo, $usuario, $contraseña) VALUES ('correo', 'nombre', 'clave')";
    $resultado = $con -> query($sql);
}
?>
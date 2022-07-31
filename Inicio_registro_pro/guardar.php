<?php
include 'conexion.php';
if (isset($_POST['registrarse'])){
    echo"entro";
    $correo=$_POST['correo'];
    $usuario=$_POST['nombre'];
    $contraseña=$_POST['clave'];

    $sql = "INSERT INTO usuarios (correo,usuario,contraseña) VALUES ('$correo', '$usuario', '$contraseña')";

    $veri = mysqli_query($con, "SELECT * FROM usuarios WHERE correo='$correo' ");
    if (mysqli_num_rows($veri) >0){
        echo '
            <script>
                alert("Este correo ya esta registrado, porfavor Inicie Sesion");
                window.location = "./index.html";
            </script>
        ';
    }
    $resultado = mysqli_query($con,$sql);
    if($resultado){
        header('location:../hotel.html');
    }
}

?>

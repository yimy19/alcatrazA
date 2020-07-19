<?php
session_start();
include_once "conexion.php";
if (!empty($_POST)) {
    $correo     = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $sql    = "SELECT tipousu, nombre, id_usuario FROM usuarios WHERE contrasena='$contrasena' and correo='$correo';";
    $result = $conexion->query($sql);

    $rows = $result->num_rows;

    if ($rows > 0) {
        $row = $result->fetch_assoc();

        $_SESSION['nom']    = $row['nombre'];
        $_SESSION['tipo']   = $row['tipousu'];
        $_SESSION['id_usu'] = $row['id_usuario'];

        $perfil = $row['tipousu'];
        switch ($perfil) {
            case 2;
                header("location:e.index.php");
                break;

            default:
                header("location:index.php");   
        }
    } else {
        $mensaje = "usuario y/o clave incorrecto";
        header("Location:iniciosesion.php");
    }
}

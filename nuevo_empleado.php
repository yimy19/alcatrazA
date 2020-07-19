<?php

include 'conexion.php';

$nombre     = $_POST['nombre'];
$correo     = $_POST['correo'];
$telefono   = $_POST['telefono'];
$contrasena = $_POST['contrasena'];
$direccion  = $_POST['direccion'];

$sql = "SELECT * FROM usuarios WHERE correo = '$correo'";

$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    header('Location:registrarse.php?correo=si');

    echo "por el si";
} else {

    $sql      = "INSERT INTO usuarios (nombre,correo,contrasena,telefono,direccion,tipousu) VALUES ('$nombre','$correo','$contrasena','$telefono','$direccion',2)";
    $insertar = $conexion->query($sql);

    header('Location:a.index.php');

}

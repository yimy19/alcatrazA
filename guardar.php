<?php
include 'conexion.php';

error_reporting(E_ALL ^ E_NOTICE);

$ingrediente = $_POST['ingrediente'];
$cantidad    = $_POST['cantidad'];

$sql1 = "INSERT INTO inventario (ingrediente,cantidad) VALUES ('$ingrediente','$cantidad');";

$consulta1 = mysqli_query($conexion, $sql1);

header("Location: inventario.php");

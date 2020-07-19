 <?php
include 'conexion.php';

$archivo = $_FILES["imagen"]["tmp_name"];
$destino = "images/" . $_FILES["imagen"]["name"];

move_uploaded_file($archivo, $destino);

$nombre_plato = $_POST['nombre'];
$precio       = $_POST['precio'];
$descripcion  = $_POST['descripcion'];
$preparacion  = $_POST['preparacion'];

$sql   = "INSERT INTO platos (nom_plato,precio,ruta,descripcion,preparacion) VALUES ('$nombre_plato','$precio','$destino','$descripcion','$preparacion')";
$subir = $conexion->query($sql) or die('no se guardo el plato');

header('location:a.index.php');

?>
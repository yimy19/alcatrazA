 <?php
include 'conexion.php';

$archivo = $_FILES["imagen"]["tmp_name"];
$destino = "images/" . $_FILES["imagen"]["name"];

move_uploaded_file($archivo, $destino);

$nombre_plato = $_POST['nombre'];
$precio       = $_POST['precio'];
$descripcion  = $_POST['descripcion'];

$sql   = "INSERT INTO platos (nom_plato,precio,ruta,descripcion) VALUES ('$nombre_plato','$precio','$destino','$descripcion')";
$subir = $conexion->query($sql) or die('no se guardo el plato');

header('location:a.index.php');

?>
<?php 

session_start();
include 'conexion.php';
if ($_SESSION["tipo"] == 1) {
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ALCATRAZ&nbsp|&nbspGestionar menu</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="icon"  href="images/logo.png">
</head>
<body>
<center>

<section class="banner">
                <center>
                <img alt="logo" class="logo" src="images/logo.png">
                
            </center>

               
                    <a class="iniciosesion" href="salir.php">
                        Cerrar Sesion
                </a>

            </section>

<nav>
    <ul>
        <li>
            <a href="index.php">Inicio</a>
            <a href="a.subirplato.php">Subir plato</a>
            <a href="registrarse.php">Registrar Empleado</a>
            <a href="menu.php">Ver El Menu</a>
            <a class ="acitivo" href="a.platos.php">Cambiar Platos</a>
        </li>
    </ul>
</nav>


<?php 

$id_plato=$_REQUEST['id'];


        
$sql="SELECT * FROM platos WHERE id_plato = '$id_plato'";
$consulta= $conexion->query($sql);
while ($datos=$consulta->fetch_assoc()) {
	

?>

<form action="" method="post" class="plato2">
 <label> Nombre Del Plato </label>
<br>
<input class="c"  name="nombre" type="text" value="<?php echo $datos['nom_plato']; ?>"> 
<br><br>
<label> Precio</label>
 <br>
<input class="c" name="precio" type="number" value="<?php echo $datos['precio']; ?>">
 <br>
 <br>
 <label>
 Descripcion </label>
 <br>
<input class="c1" name="descripcion" type="text" value=" <?php echo $datos['descripcion']; ?>">
 <br>
 <br>
  <label>
 Preparacion </label>
 <br>
<input class="c1" name="preparacion" type="text" value=" <?php echo $datos['preparacion']; ?>">
<br>
<br>
  <input class="b1" name="boton" type="submit" value="Listo">

 </form>

<?php



}


if(isset($_POST['boton'])=='Listo' ){

$nombre_plato = $_POST['nombre'];
$precio       = $_POST['precio'];
$descripcion  = $_POST['descripcion'];
$preparacion  = $_POST['preparacion'];

$sql   = "UPDATE  platos SET nom_plato='$nombre_plato' , precio='$precio' , descripcion='$descripcion' ,preparacion='$preparacion' WHERE id_plato='$id_plato'";
$subir = $conexion->query($sql) or die('no se Actualizo el plato');

header("location:a.platos.php");



    }

}else{
	 echo "<center>";
    echo "No has iniciado sesion.  <br><br> ";
    echo "<a href='iniciosesion.php'>Iniciar La Sesion </a>";
    echo "</center>";
}

 ?>
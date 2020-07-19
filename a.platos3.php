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

<?php 

$id_plato=$_GET['id'];

?>

<script>var confirmacion= confirm("DESEA ELIMINAR EL PLATO");</script>

<?php 

$confirmar="<script>document.write(confirmacion)</script>";

if ($confirmar='true') {
   
   

       $sql= "DELETE FROM platos WHERE id_plato='$id_plato'";

       
        
      $eliminar = $conexion->query($sql);

      

      $prueba= mysql_affected_rows();

      
    
header("Location:a.platos.php");

}
}else{
	 echo "<center>";
    echo "No has iniciado sesion.  <br><br> ";
    echo "<a href='iniciosesion.php'>Iniciar La Sesion </a>";
    echo "</center>";
}

 ?>

</center>
</body>
</html>
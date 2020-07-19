    <?php 

$conexion = new mysqli("localhost","admin","","terramar");
if ($conexion->connect_error) {
    die('No conecta'. $conexion->connect_erro);
   // exit();
}


 ?>
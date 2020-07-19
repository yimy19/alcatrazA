<?php
include 'conexion.php';
session_start();
if ($_SESSION["tipo"] == 3) {

  
    $id = $_GET['id'];
    echo $id;

    $sql      = "DELETE FROM pedidos WHERE id_pedido= '$id' ";
    $consulta = $conexion->query($sql) or die("No se dio la consulta");






header("Location: index.php");

  
} else {
    echo "<center>";
    echo "No has iniciado sesion.  <br><br> ";
    echo "<a href='iniciosesion.php'>Iniciar La Sesion </a>";
    echo "</center>";
}

?>
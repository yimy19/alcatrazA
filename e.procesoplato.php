<?php
include 'conexion.php';
session_start();
if ($_SESSION["tipo"] == 2
) {
    ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>TERRAMAR&nbsp&nbsp</title>
    <link rel="stylesheet" type="text/css" href="css/estilo2.css">
    <link rel="icon"  href="images/logo.png">
</head>
<body>
<center>

<section class="banner">
            <center>
                <img alt="logo" class="logo" src="images/logo.png">
                </img>
                <p>

                </p>
                </a>
                    <a class="iniciosesion" href="salir.php">
                        Cerrar Sesion
                </a>
                </center>
            </section>
</center>

<nav>
    <ul>
        <li>
        <a href="e.index.php">Pedidos</a>
        </li>
    </ul>
</nav>

<?php

    $id = $_GET['id'];
    $proceso_pedido=$_POST['estado'];
   
    $sql      = "UPDATE pedidos SET proceso_pedido ='$proceso_pedido' WHERE id_pedido='$id'";
    $consulta = $conexion->query($sql) or die("No se dio la consulta");
    header("Location:e.index.php")

?>

</body>
</html>

<?php
} else {
    echo "<center>";
    echo "No has iniciado sesion.  <br><br> ";
    echo "<a href='iniciosesion.php'>Iniciar La Sesion </a>";
    echo "</center>";
}

?>
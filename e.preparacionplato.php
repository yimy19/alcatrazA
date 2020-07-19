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
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="icon"  href="images/logo.png">
</head>
<body>
<center>

<section class="banner">
            <center>
                <img alt="logo" class="logo" src="images/logo.png">
                </img>
                <p>
Preparacion del Pedido
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
 
    $sql      = "SELECT platos.nom_plato,platos.preparacion FROM platos INNER JOIN pedidos ON platos.id_plato = pedidos.id_plato WHERE id_pedido = $id";
    $consulta = $conexion->query($sql) or die("No se dio la consulta");
    while ($fila = mysqli_fetch_array($consulta)) {

        ?>



<article class="imagen-menu3">
<section class="imagen-menu">

<article class="nombre-plato">
<section class="nombre-plato2">


<p>
<?php echo $fila['nom_plato']; ?>
</p>
</section>
</article>

<br>
<p>
<article class="descripcion-menu2">
<section class="descripcion-menu">
<?php echo $fila['preparacion'] ?>

</p>
</section>

</article>
<p><b><h1> Estado Del Plato:</h1></b></p>
<br>
<article class="select">
    <section class="select2">
        <form action="e.procesoplato.php?id=<?php echo $id ; ?>" method="POST">
            <select name="estado">
                <option  value="Cocinando" >Cocinando</option>
                <option  value="Preparando">Preparando</option>
                <option  value="Preparado">Preparado</option>
            </select>

            
    </section>
</article>
<br>
            <input class="btn" name="boton"  type="submit" value="Terminar" >
        </form>





</section>
</article>


<?php
}

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
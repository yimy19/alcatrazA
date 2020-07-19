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
    <title>ALCATRAZ&nbsp&nbsp</title>
    <link rel="stylesheet" type="text/css" href="css/estilo2.css">
    <link rel="icon"  href="images/logo.png">
</head>
<body>
<center>

<section class="banner">
            <center>
                <img alt="logo" class="logo" src="images/logo.png">
                </img>
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

    $sql = "SELECT pedidos.id_pedido,pedidos.id_plato,pedidos.proceso_pedido,pedidos.fechapedido,pedidos.id_usuarios,platos.nom_plato,usuarios.id_usuario,usuarios.nombre,platos.tiempo_preparacion FROM pedidos INNER JOIN platos ON pedidos.id_plato = platos.id_plato INNER JOIN usuarios ON pedidos.id_usuarios = usuarios.id_usuario WHERE id_pedido='$id'";

    $consulta = $conexion->query($sql);

    while ($fila = mysqli_fetch_array($consulta)) {

    ?>

<section class="proceso-pedido">
    <article class="proceso-pedido2">
        <h1>Pedido Del Cliente: <?php echo $fila['nombre']; ?> </h1>
    </article>

    
</section>
<section class="proceso-pedido3" style="padding-bottom: 2em;">
    <div class="proceso-pedido4">
        <div class="detalle-pedido">
            <p>
            Plato Ordenado:&nbsp<b> <?php echo $fila['nom_plato'] ?> </b>

            </p>
        </div>
            <br>
        <div class="detalle-pedido">
            <p>
            Proceso de Preparacion:&nbsp<b> <?php echo $fila['proceso_pedido'] ?> </b>
            </p>

        </div>
            <br>
        <div class="detalle-pedido"> 
            <p>
            Orden<b> <?php echo '#' . $fila['id_pedido']; ?> </b>
            </p>
        </div>
            <br>
        <div class="detalle-pedido">
            <p>
            Cuando Fue Pedido:&nbsp<b> <?php echo $fila['fechapedido'] ;?> </b>
            </p>
        </div>
        <br>
        <div class="detalle-pedido">
            <p>
            Tiempo Limite De Preparacion:&nbsp<b> <?php echo $fila["tiempo_preparacion"] . "Minutos" ;?> </b>
            </p>
        </div>

    </div>
</section>
<center >
    <section style="padding-bottom: 2em;">
        <form action="e.preparacionplato.php?id=<?php echo $id; ?>"  method="post">
            <input class="btn" name="boton"  type="submit" value="Hacer El Plato" >
        </form>
    </section>
</center>

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
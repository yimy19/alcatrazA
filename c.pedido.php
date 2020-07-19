<?php
include 'conexion.php';
session_start();
if ($_SESSION["tipo"] == 3) {

    ?>
<!DOCTYPE html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alcatraz&nbsp|&nbsp<?php echo $_SESSION['nom']; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="icon"  href="images/logo.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script>function getTimeAJAX() {
    //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX
    var pedidos = $.ajax({
        url: 'bus_pedido.php', //indicamos la ruta donde se genera la hora
        dataType: 'html', //indicamos que es de tipo texto html
        async: false //ponemos el parámetro asyn a falso
    }).responseText;
    //actualizamos el div que nos mostrará la hora actual
    document.getElementById("mostrar").innerHTML = pedidos;
}
//con esta funcion llamamos a la función getTimeAJAX cada segundo para actualizar el div que mostrará los datos
setInterval(getTimeAJAX, 1000);</script>
</head>
<body>

<center>

<section class="banner">
            <center>
                <img alt="logo" class="logo" src="images/logo.png">
                </img>
                <p>
                Bienvenido, <?php echo $_SESSION['nom']; ?>
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
            <a href="index.php">Inicio</a>
            <a href="menu.php">Menu del dia</a>
            <a class="activo" href="c.pedido.php">Ver Pedido</a>
            <a href="lugar.php">Ubicacion</a>
        </li>
    </ul>
</nav>


<section id="mostrar">

</section>

<footer>
            <p>
                Desarrollado Por:
    Felipe Guzmán   David Ríos   Juan  Esteban Porras
            </p>
            <p>
                Correo: SomosLosjefes@NoTeImporta.com
    Telefonos:No Tenemos Linea Telefonica
    Gracias Por Visitar Nuestra Pagina ;)
            </p>
</footer>
</body>
</html>
<?php
} else {
    echo "<center>";
    echo "No has iniciado sesion.  <br><br> ";
    echo "<a href='iniciosesion . php'>Iniciar La Sesion </a>";
    echo "</center>";
}

?>
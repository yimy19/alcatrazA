<?php
include 'conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>ALCATRAZ&nbsp|&nbspinfo</title>
    <link rel="stylesheet" type="text/css" href="css/estilo1.css">
    <link rel="icon"  href="images/logo.png">
</head>
<body>


<center>

<section class="banner">
            <center>
                <img alt="logo" class="logo" src="images/logo.png">
                </img>
            </center>

                </a>
                    <a class="iniciosesion" href="iniciosesion.php">
                        Iniciar Sesion
                </a>

            </section>
</center>
            </section>
</center>

<nav>
    <ul>
        <li>
            <a href="index.php">Inicio</a>
            <a href="menu.php">Menu del dia</a>
            <a href="registrarse.php">Registrate</a>
            <a href="lugar.php">Ubicacion</a>
        </li>
    </ul>
</nav>

<?php

$id = $_GET['id'];

$sql      = "SELECT * FROM platos WHERE id_plato= '$id' ";
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

<img src="<?php echo $fila['ruta'] ?>" alt="imagen" class="imagen-menu2">

<p>
<article class="descripcion-menu2">
<section class="descripcion-menu">
<?php echo $fila['descripcion'] ?>

</p>
</section>
</article>

<p><b><h1><i>Atencion</i>:&nbsp&nbspDebes Iniciar Sesion Para Pedir Plato</h1></b></p>
<br>
<br>
<a href="iniciosesion.php"> <button id="boton" type="submit" class="btn" class="button" >
Ordenar
</button>
</a>
</section>
</article>
<?php

}
?>







<footer>
            <p>
                Desarrollado Por:
    Felipe Guzmán   David Ríos   Juan  Esteban Porras
            </p>
            <p>
                Correo: terramar@gmail.com
    Telefonos:No Tenemos Linea Telefonica
    Gracias Por Visitar Nuestra Pagina ;)
            </p>
</footer>
</body>
</html>



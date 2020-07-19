<?php
include 'conexion.php';
session_start();
if ($_SESSION["tipo"] == 1
) {
    ?>
<!DOCTYPE html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>alcatraz&nbsp|&nbsp<?php echo $_SESSION['nom']; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
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
            <a href="a.index.php">Inicio</a>
            <a href="a.subirplato.php">Subir plato</a>
            <a href="a.registrarse.php">Registrar Empleado</a>
            <a href="a.menu.php">Ver El Menu</a>
            <a href="a.platos.php">Cambiar Platos</a>
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
<?php
} else {
    echo "<center>";
    echo "No has iniciado sesion.  <br><br> ";
    echo "<a href='iniciosesion.php'>Iniciar La Sesion </a>";
    echo "</center>";
}

?>
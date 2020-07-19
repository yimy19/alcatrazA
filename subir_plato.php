<?php
session_start();
if ($_SESSION["tipo"] == 1) {

    ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>ALCATRAZ&nbsp|&nbspinicio</title>
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
                Bienvenido,&nbsp Administrador <?php echo $_SESSION['nom']; ?>
            </p>

                </a>
                    <a class="iniciosesion" href="salir.php">
                        Cerrar Sesion
                </a>

            </section>
</center>

<nav>
    <ul>
        <li>
            <a href="a.index.php">Inicio</a>
            <a class="activo" href="subir_plato.php">Subir plato</a>
            <a href="a.registrarse.php">Registrar Empleado</a>
            <a href="a.menu.php">Revisar Menú</a>

        </li>
    </ul>
</nav>


<section formulario>
<center>
<form action="guardar_plato.php" class="plato" method="POST" enctype='multipart/form-data'>

   <legend><h2> ¿Nuevo Plato?</h2> </legend><br><br>

<label> Nombre Del Plato </label>
<br>
<input class="c"  name="nombre" type="text" required>
<br><br>
<label> Precio</label>
 <br>
<input class="c" name="precio" type="number" required>
 <br>
 <br>
<label>
 Imagen </label>
 <br>
 <input class="c" name="imagen" type="file" required>
 <br>
 <br>
 <label>
 Descripcion </label>
 <br>
<input class="c1" name="descripcion" type="text" required>
 <br>
 <br>
 <br>
  <input class="b1" name="boton" type="submit" value="Listo">

 </form>
 </center>
  </section>


<footer>
            <p>
                Desarrollado Por:
    Felipe Guzmán   David Ríos   Juan Esteban Porras
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
    echo "<a href='iniciosesion.php'>Iniciar La Sesion </a>";
    echo "</center>";
}

?>
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
            <a href="index.php">Inicio</a>
            <a class="activo" href="a.subirplato.php">Subir plato</a>
            <a href="registrarse.php">Registrar Empleado</a>
            <a href="menu.php">Ver El Menu</a>
            <a href="a.platos.php">Cambiar Platos</a>
        </li>
    </ul>
</nav>


<section formulario>
<center>
<form action="a.guardar_plato.php" class="plato" method="POST" enctype='multipart/form-data'>

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
  <label>
 Preparacion </label>
 <br>
<input class="c1" name="preparacion" type="text" required>
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
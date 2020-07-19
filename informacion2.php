<?php
include 'conexion.php';
session_start();
if ($_SESSION["tipo"] == 3
) {
    ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>ALCATRAZ&nbsp|&nbsp<?php echo $_SESSION['nom']; ?></title>
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
            <a href="index.php">Inicio</a>
            <a href="menu.php">Menu del dia</a>
            <a href="c.pedido.php">Ver Pedido</a>
            <a href="lugar.php">Ubicacion</a>
        </li>
    </ul>
</nav>

<?php

    $id = $_GET['id'];
   

    

    $sql      = "SELECT * FROM platos WHERE id_plato= '$id'";
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

<form action="informacion2.php?id=<?php echo $id;?>" method="post">

<input type="number" name="cantidad" placeholder="Escriba Cantidad a pedir"><br><br>   

<input class="btn" name="boton"  type="submit" value="Ordenar" >

      </form>

</section>
</article>


<?php

}


    if (isset($_POST['boton'])) {

        date_default_timezone_set('America/Bogota');
        $fecha  = date("Y-m-d H:i:s");
        $id_usu = $_SESSION['id_usu'];





    

        if ($_POST['boton'] == "Ordenar") {

   

 


  

    $sql= "INSERT INTO pedidos (id_plato,id_usuarios,proceso_pedido,fechapedido) VALUES ('$id','$id_usu','preparando','$fecha');";
       


       $guardar = $conexion->query($sql);

        
      

      
            
            echo "<script>alert('El pedido se realizo con exito');</script>";
            
        }
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
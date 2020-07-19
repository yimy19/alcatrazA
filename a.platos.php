<?php
session_start();
include 'conexion.php';
if ($_SESSION["tipo"] == 1) {

    ?>
 <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ALCATRAZ&nbsp|&nbspGestionar menu</title>
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
            </center>

                </a>
                    <a class="iniciosesion" href="salir.php">
                        Cerrar Sesion
                </a>

            </section>


<nav>
    <ul>
        <li>
            <a href="index.php">Inicio</a>
            <a href="a.subirplato.php">Subir plato</a>
            <a href="registrarse.php">Registrar Empleado</a>
            <a href="menu.php">Ver El Menu</a>
            <a class ="acitvo" href="a.platos.php">Cambiar Platos</a>
        </li>
    </ul>
</nav>


<article>
    
    <section>
        
        

    

    <?php 

    $sql="SELECT id_plato,nom_plato FROM platos";

 $tabla=null;
$busqueda= $conexion->query($sql);

if ($busqueda->num_rows > 0) {
    $tabla .='<table class="table">
        <tr class="titulitos">
            <td># Plato</td>
            <td>Nombre plato</td>
            <td>Actualizar  </td>
            <td>Eliminar</td>
        </tr>';

    while ($filaPlatos = $busqueda->fetch_assoc()) {
        $tabla .=
            '<tr class="titulitos2">
            <td>' . $filaPlatos['id_plato'] . '</td>
            <td>' . $filaPlatos['nom_plato'] . '</td>
            <td>' . "<a href='a.plato2.php?id=" . $filaPlatos['id_plato'] . "'> Actualizar </a>" . '</td>
            <td>' . "<a href='a.platos3.php?id=" . $filaPlatos['id_plato'] . "'> Eliminar </a>" . '</td>

        ';

}

 $tabla .= '</table>';
} else {
    $tabla = "No se encontraron coincidencias con sus criterios de búsqueda.";
}

echo $tabla;




     ?>
 </section>
 
</article>
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
}else {
    echo "<center>";
    echo "No has iniciado sesion.  <br><br> ";
    echo "<a href='iniciosesion.php'>Iniciar La Sesion </a>";
    echo "</center>";
}

?>
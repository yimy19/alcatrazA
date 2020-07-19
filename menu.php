<?php
include "headers.php";
include 'conexion.php';

 ?>
 <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ALCATRAZ&nbsp|&nbspMenu</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" type="text/css" href="css/estilo1.css">
    <link rel="icon"  href="images/logo.png">
    <!-- Start of Async Callbell Code -->
<script>
  window.callbellSettings = {
    token: "9inMLL5YJFjSy1Zezrd1zPdN"
  };
</script>
<script>
  (function(){var w=window;var ic=w.callbell;if(typeof ic==="function"){ic('reattach_activator');ic('update',callbellSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Callbell=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://dash.callbell.eu/include/'+window.callbellSettings.token+'.js';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()
</script>
</head>
<body>
<center>

<section class="banner">
                <center>
                <img alt="logo" class="logo" src="images/logo.png">
                </img>
            </center>

               <?php echo $bienvenidad ?>

            </section>


<nav>
    <ul>
        <li>
            <?php echo $menu ?>
        </li>
    </ul>
</nav>


<article>
    <section class="menu" >

    <?php

    $sql     = "SELECT * FROM platos;";
    $mostrar = $conexion->query($sql);

    while ($buscaPlatos = $mostrar->fetch_assoc()) {

        echo '        <a href="'.$info_plato.'=' . $buscaPlatos['id_plato'] . '"><div class="platos">

            <img class="foto" src="' . $buscaPlatos['ruta'] . '" alt="' . $buscaPlatos['nom_plato'] . '" style="width: 150px;height: 150px;padding:30px;border-radius:3em;">
            <h1>' . $buscaPlatos['nom_plato'] . '</h1>
            </div></a>
';

    }

    ?>

    </section>

</article>

<footer>
      <a href="https://www.facebook.com/alcatrazhosteria" class="icono" id="icon-1"></a>
  <a href="https://www.instagram.com/alcatrazhosteria/?hl=es" class="icono" id="icon-2"></a>
  <a href="#" class="icono" id="icon-3"></a>
    <p>
        Desarrollado Por:
    Felipe Guzmán   Yimy Ramirez
    </p>
    <p>
        Correo: ALCATRAZ@gmail.com
    Telefonos:No Tenemos Linea Telefonica
    Gracias Por Visitar Nuestra Pagina ;)
    </p>
</footer>
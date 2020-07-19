
<?php
include 'conexion.php';
session_start();
if ($_SESSION["tipo"] == 2
) {
    ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Pedidos</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<!-- ESTILOS -->
		<link href="css/estilo1.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<!-- SCRIPTS JS-->
		<script src="peticion.js"></script>
	</head>
	<body>
<center>

<section class="banner">
			<center>
                <img alt="logo" class="logo" src="images/logo.png">
                </img>
                <p>
                PEDIDOS 
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
			
		</li>
	</ul>
</nav>
<article class="tabla_resultado2">
		<section id="tabla_resultado">
		<!-- AQUI SE DESPLEGARA NUESTRA TABLA DE CONSULTA -->
		<!--La consulta esta en consulta.php-->
		</section>
</article>		
</center>
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
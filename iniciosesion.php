<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<title>TERRAMAR&nbsp|&nbsplogin</title>
	<link rel="stylesheet" type="text/css" href="css/estilo1.css">
	<link rel="icon"  href="images/logo.png">
</head>
<body>




<section class="banner">
			<center>
                <img alt="logo" class="logo" src="images/logo.png">
                </img>
            </center>

            </section>


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

<section formulario>
<center>
<form action="servidor.php" method="POST" style="text-align:center;" class="iniciar">
<br>
<label> Tu Correo Electronico:</label>
 <br>
<input class="c" name="correo" type="email" required>
 <br>
 <label>Contraseña:</label>
 <br>
 <input class="c" type="password" name="contrasena" required>
 <br>
 <br>
 <p> ¿No te haz registrado aun?</p>
<a href="registrarse.php" id="boton2" type="submit" class="button2">Registrarse</a>
<br><br>
  <input class="boton2" name="boton" type="submit" value="Iniciar Sesion">
	</form>
	</center>

</section>
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

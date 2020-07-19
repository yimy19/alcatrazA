<?php

include 'conexion.php';
session_start();

$id_usu   = $_SESSION['id_usu'];
$sql      = "SELECT pedidos.id_pedido,pedidos.id_plato,pedidos.proceso_pedido,pedidos.fechapedido,pedidos.id_usuarios,platos.nom_plato,usuarios.id_usuario FROM pedidos INNER JOIN platos ON pedidos.id_plato = platos.id_plato INNER JOIN usuarios ON pedidos.id_usuarios = usuarios.id_usuario WHERE pedidos.id_usuarios = '$id_usu' ";
$consulta = $conexion->query($sql) or die("No se dio la consulta");


while ($fila = $consulta->fetch_assoc()) {

    ?>

    <section class="proceso-pedido">
    <article class="proceso-pedido2">
        <h1>El Proceso De Tu Pedido</h1>
    </article>

    </section>
    <section class  = "proceso-pedido3">
    <div class      = "proceso-pedido4">
    <div class      = "detalle-pedido">
    <p>
    Plato Ordenado:&nbsp <b>  <?php echo $fila['nom_plato']; ?> </b>
            </p>
        </div>
            <br>
        <div class="detalle-pedido">
            <p>
            Proceso de Preparacion:&nbsp <b>  <?php echo $fila['proceso_pedido']; ?> </b>
            </p>
        </div>
            <br>
        <div class="detalle-pedido">
            <p>
            Orden No:&nbsp<b> #  <?php echo $fila['id_pedido']; ?> </b>
            </p>
        </div>
            <br>
        <div class="detalle-pedido">
            <p>
            Cuando Fue Pedido:&nbsp<b>   <?php echo $fila['fechapedido']; ?> </b>
        </p>
        </div>
        <center>
        <p>¿Ya Terminaste De Ver La Orden?</p>
        <p>Porfavor Eliminala</p>
        <a href="c.eliminarpedido.php?id=<?php echo  $fila['id_pedido']; ?>">Eliminar</a>
        </center>
        </div>
        </section>


<?php } ?>
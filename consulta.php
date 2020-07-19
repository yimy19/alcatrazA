<?php

include 'conexion.php';


$tabla   = "";
$pedidos = "SELECT pedidos.id_pedido,pedidos.id_plato,pedidos.fechapedido ,usuarios.nombre
FROM pedidos
INNER JOIN usuarios ON pedidos.id_usuarios =usuarios.id_usuario";

$buscarPedidos = $conexion->query($pedidos);
if ($buscarPedidos->num_rows > 0) {
    $tabla .=
        '<table class="table">
        <tr class="bg-primary">
            <td class="fila1"># Pedido</td>
            <td class="fila1">Nombre De Usuario</td>
            <td class="fila1">Fecha Del Pedido</td>
            <td class="fila1">Mas Info </td>

        </tr>';

    while ($filaPedidos = $buscarPedidos->fetch_assoc()) {
        $tabla .=
            '<tr>
            <td>' . $filaPedidos['id_pedido'] . '</td>
            <td>' . $filaPedidos['nombre'] . '</td>
            <td>' . $filaPedidos['fechapedido'] . '</td>
            <td>' . "<a href='informacion3.php?id=" . $filaPedidos['id_pedido'] . "'> Ver Info </a>" . '</td>


   ';

    }

    $tabla .= '</table>';
}

echo $tabla;

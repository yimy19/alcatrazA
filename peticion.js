function getTimeAJAX() {
    //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    
    var pedidos = $.ajax({
        url: 'consulta.php', //indicamos la ruta donde se obtiene la informacion
        dataType: 'html', //indicamos que es documento html
        async: false //ponemos el parámetro asyn a falso
    }).responseText;
    //actualizamos el div que nos mostrará la hora actual
    document.getElementById("tabla_resultado").innerHTML = pedidos;
}

setInterval(getTimeAJAX, 1000);
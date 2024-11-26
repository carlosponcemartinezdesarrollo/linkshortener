<?php 

    #OBTENCION DE LINKS DE LA BASE DE DATOS
    #EN ESTE CASO SE USA UN ARCHIVO JSON
    $datos = file_get_contents( dirname(__FILE__) . "/direcciones.json" );
    $datos = json_decode($datos, true);

    //RECORRIDO DE LOS DATOS MOSTRANDO EL LINK AL MANEJADOR DE RUTAS
    foreach ($datos as $elem) {
        echo '<a href="https://carlosponcemartinez.es/desarrollos/linkshortener/short/' . $elem["short"] . '">' . $elem["short"] . "</a><br>";
    }

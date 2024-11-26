<?php 
    
    //RECIBE EL CÓDIGO
    $find = isset($_GET['code']) ? $_GET['code'] : null;

    #OBTENCION DE LA BASE DE DATOS
    #EN ESTE CASO SE USA UN ARCHIVO JSON CON LAS DIRECCIONES
    $json = file_get_contents(dirname(__FILE__) . "/direcciones.json");
    $json = json_decode($json, true);

    #FILTRADO DEL ARRAY
    $result = array_filter($json, function ($item) use ($find) {
        return $item['short'] === $find;
    });

    #SANITIZACION DEL RESULTADO
    $url = !empty($result) ? array_values($result)[0]['url'] : null;

    #REDIRECCION A LA URL REGISTRADA
    header("location: " . $url);

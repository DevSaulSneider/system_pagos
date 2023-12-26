<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $password = '';
    $bd = 'system_pagosv2';

    $conexion = mysqli_connect($servidor, $usuario, $password, $bd);

    if (!$conexion) {
        die("Error de conexión: " . mysqli_connect_error());
    }else{
        //echo "Conexión exitosa";
    }

    $url = 'http://127.0.0.1/web/system_pagos';
    
    date_default_timezone_set('America/Lima');
    $fechaHora = date('Y-m-d H:i:s');
?>
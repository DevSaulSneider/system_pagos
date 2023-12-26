<?php
    //datos de la empresa
    $sql_miempresa = "SELECT * FROM miempresa WHERE id = '1'";
    $result_miempresa = mysqli_query($conexion, $sql_miempresa);

    $row_miempresa = mysqli_fetch_array($result_miempresa);

    $empresa = $row_miempresa['nombre'];
    $ruc = $row_miempresa['ruc'];
    $direccion = $row_miempresa['direccion'];
    $emailContact = $row_miempresa['correo_principal'];
    $emailVentas = $row_miempresa['correo_ventas'];
    $telefono = $row_miempresa['telefono'];
    $movil = $row_miempresa['movil'];
    $web = $row_miempresa['web'];
?>
<?php
    $id_client_get = $_GET['id_cliente'];
    
    $sql_ver_cliente="SELECT * FROM vista_clientes WHERE id_cliente = $id_client_get";
    $result_ver_cliente = mysqli_query($conexion, $sql_ver_cliente);
    $row_cliente = mysqli_fetch_assoc($result_ver_cliente);

    // Obtenemos los datos
    $id_periodo = $row_cliente['id_periodo'];
    $id_servicio = $row_cliente['id_servicio'];
    $meses = $row_cliente['meses'];
    $rol = $row_cliente['rol'];
    $servicio = $row_cliente['servicio'];
    $meses = $row_cliente['meses'];
    $empresa = $row_cliente['empresa'];
    $nombre = $row_cliente['nombre'];
    $email = $row_cliente['correo'];
    $telefono = $row_cliente['telefono'];
    $fecha_pago = $row_cliente['fecha_pago'];
    $monto_pagar = $row_cliente['monto_a_pagar'];
    $fecha_creacion = $row_cliente['fecha_creacion'];
    $estado_cliente = $row_cliente['estado'];

?>
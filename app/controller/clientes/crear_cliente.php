<?php
    include ('../../config.php');

    $response = array();
    $response['url'] = $url.'/clientes';

    
    //var_dump($_POST); // Verificar datos por metodo post

    // Resuperamos los datos por metodo post
    $nombre = $_POST['nombre_cliente'];
    $email = $_POST['correo_cliente'];
    $monto_a_pagar = $_POST['monto_a_pagar'];
    $telefono = $_POST['telefono_cliente'];
    $razon_social = $_POST['razon_social'];
    $periodo = $_POST['periodo'];
    $servicio = $_POST['servicio'];
    $primer_pago = $_POST['primer_pago'];

    $sql_insert_client = "INSERT INTO clientes (id_periodo, id_perfil, id_servicio, empresa, nombre, correo, monto_a_pagar, telefono, fecha_pago, fecha_creacion, estado) VALUES ('$periodo', '2','$servicio', '$razon_social', '$nombre', '$email', '$monto_a_pagar', '$telefono', '$primer_pago', '$fechaHora', '1')";
    $result_insert_client = mysqli_query($conexion, $sql_insert_client);
    if($result_insert_client){
        // Obtener el id del cliente creado
        $id_cliente = mysqli_insert_id($conexion);

        // Insertar en la tabla pagos
        $sql_insert_pagos = "INSERT INTO pagos (id_cliente, fecha_proximo_pago, estado) VALUES ('$id_cliente', '$primer_pago', 'PENDIENTE')";
        $result_insert_pagos = mysqli_query($conexion, $sql_insert_pagos);
        
        $response['success'] = true;
        $response['message'] = 'Usuario creado correctamente';
    }else {
        $response['success'] = false;
        $response['message'] = 'Error al crear usuario';
    }
    

    echo json_encode($response);
?>
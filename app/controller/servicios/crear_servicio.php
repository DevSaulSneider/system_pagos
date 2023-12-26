<?php
    include ('../../config.php');
    $response = array();

    $servicio = mysqli_real_escape_string($conexion, $_POST['servicio']);

    $sql_insert_servicio = "INSERT INTO servicios (servicio) VALUES ('$servicio')";
    $result_insert_servicio = mysqli_query($conexion, $sql_insert_servicio);

    if ($result_insert_servicio) {
        $response['success'] = true;
        $response['message'] = 'Servicio creado correctamente';
    } else {
        $response['success'] = false;
        $response['message'] = 'Error al crear Servicio';
    }

    echo json_encode($response);
?>
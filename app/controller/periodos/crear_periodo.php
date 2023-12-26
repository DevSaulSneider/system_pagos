<?php
    include ('../../config.php');
    $response = array();

    $meses = mysqli_real_escape_string($conexion, $_POST['meses']);

    $sql_insert_periodo = "INSERT INTO periodos (meses) VALUES ('$meses')";
    $result_insert_periodo = mysqli_query($conexion, $sql_insert_periodo);

    if ($result_insert_periodo) {
        $response['success'] = true;
        $response['message'] = 'Periodo creado correctamente';
    }else {
        $response['success'] = false;
        $response['message'] = 'Error al crear Periodo';
    }

    echo json_encode($response);
?>
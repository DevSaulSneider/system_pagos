<?php
    include ('../../config.php');
    $response = array();

    $rol = mysqli_real_escape_string($conexion, $_POST['rol']);

    $sql_insert_perfil = "INSERT INTO perfiles (rol) VALUES ('$rol')";
    $result_insert_perfil = mysqli_query($conexion, $sql_insert_perfil);

    if ($result_insert_perfil) {
        $response['success'] = true;
        $response['message'] = 'Perfil creado correctamente';
    } else {
        $response['success'] = false;
        $response['message'] = 'Error al crear perfil';
    }

    echo json_encode($response);
?>
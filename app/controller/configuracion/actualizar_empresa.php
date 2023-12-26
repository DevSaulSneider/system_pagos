<?php
    include ('../../config.php');

    $response = array();
    $response['url'] = $url.'/configuracion';

    // Recuperamos los datos por metodo post
    $id_usuario_actual = $_POST['id_usuario_actual'];
    $empresa = $_POST['nombre_empresa'];
    $ruc = $_POST['ruc'];
    $direccion = $_POST['direccion_empresa'];
    $emailContact = $_POST['emailContact_empresa'];
    $emailVentas = $_POST['emailVentas_empresa'];
    $telefono = $_POST['telFijo_empresa'];
    $movil = $_POST['telMovil_empresa'];
    $web = $_POST['sitio_web'];

    //Actualizar datos de la empresa
    $sql_update_empresa = "UPDATE miempresa SET nombre = '$empresa', ruc = '$ruc', direccion = '$direccion', correo_principal = '$emailContact', correo_ventas = '$emailVentas', telefono = '$telefono', movil = '$movil','web' = '$web', fecha_actualizacion = '$fechaHora', user_actualizacion = '$id_usuario_actual' WHERE id = '1'";
    
    $response['sql'] = $sql_update_empresa;
    $result_update_empresa = mysqli_query($conexion, $sql_update_empresa);
    if($result_update_empresa){
        $response['success'] = true;
        $response['message'] = 'Datos Actualizados correctamente';
    }else {
        $response['success'] = false;
        $response['message'] = 'Error al actualizar datos de la empresa';
        $response['error'] = mysqli_error($conexion);
    }
    

    echo json_encode($response);
?>
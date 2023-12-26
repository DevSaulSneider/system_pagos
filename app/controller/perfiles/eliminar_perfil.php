<?php
    include ('../../config.php');

    $response = array();
    $response['url'] = $url.'/perfiles';

    if(isset($_POST['id_perfil'])) {
        $id_perfil = mysqli_real_escape_string($conexion, $_POST['id_perfil']);

        // Realizar la eliminación del perfiles en la base de datos
        $sql_delete_perfil = "DELETE FROM perfiles WHERE id_perfil = '$id_perfil'";
        
        if (mysqli_query($conexion, $sql_delete_perfil)) {
            $response['success'] = true;
            $response['message'] = 'perfil eliminado correctamente';
        } else {
            $response['success'] = false;
            $response['message'] = 'Error al eliminar perfiles';
            $response['error'] = mysqli_error($conexion);
        }
    } else {
        $response['success'] = false;
        $response['message'] = 'ID de perfiles no proporcionado';
    }

    echo json_encode($response);
?>

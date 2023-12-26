<?php
    include ('../../config.php');

    $response = array();
    $response['url'] = $url.'/usuarios';

    if(isset($_POST['id_user'])) {
        $id_user = mysqli_real_escape_string($conexion, $_POST['id_user']);

        // Realizar la eliminación del usuario en la base de datos
        $sql_delete_user = "DELETE FROM usuarios WHERE id_usuario = '$id_user'";
        
        if (mysqli_query($conexion, $sql_delete_user)) {
            $response['success'] = true;
            $response['message'] = 'Usuario eliminado correctamente';
        } else {
            $response['success'] = false;
            $response['message'] = 'Error al eliminar usuario';
            $response['error'] = mysqli_error($conexion);
        }
    } else {
        $response['success'] = false;
        $response['message'] = 'ID de usuario no proporcionado';
    }

    echo json_encode($response);
?>

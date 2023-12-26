<?php
    include ('../../config.php');

    $response = array();
    $response['url'] = $url.'/usuarios';

    // Verificar si los datos necesarios están presentes
    if (isset($_POST['id_user'], $_POST['new_password'])) {
        // Limpiar y validar los datos
        $id_user = mysqli_real_escape_string($conexion, $_POST['id_user']);
        $new_password = mysqli_real_escape_string($conexion, $_POST['new_password']);

        // Encriptar la nueva contraseña
        $new_password_hashed = password_hash($new_password, PASSWORD_DEFAULT);

        // Actualizar la contraseña en la base de datos
        $sql_reset_password = "UPDATE usuarios SET password_user = '$new_password_hashed' WHERE id_usuario = '$id_user'";
        if (mysqli_query($conexion, $sql_reset_password)) {
            $response['success'] = true;
            $response['message'] = 'Contraseña actualizada correctamente';
        } else {
            $response['success'] = false;
            $response['message'] = 'Error al actualizar contraseña';
            $response['error'] = mysqli_error($conexion);
        }
    } else {
        $response['success'] = false;
        $response['message'] = 'Datos incompletos o inválidos';
    }

    echo json_encode($response);
?>

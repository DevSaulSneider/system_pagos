<?php
    include ('../../config.php');

    $response = array();
    $response['url'] = $url.'/usuarios';

    // Resuperamos los datos por metodo post
    $id_user = $_POST['id_user'];
    $id_perfil = $_POST['id_perfil'];
    $nombre = $_POST['name_user'];
    $apellidos = $_POST['apellido_user'];
    $email = $_POST['email_user'];
    $direccion = $_POST['address_user'];
    $password = $_POST['password_user'];

    $password = password_hash($password, PASSWORD_DEFAULT);
    
    $sql_update_user = "UPDATE usuarios SET id_perfil = '$id_perfil', nombre = '$nombre', apellidos = '$apellidos', correo = '$email', direccion = '$direccion', password_user = '$password', fecha_actualizacion = '$fechaHora' WHERE id_usuario = '$id_user'";
    $response['sql'] = $sql_update_user;
    $result_update_user = mysqli_query($conexion, $sql_update_user);
    if($result_update_user){
        $response['success'] = true;
        $response['message'] = 'Usuario actualizado correctamente';
    }else {
        $response['success'] = false;
        $response['message'] = 'Error al actualizar usuario';
        $response['error'] = mysqli_error($conexion);
    }
    

    echo json_encode($response);
?>
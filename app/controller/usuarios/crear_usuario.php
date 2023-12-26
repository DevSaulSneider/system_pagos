<?php
    include ('../../config.php');

    $response = array();
    $response['url'] = $url.'/usuarios';

    //var_dump($_POST); // Verificar datos por metodo post
    // Resuperamos los datos por metodo post
    $id_perfil = $_POST['id_perfil'];
    $nombre = $_POST['name_user'];
    $apellidos = $_POST['apellido_user'];
    $email = $_POST['email_user'];
    $direccion = $_POST['address_user'];
    $password = $_POST['password_user'];
    $password_repeat = $_POST['password_repeat'];

    if ($password == $password_repeat) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        
        $sql_insert_user = "INSERT INTO usuarios (id_perfil, nombre, apellidos, correo, direccion, password_user, fecha_creacion) VALUES ('$id_perfil', '$nombre', '$apellidos', '$email', '$direccion', '$password', '$fechaHora')";
        $result_insert_user = mysqli_query($conexion, $sql_insert_user);
        if($result_insert_user){
            $response['success'] = true;
            $response['message'] = 'Usuario creado correctamente';
        }else {
            $response['success'] = false;
            $response['message'] = 'Error al crear usuario';
        }
    }else {
        $response['success'] = false;
        $response['message'] = 'Error en el password';
    }

    echo json_encode($response);
?>
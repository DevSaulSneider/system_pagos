<?php
    include '../../../app/config.php';
    $response = array();

    $email = $_POST['email'];
    $password_user = $_POST['password_user'];

    $sql = "SELECT * FROM usuarios WHERE correo = '$email'";
    $result = mysqli_query($conexion, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            // Verificar la contraseña usando password_verify
            if (password_verify($password_user, $row['password_user'])) {
                session_start();
                $_SESSION['id_usuario'] = $row['id_usuario'];

                $response['success'] = true;
                $response['message'] = 'Usuario autenticado correctamente';
                $response['url'] = $url;
            } else {
                $response['success'] = false;
                $response['message'] = 'Credenciales incorrectas';
            }
        } else {
            $response['success'] = false;
            $response['message'] = 'Credenciales incorrectas';
        }
    } else {
        $response['success'] = false;
        $response['message'] = 'Error al autenticar usuario';
    }

    echo json_encode($response);
?>

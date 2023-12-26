<?php
    $id_user_get = $_GET['id_user'];
    
    $sql_ver_usuario="  SELECT 
                            u.id_usuario,
                            u.nombre,
                            u.apellidos,
                            u.correo,
                            u.direccion,
                            p.rol,
                            p.id_perfil,
                            u.fecha_creacion,
                            u.fecha_actualizacion
                        FROM usuarios u
                        INNER JOIN perfiles p
                        ON u.id_perfil = p.id_perfil
                        WHERE u.id_usuario = '$id_user_get'";
    $result_ver_usuario = mysqli_query($conexion, $sql_ver_usuario);
    $row_usuario = mysqli_fetch_assoc($result_ver_usuario);
    // Obtenemos los datos
    $nombre = $row_usuario['nombre'];
    $apellidos = $row_usuario['apellidos'];
    $email = $row_usuario['correo'];
    $direccion = $row_usuario['direccion'];
    $rol = $row_usuario['rol'];
    $fecha_creacion = $row_usuario['fecha_creacion'];
    $fecha_actualizacion = $row_usuario['fecha_actualizacion'];
    $id_perfil = $row_usuario['id_perfil'];

?>
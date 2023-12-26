<?php
    $id_user_get = $_GET['id_perfil'];
    
    $sql_ver_perfil="  SELECT * FROM perfiles WHERE id_perfil = '$id_user_get'";
    $result_ver_perfil = mysqli_query($conexion, $sql_ver_perfil);
    $row_perfil = mysqli_fetch_assoc($result_ver_perfil);
    // Obtenemos los datos
    $id_perfil = $row_perfil['id_perfil'];

?>
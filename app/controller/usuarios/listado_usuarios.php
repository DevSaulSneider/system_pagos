<?php
    
    $sql_usuarios = "SELECT 
                        u.id_usuario,
                        concat(u.nombre,' ',u.apellidos) as nombre,
                        u.correo,
                        p.rol,
                        u.fecha_creacion
                    FROM usuarios u
                    INNER JOIN perfiles p
                    ON u.id_perfil = p.id_perfil";

    $result_usuarios = mysqli_query($conexion, $sql_usuarios);
?>
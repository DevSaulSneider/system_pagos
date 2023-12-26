<?php
    
    $sql_clientes ="SELECT 
                        cl.id_cliente,
                        cl.id_perfil,
                        p.rol,
                        concat(cl.nombre, ' - ', cl.empresa) AS nombre,
                        cl.correo,
                        cl.telefono,
                        cl.fecha_creacion,
                        cl.fecha_pago,
                        IF(cl.estado = 1, 'Activo', 'Inactivo') AS estado
                    FROM clientes cl
                    INNER JOIN perfiles p
                    ON cl.id_perfil = p.id_perfil";

    $result_clientes = mysqli_query($conexion, $sql_clientes);
?>
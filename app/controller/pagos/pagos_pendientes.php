<?php
    $sql_pagos_pendientes ="SELECT 
                        p.id_pago,
                        c.id_cliente,
                        CONCAT(c.nombre, ' - ', c.empresa) as 'cliente',
                        c.monto_a_pagar,
                        p.monto_pagado,
                        p.fecha_pagada,
                        p.fecha_proximo_pago,
                        p.estado
                    FROM pagos p
                    INNER JOIN clientes c
                    ON p.id_cliente = c.id_cliente
                    WHERE p.estado = 'PENDIENTE'";

    $result_pagos_pendientes = mysqli_query($conexion, $sql_pagos_pendientes); 
?>
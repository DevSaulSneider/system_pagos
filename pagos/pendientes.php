<?php
    include ('../app/config.php');
    include ('../layout/parte1.php');
    include ('../app/controller/pagos/pagos_pendientes.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Pagos Pendientes</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">



            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Pagos Pendientes</h3>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="tabla_usuarios" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Cliente</th>
                                            <th>Monto a Pagar</th>
                                            <th>Monto Pagado</th>
                                            <th>Fecha Pagada</th>
                                            <th>Pr&oacute;ximo Pago</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                            $contador = 1;
                                            while ($row = mysqli_fetch_assoc($result_pagos_pendientes)) {
                                                $id_pago = $row['id_pago'];
                                                echo '<tr>';
                                                echo '  <td>' . $row['id_pago'] . '</td>';
                                                echo '  <td>' . $row['cliente'] . '</td>';
                                                echo '  <td>' . $row['monto_a_pagar'] . '</td>';
                                                echo '  <td>' . $row['monto_pagado'] . '</td>';
                                                echo '  <td>' . $row['fecha_pagada'] . '</td>';
                                                echo '  <td>' . $row['fecha_proximo_pago'] . '</td>';
                                                echo '  <td> 
                                                            <div class="btn-group btn-group-sm" role="group">
                                                                <a href="show.php?id_pago=' . $id_pago . '" type="button" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                                <a href="update.php?id_pago=' . $id_pago . '" type="button" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                                                                <a href="show.php?id_pago=' . $id_pago . '" type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                                            </div>
                                                        </td>';
                                                echo '</tr>';
                                                
                                                $contador++;
                                            }
                                        ?>
                                    </tbody>

                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Cliente</th>
                                            <th>Monto a Pagar</th>
                                            <th>Monto Pagado</th>
                                            <th>Fecha Pagada</th>
                                            <th>Pr&oacute;ximo Pago</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>

<?php include '../layout/parte2.php'; ?>
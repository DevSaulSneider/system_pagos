<?php
    include ('../app/config.php');
    include ('../layout/parte1.php');
    include ('../app/controller/servicios/listado_servicios.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Nuestros Servicios y Paquetes</h1>
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
                            <h3 class="card-title mt-2">Servicios</h3>
                            <div class="card-tools">
                                <!-- button modal -->
                                <button type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#modal-default">
                                    <i class="fas fa-plus-circle"></i>&nbsp; Nuevo Servicio
                                </button>
                            </div>
                        </div>

                        <div class="card-body">
                            <table id="tabla_usuarios" class="table table-bordered table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Servicio</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                        $contador = 1;
                                        while ($row = mysqli_fetch_assoc($result_servicios)) {
                                            echo '  <tr>';
                                            echo '  <td>' . $row['id_servicio'] . '</td>';
                                            echo '  <td>' . $row['servicio'] . '</td>';
                                            echo '  <td> 
                                                            <div class="btn-group btn-group-sm" role="group">
                                                                <a href="show.php?id_user=' . $id_user . '" type="button" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                                                                <a href="show.php?id_user=' . $id_user . '" type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                                            </div>
                                                        </td>';
                                            echo '  </tr>';

                                            $contador++;
                                        }
                                    ?>
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Rol</th>
                                        <th>Acciones</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            
            <!-- Modal -->
            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Crear Nuevo Servicio, Paquete o Plan</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- contenido del modal -->
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="../app/controller/servicios/crear_servicio.php" method="POST" id="modal_servicio">
                                        <div class="form-group">
                                            <label for="servicio">Servicio:</label>
                                            <input name="servicio" type="text" class="form-control" id="servicio" placeholder="Ingrese el nuevo servicio o paquete">
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>&nbsp; Crear Servicio</button>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>

<?php include '../layout/parte2.php'; ?>
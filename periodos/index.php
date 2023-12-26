<?php
    include ('../app/config.php');
    include ('../layout/parte1.php');
    include ('../app/controller/periodos/listado_periodos.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Periodos</h1>
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
                            <h3 class="card-title mt-2">Lista de Periodos</h3>
                            <div class="card-tools">
                                <!-- button modal -->
                                <button type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#modal-default">
                                    <i class="fas fa-plus-circle"></i>&nbsp; Nuevo
                                </button>
                            </div>


                        </div>

                        <div class="card-body">
                            <table id="tabla_usuarios" class="table table-bordered table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Meses</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                        $contador = 1;
                                        while ($row = mysqli_fetch_assoc($result_periodos)) {
                                            echo '  <tr>';
                                            echo '  <td>' . $row['id_periodo'] . '</td>';
                                            echo '  <td>' . $row['meses'] . '</td>';
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
                                        <th>Meses</th>
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
                            <h4 class="modal-title">Crear Nuevo Periodo</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- contenido del modal -->
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="../app/controller/periodos/crear_periodo.php" method="POST" id="modal_periodo">
                                        <div class="form-group">
                                            <label for="meses">Meses:</label>
                                            <input name="meses" type="number" class="form-control" id="meses" placeholder="Ingrese el numero de meses">
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>&nbsp; Crear Periodo</button>
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
<?php
    include ('../app/config.php');
    include ('../layout/parte1.php');
    include ('../app/controller/perfiles/listado_perfiles.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Lista de Perfiles</h1>
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
                            <h3 class="card-title mt-2">Lista de Perfiles</h3>
                            <div class="card-tools">
                                <!-- button modal -->
                                <button type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#modal-default">
                                    <i class="fas fa-plus-circle"></i>&nbsp; Crear nuevo
                                </button>
                            </div>


                        </div>

                        <div class="card-body">
                            <table id="tabla_perfiles" class="table table-bordered table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Rol</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                        $contador = 1;
                                        while ($row = mysqli_fetch_assoc($result_perfiles)) {
                                            echo '  <tr>';
                                            echo '  <td>' . $contador . '</td>';
                                            echo '  <td>' . $row['rol'] . '</td>';
                                            echo '  <td> 
                                                            <div class="btn-group btn-group-sm" role="group">
                                                                <a href="update.php?id_perfil=' . $row['id_perfil'] . '" type="button" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                                                                <a href="#" data-id="' . $row['id_perfil'] . '" class="btn btn-danger delete-perfil"><i class="fas fa-trash-alt"></i></a>
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
                            <h4 class="modal-title">Crear Nuevo Perfil</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- contenido del modal -->
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="../app/controller/perfiles/crear_perfil.php" method="POST" id="modal_perfil">
                                        <div class="form-group">
                                            <label for="">Rol:</label>
                                            <input name="rol" type="text" class="form-control required" id="rol" placeholder="Ingrese el rol"  autocomplete="off">
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Crear Perfil</button>
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
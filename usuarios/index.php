<?php
    include ('../app/config.php');
    include ('../layout/parte1.php');
    include ('../app/controller/usuarios/listado_usuarios.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Listado de Usuarios</h1>
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
                            <h3 class="card-title">Lista de Usuarios</h3>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="tabla_usuarios" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Email</th>
                                            <th>Perfil</th>
                                            <th>Fecha de Creacion</th>
                                            <th class="text-center">Acciones</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                            $contador = 1;
                                            while ($row = mysqli_fetch_assoc($result_usuarios)) {
                                                $id_user = $row['id_usuario'];
                                                echo '  <tr>';
                                                echo '  <td>' . $contador . '</td>';
                                                echo '  <td>' . $row['nombre'] . '</td>';
                                                echo '  <td>' . $row['correo'] . '</td>';
                                                echo '  <td>' . $row['rol'] . '</td>';
                                                echo '  <td>' . $row['fecha_creacion'] . '</td>';
                                                echo '  <td class="text-center">
                                                            <div class="btn-group btn-group-sm" role="group">
                                                                <a href="show.php?id_user=' . $id_user . '" type="button" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                                <a href="update.php?id_user=' . $id_user . '" type="button" class="btn btn-warning"><i class="fas fa-pen"></i></a>';

                                                                if ($id_user != $_SESSION['id_usuario']) {
                                                                    echo '<a href="#" data-id="' . $id_user . '" class="btn btn-danger delete-user"><i class="fas fa-trash-alt"></i></a>';
                                                                }
                                                                
                                                echo '          <a href="reset.php?id_user=' . $id_user . '" type="button" class="btn btn-success"><i class="fas fa-unlock-alt"></i></a>
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
                                            <th>Nombre</th>
                                            <th>Email</th>
                                            <th>Perfil</th>
                                            <th>Fecha de Creacion</th>
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
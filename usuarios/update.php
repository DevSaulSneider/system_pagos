<?php
    include ('../app/config.php');
    include ('../layout/parte1.php');
    include ('../app/controller/perfiles/listado_perfiles.php');
    include ('../app/controller/usuarios/ver_usuario.php');
    
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Actualizar Datos de <?php echo $nombre; ?></h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">



            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Actualizar</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="../app/controller/usuarios/actualizar_usuario.php" method="POST" id="form_update_user">
                    <input type="text" value="<?php echo $id_user_get; ?>" name="id_user" hidden>
                    <div class="card-body">
                        <div class="row">
                            <!-- Columna izquierda -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name_user">Nombre:</label>
                                    <input type="text" class="form-control" name="name_user" id="name_user" value="<?php echo $nombre; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="apellido_user">Apellido:</label>
                                    <input type="text" class="form-control" name="apellido_user" id="apellido_user"
                                        value="<?php echo $apellidos; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="email_user">Email:</label>
                                    <input type="text" class="form-control" name="email_user" id="email_user"
                                        value="<?php echo $email; ?>">
                                </div>
                            </div>
                            <!-- Columna derecha -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Perfil:</label>
                                    <select class="custom-select" id="id_perfil" name="id_perfil">
                                        <?php
                                            while ($row_perfiles = mysqli_fetch_array($result_perfiles)) {
                                                $selected = ($row_perfiles['id_perfil'] == $id_perfil) ? 'selected' : '';
                                                echo '<option value="' . $row_perfiles['id_perfil'] . '" ' . $selected . '>' . $row_perfiles['rol'] . '</option>';
                                            }
                                            echo '</select>';
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="address_user">Dirección:</label>
                                    <input type="text" class="form-control" name="address_user" id="address_user" value="<?php echo $direccion; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="password_user">Password</label>
                                    <input type="password" class="form-control" name="password_user" id="password_user" placeholder="Password" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="index.php" class="btn btn-danger"><i class="fas fa-ban"></i> &nbsp;Cancelar</a>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> &nbsp;Actualizar
                            Usuario</button>
                    </div>
                </form>

            </div>
            <!-- /.card -->



        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>



<?php include '../layout/parte2.php'; ?>
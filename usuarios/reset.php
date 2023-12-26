<?php
    include ('../app/config.php');
    include ('../layout/parte1.php');
    include ('../app/controller/usuarios/ver_usuario.php');
    
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Resetear contraseña - <?php echo $nombre; ?></h1>
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
                    <h3 class="card-title">Se reseteara la contraseña de <?php echo $nombre; ?></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="../app/controller/usuarios/resetear_password.php" method="POST" id="form_reset_password">
                    <input type="text" value="<?php echo $id_user_get; ?>" name="id_user" hidden>
                    <div class="card-body">
                        <div class="row">
                            <!-- Columna izquierda -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name_user">Nombre:</label>
                                    <input type="text" class="form-control" id="name_user"
                                        value="<?php echo $nombre; ?>" disabled>
                                </div>

                            </div>
                            <!-- Columna derecha -->
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="email_user">Email:</label>
                                    <input type="email" class="form-control" id="email_user"
                                        value="<?php echo $email; ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="new_password">Nuevo Password:</label>
                                    <input type="text" class="form-control" id="new_password" name="new_password"
                                        value="<?php echo $nombre; ?>1234" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="index.php" class="btn btn-danger"><i class="fas fa-ban"></i> &nbsp;Cancelar</a>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-unlock-alt"></i> &nbsp;Resetear</button>
                    </div>
                </form>

            </div>
            <!-- /.card -->



        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>



<?php include '../layout/parte2.php'; ?>
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
                    <h1 class="m-0">Datos de <?php echo $nombre; ?></h1>
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
                    <h3 class="card-title">Informacion registrada <?php echo $nombre; ?></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="#" method="POST">
                    <div class="card-body">
                        <div class="row">
                            <!-- Columna izquierda -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name_user">Nombre:</label>
                                    <input type="text" class="form-control" id="name_user"
                                        value="<?php echo $nombre; ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="apellido_user">Apellido:</label>
                                    <input type="text" class="form-control" id="apellido_user"
                                        value="<?php echo $apellidos; ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="email_user">Email:</label>
                                    <input type="email" class="form-control" id="email_user"
                                        value="<?php echo $email; ?>" disabled>
                                </div>
                            </div>
                            <!-- Columna derecha -->
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="rol_user">Perfil:</label>
                                    <input type="text" class="form-control" id="rol_user" value="<?php echo $rol; ?>"
                                        disabled>
                                </div>
                                <div class="form-group">
                                    <label for="fecha_creacion">Fecha de Creaci&oacute;n:</label>
                                    <input type="text" class="form-control" id="fecha_creacion"
                                        value="<?php echo $fecha_creacion; ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="fecha_creacion">Fecha de Actualizaci&oacute;n:</label>
                                    <input type="text" class="form-control" id="fecha_creacion"
                                        value="<?php echo $fecha_actualizacion; ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="address_user">Dirección:</label>
                                    <input type="text" class="form-control" id="address_user"
                                        value="<?php echo $direccion; ?>" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="index.php" class="btn btn-primary"><i class="fas fa-arrow-circle-left"></i>
                            &nbsp;Regresar</a>
                    </div>
                </form>

            </div>
            <!-- /.card -->



        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>



<?php include '../layout/parte2.php'; ?>
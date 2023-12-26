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
                    <h1 class="m-0">Registro de un nuevo Usuario</h1>
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
                    <h3 class="card-title">Complete el formulario</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="../app/controller/usuarios/crear_usuario.php" method="POST" id="form_create_user">
                    <div class="card-body">
                        <div class="row">
                            <!-- Columna izquierda -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name_user">Nombre:</label>
                                    <input type="text" class="form-control" name="name_user" id="name_user"
                                        placeholder="Escriba su nombre">
                                </div>
                                <div class="form-group">
                                    <label for="apellido_user">Apellido:</label>
                                    <input type="text" class="form-control" name="apellido_user" id="apellido_user"
                                        placeholder="Escriba su apellido">
                                </div>
                                <div class="form-group">
                                    <label for="email_user">Usuario:</label>
                                    <input type="text" class="form-control" name="email_user" id="email_user"
                                        placeholder="Escriba su email">
                                </div>
                            </div>
                            <!-- Columna derecha -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Perfil:</label>
                                    <select class="custom-select" id="id_perfil" name="id_perfil">
                                        <?php
                                            while ($row_perfiles = mysqli_fetch_array($result_perfiles)) {
                                                echo '<option value="'.$row_perfiles['id_perfil'].'">'.$row_perfiles['rol'].'</option>';
                                            }
                                            echo '</select>';
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="password_user">Password</label>
                                    <input type="password" class="form-control" name="password_user" id="password_user"
                                        placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="password_repeat">Password</label>
                                    <input type="password" class="form-control" name="password_repeat"
                                        id="password_repeat" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="address_user">Dirección:</label>
                                    <input type="text" class="form-control" name="address_user" id="address_user"
                                        placeholder="Escriba su direccion">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> &nbsp;Registrar
                            Usuario</button>
                        <a href="index.php" class="btn btn-danger float-right"><i class="fas fa-times"></i> &nbsp;Cancelar</a>
                    </div>
                </form>

            </div>
            <!-- /.card -->



        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>



<?php include '../layout/parte2.php'; ?>
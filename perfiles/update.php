<?php
    include ('../app/config.php');
    include ('../layout/parte1.php');
    include ('../app/controller/perfiles/listado_perfiles.php');
    include ('../app/controller/perfiles/ver_perfiles.php');
    
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Actualizar los Perfiles</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">



            <!-- general form elements -->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Actualizar</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" action="../app/controller/perfiles/actualizar_perfil.php"
                                method="POST" id="form_update_user">

                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="id_perfil" class="col-sm-2 col-form-label">Id</label>
                                        <div class="col-sm-10">
                                        <input type="text" value="<?php echo $id_user_get; ?>" name="id_user" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Perfil</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword3" >
                                        </div>
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <a href="index.php" class="btn btn-danger"><i class="fas fa-ban"></i>
                                        &nbsp;Cancelar</a>
                                    <button type="submit" class="btn btn-primary float-right"><i
                                            class="fas fa-save"></i> &nbsp;Actualizar
                                        Usuario</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.card -->



        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>



<?php include '../layout/parte2.php'; ?>
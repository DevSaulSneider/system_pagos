<?php
    include ('../app/config.php');
    include ('../layout/parte1.php');
    include ('../app/controller/configuracion/datos_empresa.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">

                    <h1 class="m-0"><i class="fas fa-cogs"></i> Configuraci&oacute;n</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">


            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Datos de la Empresa:</h3>
                </div>


                <form class="form-horizontal" action="../app/controller/configuracion/actualizar_empresa.php" method="POST" id="form_actualizar_empresa">
                    <input type="text" name="id_usuario_actual" value="<?php echo $_SESSION['id_usuario']; ?>" hidden>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="nombre_empresa" class="col-sm-2 col-form-label">Empresa</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nombre_empresa" name="nombre_empresa" value="<?php echo $empresa; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ruc" class="col-sm-2 col-form-label">RUC</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="ruc" name="ruc" value="<?php echo $ruc; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="direccion_empresa" class="col-sm-2 col-form-label">Direcci&oacute;n</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="direccion_empresa" name="direccion_empresa" value="<?php echo $direccion; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="emailContact_empresa" class="col-sm-2 col-form-label">Email Cont&aacute;cto</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="emailContact_empresa" name="emailContact_empresa" value="<?php echo $emailContact; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="emailVentas_empresa" class="col-sm-2 col-form-label">Email Ventas</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="emailVentas_empresa" name="emailVentas_empresa" value="<?php echo $emailVentas; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="telFijo_empresa" class="col-sm-2 col-form-label">Tel&#233;fono Fijo</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="telFijo_empresa" name="telFijo_empresa" value="<?php echo $telefono; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="telMovil_empresa" class="col-sm-2 col-form-label">Tel&#233;fono M&oacute;vil</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="telMovil_empresa" name="telMovil_empresa" value="<?php echo $movil; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sitio_web" class="col-sm-2 col-form-label">Sitio Web</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="sitio_web" name="sitio_web" value="<?php echo $web; ?>">
                            </div>
                        </div>
                        
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-info"><i class="fas fa-save"></i>&nbsp; Guardar</button>
                        <a href="<?php echo $url; ?>" class="btn btn-danger float-right"><i class="fas fa-sign-out-alt"></i>&nbsp; Cancelar</a>
                    </div>

                </form>
            </div>


        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>

<?php include '../layout/parte2.php'; ?>
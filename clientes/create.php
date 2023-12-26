<?php
    include ('../app/config.php');
    include ('../layout/parte1.php');
    include ('../app/controller/servicios/listado_servicios.php');
    include ('../app/controller/periodos/listado_periodos.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Registro de un nuevo Cliente</h1>
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
                <form action="../app/controller/clientes/crear_cliente.php" method="POST" id="form_create_client">
                    <div class="card-body">

                        <div class="row">
                            <!-- Columna izquierda -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre_cliente">Nombre:</label>
                                    <input type="text" class="form-control" name="nombre_cliente" id="nombre_cliente" placeholder="Escriba su nombre">
                                </div>
                                <div class="form-group">
                                    <label for="correo_cliente">Correo:</label>
                                    <input type="email" class="form-control" name="correo_cliente" id="correo_cliente" placeholder="Escriba su email">
                                </div>
                                <div class="form-group">
                                    <label for="monto_a_pagar">Monto:</label>
                                    <input type="text" class="form-control" name="monto_a_pagar" id="monto_a_pagar" placeholder="S/ 0.00">
                                </div>
                                <div class="form-group">
                                    <label for="telefono_cliente">Tel&eacute;fono</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                                        </div>
                                        <input type="number" class="form-control" name="telefono_cliente" id="telefono_cliente"
                                            placeholder="999-999-999">
                                    </div>
                                </div>
                            </div>
                            <!-- Columna derecha -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="razon_social">Razon Social:</label>
                                    <input type="text" class="form-control" name="razon_social" id="razon_social" placeholder="Escriba su nombre">
                                </div>
                                <div class="form-group">
                                    <label for="periodo">Periodo:</label>
                                    <select class="custom-select" id="periodo" name="periodo">
                                        <?php
                                            while ($row_periodos = mysqli_fetch_array($result_periodos)) {
                                                echo '<option value="'.$row_periodos['id_periodo'].'">'.$row_periodos['meses'].' meses</option>';
                                            }
                                            echo '</select>';
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="servicio">Servicio:</label>
                                    <select class="custom-select" id="servicio" name="servicio">
                                        <?php
                                            while ($row_perfiles = mysqli_fetch_array($result_servicios)) {
                                                echo '<option value="'.$row_perfiles['id_servicio'].'">'.$row_perfiles['servicio'].'</option>';
                                            }
                                            echo '</select>';
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="primer_pago">Primer Pago</label>
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" name="primer_pago" id="primer_pago" placeholder="YYYY-MM-DD">
                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                            <div class="input-group-text">
                                                <i class="fas fa-calendar-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> &nbsp;Registrar Cliente</button>
                    </div>
                </form>

            </div>
            <!-- /.card -->



        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>



<?php include '../layout/parte2.php'; ?>

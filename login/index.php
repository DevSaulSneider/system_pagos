<?php
    include '../app/config.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>System Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../public/template/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../public/template/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="../public/template/AdminLTE-3.2.0/plugins/toastr/toastr.min.css"> 
    <!-- Theme style -->
    <link rel="stylesheet" href="../public/template/AdminLTE-3.2.0/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="../public/template/AdminLTE-3.2.0/index2.html" class="h1"><b>Sistema de</b> Control de Pagos</a>
            </div>
            <div class="card-body py-5">
                <p class="login-box-msg">Ingrese sus credenciales</p>

                <form action="../app/controller/login/ingresar.php" method="post" id="form_login">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Email" name="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password_user">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Iniciar Sesion</button>
                        </div>
                    </div>
                </form>

                <!-- <p class="mt-3">
                    <a href="../public/template/AdminLTE-3.2.0/pages/examples/register-v2.html" class="text-center">Crear nueva cuenta</a>
                </p> -->
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="../public/template/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../public/template/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../public/template/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
    <!-- Toastr -->
    <script src="../public/template/AdminLTE-3.2.0/plugins/toastr/toastr.min.js"></script>
    <!-- funciones propias -->
    <script>
    // Formulario del login
    $("#form_login").submit(function(e) {
        e.preventDefault();
        $.ajax({
                type: $(this).attr('method'),
                url: $(this).attr('action'),
                data: $(this).serialize()
            })
            .done(function(response) {
                let data = JSON.parse(response);
                if (data.success) {
                    window.location.href = data.url;
                } else {
                    toastr.error(data.message);
                }
            })
            .fail(function(error) {
                console.log("Error en la petición AJAX: ", error);
            });
    });
    </script>
</body>

</html>
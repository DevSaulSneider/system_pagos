<?php
    session_start();
    if (isset($_SESSION['id_usuario'])) {
        $id_user=$_SESSION['id_usuario'];
        $sql="SELECT * FROM usuarios WHERE id_usuario = '$id_user'";
        $result = mysqli_query($conexion, $sql);
        $row = mysqli_fetch_assoc($result);
        $email = $row['correo'];
        $nombre = $row['nombre'];

    }else {
        header("Location: $url/login/index.php");
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> 
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $url; ?>/public/template/AdminLTE-3.2.0/dist/css/adminlte.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?php echo $url; ?>/public/template/AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo $url; ?>/public/template/AdminLTE-3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>/public/template/AdminLTE-3.2.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>/public/template/AdminLTE-3.2.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Mis estilos css -->
    <link rel="stylesheet" href="<?php echo $url; ?>/public/css/style.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Menu de usuario -->
                <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="<?php echo $url; ?>/public/template/AdminLTE-3.2.0/dist/img/user2-160x160.jpg"
                            class="user-image img-circle elevation-2" alt="User Image">
                        <span class="d-none d-md-inline"><?php echo $nombre; ?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">

                        <li class="user-header bg-primary">
                            <img src="<?php echo $url; ?>/public/template/AdminLTE-3.2.0/dist/img/user2-160x160.jpg"
                                class="img-circle elevation-2" alt="User Image">
                            <p>
                                <?php echo $nombre; ?> - Web Developer
                                <small><?php echo $email; ?></small>
                            </p>
                        </li>

                        <li class="user-body">
                            <div class="row">
                                <div class="col-4 text-center">
                                    <a href="#">Historial</a>
                                </div>
                                <div class="col-4 text-center">
                                    <a href="#">Sales</a>
                                </div>
                                <div class="col-4 text-center">
                                    <a href="#">Friends</a>
                                </div>
                            </div>

                        </li>

                        <li class="user-footer">
                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                            <a href="<?php echo $url; ?>/app/controller/login/cerrar_sesion.php"
                                class="btn btn-danger btn-flat float-right rounded"><i class="fas fa-sign-out-alt"></i>
                                Cerrar Sesion</a>
                        </li>
                    </ul>
                </li>
                <!-- fin menu usuario -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?php echo $url; ?>" class="brand-link">
                <img src="<?php echo $url; ?>/public/template/AdminLTE-3.2.0/dist/img/AdminLTELogo.png"
                    alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">SYSTEM PAGOS</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php echo $url; ?>/public/template/AdminLTE-3.2.0/dist/img/user2-160x160.jpg"
                            class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?php echo $nombre; ?></a>
                    </div>
                </div>



                <!-- Sidebar Menu -->
                <nav class="mt-2">

                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <!-- Modulo Configuracion -->
                        <li class="nav-item">
                            <a href="<?php echo $url; ?>/configuracion/" class="nav-link">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>Configuraci&oacute;n</p>
                            </a>
                        </li>

                        <!-- Modulo clientes -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Clientes
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $url; ?>/clientes" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Listado de Clientes</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo $url; ?>/clientes/create.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Crear Clientes</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Modulo usuarios -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Usuarios
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $url; ?>/usuarios" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Listado de Usuarios</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo $url; ?>/usuarios/create.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Crear Usuarios</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Modulo Pagos -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-money-bill-alt"></i>
                                <p>
                                    Pagos
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $url; ?>/pagos/pendientes.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pagos Pendientes</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo $url; ?>/pagos/confirmar.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Confirmar Pagos</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo $url; ?>/pagos/historial.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Historial de Pagos</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Modulo Perfiles -->
                        <li class="nav-item">
                            <a href="<?php echo $url; ?>/perfiles/" class="nav-link">
                                <i class="nav-icon fas fa-address-card"></i>
                                <p>Perfiles</p>
                            </a>
                        </li>

                        <!-- Modulo Servicios -->
                        <li class="nav-item">
                            <a href="<?php echo $url; ?>/servicios/" class="nav-link">
                                <i class="nav-icon fas fa-laptop-code"></i>
                                <p>Servicios</p>
                            </a>
                        </li>

                        <!-- Modulo Servicios -->
                        <li class="nav-item">
                            <a href="<?php echo $url; ?>/periodos/" class="nav-link">
                                <i class="nav-icon fas fa-calendar-alt"></i>
                                <p>Periodos</p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
<?php
    include '../../../app/config.php';
    session_start();
    if (isset($_SESSION['id_usuario'])) {
        session_destroy();
        header("Location: $url");
    }
?>
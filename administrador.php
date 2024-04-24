<?php
session_start();
if (isset($_SESSION['Admin'])) {
?>

    <?php require 'bd.inc.php'; ?>

    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>FUNESBO</title>
        <link rel="shortcut icon" href="../src/img/funesboLOGOt.PNG">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
        <meta name="description" content="This is an example dashboard created using build-in elements and components.">
        <meta name="msapplication-tap-highlight" content="no">
        <link href="./css/main.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../src/DataTables/datatables.min.css">
        <link rel="stylesheet" type="text/css" href="./css/sweetalert2.min.css">

        <script src="./assets/scripts/sweetalert2.min.js"></script>

        <script type="text/javascript" charset="utf8" src="../src/bootstrap4/js/fotopreview.js"></script>

        <!-- jquery.dataTables.min.js first, then dataTables.bootstrap4.min.js, then datatablecaller.js -->
        <script type="text/javascript" charset="utf8" src="../src/DataTables/jQuery-3.3.1/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="./assets/scripts/main.js"></script>

        <script type="text/javascript" charset="utf8" src="../src/DataTables/DataTables-1.10.21/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" charset="utf8" src="../src/DataTables/DataTables-1.10.21/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript" charset="utf8" src="../src/DataTables/DataTables-1.10.21/js/datatablecallertabla.js"></script>

    </head>

    <body>
        <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
            <div class="app-header header-shadow bg-primary header-text-light">
                <div class="app-header__logo">

                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>

                <div class="app-header__content">
                    <div class="app-header-right">
                        <div class="header-btn-lg pr-0">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">

                                    <div class="widget-content-left mr-2">
                                        <div class="widget-heading">

                                            <?php
                                            $idu = $_SESSION['idu'];
                                            require 'includes/bd.inc.php';
                                            $sql = "SELECT * from usuarios where idu='$idu'";
                                            $result = mysqli_query($conn, $sql);
                                            while ($mostrar = mysqli_fetch_array($result)) {
                                            ?>

                                            <?php echo $mostrar['usuario'];
                                            } ?>

                                        </div>
                                        <div class="widget-subheading">
                                            Administrador
                                        </div>
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="btn-group">

                                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">

                                                <?php
                                                $idu = $_SESSION['idu'];
                                                require 'includes/bd.inc.php';
                                                $sql = "SELECT * from usuarios where idu='$idu'";
                                                $result = mysqli_query($conn, $sql);
                                                while ($mostrar = mysqli_fetch_array($result)) {
                                                ?>

                                                    <img width="45" height="45" class="rounded-circle" src="assets/images/avatars/<?php echo $mostrar['foto'];
                                                                                                                                } ?>" alt="">
                                                    <i class="fa fa-angle-down ml-2 opacity-8"></i>

                                            </a>

                                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">

                                                <button type="button" tabindex="0" class="dropdown-item" data-toggle="modal" data-target="#modaleditaruser">Editar perfil</button>

                                                <div tabindex="-1" class="dropdown-divider"></div>

                                                <button type="button" tabindex="0" class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
                                                    Cerrar
                                                    Sesion
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="app-main">
                <div class="app-sidebar sidebar-shadow bg-dark sidebar-text-light">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>
                    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading text-center">MENÚ</li>

                                <li>
                                    <a href="administrador.php" style="opacity: 1;" class="mm-active">
                                        <i class="metismenu-icon pe-7s-home"></i>
                                        Inicio
                                    </a>
                                </li>
                                <li>
                                    <a href="administradorha.php">
                                        <i class="metismenu-icon pe-7s-door-lock"></i>
                                        Habitaciones
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Ayuda</li>
                                <li>
                                    <a href="./Manual%20Tecnico%20FUNESBO.pdf">
                                        <i class="metismenu-icon pe-7s-notebook"></i>
                                        Manual tecnico
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <img class="img-thumbnail" src="../src/img/funesboLOGOt.PNG" width="70" height="60" alt="logo">
                                    <div class="ml-2">

                                        <?php
                                        $idu = $_SESSION['idu'];
                                        require 'includes/bd.inc.php';
                                        $sql = "SELECT * from usuarios where idu='$idu'";
                                        $result = mysqli_query($conn, $sql);
                                        while ($mostrar = mysqli_fetch_array($result)) {
                                        ?>

                                            ¡Hola <strong><?php echo $mostrar['usuario'];
                                                        } ?></strong>!
                                            <div class="h6">
                                                Bienvenido al <strong class="text-black">Sistema</strong>
                                            </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <div class="d-inline-block">
                                        <a href="./Manual%20Usuario%20FUNESBO.pdf" class="btn-shadow btn btn-danger">
                                            <i class="metismenu-icon pe-7s-notebook"></i>
                                            Manual de Usuario
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-warning">
                                    <div class="widget-content-wrapper text-black">
                                        <div class="widget-content-left">
                                            <div class="widget-heading text-black">Habitaciones Ocupadas</div>
                                        </div>
                                        <div class="widget-content-right">

                                            <?php
                                            require 'includes/bd.inc.php';
                                            $statush = '1';
                                            $sql = "SELECT count(*) AS total FROM pacientes where statush='$statush'";
                                            $result = mysqli_query($conn, $sql);
                                            while ($mostrar = mysqli_fetch_array($result)) {
                                            ?>
                                                <div class="widget-numbers text-black">
                                                    <span><?php echo $mostrar['total']; ?>
                                                    </span>
                                                </div>
                                            <?php } ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-grow-early">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Habitaciones Disponibles</div>
                                        </div>
                                        <div class="widget-content-right">

                                            <?php
                                            require 'includes/bd.inc.php';
                                            $max_count = 12; // valor máximo a mostrar por defecto
                                            $statush = '1'; // valor a buscar en la tabla
                                            $sql = "SELECT COUNT(*) AS total FROM pacientes WHERE statush='$statush'";
                                            $result = mysqli_query($conn, $sql);
                                            if ($result && mysqli_num_rows($result) > 0) {
                                                $mostrar = mysqli_fetch_assoc($result);
                                                $count = $max_count - $mostrar['total']; // calcular el valor a mostrar
                                                if ($count < 0) {
                                                    $count = 0; // asegurarse de que el valor no sea negativo
                                                }
                                            } else {
                                                $count = $max_count; // en caso de error, mostrar valor máximo
                                            }
                                            ?>
                                            <div class="widget-numbers text-white">
                                                <span><?php echo $count; ?></span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-asteroid header-text-light">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Total de Habitaciones</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white">
                                                <span>12
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header py-3 d-sm-flex align-item-center justify-content-between">
                                        <div class="py-3 align-item-center justify-content-between">
                                            <a data-toggle="modal" href="#nuevoregistro" class="btn-shadow btn btn-primary">
                                                <i class="pe-7s-plus"></i>
                                                Nuevo Paciente
                                            </a>
                                        </div>
                                        Listado
                                        <div class="py-3 align-item-center justify-content-between">
                                            <a href="pdf.php" class="btn-shadow btn btn-danger">
                                                <i class="fa fa-file-pdf"></i>
                                                Generar PDF
                                            </a>
                                            <a href="includes/excel.php?export=true" class="btn-shadow btn btn-success">
                                                <i class="fa fa-file-excel"></i>
                                                Generar EXCEL
                                            </a>
                                        </div>
                                    </div>
                                    <?php
                                    if (empty($_GET['alert'])) {
                                        echo "";
                                    } elseif ($_GET['alert'] == 'login=success') {
                                        echo "<div class='alert alert-dismissible alert-success'>
                                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                                        <strong>¡Muy bien!</strong> Los datos han sido almacenados<a href='#' class='alert-link'> correctamente</a>.
                                        </div>";
                                    } elseif ($_GET['alert'] == 2) {
                                        echo "<div class='alert alert-dismissible alert-success'>
                                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                                        <strong>¡Muy bien!</strong> Los datos se han modificado<a href='#' class='alert-link'> correctamente</a>.
                                        </div>";
                                    } elseif ($_GET['alert'] == 3) {
                                        echo "<div class='alert alert-dismissible alert-success'>
                                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                                        <strong>Completado!</strong> Se eliminaron los datos<a href='#' class='alert-link'> correctamente</a>.
                                        </div>";
                                    }
                                    ?>

                                    <div class="table-responsive p-2">
                                        <table id="tabla" class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Habitacion</th>
                                                    <th class="text-center">Paciente</th>
                                                    <th class="text-center">Cedula</th>
                                                    <th class="text-center">Edad</th>
                                                    <th class="text-center">Sexo</th>
                                                    <th class="text-center">Estado</th>
                                                    <th class="text-center">Municipio</th>
                                                    <th class="text-center">Parroquia</th>
                                                    <th class="text-center">Patologia</th>
                                                    <th class="text-center">Fecha ingreso</th>
                                                    <th class="text-center">Fecha egreso</th>
                                                    <th class="text-center">Estatus</th>
                                                    <th class="text-center">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                require 'includes/bd.inc.php';
                                                $sql = "SELECT * from pacientes";
                                                $result = mysqli_query($conn, $sql);
                                                while ($mostrar = mysqli_fetch_array($result)) {
                                                ?>
                                                    <tr>
                                                        <td class="text-center">
                                                            <div>
                                                                <button class="btn btn-primary btn-habitacion" data-target="#modalacompañantes" data-toggle="modal" data-placement="left" data-idp="<?php echo $mostrar['idp']; ?>" title="Ver Acompañantes">
                                                                    <?php echo $mostrar['idh']; ?>
                                                                </button>
                                                            </div>
                                                        </td>
                                                        <td class="text-center"><?php echo $mostrar['paciente']; ?></td>
                                                        <td class="text-center"><?php echo $mostrar['cedula']; ?></td>
                                                        <td class="text-center"><?php echo $mostrar['edad']; ?></td>
                                                        <td class="text-center"><?php echo $mostrar['sexo']; ?></td>
                                                        <td class="text-center"><?php echo $mostrar['estado']; ?></td>
                                                        <td class="text-center"><?php echo $mostrar['municipio']; ?></td>
                                                        <td class="text-center"><?php echo $mostrar['parroquia']; ?></td>
                                                        <td class="text-center"><?php echo $mostrar['patologia']; ?></td>
                                                        <td class="text-center"><?php echo $mostrar['fechai']; ?></td>
                                                        <td class="text-center"><?php echo $mostrar['fechae']; ?></td>
                                                        <td class="text-center">
                                                            <?php
                                                            $statush = $mostrar['statush'];
                                                            $idp = $mostrar['idp'];
                                                            $idh = $mostrar['idh'];

                                                            if ($statush == '1') {
                                                            ?>
                                                                <div>
                                                                    <form action="includes/cambiarestado.inc.php" method="post">
                                                                        <input type="hidden" name="idp" value="<?php echo $idp; ?>">
                                                                        <input type="hidden" name="idh" value="<?php echo $idh; ?>">
                                                                        <button class="btn btn-warning" type="submit" name="cambiar" data-toggle="tooltip" data-placement="left" title="Cambiar status">
                                                                            Ocupada
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <div class="btn btn-success">Disponible</div>
                                                            <?php
                                                            }
                                                            ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="row">

                                                                <button class="btn btn-primary" data-target="#editarpaciente" data-toggle="modal" data-placement="left" data-idpeditar="<?php echo $mostrar['idp']; ?>" title="Modificar Solicitud"><i class="pe-7s-note"></i></button>

                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="d-block text-center card-footer">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner bg-dark sidebar-text-light">
                                <div class="container text-center text-white">
                                    <small>Todos los derechos reservados &copy;</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modales -->

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">x</span>
                        </button>
                    </div>
                    <div class="modal-body">Seleccione "Cerrar Sesión" si quiere terminar la sesión actual.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        <a class="btn btn-primary" href="login.php">Cerrar Sesión</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Editar usuario -->

        <div class="modal fade" id="modaleditaruser" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Editar su usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form class="needs-validation" action="includes/mod.user.inc.php" method="post" enctype="multipart/form-data" novalidate>
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="col-md-12 mb-3">

                                    <?php

                                    $idu = $_SESSION['idu'];

                                    include 'includes/bd.inc.php';

                                    $sql = "SELECT * FROM usuarios WHERE idu='$idu'";
                                    $result = mysqli_query($conn, $sql);
                                    $mostrar = mysqli_fetch_array($result); ?>

                                    <input type="hidden" name="idu" value="<?php echo $mostrar['idu']; ?>">

                                    <label for="usuario">Usuario</label>

                                    <input type="text" id="usuario" name='usuario' class="form-control" placeholder="Usuario" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))" value="<?php echo $mostrar['usuario']; ?>" maxlength="30" required>
                                    <div class="invalid-feedback">
                                        Debe rellenar este campo.
                                    </div>
                                    <div class="valid-feedback">
                                        Listo.
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">


                                <div class="col-md-6 mb-3">

                                    <label for="cedula">Cedula</label>

                                    <input type="text" id="cedula" name="cedula" class="form-control" placeholder="Cedula" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" value="<?php echo $mostrar['cedula']; ?>" maxlength="8" required>
                                    <div class="invalid-feedback">
                                        Debe rellenar este campo.
                                    </div>
                                    <div class="valid-feedback">
                                        Listo.
                                    </div>
                                </div>

                                <div class="col-md-5 mb-3">

                                    <label for="contra">Contraseña</label>

                                    <input type="password" id="contra" name="contra" class="form-control" placeholder="Contraseña" value="<?php echo $mostrar['contra']; ?>" required>

                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>
                                    <div class="valid-feedback">
                                        Listo.
                                    </div>
                                </div>

                                <span toggle="#contra" class="fa fa-fw fa-eye field_icon toggle-password"></span>

                                <div>

                                    <?php
                                    $idu = $_SESSION['idu'];
                                    require 'includes/bd.inc.php';
                                    $sql = "SELECT * from usuarios where idu='$idu'";
                                    $result = mysqli_query($conn, $sql);
                                    while ($mostrar = mysqli_fetch_array($result)) {
                                    ?>

                                        <img id="uploadPreview1" class="card border" width="150" height="150" src="../architectui-html-free/assets/images/avatars/<?php echo $mostrar['foto'];
                                                                                                                                                                } ?>" />

                                        <div class="card-body">
                                            <input id="uploadImage1" type="file" name="images1" onchange="previewImage(1);" />
                                        </div>

                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" name="modificar" class="btn btn-primary">Listo</button>
                        </div>
                    </form>

                    <script type="text/javascript" src="./assets/scripts/validarformularios.js"></script>
                    <script type="text/javascript" src="../src/bootstrap4/js/passwordhidder.js"></script>
                </div>
            </div>
        </div>

        <!-- Nuevo Paciente -->

        <div class="modal fade" id="nuevoregistro" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">

                        <h5 class="modal-title" id="exampleModalLongTitle">Registro de Usuario</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>

                    <form class="needs-validation" action="includes/registropaciente.inc.php" method="post" novalidate>

                        <div class="modal-body">

                            <div class="form-row">

                                <div class="col-md-4 mb-3">

                                    <label for="paciente">Nombre y Apellido</label>

                                    <input type="text" class="form-control" id="paciente" name='paciente' placeholder="Nombre y Apellido" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))" maxlength="30" required>

                                    <div class="invalid-feedback">
                                        Debe rellenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>

                                <div class="col-md-4 mb-3">

                                    <label for="cedula">Cedula</label>

                                    <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Cedula" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" maxlength="8" required>

                                    <div class="invalid-feedback">
                                        Debe rellenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>
                                <div class="col-md-2 mb-3">

                                    <label for="edad">Edad</label>

                                    <input type="text" class="form-control" id="edad" name="edad" placeholder="Edad" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" maxlength="8" required>

                                    <div class="invalid-feedback">
                                        Debe rellenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>
                                <div class="col-md-2 mb-3">

                                    <label for="sexo">Sexo</label>

                                    <select id="sexo" name="sexo" class="form-control">

                                        <option value="M">Masculino</option>
                                        <option value="F">Femenino</option>

                                    </select>

                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>

                            </div>

                            <div class="form-row">

                                <div class="col-md-4 mb-3">

                                    <label for="estado">Estado</label>

                                    <select id="estado" name="estado" class="form-control">

                                        <option value="Bolivar">Bolivar</option>
                                        <option value="Anzoategui">Anzoategui</option>
                                        <option value="Merida">Merida</option>
                                        <option value="Trujillo">Trujillo</option>

                                    </select>

                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>
                                <div class="col-md-4 mb-3">

                                    <label for="municipio">Municipio</label>

                                    <select id="municipio" name="municipio" class="form-control">

                                        <option value="Sucre">Sucre</option>
                                        <option value="Cedeno">Cedeno</option>
                                        <option value="Angostura del Orinoco">Angostura del Orinoco</option>
                                        <option value="Padre Chien">Padre Chien</option>

                                    </select>

                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>
                                <div class="col-md-4 mb-3">

                                    <label for="parroquia">Parroquia</label>

                                    <select id="parroquia" name="parroquia" class="form-control">

                                        <option value="Marhuanta">Marhuanta</option>
                                        <option value="Vista Hermosa">Vista Hermosa</option>
                                        <option value="Catedral">Catedral</option>
                                        <option value="Sabanita">Sabanita</option>

                                    </select>

                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>

                            </div>

                            <div class="form-row">

                                <div class="col-md-4 mb-3">

                                    <label for="patologia">Patologia</label>

                                    <select id="patologia" name="patologia" class="form-control">

                                        <option value="Gripe">Gripe</option>
                                        <option value="Fiebre">Fiebre</option>
                                        <option value="Tos">Tos</option>
                                        <option value="Malestar">Malestar</option>

                                    </select>

                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="idh">Habitacion</label>

                                    <select id="idh" name="idh" class="form-control">
                                        <?php
                                        require 'includes/bd.inc.php';
                                        $idp = $_POST['idp'];
                                        $sql = "SELECT * from habitaciones WHERE estatus = 0";
                                        $result = mysqli_query($conn, $sql);
                                        while ($mostrar = mysqli_fetch_array($result)) {
                                        ?>

                                            <option value="<?php echo $mostrar['idh']; ?>"><?php echo $mostrar['idh']; ?></option>

                                        <?php } ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="modal-footer">

                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" name="submit1" class="btn btn-primary">Registrar</button>

                        </div>

                    </form>

                    <script type="text/javascript" src="./assets/scripts/validarformularios.js"></script>
                </div>
            </div>

        </div>

        <!-- Editar Paciente -->

        <div class="modal fade" id="editarpaciente" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">

                        <h5 class="modal-title" id="exampleModalLongTitle">Editar de Paciente</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>

                    <form class="needs-validation" action="includes/mod.paciente.inc.php" method="post" novalidate>

                        <div class="modal-body">

                            <div class="form-row">

                                <div class="col-md-4 mb-3">

                                    <input type="hidden" name="idpEditar" id="idpEditar">

                                    <label for="pacienteEditar">Nombre y Apellido</label>

                                    <input type="text" class="form-control" id="pacienteEditar" name='pacienteEditar' placeholder="Nombre y Apellido" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))" maxlength="30" required>

                                    <div class="invalid-feedback">
                                        Debe rellenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>

                                <div class="col-md-4 mb-3">

                                    <label for="cedulaEditar">Cedula</label>

                                    <input type="text" class="form-control" id="cedulaEditar" name="cedulaEditar" placeholder="Cedula" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" maxlength="8" required>

                                    <div class="invalid-feedback">
                                        Debe rellenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>
                                <div class="col-md-2 mb-3">

                                    <label for="edadEditar">Edad</label>

                                    <input type="text" class="form-control" id="edadEditar" name="edadEditar" placeholder="Edad" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" maxlength="8" required>

                                    <div class="invalid-feedback">
                                        Debe rellenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>
                                <div class="col-md-2 mb-3">

                                    <label for="sexoEditar">Sexo</label>

                                    <select id="sexoEditar" name="sexoEditar" class="form-control">

                                        <option value="M">Masculino</option>
                                        <option value="F">Femenino</option>

                                    </select>

                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>

                            </div>

                            <div class="form-row">

                                <div class="col-md-4 mb-3">

                                    <label for="estadoEditar">Estado</label>

                                    <select id="estadoEditar" name="estadoEditar" class="form-control">

                                        <option value="Bolivar">Bolivar</option>
                                        <option value="Anzoategui">Anzoategui</option>
                                        <option value="Merida">Merida</option>
                                        <option value="Trujillo">Trujillo</option>

                                    </select>

                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>
                                <div class="col-md-4 mb-3">

                                    <label for="municipioEditar">Municipio</label>

                                    <select id="municipioEditar" name="municipioEditar" class="form-control">

                                        <option value="Sucre">Sucre</option>
                                        <option value="Cedeno">Cedeno</option>
                                        <option value="Angostura del Orinoco">Angostura del Orinoco</option>
                                        <option value="Padre Chien">Padre Chien</option>

                                    </select>

                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>
                                <div class="col-md-4 mb-3">

                                    <label for="parroquiaEditar">Parroquia</label>

                                    <select id="parroquiaEditar" name="parroquiaEditar" class="form-control">

                                        <option value="Marhuanta">Marhuanta</option>
                                        <option value="Vista Hermosa">Vista Hermosa</option>
                                        <option value="Catedral">Catedral</option>
                                        <option value="Sabanita">Sabanita</option>

                                    </select>

                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>

                            </div>

                            <div class="form-row">

                                <div class="col-md-4 mb-3">

                                    <label for="patologiaEditar">Patologia</label>

                                    <select id="patologiaEditar" name="patologiaEditar" class="form-control">

                                        <option value="Gripe">Gripe</option>
                                        <option value="Fiebre">Fiebre</option>
                                        <option value="Tos">Tos</option>
                                        <option value="Malestar">Malestar</option>

                                    </select>

                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="modal-footer">

                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" name="modificar" class="btn btn-primary">Registrar</button>

                        </div>

                    </form>

                    <script type="text/javascript" src="./assets/scripts/validarformularios.js"></script>
                </div>
            </div>

        </div>

        <!-- Modal Acompañante -->

        <div class="modal fade" id="modalacompañantes" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">

                        <h5 class="modal-title" id="exampleModalLongTitle">Lista de Acompañantes</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-header py-3 d-sm-flex align-item-center justify-content-between">
                                    <div class="py-3 align-item-center justify-content-between">
                                        <a data-toggle="modal" href="#nuevoregistroacompanante" class="btn-shadow btn btn-primary">
                                            <i class="pe-7s-plus"></i>
                                            Nuevo Acompañante
                                        </a>
                                    </div>
                                    <div class="py-3 align-item-center justify-content-between">
                                        <a href="pdfa.php" class="btn-shadow btn btn-danger">
                                            <i class="fa fa-file-pdf"></i>
                                            Generar PDF
                                        </a>
                                        <a href="includes/excela.php?export=true" class="btn-shadow btn btn-success">
                                            <i class="fa fa-file-excel"></i>
                                            Generar EXCEL
                                        </a>
                                    </div>
                                </div>
                                <?php
                                if (empty($_GET['alert'])) {
                                    echo "";
                                } elseif ($_GET['alert'] == 'login=success') {
                                    echo "<div class='alert alert-dismissible alert-success'>
                                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                                        <strong>¡Muy bien!</strong> Los datos han sido almacenados<a href='#' class='alert-link'> correctamente</a>.
                                        </div>";
                                } elseif ($_GET['alert'] == 2) {
                                    echo "<div class='alert alert-dismissible alert-success'>
                                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                                        <strong>¡Muy bien!</strong> Los datos se han modificado<a href='#' class='alert-link'> correctamente</a>.
                                        </div>";
                                } elseif ($_GET['alert'] == 3) {
                                    echo "<div class='alert alert-dismissible alert-success'>
                                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                                        <strong>Completado!</strong> Se eliminaron los datos<a href='#' class='alert-link'> correctamente</a>.
                                        </div>";
                                }
                                ?>

                                <div id="contenido-modal" class="table-responsive p-2">
                                    <table id="tabla-acompanantes-body" class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Acompañante</th>
                                                <th class="text-center">Cedula</th>
                                                <th class="text-center">Edad</th>
                                                <th class="text-center">Sexo</th>
                                                <th class="text-center">Estado</th>
                                                <th class="text-center">Municipio</th>
                                                <th class="text-center">Parroquia</th>
                                                <th class="text-center">Fecha ingreso</th>
                                                <th class="text-center">Fecha egreso</th>
                                                <th class="text-center">Estatus</th>
                                                <th class="text-center">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            require 'includes/bd.inc.php';
                                            $idp = $_POST['idp'];
                                            $sql = "SELECT * from acompanantes WHERE idp = $idp";
                                            $result = mysqli_query($conn, $sql);
                                            while ($mostrar = mysqli_fetch_array($result)) {
                                            ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $mostrar['acompanante']; ?></td>
                                                    <td class="text-center"><?php echo $mostrar['cedula']; ?></td>
                                                    <td class="text-center"><?php echo $mostrar['edad']; ?></td>
                                                    <td class="text-center"><?php echo $mostrar['sexo']; ?></td>
                                                    <td class="text-center"><?php echo $mostrar['estado']; ?></td>
                                                    <td class="text-center"><?php echo $mostrar['municipio']; ?></td>
                                                    <td class="text-center"><?php echo $mostrar['parroquia']; ?></td>
                                                    <td class="text-center"><?php echo $mostrar['fechai']; ?></td>
                                                    <td class="text-center"><?php echo $mostrar['fechae']; ?></td>
                                                    <td class="text-center">
                                                        <?php
                                                        $statusa = $mostrar['statusa'];
                                                        $ida = $mostrar['ida'];

                                                        if ($statusa == '1') {
                                                            echo '<div>
                                                            
                                                            <form action="includes/cambiarestadoacompanante.inc.php" method="post">
                                                            
                                                                <input type="hidden" name="ida" value="' . $ida;

                                                            echo '">
                                                                
                                                                <button class="btn btn-warning" type="submit" name="cambiar" data-toggle="tooltip" data-placement="left" title="Cambiar status">
                                                                Hospedado
                                                                </button>
                                                                
                                                            </form>
                                                            </div>';
                                                        } else {
                                                            echo '<div class="btn btn-success">Retirado</div>';
                                                        } ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="row">

                                                            <button class="btn btn-primary" data-target="#editaracompanante" data-toggle="modal" data-placement="left" data-idaeditar="<?php echo $mostrar['ida']; ?>" title="Modificar Solicitud"><i class="pe-7s-note"></i></button>

                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-block text-center card-footer">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" name="modificar" class="btn btn-primary">Registrar</button>

                    </div>

                    <script type="text/javascript" src="./assets/scripts/validarformularios.js"></script>

                </div>
            </div>

        </div>

        <!-- Nuevo Acompañante-->

        <div class="modal fade" id="nuevoregistroacompanante" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">

                        <h5 class="modal-title" id="exampleModalLongTitle">Registro de Acompañante</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>

                    <form class="needs-validation" action="includes/registroacompanante.inc.php" method="post" novalidate>

                        <div class="modal-body">

                            <div class="form-row">

                                <div class="col-md-4 mb-3">
                                    <input type="hidden" id="idp" name="idp" value="" required>

                                    <label for="acompanante">Nombre y Apellido</label>

                                    <input type="text" class="form-control" id="acompanante" name='acompanante' placeholder="Nombre y Apellido" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))" maxlength="30" required>

                                    <div class="invalid-feedback">
                                        Debe rellenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>

                                <div class="col-md-4 mb-3">

                                    <label for="cedula">Cedula</label>

                                    <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Cedula" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" maxlength="8" required>

                                    <div class="invalid-feedback">
                                        Debe rellenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>
                                <div class="col-md-2 mb-3">

                                    <label for="edad">Edad</label>

                                    <input type="text" class="form-control" id="edad" name="edad" placeholder="Edad" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" maxlength="8" required>

                                    <div class="invalid-feedback">
                                        Debe rellenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>
                                <div class="col-md-2 mb-3">

                                    <label for="sexo">Sexo</label>

                                    <select id="sexo" name="sexo" class="form-control">

                                        <option value="M">Masculino</option>
                                        <option value="F">Femenino</option>

                                    </select>

                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>

                            </div>

                            <div class="form-row">

                                <div class="col-md-4 mb-3">

                                    <label for="estado">Estado</label>

                                    <select id="estado" name="estado" class="form-control">

                                        <option value="Bolivar">Bolivar</option>
                                        <option value="Anzoategui">Anzoategui</option>
                                        <option value="Merida">Merida</option>
                                        <option value="Trujillo">Trujillo</option>

                                    </select>

                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>
                                <div class="col-md-4 mb-3">

                                    <label for="municipio">Municipio</label>

                                    <select id="municipio" name="municipio" class="form-control">

                                        <option value="Sucre">Sucre</option>
                                        <option value="Cedeno">Cedeno</option>
                                        <option value="Angostura del Orinoco">Angostura del Orinoco</option>
                                        <option value="Padre Chien">Padre Chien</option>

                                    </select>

                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>
                                <div class="col-md-4 mb-3">

                                    <label for="parroquia">Parroquia</label>

                                    <select id="parroquia" name="parroquia" class="form-control">

                                        <option value="Marhuanta">Marhuanta</option>
                                        <option value="Vista Hermosa">Vista Hermosa</option>
                                        <option value="Catedral">Catedral</option>
                                        <option value="Sabanita">Sabanita</option>

                                    </select>

                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="modal-footer">

                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" name="submit1" class="btn btn-primary">Registrar</button>

                        </div>

                    </form>

                    <script type="text/javascript" src="./assets/scripts/validarformularios.js"></script>
                </div>
            </div>

        </div>

        <!-- Editar Acompañante -->

        <div class="modal fade" id="editaracompanante" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">

                        <h5 class="modal-title" id="exampleModalLongTitle">Editar de Acompañante</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>

                    <form class="needs-validation" action="includes/mod.acompanante.inc.php" method="post" novalidate>

                        <div class="modal-body">

                            <div class="form-row">

                                <div class="col-md-4 mb-3">

                                    <input type="hidden" name="idaEditarA" id="idaEditarA">

                                    <label for="acompananteEditarA">Nombre y Apellido</label>

                                    <input type="text" class="form-control" id="acompananteEditarA" name='acompananteEditarA' placeholder="Nombre y Apellido" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))" maxlength="30" required>

                                    <div class="invalid-feedback">
                                        Debe rellenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>

                                <div class="col-md-4 mb-3">

                                    <label for="cedulaEditarA">Cedula</label>

                                    <input type="text" class="form-control" id="cedulaEditarA" name="cedulaEditarA" placeholder="Cedula" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" maxlength="8" required>

                                    <div class="invalid-feedback">
                                        Debe rellenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>
                                <div class="col-md-2 mb-3">

                                    <label for="edadEditarA">Edad</label>

                                    <input type="text" class="form-control" id="edadEditarA" name="edadEditarA" placeholder="Edad" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" maxlength="8" required>

                                    <div class="invalid-feedback">
                                        Debe rellenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>
                                <div class="col-md-2 mb-3">

                                    <label for="sexoEditarA">Sexo</label>

                                    <select id="sexoEditarA" name="sexoEditarA" class="form-control">

                                        <option value="M">Masculino</option>
                                        <option value="F">Femenino</option>

                                    </select>

                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>

                            </div>

                            <div class="form-row">

                                <div class="col-md-4 mb-3">

                                    <label for="estadoEditarA">Estado</label>

                                    <select id="estadoEditarA" name="estadoEditarA" class="form-control">

                                        <option value="Bolivar">Bolivar</option>
                                        <option value="Anzoategui">Anzoategui</option>
                                        <option value="Merida">Merida</option>
                                        <option value="Trujillo">Trujillo</option>

                                    </select>

                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>
                                <div class="col-md-4 mb-3">

                                    <label for="municipioEditarA">Municipio</label>

                                    <select id="municipioEditarA" name="municipioEditarA" class="form-control">

                                        <option value="Sucre">Sucre</option>
                                        <option value="Cedeno">Cedeno</option>
                                        <option value="Angostura del Orinoco">Angostura del Orinoco</option>
                                        <option value="Padre Chien">Padre Chien</option>

                                    </select>

                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>
                                <div class="col-md-4 mb-3">

                                    <label for="parroquiaEditarA">Parroquia</label>

                                    <select id="parroquiaEditarA" name="parroquiaEditarA" class="form-control">

                                        <option value="Marhuanta">Marhuanta</option>
                                        <option value="Vista Hermosa">Vista Hermosa</option>
                                        <option value="Catedral">Catedral</option>
                                        <option value="Sabanita">Sabanita</option>

                                    </select>

                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="modal-footer">

                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" name="modificar" class="btn btn-primary">Registrar</button>

                        </div>

                    </form>

                    <script type="text/javascript" src="./assets/scripts/validarformularios.js"></script>
                </div>
            </div>

        </div>

    <?php
} else {
    ?> <script>
            alert("Debe Iniciar Sesion.");
            window.location.href = "login.php";
        </script> <?php

                }
                    ?>

    <?php
    if (isset($_GET['success']) && $_GET['success'] == 1) {
    ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Credenciales correctos.',
                text: 'Sesion iniciada',
                timer: 2000,
                showConfirmButton: false
            });
        </script>
    <?php
    }
    ?>
    <script>
        $(document).ready(function() {
            $('.btn-habitacion').click(function(event) {
                event.preventDefault(); // Evita que la página se refresque
                var idp = $(this).data('idp');
                $('#tabla-acompanantes-body').empty();
                $.ajax({
                    url: 'administrador.php',
                    method: 'POST',
                    data: {
                        idp: idp
                    },
                    success: function(response) {
                        var contenido = $(response).find('#contenido-modal'); // Selecciona solo el contenido que deseas mostrar
                        $('#tabla-acompanantes-body').html(contenido);
                        $('#idp').val(idp); // Establece el valor de idp en el campo oculto
                        $('#modalacompañantes').modal('show');
                    }
                });
            });
        });
    </script>

    <!-- JS PARA EDITAR LOS PACIENTES, DEBE IR ANTES DE LA ETIQUETA <BODY/> -->
    <script type="text/javascript" charset="utf8" src="../src/bootstrap4/js/modaledit.js"></script>
    <!-- JS PARA EDITAR LOS PACIENTES, DEBE IR ANTES DE LA ETIQUETA <BODY/> -->
    <script type="text/javascript" charset="utf8" src="../src/bootstrap4/js/modaleditacompanante.js"></script>

    </body>

    </html>
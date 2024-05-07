<?php
session_start();
if (isset($_SESSION['Super'])) {
?>

    <?php require 'bd.inc.php'; ?>

    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Colegio Sion</title>
        <link rel="shortcut icon" href="../src/img/funesboLOGOt.PNG">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
        <meta name="description" content="This is an example dashboard created using build-in elements and components.">
        <meta name="msapplication-tap-highlight" content="no">


        <link href="./css/main.css" rel="stylesheet">
        <link href="./css/dataTables.bootstrap4.css" rel="stylesheet">
        <link href="./css/responsive.bootstrap4.css" rel="stylesheet">
        <link href="./css/datatables.min.css" rel="stylesheet">



        <script type="text/javascript" src="./assets/scripts/jquery-3.7.1.min.js"></script>
        <script type="text/javascript" src="./assets/scripts/popper.min.js"></script>
        <script type="text/javascript" src="./assets/scripts/main.js"></script>
        <script type="text/javascript" src="./assets/scripts/datatables.min.js"></script>
        <script type="text/javascript" src="./assets/scripts/dataTables.bootstrap4.js"></script>
        <script type="text/javascript" src="./assets/scripts/dataTables.responsive.js"></script>
        <script type="text/javascript" src="./assets/scripts/responsive.bootstrap4.js"></script>





        <script>
            $(document).on("click", ".btn-editar-usuario", function() {
                var idu = $(this).data('id');
                $("#idu").val(idu);
            });
        </script>

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

                                            $sql = "SELECT * from usuarios where idu='$idu'";
                                            $result = mysqli_query($conn, $sql);
                                            while ($mostrar = mysqli_fetch_array($result)) {
                                            ?>

                                            <?php echo $mostrar['usuario'];
                                            } ?>

                                        </div>
                                        <div class="widget-subheading">
                                            Superusuario
                                        </div>
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="btn-group">

                                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">

                                                <?php
                                                $idu = $_SESSION['idu'];

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
                                    <a href="superusuario.php" style="opacity: 1;">
                                        <i class="metismenu-icon pe-7s-home"></i>
                                        Inicio
                                    </a>
                                </li>
                                <li>
                                    <a href="superusuarioha.php">
                                        <i class="metismenu-icon pe-7s-door-lock"></i>
                                        Proveedores
                                    </a>
                                </li>
                                <li>
                                    <a href="superusuarious.php" class="mm-active">
                                        <i class="metismenu-icon pe-7s-users">
                                        </i>
                                        Usuarios
                                    </a>
                                </li>
                                <li>
                                    <a href="superusuariobd.php">
                                        <i class="metismenu-icon pe-7s-server"></i>
                                        Base de datos
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
                                    <div class="ml-2">
                                        <strong>Usuarios</strong>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <div class="d-inline-block">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header py-3 d-sm-flex align-item-center justify-content-between">
                                        <div class="py-3 align-item-center justify-content-between">
                                            <a data-toggle="modal" href="#modalregistro" class="btn-shadow btn btn-primary">
                                                <i class="pe-7s-plus"></i>
                                                Nuevo Usuario
                                            </a>
                                        </div>
                                        Lista de Usuario
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
                                        <table id="tablausuarios" class="table table-striped table-bordered nowrap" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Usuario</th>
                                                    <th class="text-center">Cedula</th>
                                                    <th class="text-center">contraseña'</th>
                                                    <th class="text-center">pregunta'</th>
                                                    <th class="text-center">respuesta'</th>
                                                    <th class="text-center">Rol</th>
                                                    <th class="text-center">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                $sql = "SELECT * from usuarios";
                                                $result = mysqli_query($conn, $sql);
                                                while ($mostrar = mysqli_fetch_array($result)) {
                                                ?>
                                                    <tr>
                                                        <td class="text-center"><?php echo $mostrar['usuario']; ?></td>
                                                        <td class="text-center"><?php echo $mostrar['cedula']; ?></td>
                                                        <td class="text-center"><?php echo $mostrar['contra']; ?></td>
                                                        <td class="text-center"><?php echo $mostrar['pregunta']; ?></td>
                                                        <td class="text-center"><?php echo $mostrar['respuesta']; ?></td>
                                                        <td class="text-center">
                                                            <?php
                                                            $status = $mostrar['rol'];
                                                            $idu = $mostrar['idu'];
                                                            $user = $mostrar['usuario'];
                                                            $cedula = $mostrar['cedula'];
                                                            $contraseña = $mostrar['contra'];
                                                            $pregunta = $mostrar['pregunta'];
                                                            $respuesta = $mostrar['respuesta'];
                                                            $rol = $mostrar['rol'];

                                                            if ($status == '1') {

                                                                echo '<div class="btn btn-primary">Superusuario</div>';
                                                            } else if ($status == '2') {

                                                                echo '<div class="btn btn-success">Administrador</div>';
                                                            } else {

                                                                echo '<div class="btn btn-warning">Asistente</div>';
                                                            } ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="row">

                                                                <a href="" class="btn btn-primary col-sm-4 btn-editar-usuario" data-toggle="modal" data-target="#ModUs"><i class="pe-7s-note"></i></a>

                                                                <form class="col-sm" action="includes/eli.usuario.inc.php" method="post">
                                                                    <input type="hidden" name="idu" value="<?php echo $idu; ?>">
                                                                    <button class="btn btn-danger" type="submit" name="eliminar" data-toggle="tooltip" data-placement="left" title="Eliminar" onclick="return confirm('¿Esta seguro que quiere Eliminar el usuario?');"><i class="pe-7s-trash"></i>
                                                                    </button>
                                                                </form>
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

                                    $sql = "SELECT * from usuarios where idu='$idu'";
                                    $result = mysqli_query($conn, $sql);
                                    while ($mostrar = mysqli_fetch_array($result)) {
                                    ?>

                                        <img id="uploadPreview1" class="card border" width="150" height="150" src="../architectui-html-free/assets/images/avatars/<?php echo $mostrar['foto'];
                                                                                                                                                                } ?>" />
                                        <p>Ingrese un formato de imagen PNG O JPG</p>
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

        <!-- Modal registro -->

        <div class="modal fade" id="modalregistro" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">

                        <h5 class="modal-title" id="exampleModalLongTitle">Registro de Usuario</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>

                    <form class="needs-validation" action="includes/registroint.inc.php" method="post" novalidate>

                        <div class="modal-body">

                            <div class="form-row">

                                <div class="col-md-8 mb-3">

                                    <label for="usuario">Nombre y Apellido</label>

                                    <input type="text" class="form-control" id="usuario" name='usuario' placeholder="Nombre y Apellido" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))" maxlength="30" required>

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
                            </div>

                            <div class="form-row">

                                <div class="col-md-4 mb-3">

                                    <label for="contra">Contraseña</label>

                                    <input type="password" id="contra" name="contra" class="form-control" placeholder="Contraseña" required>

                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>

                                <div class="col-md-4 mb-3">

                                    <label for="pregunta">Pregunta de Seguridad</label>

                                    <input type="text" class="form-control" id="pregunta" name="pregunta" placeholder="Pregunta" required>

                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>

                                <div class="col-md-4 mb-3">

                                    <label for="respuesta">Respuesta</label>

                                    <input type="text" class="form-control" id="respuesta" name="respuesta" placeholder="Respuesta" required>

                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>

                            </div>

                            <div class="col-md-4 mb-3">

                                <label for="rol">Nivel de Usuario</label>

                                <select id="rol" name="rol" class="form-control">

                                    <option value="3">Asistente</option>
                                    <option value="2">Administrador</option>
                                    <option value="1">Superusuario</option>

                                </select>

                                <div class="invalid-feedback">
                                    Debe llenar este campo.
                                </div>

                                <div class="valid-feedback">
                                    Listo.
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

        <!-- Modal Editar Usuario -->

        <!-- Button trigger modal -->


        <!-- Modal -->

        <div class="modal fade" id="ModUs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modificar Usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST">
                            <div class="fl-flex-label mb-3 px-2 col-12">
                                <label for="user">Usuario</label>
                                <input id="user" type="text" placeholder="usuario" class="form-control" name="nom_agg" value="<?= $user ?>">
                            </div>
                            <div class="fl-flex-label mb-3 px-2 col-12">
                                <label for="cedula">Cedula</label>
                                <input id="cedula" type="text" placeholder="cedula" class="form-control" name="ape_agg" value="<?= $cedula ?>">
                            </div>
                            <div class="fl-flex-label mb-3 px-2 col-12">
                                <label for="contra">Contraseña</label>
                                <input id="contra" type="text" placeholder="contraseña" class="form-control" name="con_agg" value="<?= $contraseña ?>">
                            </div>
                            <div class="fl-flex-label mb-3 px-2 col-12">
                                <label for="pregunta">Pregunta de seguridad</label>
                                <input id="pregunta" type="text" placeholder="pregunta de seguridad" class="form-control" name="pre_agg" value="<?= $pregunta ?>">
                            </div>
                            <div class="fl-flex-label mb-3 px-2 col-12">
                                <label for="respuesta">respuesta de seguridad</label>
                                <input id="respuesta" type="text" placeholder="respuesta de seguridad" class="form-control" name="use_agg" value="<?= $respuesta ?>">
                            </div>
                            <div class="fl-flex-label mb-3 px-2 col-12">
                                <label for="rol">Nivel de Usuario</label>
                                <select id="rol" name="rol" class="form-control" value="<?php echo $mostrar['rol']; ?>" value="<?= $rol ?>">

                                    <option value="1">Superusuario</option>
                                    <option value="2">Administrador</option>
                                    <option value="3">Asistente</option>

                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // #tablausuarios
            $(document).ready(function() {
                
                var dataTable = $("#tablausuarios").DataTable({

                    columnDefs: [{
                        responsivePriority: 5,
                        targets: 0
                    },
                    {
                        responsivePriority: 4,
                        targets: 5
                    },
                    {
                        responsivePriority: 4,
                        targets: 6
                    }
                ],

                responsive: true,

                    "language": {
                        "decimal": "",
                        "emptyTable": "No hay datos disponibles en la tabla",
                        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                        "infoEmpty": "Mostrando 0 a 0 de 0 Entradas",
                        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                        "infoPostFix": "",
                        "thousands": ",",
                        "lengthMenu": "Mostrar _MENU_ Entradas",
                        "loadingRecords": "Cargando...",
                        "processing": "Procesando...",
                        "search": "Buscar:",
                        "zeroRecords": "Sin resultados encontrados",
                        "paginate": {
                            "first": "Primero",
                            "last": "Ultimo",
                            "next": "Siguiente",
                            "previous": "Anterior"
                        }

                    }
                });
            });
        </script>

    <?php
} else {
    ?> <script>
            alert("Debe Iniciar Sesion.");
            window.location.href = "login.php";
        </script> <?php

                }
                    ?>

    </body>

    </html>
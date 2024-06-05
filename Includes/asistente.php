<?php
session_start();
if (isset($_SESSION['Asis'])) {
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
        <link rel="shortcut icon" href="./Assets/Images/Logo.png">
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
        <script type="module" src="./assets/scripts/pagina-principal.js"></script>
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
                                            Asistente
                                        </div>
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="btn-group">

                                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">

                                                <img width="45" height="45" class="rounded-circle" src="assets/images/avatars/user-default.jpg" alt="">
                                                <i class="fa fa-angle-down ml-2 opacity-8"></i>

                                            </a>

                                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">

                                       

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
                                    <a href="asistente.php" style="opacity: 1;" class="mm-active">
                                        <i class="metismenu-icon pe-7s-home"></i>
                                        Inicio
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

                                        <?php
                                        $idu = $_SESSION['idu'];
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
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2>Comprobantes</h2>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header py-3 d-sm-flex align-item-center justify-content-between">
                                        <div class="py-3 align-item-center justify-content-between">
                                            
                                        </div>
                                        Listado
                                        <div class="py-3 align-item-center justify-content-between" style="visibility: hidden;">
                                            <!-- <a href="pdf.php" class="btn-shadow btn btn-danger">
                                                <i class="fa fa-file-pdf"></i>
                                                Generar PDF
                                            </a> -->
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
                                        <table id="tabla" class="table table-striped table-bordered nowrap" style="width:100%">
                                            <!-- <table id="tabla" class="table table-striped align-middle mb-0 " style="width: 200px;"> -->
                                            <thead>
                                                <tr>
                                                    <th class="text-center">nro Comprobante</th>
                                                    <th class="text-center">Periodo Fiscal</th>
                                                    <th class="text-center">proveedor</th>
                                                    <th class="text-center">rif Proveedor</th>
                                                    <th class="text-center">direccion Proveedor</th>
                                                    <th class="text-center">f.Factura</th>
                                                    <th class="text-center">f.Emision</th>
                                                    <th class="text-center">f.Entrega</th>
                                                    <th class="text-center">total Facturado</th>
                                                    <th class="text-center">base Imponible</th>
                                                    <th class="text-center">impuesto iva (16%)</th>
                                                    <th class="text-center">iva retenido (75%)</th>
                                                    <th class="text-center">PDF</th>

                                                </tr>
                                            </thead>
                                            
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

                                

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" name="modificar" class="btn btn-primary">Listo</button>
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

    
    </body>

    </html>
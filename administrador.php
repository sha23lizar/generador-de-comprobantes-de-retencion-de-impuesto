<?php
session_start();
if ($_SESSION['rol']==2) {
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
        <link rel="stylesheet" href="./CSS/Iconos/font/bootstrap-icons.css">

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
                                            Administrador
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
            <?php include("./Includes/componentes/sliderbar.php")?>


                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">

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
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2>Comprobantes</h2>
                        <div class="row">
                            <div class="col-md-12" style="max-width: 99%;">
                                <div class="main-card mb-3 card">
                                    <div class="card-header py-3 d-sm-flex align-item-center justify-content-between">
                                        <div class="py-3 align-item-center justify-content-between">
                                            <a data-toggle="modal" id="btnAddComprobante" href="#nuevoregistro" class="btn-shadow btn btn-primary">
                                                <i class="pe-7s-plus"></i>
                                                Nuevo Comprobante
                                            </a>
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
                                                    <th class="text-center">nro Factura</th>
                                                    <th class="text-center">nro Control</th>
                                                    <th class="text-center">f.Factura</th>
                                                    <th class="text-center">f.Emision</th>
                                                    <th class="text-center">f.Entrega</th>
                                                    <th class="text-center">total Facturado</th>
                                                    <th class="text-center">base Imponible</th>
                                                    <th class="text-center">impuesto iva (16%)</th>
                                                    <th class="text-center">iva retenido (75%)</th>
                                                    <th class="text-center">PDF</th>
                                                    <th class="text-center">Editar</th>
                                                    <th class="text-center">Eliminar</th>
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

        <!-- Nuevo Comprobante -->

        <div class="modal fade" id="nuevoregistro" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">

                        <h5 class="modal-title" id="exampleModalLongTitle">Nuevo Comprobante</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>

                    <form id="agregar-comprobante" class="needs-validation" action="includes/guardar_comprobante.php" method="post" novalidate>

                        <div class="modal-body">

                            <div class="form-row">

                                <!-- nro Comprobante -->
                                <div class="col-md-4 mb-3">

                                    <label for="paciente">Nro de Comprobante</label>

                                    <!-- <input type="text" value="" class="form-control" id="nroComprobante" name='nroComprobante' placeholder="Ejemplo 20240100000846" onkeydown="javascript: return ((isNaN(event.target.value) && event.target.value.length < 14 && event.target.value > -1 ))" required> -->
                                    <input type="text" class="form-control nroComprobante" name='nroComprobante' placeholder="Ejemplo 20240100000846" pattern="[0-9]{14}" minlength="14" maxlength="14" required disabled>

                                    <div class="invalid-feedback">
                                        Debe colocar 14 numeros.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>

                                <!-- Proveedor -->
                                <div class="col-md-4 mb-3">

                                    <label for="estado">Proveedor</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control proveedor" name='proveedor' require aria-label="Text input with dropdown button" required>

                                        <!-- Boton para resetear proveedores -->
                                        <div class="input-group-append">
                                            <button class="btn btn-danger rounded-right resetProveedor" type="button" style="display: none; z-index: 1000000">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="white" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                                                </svg>
                                            </button>

                                            <!-- Boton para abrir toglee -->
                                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                                </svg>
                                            </button>

                                            <!-- content porveedores -->
                                            <div class="dropdown-menu" style="max-height: 50vh; overflow-y: auto">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>


                                <!-- Rif Proveedor -->
                                <div class="col-md-4 mb-3">

                                    <label for="">Rif Proveedor</label>

                                    <input type="text" class="form-control rifProveedor" name='rifProveedor' maxlength="11" placeholder="ejemplo: j-298400870" required>

                                    <div class="invalid-feedback">
                                        Debe rellenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>


                            </div>

                            <div class="form-row">
                                <!-- Direccion del Proveedor -->
                                <div class="col-md-6 mb-3">

                                    <label for="">Direccion del Proveedor</label>

                                    <input type="text" class="form-control dirreccionProveedor" name='dirreccionProveedor' placeholder="ejemplo: Andres Eloy Blanco, Calle el Palmar, Ciudad Bolívar, Venezuela" required>

                                    <div class="invalid-feedback">
                                        Debe rellenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>

                                <!-- nro control -->
                                <div class="col-md-3 mb-3">

                                    <label for="">nro de Factura</label>

                                    <input type="text" class="form-control nroFactura" maxlength="15"placeholder="ejemplo: 00004567" name="nroFactura" required>
                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>

                                <div class="col-md-3 mb-3">

                                    <label for="">nro de control</label>

                                    <input type="text" class="form-control nroControl" name="nroControl" maxlength="25" placeholder="ejemplo: Z1B8046526" required>
                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>


                            </div>

                            <div class="form-row">


                                <!-- F.factura -->
                                <div class="col-md-3 mb-3">

                                    <label for="">F.factura</label>

                                    <input type="date" class="form-control fFactura" min="1000-00-01" max="9999-12-30" name="fFactura" placeholder="fFactura" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" maxlength="8" required>

                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>


                                <!-- Periodo Fiscal -->
                                <div class="col-md-3 mb-3">

                                    <label for="">Periodo Fiscal</label>

                                    <div class="input-group">
                                        <input type="text" aria-label="First name" class="form-control periodoFiscalAño" disabled>
                                        <input type="text" aria-label="Last name" class="form-control periodoFiscalMes" disabled>
                                    </div>

                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>


                                <!-- F.emision -->
                                <div class="col-md-3 mb-3">

                                    <label for="">F.Emision</label>

                                    <input type="date" class="form-control fEmision" name="fEmision" placeholder="fEmision" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" maxlength="8" required>

                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>

                                <!-- F.entrega -->
                                <div class="col-md-3 mb-3">

                                    <label for="">F.entrega</label>

                                    <input type="date" class="form-control fEntrega" name="fEntrega" placeholder="fEntrega" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" maxlength="8" required>

                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>

                            </div>

                            <div class="form-row">
                                <!-- total facturado -->
                                <div class="col-md-3 mb-3">

                                    <label for="">total facturado</label>

                                    <input type="number" class="total-facturado form-control"  placeholder="1.0" step="0.01" min="0" name='totalFacturado' placeholder="total facturado" required>

                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>
                                <!-- base imponible -->
                                <div class="col-md-3 mb-3">

                                    <label for="patologia">base imponible</label>

                                    <input type="number" class="base-imponible form-control baseImponible"  placeholder="1.0" step="0.01" min="0" name='baseImponible' placeholder="base imponible" required>

                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>
                                <!-- impuesto iva -->
                                <div class="col-md-3 mb-3">

                                    <label for="">impuesto iva</label>

                                    <input disabled type="number" class="impuesto-iva form-control impuestoIva" name='impuestoIva' placeholder="impuesto iva" required>

                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>
                                <!-- iva retenido -->
                                <div class="col-md-3 mb-3">

                                    <label for="">iva retenido</label>

                                    <input disabled type="number" class="iva-retenido form-control ivaRetenido" name='ivaRetenido' placeholder="iva retenido" required>

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

        <!-- Btn Editar -->
        <a data-toggle="modal" style="display: none;" id="btnAddComprobante" href="#editarRegistro" class="btn-shadow btn btn-primary">
            editar
        </a>
        <!-- Editar Comprobante -->
        <div class="modal fade" id="editarRegistro" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">

                        <h5 class="modal-title" id="exampleModalLongTitle">Editar Comprobante</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>

                    <form id="editar-comprobante" class="needs-validation" action="includes/guardar_comprobante.php" method="post" novalidate>

                        <div class="modal-body">

                            <div class="form-row">

                                <!-- nro Comprobante -->
                                <div class="col-md-4 mb-3">

                                    <label for="paciente">Nro de Comprobante</label>

                                    <!-- <input type="text" value="" class="form-control" id="nroComprobante" name='nroComprobante' placeholder="Ejemplo 20240100000846" onkeydown="javascript: return ((isNaN(event.target.value) && event.target.value.length < 14 && event.target.value > -1 ))" required> -->
                                    <input type="text" class="form-control nroComprobante" name='nroComprobante' placeholder="Ejemplo 20240100000846" pattern="[0-9]{14}" minlength="14" maxlength="14" required disabled>

                                    <div class="invalid-feedback">
                                        Debe colocar 14 numeros.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>

                                <!-- Proveedor -->
                                <div class="col-md-4 mb-3">

                                    <label for="estado">Proveedor</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control proveedor" name='proveedor' require aria-label="Text input with dropdown button" required>

                                        <!-- Boton para resetear proveedores -->
                                        <div class="input-group-append">
                                            <button class="btn btn-danger rounded-right resetProveedor" type="button" style="display: none; z-index: 1000000">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="white" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                                                </svg>
                                            </button>

                                            <!-- Boton para abrir toglee -->
                                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                                </svg>
                                            </button>

                                            <!-- content porveedores -->
                                            <div class="dropdown-menu" style="max-height: 50vh; overflow-y: auto">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>


                                <!-- Rif Proveedor -->
                                <div class="col-md-4 mb-3">

                                    <label for="">Rif Proveedor</label>

                                    <input type="text" class="form-control rifProveedor" name='rifProveedor' maxlength="11" placeholder="ejemplo: j-298400870" required>

                                    <div class="invalid-feedback">
                                        Debe rellenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>


                            </div>

                            <div class="form-row">
                                <!-- Direccion del Proveedor -->
                                <div class="col-md-6 mb-3">

                                    <label for="">Direccion del Proveedor</label>

                                    <input type="text" class="form-control dirreccionProveedor" name='dirreccionProveedor' placeholder="ejemplo: Andres Eloy Blanco, Calle el Palmar, Ciudad Bolívar, Venezuela" required>

                                    <div class="invalid-feedback">
                                        Debe rellenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>

                                <!-- nro control -->
                                <div class="col-md-3 mb-3">

                                    <label for="">nro de Factura</label>

                                    <input type="text" class="form-control nroFactura" maxlength="15" placeholder="ejemplo: 00004567" name="nroFactura" required>
                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>

                                <div class="col-md-3 mb-3">

                                    <label for="">nro de control</label>

                                    <input type="text" class="form-control nroControl" name="nroControl" maxlength="25" placeholder="ejemplo: Z1B8046526" required>
                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>


                            </div>

                            <div class="form-row">


                                <!-- F.factura -->
                                <div class="col-md-3 mb-3">

                                    <label for="">F.factura</label>

                                    <input type="date" class="form-control fFactura" min="1000-00-01" max="9999-12-30" name="fFactura" placeholder="fFactura" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" maxlength="8" required>

                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>


                                <!-- Periodo Fiscal -->
                                <div class="col-md-3 mb-3">

                                    <label for="">Periodo Fiscal</label>

                                    <div class="input-group">
                                        <input type="text" aria-label="First name" class="form-control periodoFiscalAño" disabled>
                                        <input type="text" aria-label="Last name" class="form-control periodoFiscalMes" disabled>
                                    </div>

                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>


                                <!-- F.emision -->
                                <div class="col-md-3 mb-3">

                                    <label for="">F.Emision</label>

                                    <input type="date" class="form-control fEmision" name="fEmision" placeholder="fEmision" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" maxlength="8" required>

                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>

                                <!-- F.entrega -->
                                <div class="col-md-3 mb-3">

                                    <label for="">F.entrega</label>

                                    <input type="date" class="form-control fEntrega" name="fEntrega" placeholder="fEntrega" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" maxlength="8" required>

                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>

                            </div>

                            <div class="form-row">
                                <!-- total facturado -->
                                <div class="col-md-3 mb-3">

                                    <label for="">total facturado</label>

                                    <input type="number" class="total-facturado form-control" placeholder="1.0" step="0.01" min="0" name='totalFacturado' placeholder="total facturado" required>

                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>
                                <!-- base imponible -->
                                <div class="col-md-3 mb-3">

                                    <label for="patologia">base imponible</label>

                                    <input type="number" class="base-imponible form-control baseImponible" placeholder="1.0" step="0.01" min="0" name='baseImponible' placeholder="base imponible" required>

                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>
                                <!-- impuesto iva -->
                                <div class="col-md-3 mb-3">

                                    <label for="">impuesto iva</label>

                                    <input disabled type="number" class="impuesto-iva form-control impuestoIva" name='impuestoIva' placeholder="impuesto iva" required>

                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>
                                <!-- iva retenido -->
                                <div class="col-md-3 mb-3">

                                    <label for="">iva retenido</label>

                                    <input disabled type="number" class="iva-retenido form-control ivaRetenido" name='ivaRetenido' placeholder="iva retenido" required>

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
                            <button type="submit" name="submit1" class="btn btn-primary">Editar</button>

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
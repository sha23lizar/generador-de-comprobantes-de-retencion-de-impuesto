<?php
session_start();
if ($_SESSION['rol']==1 || $_SESSION['rol']==2) {
?>

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
        <link rel="stylesheet" type="text/css" href="../src/DataTables/datatables.min.css">
        <link rel="stylesheet" type="text/css" href="./css/sweetalert2.min.css">


        <link href="./CSS/bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="./CRUD-con-PHP-PDO-Ajax-Datatable-main/bootstrap/icon/font/bootstrap-icons.min.css" />
        <link rel="stylesheet" href="./CRUD-con-PHP-PDO-Ajax-Datatable-main/DataTables/datatables.css" />
        <link rel="stylesheet" href="./CRUD-con-PHP-PDO-Ajax-Datatable-main/css/styles.css" />

        <script src="./assets/scripts/sweetalert2.min.js"></script>

    </head>
    <style>
        .botones {
            display: flex;
            width: 100%;
            padding: auto;
            margin: auto;
            justify-content: space-between;
            text-transform: uppercase;
            font-weight: bold;
        }

        #buttom {
            width: auto !important;
            font-size: 12px !important;
            border: transparent !important;
            margin-top: -3em;
        }

        th {
            color: #495057 !important;
        }

        hr {
            margin: auto;
            padding: auto;
        }

        .btn-xs {
            justify-content: center;
            width: auto;
            display: flex;
            margin: auto;
        }

        .fondo {
            width: 98%;
        }

        .modal-dialog {
            margin-top: 5em;
            z-index: 9999;
        }
    </style>

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
                                            <?php 
                                                if ($_SESSION['rol']==1) {
                                                    echo "Superusuario";
                                                } 
                                                if ($_SESSION['rol']==2) {
                                                    echo "Administrador";
                                                } 
                                                
                                            ?>
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
                <?php include("./Includes/componentes/sliderbar.php") ?>
                <?php include("./Includes/componentes/mainproISR.php") ?>


            <?php
        } else {
            ?> <script>
                    alert("Debe Iniciar Sesion.");
                    window.location.href = "login.php";
                </script> <?php

                        }
                            ?>


            <!-- jquery.dataTables.min.js first, then dataTables.bootstrap4.min.js, then datatablecaller.js -->
            <script type="text/javascript" src="./assets/scripts/main.js"></script>


    </body>

    </html>

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
                <script type="text/javascript" src="../src/bootstrap4/js/passwordhidder.js"></script>
            </div>
        </div>
    </div>
<?php
session_start();
if ($_SESSION['rol']==1) {
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


        <link rel="stylesheet" href="./CSS/Iconos/font/bootstrap-icons.css">



        <link href="./css/main.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="./css/sweetalert2.min.css">

        <script src="./assets/scripts/sweetalert2.min.js"></script>
        <link href="./css/datatables.min.css" rel="stylesheet">
        <script type="text/javascript" src="./assets/scripts/datatables.min.js"></script>
        <script type="text/javascript" src="./assets/scripts/dataTables.bootstrap4.js"></script>
        <script type="text/javascript" src="./assets/scripts/dataTables.responsive.js"></script>
        <script type="text/javascript" src="./assets/scripts/responsive.bootstrap4.js"></script>

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
                                            Superusuario
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
                                        <strong>Bases de Datos</strong>
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
                                <div class="main-card mb-3 card justify-content-between">
                                    <div class="card-header justify-content-between">
                                        <div class="">
                                        <form enctype="multipart/form-data" class="form-horizontal"  method="POST">
                                                <button class="btn btn-primary pull-right" type="button" tabindex="0" class="dropdown-item" data-toggle="modal" data-target="#subirModal" title="Subir respaldo de base de datos">Subir Respaldo
                                                </button>
                                            </form>
                                        </div>
                                        <div class="col-sm-12 col-md-3">Lista de Base de Datos</div>
                                        <div class="col-sm-12 col-md-3">
                                            <form action="includes/respaldobd.php">
                                                <button class="btn btn-primary pull-right" type="submit" data-toggle="tooltip" title="Respaldar base de datos">Respaldar base de datos
                                                </button>
                                            </form>
                                        </div>
                                    </div>








                                    

                                    <div class="table-responsive p-2">
                                        <table id="tabla" class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    
                                                    <th class="text-center">Respaldo</th>
                                                    
                                                    <th class="text-center">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php

                                                require 'includes/clas.php';
                                                $files = scandir(BACKUP_PATH);
                                                $files = array_diff($files, array('.', '..')); // Remove . and ..
                                                foreach ($files as $file) {
                                                    $filePath = $dir . $file;
                                                    $fileInfo = pathinfo($filePath);
                                                    $fileMtime = filemtime($filePath);
                                                    $fileDate = date("d/m/Y g:i a", $fileMtime);

                                                ?>
                                                    <tr>

                                                        <td class="text-center"><?php echo $fileInfo['filename']; ?></td>
                                                        
                                                        <td class="text-center">
                                                            <div class="row">

                                            
                                                                <form class="form col-sm" action="includes/descargarBaseDeDatos.php" method="post">
                                                                    <input type="hidden" name="filePath" value="<?php echo $fileInfo['filename']; ?>">
                                                                    <button class="btn btn-success btn-lg" type="submit" name="descargar" data-toggle="tooltip" data-placement="left" title="Descargar"><i class="pe-7s-download"></i>
                                                                    </button>
                                                                </form>
                                                                <form class="form col-sm" action="includes/restaurarbd.php" method="post">
                                                                    <input type="hidden" name="filePath" value="<?php echo $fileInfo['filename']; ?>">
                                                                    <button class="btn btn-info btn-lg" type="submit" name="restaurar" data-toggle="tooltip" data-placement="left" title="Restaurar respaldo"><i class="pe-7s-upload"></i>
                                                                    </button>
                                                                </form>
                                                                <form class="form col-sm" action="includes/eliminarbd.php" method="post">
                                                                    <input type="hidden" name="filePath" value="<?php echo $fileInfo['filename']; ?>">
                                                                    <button class="btn btn-danger btn-lg" type="submit" name="eliminar" data-toggle="tooltip" data-placement="left" title="Eliminar respaldo" onclick="return confirm('¿Esta seguro que quiere Eliminar este respaldo?');"><i class="pe-7s-trash"></i>
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



    <?php
} else {
    ?> <script>
            alert("Debe Iniciar Sesion.");
            window.location.href = "login.php";
        </script> <?php

                }
                    ?>

    
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

    <!-- subir Modal-->
    <div class="modal fade" id="subirModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Subir Respalo de Base de Datos</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form enctype="multipart/form-data" class="form-horizontal"  method="POST" action="includes/subirbd.php">
                         <input class="" type="file" name="archivo" value="subir_imagen"  /><br><br>
                        <!-- <input type="submit" value="registrar" name="btnregistrar" class=""> -->
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                            <input type="submit" value="Añadir" name="btnregistrar" class="btn btn-primary">
                            
                        </div>
                    </form>
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
                <script>
            // #tablausuarios
            $(document).ready(function() {

                var dataTable = $("#tabla").DataTable({

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
                // btn-editar-usuario

                var idModalProveedor = "#modalProveedor";
                var idForm = "#form-proveedor";

                // Funcionalidad editar
                $(document).on("click", ".btn-editar-usuario", function(e) {
                    var idu = e.target.id;
                    if (!idu) {
                        // alert("No se encontro el ID");
                        return
                    }
                    $.ajax({
                        url: "./includes/obtener_usuario.php",
                        method: "POST",
                        data: {
                            idu: idu
                        },
                        dataType: "json",
                        success: function(data) {
                            let dataUser = data[0];
                            document.querySelector(".editar.cedula").value = dataUser.cedula
                            document.querySelector(".editar.contra").value = dataUser.contra
                            document.querySelector(".editar.pregunta").value = dataUser.pregunta
                            document.querySelector(".editar.respuesta").value = dataUser.respuesta
                            document.querySelector(".editar.rol").value = dataUser.rol; // Asegúrate de que el ID se esté envian 
                            document.querySelector(".editar.usuario").value = dataUser.usuario
                            document.querySelector(".editar.idu").value = dataUser.idu
                            document.querySelector("#btnOpenModalEdit").click();
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            alert("error: " + textStatus + " " + errorThrown);
                        }
                    })
                })


            });
        </script>
            </div>
        </div>
    </div>

    
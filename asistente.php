<?php
session_start();
if ($_SESSION['rol']==3) {
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
        <link rel="stylesheet" href="./CSS/Iconos/font/bootstrap-icons.css">



        <script type="text/javascript" src="./assets/scripts/jquery-3.7.1.min.js"></script>
        <script type="text/javascript" src="./assets/scripts/popper.min.js"></script>
        <script type="text/javascript" src="./assets/scripts/main.js"></script>
        <script type="text/javascript" src="./assets/scripts/datatables.min.js"></script>
        <script type="text/javascript" src="./assets/scripts/dataTables.bootstrap4.js"></script>
        <script type="text/javascript" src="./assets/scripts/dataTables.responsive.js"></script>
        <script type="text/javascript" src="./assets/scripts/responsive.bootstrap4.js"></script>

        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
        <!-- <script type="module" src="./assets/scripts/pagina-principal.js"></script> -->

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

                        <div class="row">
                            <div class="col-md-12" style="max-width:99%">
                                <div class="main-card mb-3 card">
                                    <div class="card-header py-3 d-sm-flex align-item-center justify-content-between">
                                        Comprobantes
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

                                    <!-- <div class="table-responsive p-2"> -->
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
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                require 'includes/conexion.php';
                                                $sql = "SELECT * from comprobante";
                                                $result = mysqli_query($conn, $sql);
                                                while ($mostrar = mysqli_fetch_array($result)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo substr($mostrar["nroComprobante"], 6, 12); ?></td>
                                                        <td><?php echo substr($mostrar["nroComprobante"], 0, 4)."-".substr($mostrar["nroComprobante"], 4, 2); ?></td>
                                                        <td><?php echo $mostrar['proveedor']; ?></td>
                                                        <td><?php echo $mostrar['rifProveedor']; ?></td>
                                                        <td><?php echo $mostrar['direccionProveedor']; ?></td>
                                                        <td><?php echo $mostrar['nroFactura']; ?></td>
                                                        <td><?php echo $mostrar['nroControl']; ?></td>
                                                        <td><?php echo $mostrar['fFactura']; ?></td>
                                                        <td><?php echo $mostrar['fEmision']; ?></td>
                                                        <td><?php echo $mostrar['fEntrega']; ?></td>
                                                        <td><?php echo $mostrar['totalFacturado']; ?></td>
                                                        <td><?php echo $mostrar['baseImponible']; ?></td>
                                                        <td><?php echo $mostrar['impuestoIva']; ?></td>
                                                        <td><?php echo $mostrar['ivaRetenido']; ?></td>
                                                        <td><?php echo '<button type="button" name="Generar PDF" id="' . $mostrar["id"] . '" class="btn btn-danger btn-xs generadorPDF">PDF</button>' ?></td>
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

            var dataTable = $("#tabla").DataTable({
                "order": [],
                columnDefs: [{
                        responsivePriority: 5,
                        targets: 0
                    },
                    {
                        responsivePriority: 5,
                        targets: 14
                    }
                ],
                responsive: true

                    ,
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

            function abirPDF(id) {
    const currentUrl = window.location.href;
    const pathArray = currentUrl.split('/');
    if (pathArray[pathArray.length - 1].includes('.php')) {
      pathArray.pop(); // Elimina el último elemento (nombre del archivo)
      pathArray[pathArray.length - 1] += '/';
    }
    pathArray.join('/');

    const baseUrl = pathArray.join('/')

    const relativePath = 'FPDF/generadorPDF.php';

    // Construye la URL completa
    const fullUrl = `${baseUrl}${relativePath}?id=${id}`;
    window.open(fullUrl, '_blank').focus();
  }
  $(document).on("click", ".generadorPDF", function (e) {
    var id = e.target.id;
    abirPDF(id);
  })




            $('.btn-habitacion').click(function(event) {
                event.preventDefault(); // Evita que la página se refresque
                var idp = $(this).data('idp');
                $('#tabla-acompanantes-body').empty();
                $.ajax({
                    url: 'asistente.php',
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
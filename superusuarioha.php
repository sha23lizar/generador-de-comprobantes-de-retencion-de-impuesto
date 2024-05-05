<?php
session_start();
if (isset($_SESSION['Super'])) {
?>

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
                                    <a href="superusuario.php" style="opacity: 1;">
                                        <i class="metismenu-icon pe-7s-home"></i>
                                        Inicio
                                    </a>
                                </li>
                                <li>
                                    <a href="superusuarioha.php" class="mm-active">
                                        <i class="metismenu-icon pe-7s-door-lock"></i>
                                        Proveedores
                                    </a>
                                </li>
                                <li>
                                    <a href="superusuarious.php">
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
                        <h2>Proveedores</h2>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header py-3 d-sm-flex align-item-center justify-content-between">
                                        <div class="py-3 align-item-center justify-content-between">
                                            <a data-toggle="modal" id="btnAddComprobante" href="#nuevoregistro" class="btn-shadow btn btn-primary">
                                                <i class="pe-7s-plus"></i>
                                                Nuevo Comprobante
                                            </a>
                                        </div>
                                        Listado
                                        <div class="py-3 align-item-center justify-content-between">
                                            <!-- <a href="pdf.php" class="btn-shadow btn btn-danger">
                                                <i class="fa fa-file-pdf"></i>
                                                Generar PDF
                                            </a> -->
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

                                    <div class="table-responsive p-2">
                                        <table id="tabla" class="align-middle mb-0 table table-striped table-bordered table-hover">
                                            <thead id="datos-proveedor">
                                                <tr>
                                                <th class="text-center">id</th>
                                                <th class="text-center">Rif</th>
                                                <th class="text-center">Razon social</th>
                                                <th class="text-center">Direccion</th>
                                                <th class="text-center">Seudonimo</th>
                                                <th class="text-center">editar</th>
                                                <th class="text-center">borrar</th>
                                                </tr>
                                            </thead>
                                            
                                                <?php
                                                require 'includes/bd.inc.php';
                                                $sql = "SELECT * from proveedor";
                                                $result = mysqli_query($conn, $sql);
                                                while ($mostrar = mysqli_fetch_array($result)) {
                                                ?>
                                                    <tr>
                                                        
                                                        <td class="text-center"><?php echo $mostrar['id']; ?></td>
                                                        <td class="text-center"><?php echo $mostrar['nombreProveedor']; ?></td>
                                                        <td class="text-center"><?php echo $mostrar['rifProveedor']; ?></td>
                                                        <td class="text-center"><?php echo $mostrar['direccionProveedor']; ?></td>
                                                        <td class="text-center"><?php echo $mostrar['seudonimo']; ?></td>
                                                        <td class="text-center">
                                                            <div>
                                                            <form action="./Includes/guardar_provedores.php" method="post">
                                                                <a href="#mostrar" class="btn btn-primary">Editar</a>
                                                            </form>
                                                            

                                                            </div>
                                                        </td>

                                                        <td class="text-center">
                                                            <div>
                                                                <form action="includes/guardar_provedores.php" method="post">
                                                                    <input type="hidden" name="id" value="<?php echo $mostrar['id']; ?>">
                                                                    <button class="btn btn-danger" type="submit" name="eliminar" data-toggle="tooltip" data-placement="left" title="Eliminar proveedor" onclick="return confirm('¿Esta seguro que quiere Eliminar al Proveedor?');"><i class="pe-7s-trash"></i>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody> 
                                            <!-- <tbody>
                                                <tr>
                                                    <th class="text-center">20240100000846</th>
                                                    <th class="text-center">Comercial unique center, C.A</th>
                                                    <th class="text-center">11-01-2024</th>
                                                    <th class="text-center">15-01-2024</th>
                                                    <th class="text-center">16-01-2024</th>
                                                    <th class="text-center">00006790</th>
                                                    <th class="text-center">Z1B8046526</th>
                                                    <th class="text-center">359.69</th>
                                                    <th class="text-center">310.08</th>
                                                    <th class="text-center">49.61</th>
                                                    <th class="text-center">37.21</th>
                                                    <td class="text-center">
                                                        <div>
                                                            <button class="btn btn-warning" type="submit" name="cambiar" data-toggle="tooltip" data-placement="left" title="Cambiar status">
                                                                Editar
                                                            </button>
                                                            <button class="btn btn-danger" type="submit" name="cambiar" data-toggle="tooltip" data-placement="left" title="Cambiar status">
                                                                PDF
                                                            </button>
                                                        </div>
                                                    </td>
                                            </tbody> -->
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


        <!-- Nuevo Paciente -->

        <div class="modal fade" id="nuevoregistro" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">

                        <h5 class="modal-title" id="exampleModalLongTitle">Nuevo Proveedor</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>

                    <form class="needs-validation" id="form-proveedor" action="includes/guardar_provedores.php" method="post" novalidate>

                        <div class="modal-body">

                            <div class="form-row">
                                <!-- Rif Proveedor -->
                                <div class="col-md-12 mb-3">

                                    <label for="paciente">Rif Proveedor</label>

                                    <!-- <input type="text" class="form-control" id="rifProveedor" name='rifProveedor' placeholder="ejemplo j-298400870" <?php echo $mostrar['rifProveedor']; ?> required> -->
                                    <input type="text" class="form-control" id="rifProveedor" name='rifProveedor' placeholder="ejemplo j-298400870" required>

                                    <div class="invalid-feedback">
                                        Debe rellenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>
                            </div>

                            <div class="form-row">

                                <!-- Nombre del Proveedor -->
                                <div class="col-md-12 mb-3">

                                    <label for="estado">Nombre o razon social</label>

                                    <input type="text" class="form-control" id="nombreProveedor" name='nombreProveedor' placeholder="nombre del proveedor" required>
                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>

                            </div>

                            <div class="form-row">
                                <!-- Direccion del Proveedor -->
                                <div class="col-md-12 mb-3">

                                    <label for="paciente">Direccion del Proveedor</label>

                                    <input type="text" class="form-control" id="dirreccionProveedor" name='dirreccionProveedor' placeholder="Ejemplo Andres Eloy Blanco, Calle el Palmar, Ciudad Bolívar, Venezuela" required>

                                    <div class="invalid-feedback">
                                        Debe rellenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>

                            </div>

                            
                            <div class="form-row">

                                <!-- Nombre del Proveedor -->
                                <div class="col-md-12 mb-3">

                                    <label for="estado">Seudonimo</label>

                                    <input type="text" class="form-control" id="seudonimo" name='seudonimo' placeholder="seudonimo">
                                    <div class="invalid-feedback" required>
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


        <div class="modal fade" id="mostrar" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">

                        <h5 class="modal-title" id="exampleModalLongTitle">Nuevo Proveedor</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>

                    <form class="needs-validation" id="form-proveedor" action="includes/guardar_provedores.php" method="post" novalidate>

                        <div class="modal-body">

                            <div class="form-row">
                                <!-- Rif Proveedor -->
                                <div class="col-md-12 mb-3">

                                    <label for="paciente">Rif Proveedor</label>

                                    <input type="text" class="form-control" id="rifProveedor" name='rifProveedor' placeholder="ejemplo j-298400870" value="<?php echo $proveedor['rifProveedor']; ?>" required>

                                    <div class="invalid-feedback">
                                        Debe rellenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>
                            </div>

                            <div class="form-row">

                                <!-- Nombre del Proveedor -->
                                <div class="col-md-12 mb-3">

                                    <label for="estado">Nombre o razon social</label>

                                    <input type="text" class="form-control" id="nombreProveedor" name='nombreProveedor' placeholder="nombre del proveedor" value="<?php echo $proveedor['direccionProveedor']; ?>" required>
                                    <div class="invalid-feedback">
                                        Debe llenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>

                            </div>

                            <div class="form-row">
                                <!-- Direccion del Proveedor -->
                                <div class="col-md-12 mb-3">

                                    <label for="paciente">Direccion del Proveedor</label>

                                    <input type="text" class="form-control" id="dirreccionProveedor" name='dirreccionProveedor' placeholder="Ejemplo Andres Eloy Blanco, Calle el Palmar, Ciudad Bolívar, Venezuela" value="<?php echo $proveedor['nombreProveedor']; ?>" required>

                                    <div class="invalid-feedback">
                                        Debe rellenar este campo.
                                    </div>

                                    <div class="valid-feedback">
                                        Listo.
                                    </div>

                                </div>

                            </div>

                            
                            <div class="form-row">

                                <!-- Nombre del Proveedor -->
                                <div class="col-md-12 mb-3">

                                    <label for="estado">Seudonimo</label>

                                    <input type="text" class="form-control" id="seudonimo" name='seudonimo' placeholder="seudonimo">
                                    <div class="invalid-feedback" required>
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
                            <button type="submit" name="submit1" class="btn btn-primary">editar</button>

                            
                        </div>

                    </form>

                    <script type="text/javascript" src="./assets/scripts/validarformularios.js"></script>
                </div>
            </div>

        </div>


        <?php
// Verifica si se ha proporcionado un ID de proveedor en la URL
if(isset($_GET['id'])) {
    // Conecta con la base de datos y realiza la consulta para obtener los datos del proveedor con el ID proporcionado
    // Supongamos que ya tienes una conexión establecida con la base de datos

    $idProveedor = $_GET['id'];

    // Realiza una consulta para obtener los datos del proveedor con el ID proporcionado
    $sql = "SELECT * FROM proveedor WHERE id = $idProveedor";
    $result = mysqli_query($conexion, $sql);

    // Verifica si se encontró un proveedor con el ID proporcionado
    if(mysqli_num_rows($result) > 0) {
        // Obtiene los datos del proveedor
        $proveedor = mysqli_fetch_assoc($result);
    } else {
        // Si no se encontró ningún proveedor con el ID proporcionado, muestra un mensaje de error
        echo "Proveedor no encontrado";
    }
} else {
    // Si no se proporcionó ningún ID de proveedor en la URL, muestra un mensaje de error
    echo "ID de proveedor no proporcionado";
}
?>


<script>
    $(document).ready(function() {
      var dataTable = $("#datos-proveedor").DataTable({
        "processing": true,
        "serverSide": true,
        "order": [],
        "ajax": {
          url: "./includes/obtener_proveedor.php",
          type: "POST"
        },
        "columnsDefs": [{
          "targets": [0, 3, 4],
          "orderable": false,
        }, ],
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


      /*
      $(document).on("submit", "#form-empresa", function(e) {
        e.preventDefault();
        var Rif = $("#Rif").val();
        var Razonsocial = $("#Razonsocial").val();
        var Direccion = $("#Direccion").val();
        var Seudonimo = $("#Seudonimo").val();
        var extencion = $("#image-empresa").val().split('.').pop().toLowerCase();
        if (extencion != "") {
          if ($.inArray(extencion, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
            alert('El archivo seleccionado no es una imagen');
            $("#image-empresa").val("");
            return false;
          }
          if (Rif != '' && Razonsocial != '' && Direccion != '' && Seudonimo != '') {
            $.ajax({
              url: "crear.php",
              method: "POST",
              data: new FormData(this),
              contentType: false,
              processData: false,
              success: function(data) {
                alert(data);
                $("#form-empresa")[0].reset();
                $("#modalEmpresa").modal('hide');
                dataTable.ajax.reload();
              }
            });
          } else {
            alert('Todos los campos son requeridos');
          }
        }
      })
      */

    $(document).on("submit", "#form-proveedor", function(e) {
    e.preventDefault();
    var rifProveedor = $("#rifProveedor").val();
    var nombreProveedor = $("#nombreProveedor").val();
    var direccionProveedor = $("#direccionProveedor").val();
    var seudonimo = $("#seudonimo").val();
    
    if (rifProveedor != '' && nombreProveedor != '' && direccionProveedor != '' && Seudonimo != '') {
        $.ajax({
            url: "./includes/crear_proveedor.php",
            method: "POST",
            data: {
                rifProveedor: rifProveedor,
                nombreProveedor: nombreProveedor,
                Direccion: Direccion,
                direccionProveedor: direccionProveedor,
                seudonimo: seudonimo,
                operacion: $("#operacion").val(),
                id_proveedor: $("#id_proveedor").val()
            },
            success: function(data) {
                alert(data);
                $("#form-proveedor")[0].reset();
                $("#nuevoregistro").modal('hide');
                dataTable.ajax.reload();
            }
        });
    } else {
        alert('Todos los campos son requeridos');
       }
    });

    
      /* Funcionalidad editar
      $(document).on("click", ".editar", function(e) {
        var id_empresa = e.target.id;
        $.ajax({
          url: "obtener_registro.php",
          method: "POST",
          data: {
            id_empresa: id_empresa
          },
          dataType: "json",
          success: function(data) {
            $("#modalEmpresa").modal("show");
            $("#Rif").val(data.Rif);
            $("#Razonsocial").val(data.Razonsocial);
            $("#Direccion").val(data.Direccion);
            $("#Seudonimo").val(data.Seudonimo);
            
            $("#imagen_subida").html(data.imagen_empresa);
            
            $("#id_empresa").val(id_empresa);
            $("#action").val("editar");
            $("#operacion").val("editar");
          },
          error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
          }
        })
      })
      */

      // Funcionalidad editar
$(document).on("click", ".editar", function(e) {
    var id_empresa = e.target.id;
    $.ajax({
        url: "./includes/obtener_proveedor.php",
        method: "POST",
        data: {
            id_proveedor: id_proveedor
        },
        dataType: "json",
        success: function(data) {
            $("#nuevoregistro").modal("show");
            $("#rifProveedor").val(data.rifProveedor);
            $("#nombreProveedor").val(data.nombreProveedor);
            $("#direccionProveedor").val(data.direccionProveedor);
            $("#seudonimo").val(data.seudonimo);
            $("#id_proveedor").val(id_proveedor); // Asegúrate de que el ID se esté enviando
            $("#action").val("editar");
            $("#operacion").val("editar");
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
    })
})
})
</script>

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
    <!-- jquery.dataTables.min.js first, then dataTables.bootstrap4.min.js, then datatablecaller.js -->
    <script type="text/javascript" charset="utf8" src="../src/DataTables/jQuery-3.3.1/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>

    <script type="text/javascript" charset="utf8" src="../src/DataTables/DataTables-1.10.21/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="../src/DataTables/DataTables-1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" charset="utf8" src="../src/DataTables/DataTables-1.10.21/js/datatablecallertabla.js"></script>
    <script type="text/javascript" charset="utf8" src="../src/bootstrap4/js/modaledit.js"></script>


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

    <!-- Nuevo Registro -->

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

                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>

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

    <!-- Editar Registro -->

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
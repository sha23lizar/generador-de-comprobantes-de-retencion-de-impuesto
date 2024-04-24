<?php
session_start();
if (isset($_SESSION['Super'])){
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>SIGESA</title>
    <link rel="shortcut icon" href="../src/img/logo%20pnf%20informatica.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="./main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../src/DataTables/datatables.min.css">

    <script type="text/javascript" charset="utf8" src="../src/bootstrap4/js/fotopreview.js"></script>

</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow bg-night-sky header-text-light">
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
                                            $idu=$_SESSION{'idu'}; 
                                            require 'includes/bd.inc.php';
                                            $sql = "SELECT * from usuarios where idu='$idu'";
                                            $result = mysqli_query($conn, $sql);
                                            while ($mostrar = mysqli_fetch_array($result)) {
                                            ?>

                                        <?php echo $mostrar['usuario']; }?>

                                    </div>
                                    <div class="widget-subheading">
                                        Superusuario
                                    </div>
                                </div>
                                <div class="widget-content-left">
                                    <div class="btn-group">

                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">

                                            <?php 
                                            $idu=$_SESSION{'idu'}; 
                                            require 'includes/bd.inc.php';
                                            $sql = "SELECT * from usuarios where idu='$idu'";
                                            $result = mysqli_query($conn, $sql);
                                            while ($mostrar = mysqli_fetch_array($result)) {
                                            ?>

                                            <img width="45" height="45" class="rounded-circle" src="assets/images/avatars/<?php echo $mostrar['foto']; }?>" alt="">
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

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Seleccione "Cerrar Sesión" si quiere terminar la sesión actual.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        <a class="btn btn-primary" href="index.php">Cerrar Sesión</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow bg-royal sidebar-text-light">
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
                                <a href="superusuario.php" style="opacity: 1;" class="mm-active">
                                    <i class="metismenu-icon pe-7s-home"></i>
                                    Inicio
                                </a>
                            </li>

                            <li>

                                <a href="#">
                                    <i class="metismenu-icon pe-7s-note2"></i>
                                    Solicitudes
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>

                                <ul>
                                    <li>
                                        <a data-toggle="modal" href=".modal-cambiodeturno">
                                            <i class="metismenu-icon">
                                            </i>Cambio de turno
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="modal" href=".modal-cambiodeseccion">
                                            <i class="metismenu-icon">
                                            </i>Cambio de sección
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="modal" href=".modal-cartadepostulacion">
                                            <i class="metismenu-icon">
                                            </i>Carta de postulacion
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="modal" href=".modal-serviciocomunitario">
                                            <i class="metismenu-icon">
                                            </i>Insc. de servicio comunitario
                                        </a>
                                    </li>
                                </ul>

                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-users"></i>
                                    Usuarios
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a data-toggle="modal" href=".modal-registrarusuario">
                                            <i class="metismenu-icon"></i>
                                            Registrar usuario
                                        </a>
                                    </li>
                                    <li>
                                        <a href="superusuarious.php">
                                            <i class="metismenu-icon">
                                            </i>
                                            Lista de usuarios
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="superusuariobd.php">
                                    <i class="metismenu-icon pe-7s-server"></i>
                                    Base de datos
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Ayuda</li>
                            <li>
                                <a href="./Manual%20Tecnico%20SIGESA.pdf">
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
                                <img class="img-thumbnail" src="../src/img/logo%20pnf%20informatica.png" width="70" height="60" alt="logo">
                                <div class="ml-2">

                                    <strong>Base de datos</strong>
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
                                <div class="card-header">
                                    <div class="col-sm-12 col-md-6">Lista de Base de Datos</div>
                                    <div class="col-sm-12 col-md-6">
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
                                                <th class="text-center">Nombre</th>
                                                <th class="text-center">Fecha</th>
                                                <th class="text-center">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            require 'includes/bd.inc.php';
                                            $sql = "SELECT * from respaldos";
                                            $result = mysqli_query($conn, $sql);
                                            while ($mostrar = mysqli_fetch_array($result)) {
                                            ?>
                                            <tr>
                                                <td class="text-center"><?php echo $mostrar['nombre']; ?></td>
                                                <td class="text-center"><?php echo date("d/m/Y g:i a", strtotime($mostrar['fecha'])); ?></td>
                                                <td class="text-center">
                                                    <div class="row">
                                                        <form class="form col-sm" action="/respaldo/<?php echo $mostrar['nombre']; ?>" method="get">
                                                            <button class="btn btn-success btn-lg" data-toggle="tooltip" data-placement="left" title="Descargar respaldo"><i class="pe-7s-download"></i>
                                                            </button>
                                                        </form>
                                                        <form class="form col-sm" action="includes/restaurarbd.php" method="post">
                                                            <input type="hidden" name="idr" value="<?php echo $mostrar['idr']; ?>">
                                                            <button class="btn btn-info btn-lg" type="submit" name="restaurar" data-toggle="tooltip" data-placement="left" title="Restaurar respaldo"><i class="pe-7s-upload"></i>
                                                            </button>
                                                        </form>
                                                        <form class="form col-sm" action="includes/eliminarbd.php" method="post">
                                                            <input type="hidden" name="idr" value="<?php echo $mostrar['idr']; ?>">
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
                        <div class="app-footer__inner">
                            <div class="container text-center">
                                <small>Todos los derechos reservados &copy;</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery.dataTables.min.js first, then dataTables.bootstrap4.min.js, then datatablecaller.js -->
    <script type="text/javascript" charset="utf8" src="../src/DataTables/jQuery-3.3.1/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>

    <script type="text/javascript" charset="utf8" src="../src/DataTables/DataTables-1.10.21/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="../src/DataTables/DataTables-1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" charset="utf8" src="../src/DataTables/DataTables-1.10.21/js/datatablecallertabla.js">
    </script>
    <script type="text/javascript" charset="utf8" src="../src/bootstrap4/js/modaledit.js">
    </script>

    <?php 
}
      else {
   ?> <script>
        alert("Debe Iniciar Sesion.");
        window.location.href = "index.php";

    </script> <?php
					
}
	 ?>

</body>

</html>

<<!-- Modales -->

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Seleccione "Cerrar Sesión" si quiere terminar la sesión actual.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-primary" href="index.php">Cerrar Sesión</a>
            </div>
        </div>
    </div>
</div>

<!-- Editar -->

<div class="modal fade" id="modaleditar" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Editar Solicitud</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form class="needs-validation" action="includes/mod.solicitud.inc.php" method="post" novalidate>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-md-8 mb-3">

                            <input type="hidden" name="ids" id="ids">

                            <label for="estudiante">Nombre y Apellido</label>

                            <input type="text" id="estudiante" name='estudiante' class="form-control" placeholder="Nombre y Apellido" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))" maxlength="30" required>
                            <div class="invalid-feedback">
                                Debe rellenar este campo.
                            </div>
                            <div class="valid-feedback">
                                Listo.
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">

                            <label for="cedula">Cedula</label>

                            <input type="text" id="cedula" name="cedula" class="form-control" placeholder="Cedula" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" maxlength="8" required>
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

                            <label for="seccion">Seccion</label>

                            <input type="text" id="seccion" name="seccion" class="form-control" placeholder="Seccion" required>
                            <div class="invalid-feedback">
                                Debe llenar este campo.
                            </div>
                            <div class="valid-feedback">
                                Listo.
                            </div>

                        </div>

                        <div class="col-md-4 mb-3">

                            <label for="trayecto">Trayecto</label>

                            <input type="text" id="trayecto" name="trayecto" class="form-control" placeholder="Trayecto" required>
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
                    <button type="submit" name="modificar" class="btn btn-primary">Realizar Formulario</button>
                </div>
            </form>
            <script type="text/javascript" src="./assets/scripts/validarformularios.js"></script>
        </div>
    </div>
</div>

<!-- Editar Usuario -->

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
                            
                           $idu = $_SESSION{'idu'};
                            
                           include 'includes/bd.inc.php';
                            
                           $sql="SELECT * FROM usuarios WHERE idu='$idu'";
                           $result=mysqli_query($conn,$sql);
                           $mostrar=mysqli_fetch_array($result); ?>

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
                                            $idu=$_SESSION{'idu'}; 
                                            require 'includes/bd.inc.php';
                                            $sql = "SELECT * from usuarios where idu='$idu'";
                                            $result = mysqli_query($conn, $sql);
                                            while ($mostrar = mysqli_fetch_array($result)) {
                                            ?>

                            <img id="uploadPreview1" class="card border" width="150" height="150" src="../architectui-html-free/assets/images/avatars/<?php echo $mostrar['foto']; }?>" />

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

<!-- Registrar Usuario -->

<div class="modal fade modal-registrarusuario" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLongTitle">Registro de Usuario</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>

            <form class="needs-validation" action="includes/registro.inc.php" method="post" novalidate>

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

                            <option value="2">Administrador</option>
                            <option value="3">Asistente</option>

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

<!-- Cambio de Turno -->

<div class="modal fade modal-cambiodeturno" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cambio de Turno</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="needs-validation" action="./includes/solicitud.inc.php" method="post" novalidate>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-md-8 mb-3">
                            <label for="estudiante">Nombre y Apellido</label>
                            <input type="text" class="form-control" id="estudiante" name='estudiante' placeholder="Nombre y Apellido" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))" maxlength="30" required>
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
                            <label for="seccion">Seccion</label>
                            <input type="text" class="form-control" id="seccion" name="seccion" placeholder="Seccion" required>
                            <div class="invalid-feedback">
                                Debe llenar este campo.
                            </div>
                            <div class="valid-feedback">
                                Listo.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="trayecto">Trayecto</label>
                            <input type="text" class="form-control" id="trayecto" name="trayecto" placeholder="Trayecto" required>
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
                    <button type="submit" name="submit3" class="btn btn-primary">Realizar Formulario</button>
                </div>
            </form>
            <script type="text/javascript" src="./assets/scripts/validarformularios.js"></script>
        </div>
    </div>

</div>

<!-- Cambio de Seccion -->

<div class="modal fade modal-cambiodeseccion" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Cambio de Seccion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form class="needs-validation" action="./includes/solicitud.inc.php" method="post" novalidate>
                <div class="modal-body">

                    <div class="form-row">
                        <div class="col-md-8 mb-3">
                            <label for="estudiante">Nombre y Apellido</label>
                            <input type="text" class="form-control" id="estudiante" name='estudiante' placeholder="Nombre y Apellido" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))" maxlength="30" required>
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
                            <label for="seccion">Seccion</label>
                            <input type="text" class="form-control" id="seccion" name="seccion" placeholder="Seccion" required>
                            <div class="invalid-feedback">
                                Debe llenar este campo.
                            </div>
                            <div class="valid-feedback">
                                Listo.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="trayecto">Trayecto</label>
                            <input type="text" class="form-control" id="trayecto" name="trayecto" placeholder="Trayecto" required>
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
                    <button type="submit" name="submit4" class="btn btn-primary">Realizar Formulario</button>
                </div>
            </form>
            <script type="text/javascript" src="./assets/scripts/validarformularios.js"></script>
        </div>
    </div>

</div>

<!-- Carta de Postulacion -->

<div class="modal fade modal-cartadepostulacion" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Carta de postulacion de proyecto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form class="needs-validation" action="./includes/solicitud.inc.php" method="post" novalidate>
                <div class="modal-body">

                    <div class="form-row">
                        <div class="col-md-8 mb-3">
                            <label for="estudiante">Nombre y Apellido</label>
                            <input type="text" class="form-control" id="estudiante" name='estudiante' placeholder="Nombre y Apellido" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))" maxlength="30" required>
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
                            <label for="seccion">Seccion</label>
                            <input type="text" class="form-control" id="seccion" name="seccion" placeholder="Seccion" required>
                            <div class="invalid-feedback">
                                Debe llenar este campo.
                            </div>
                            <div class="valid-feedback">
                                Listo.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="trayecto">Trayecto</label>
                            <input type="text" class="form-control" id="trayecto" name="trayecto" placeholder="Trayecto" required>
                            <div class="invalid-feedback">
                                Debe llenar este campo.
                            </div>
                            <div class="valid-feedback">
                                Listo.
                            </div>
                        </div>
                    </div>

                    <div class="form-row">

                        <div class="col-md-8 mb-3">

                            <label for="n1">1er Integrante</label>

                            <input type="text" class="form-control" id="n1" name='n1' placeholder="1er Integrante" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))" maxlength="30" required>
                            <div class="invalid-feedback">
                                Debe rellenar este campo.
                            </div>
                            <div class="valid-feedback">
                                Listo.
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">

                            <label for="c1">Cedula</label>

                            <input type="text" class="form-control" id="c1" name="c1" placeholder="Cedula" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" maxlength="8" required>
                            <div class="invalid-feedback">
                                Debe rellenar este campo.
                            </div>
                            <div class="valid-feedback">
                                Listo.
                            </div>
                        </div>

                    </div>

                    <div class="form-row">

                        <div class="col-md-8 mb-3">

                            <label for="n2">2do Integrante</label>

                            <input type="text" class="form-control" id="n2" name='n2' placeholder="2do Integrante" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))" maxlength="30">
                            <div class="invalid-feedback">
                                Debe llenar este campo.
                            </div>
                            <div class="valid-feedback">
                                Listo.
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">

                            <label for="c2">Cedula</label>

                            <input type="text" class="form-control" id="c2" name="c2" placeholder="Cedula" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" maxlength="8">
                            <div class="invalid-feedback">
                                Debe llenar este campo.
                            </div>
                            <div class="valid-feedback">
                                Listo.
                            </div>
                        </div>

                    </div>

                    <div class="form-row">

                        <div class="col-md-8 mb-3">

                            <label for="n3">3er integrante</label>

                            <input type="text" class="form-control" id="n3" name='n3' placeholder="3er integrante" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))" maxlength="30">
                            <div class="invalid-feedback">
                                Debe rellenar este campo.
                            </div>
                            <div class="valid-feedback">
                                Listo.
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">

                            <label for="c3">Cedula</label>

                            <input type="text" class="form-control" id="c3" name="c3" placeholder="Cedula" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" maxlength="8">
                            <div class="invalid-feedback">
                                Debe rellenar este campo.
                            </div>
                            <div class="valid-feedback">
                                Listo.
                            </div>
                        </div>

                    </div>

                    <div class="form-row">

                        <div class="col-md-8 mb-3">

                            <label for="n4">4to Integrante</label>

                            <input type="text" class="form-control" id="n4" name='n4' placeholder="4to Integrante" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))" maxlength="30">
                            <div class="invalid-feedback">
                                Debe llenar este campo.</div>
                            <div class="valid-feedback">
                                Listo.
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">

                            <label for="c4">Cedula</label>

                            <input type="text" class="form-control" id="c4" name="c4" placeholder="Cedula" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" maxlength="8">
                            <div class="invalid-feedback">
                                Debe llenar este campo.
                            </div>
                            <div class="valid-feedback">
                                Listo.
                            </div>
                        </div>

                    </div>

                    <div class="form-row">

                        <div class="col-md-8 mb-3">

                            <label for="n5">5to Integrante</label>

                            <input type="text" class="form-control" id="n5" name='n5' placeholder="5to Integrante" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))" maxlength="30">
                            <div class="invalid-feedback">
                                Debe llenar este campo.</div>
                            <div class="valid-feedback">
                                Listo.
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">

                            <label for="c5">Cedula</label>

                            <input type="text" class="form-control" id="c5" name="c5" placeholder="Cedula" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" maxlength="8">
                            <div class="invalid-feedback">
                                Debe llenar este campo.
                            </div>
                            <div class="valid-feedback">
                                Listo.
                            </div>
                        </div>

                    </div>

                    <div class="form-row">

                        <div class="col-md-8 mb-3">

                            <label for="titulopst">Titulo del Proyecto</label>

                            <input type="text" class="form-control" id="titulopst" name='titulopst' placeholder="Titulo del Proyecto" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))" maxlength="150" required>
                            <div class="invalid-feedback">
                                Debe llenar este campo.</div>
                            <div class="valid-feedback">
                                Listo.
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">

                            <label for="nombreinstitucion">Nombre de la Institucion</label>

                            <input type="text" class="form-control" id="nombreinstitucion" name='nombreinstitucion' placeholder="Nombre de la Institucion" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))" maxlength="150" required>
                            <div class="valid-feedback">
                                Debe llenar este campo.
                            </div>
                            <div class="valid-feedback">
                                Listo.
                            </div>
                        </div>

                    </div>

                    <div class="form-row">

                        <div class="col-md-4 mb-3">

                            <label for="tutorinstitucional">Tutor Institucional</label>

                            <input type="text" class="form-control" id="tutorinstitucional" name='tutorinstitucional' placeholder="Tutor Institucional" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))" maxlength="30">
                            <div class="invalid-feedback">
                                Debe llenar este campo.</div>
                            <div class="valid-feedback">
                                Listo.
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">

                            <label for="tutoracademico">Tutor Academico</label>

                            <input type="text" class="form-control" id="tutoracademico" name='tutoracademico' placeholder="Tutor Academico" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))" maxlength="30">
                            <div class="invalid-feedback">
                                Debe llenar este campo.</div>
                            <div class="valid-feedback">
                                Listo.
                            </div>
                        </div>


                    </div>

                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="submit5" class="btn btn-primary">Realizar Formulario</button>
                </div>
            </form>
        </div>
        <script type="text/javascript" src="./assets/scripts/validarformularios.js"></script>
    </div>
</div>

<!-- Inscripcion de Servicio Comunitario -->

<div class="modal fade modal-serviciocomunitario" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Inscripcion de Servicio Comunitario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="needs-validation" action="./includes/solicitud.inc.php" method="post" novalidate>
                <div class="modal-body">
                    <div class="form-row">

                        <div class="col-md-4 mb-3">
                            <label for="estudiante">Nombre y Apellido</label>
                            <input type="text" class="form-control" id="estudiante" name='estudiante' placeholder="Nombre y Apellido" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))" maxlength="30" required>
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

                        <div class="col-md-4 mb-3">
                            <label for="telefonoestudiante">Telefono</label>
                            <input type="text" class="form-control" id="telefonoestudiante" name='telefonoestudiante' placeholder="Telefono" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" maxlength="12" required>
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
                            <label for="seccion">Seccion</label>
                            <input type="text" class="form-control" id="seccion" name="seccion" placeholder="Seccion" required>
                            <div class="invalid-feedback">
                                Debe llenar este campo.
                            </div>
                            <div class="valid-feedback">
                                Listo.
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="trayecto">Trayecto</label>
                            <input type="text" class="form-control" id="trayecto" name="trayecto" placeholder="Trayecto" required>
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

                            <label for="turno">Turno</label>

                            <select id="turno" name="turno" class="form-control">

                                <option value="Mañana">Mañana</option>
                                <option value="Tarde">Tarde</option>
                                <option value="Noche">Noche</option>

                            </select>

                            <div class="invalid-feedback">
                                Debe llenar este campo.
                            </div>

                            <div class="valid-feedback">
                                Listo.
                            </div>

                        </div>

                        <div class="col-md-4 mb-3">
                            
                            <label for="periodoacademico">Periodo Academico</label>
                            <input type="text" class="form-control" id="periodoacademico" name="periodoacademico" placeholder="Periodo Academico" required>
                            <div class="invalid-feedback">
                                Debe llenar este campo.
                            </div>
                            <div class="valid-feedback">
                                Listo.
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            
                            <label for="correo">Correo</label>
                            <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" required>
                            <div class="invalid-feedback">
                                El E-Mail introducido es invalido.
                            </div>
                            <div class="valid-feedback">
                                Listo.
                            </div>
                        </div>

                    </div>

                    <div class="form-row">

                        <div class="col-md-12 mb-3">
                            <label for="tituloproyecto">Titulo de proyecto</label>
                            <input type="text" class="form-control" id="tituloproyecto" name="tituloproyecto" placeholder="Titulo de proyecto" required>
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
                            <label for="municipio">Municipio</label>
                            <input type="text" class="form-control" id="municipio" name="municipio" placeholder="Municipio" required>
                            <div class="invalid-feedback">
                                Debe llenar este campo.
                            </div>
                            <div class="valid-feedback">
                                Listo.
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="parroquia">Parroquia</label>
                            <input type="text" class="form-control" id="parroquia" name="parroquia" placeholder="Parroquia" required>
                            <div class="invalid-feedback">
                                Debe llenar este campo.
                            </div>
                            <div class="valid-feedback">
                                Listo.
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="sector">Sector</label>
                            <input type="text" class="form-control" id="sector" name="sector" placeholder="Sector" required>
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
                            <label for="contactocomunal">Contacto Comunal</label>
                            <input type="text" class="form-control" id="contactocomunal" name="contactocomunal" placeholder="Contacto Comunal" required>
                            <div class="invalid-feedback">
                                Debe llenar este campo.
                            </div>
                            <div class="valid-feedback">
                                Listo.
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="telefonocomunal">Telefonos comunales</label>
                            <input type="text" class="form-control" id="telefonocomunal" name="telefonocomunal" placeholder="Telefonos comunales" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" required>
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
                            <label for="objquepersigue">Objetivo que se persigue</label>
                            <input type="text" class="form-control" id="objquepersigue" name="objquepersigue" placeholder="Objetivo que se persigue" required>
                            <div class="invalid-feedback">
                                Debe llenar este campo.
                            </div>
                            <div class="valid-feedback">
                                Listo.
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="impactocomuna">Impacto a la comunidad</label>
                            <input type="text" class="form-control" id="impactocomuna" name="impactocomuna" placeholder="Impacto a la comunidad" required>
                            <div class="invalid-feedback">
                                Debe llenar este campo.
                            </div>
                            <div class="valid-feedback">
                                Listo.
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="poblacionbene">Poblacion beneficiada</label>
                            <input type="text" class="form-control" id="poblacionbene" name="poblacionbene" placeholder="Poblacion beneficiada" required>
                            <div class="invalid-feedback">
                                Debe llenar este campo.
                            </div>
                            <div class="valid-feedback">
                                Listo.
                            </div>
                        </div>

                    </div>

                    <div class="form-row">

                        <div class="col-md-12 mb-3">
                            <label for="relacionpatria">Relacion con el Plan de la Patria 2019 - 2025</label>
                            <input type="text" class="form-control" id="relacionpatria" name="relacionpatria" placeholder="Relacion con el Plan de la Patria 2019 - 2025" required>
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
                    <button type="submit" name="submit6" class="btn btn-primary">Realizar Formulario</button>
                </div>
            </form>
            <script type="text/javascript" src="./assets/scripts/validarformularios.js"></script>
        </div>
    </div>

</div>
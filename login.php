<!-- ESTO ES PARA ELIMINAR LA SESION SI ALGUIEN ENTRA EN ESTE ARCHIVO SIN AUTORIZACION* -->
<?php
session_start();
if (isset($_SESSION['Super'])) {

    session_unset();
    session_destroy();
?> <script>
        window.location.href = "login.php";
    </script> <?php exit();
            } elseif (isset($_SESSION['Admin'])) {

                session_unset();
                session_destroy();
                ?> <script>
        window.location.href = "login.php";
    </script> <?php exit();
            } elseif (isset($_SESSION['Asis'])) {

                session_unset();
                session_destroy();
                ?> <script>
        window.location.href = "login.php";
    </script> <?php exit();
            }
                ?>
<!--ESTO ES PARA ELIMINAR LA SESION SI ALGUIEN ENTRA EN ESTE ARCHIVO SIN AUTORIZACION -->

<!DOCTYPE html> <!-- Aqui se declara HTML -->
<html>

<!-- Se declaran archivos, scripts y css -->

<head>
    <meta charset="utf-8">
    <title>login</title>
    <link rel="shortcut icon" href="../src/img/funesboLOGO.PNG">
    <link rel="stylesheet" href="./css/master.css">
    <link href="./css/main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/sweetalert2.min.css">
    <!-- Se declaran archivos, scripts y css -->

    <script src="./assets/scripts/sweetalert2.min.js"></script>
</head>

<!-- aqui es donde está lo que se ve en pantalla -->

<body>
    <div class="login-box border border-dark shadow">
        <img src="../src/img/funesboLOGO.PNG" class="avatar shadow border border-dark" alt="Avatar Image" style="display:none">
        <div class="h1 text-center">
            <strong>Colegio SION</strong>
        </div>

        <form action="includes/loginadm.php" method="post">

            <!-- USERNAME INPUT -->

            <label for="username">Cedula</label>
            <input type="text" placeholder="Introduzca su cedula" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" maxlength="8" name="idu" required />

            <!-- PASSWORD INPUT -->

            <label for="password">Contraseña</label>
            <input type="password" placeholder="Introduzca su contraseña" maxlength="15" name="pwd" required />

            <input type="submit" name="submit2" class="btn btn-primary pull-right" value="Iniciar Sesión">

            <a href="#modalrecuperacion" data-toggle="modal">Olvidó su contraseña?</a>
            <br>
            <a href="#modalregistro" data-toggle="modal">No tiene usuario? Registrese!</a>

        </form>
    </div>

    <script type="text/javascript" charset="utf8" src="../src/DataTables/jQuery-3.3.1/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>
    <script type="text/javascript" charset="utf8" src="../src/DataTables/DataTables-1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" charset="utf8" src="../src/bootstrap4/js/modaledit.js"></script>
    <script src="./assets/scripts/sweetalert.js"></script>

    <!-- Esto es PHP para saber que sesion es la que se va a iniciar -->
    <?php
    if (isset($_GET['error']) && $_GET['error'] == 1) {
    ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error de inicio de sesión',
                text: 'Usuario o contraseña incorrecta.'
            });
        </script>
    <?php
    }
    ?>

    <?php
    if (isset($_GET['success']) && $_GET['success'] == 2) {
    ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Credenciales correctos.',
                text: 'Iniciando sesion...',
                timer: 4000,
                showConfirmButton: false
            }).then(function() {
                window.location.href = '../administrador.php';
            });
        </script>
    <?php
    }
    ?>
    <!-- Esto es PHP para saber que sesion es la que se va a iniciar -->

</body>
<!-- hasta aqui es donde está lo que se ve en pantalla -->


<!-- Modal recuperacion -->

<div class="modal fade" id="modalrecuperacion" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLongTitle">Recuperacion de contraseña</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>

            <form class="needs-validation" action="includes/pregunta.php" method="post" novalidate>

                <div class="modal-body">

                    <div class="form-row">

                        <div class="col-md-12 mb-3">

                            <label for="cedula">Inserte su Cedula</label>

                            <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Cedula" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" maxlength="8" required>
                            <div class="invalid-feedback">
                                Debe rellenar este campo.
                            </div>
                            <div class="valid-feedback">
                                Listo.
                            </div>

                        </div>

                    </div>
                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="recuperar" class="btn btn-primary">Recuperar</button>

                </div>

            </form>

            <script type="text/javascript" src="./assets/scripts/validarformularios.js"></script>

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

</html>
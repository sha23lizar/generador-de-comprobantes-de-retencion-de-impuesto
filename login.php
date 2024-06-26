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
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="./css/style-index.css">
    <link href="css/aos/aos.css" rel="stylesheet">
    <link href="css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link rel="shortcut icon" href="./Assets/Images/Logo.png">
    <link rel="stylesheet" href="./css/master.css">
    <link href="./css/main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/sweetalert2.min.css">
    <!-- Se declaran archivos, scripts y css -->

    <script src="./assets/scripts/sweetalert2.min.js"></script>
</head>

<!-- aqui es donde está lo que se ve en pantalla -->

<body style="background-image: url(./assets/images/background-index.jpg); background-repeat: no-repeat; background-size: 100% 100%;">
<div class="login-box">

<div class="login-box border border-dark shadow">
    <a href="index.php">
    <img src="./Assets/Images/Logo.png" class="avatar" alt="Avatar Image">
    </a>
        <div class="h2 text-center">
            <strong class="strong-text-login">COLEGIO SION</strong>
        </div>

        <form action="includes/loginadm.php" method="post">

            <!-- USERNAME INPUT -->

            <label for="username">Cedula</label>
            <input type="text" placeholder="Introduzca su cedula" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" maxlength="8" name="idu" required />
            <!-- PASSWORD INPUT -->

            <label for="password">Contraseña</label>
            <input type="password" placeholder="Introduzca su contraseña" maxlength="15" minlength="6" name="pwd" required />

            <input type="submit" name="submit2" class="btn btn-primary pull-right" value="Iniciar Sesión">

            <a href="#modalrecuperacion" data-toggle="modal">Olvidó su contraseña?</a>
            <br>

        </form>

        </div>
        </div>
            
    <script type="text/javascript" src="./assets/scripts/main.js"></script>
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


  <!-- Archivos JS -->
  <script src="css/js/main.js"></script>
  <script src="css/purecounter/purecounter_vanilla.js"></script>
  <script src="css/aos/aos.js"></script>
  <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="css/glightbox/js/glightbox.min.js"></script>
  <script src="css/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="css/swiper/swiper-bundle.min.js"></script>
  <script src="css/waypoints/noframework.waypoints.js"></script>

</body>

<!-- hasta aqui es donde está lo que se ve en pantalla -->

<!-- Esto es PHP para saber que sesion es la que se va a iniciar -->

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
 




</html>
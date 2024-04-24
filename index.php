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

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>FEB</title>
  <link rel="shortcut icon" href="../src/img/funesboLOGO.PNG">

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="css/aos/aos.css" rel="stylesheet">
  <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="css/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="css/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="css/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="https://twitter.com/FundEsperan" class="twitter"><i class="bi bi-twitter"></i></a>
        <!--    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a> -->
        <a href="https://www.instagram.com/fundacionesperanza_bolivar/" class="instagram"><i class="bi bi-instagram"></i></a>
        <!--    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a> -->
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">FEB<span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
          <li><a class="nav-link scrollto" href="#about">Sobre nosotros</a></li>
          <li><a class="nav-link scrollto" href="#services">Servicios</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contactenos</a></li>
          <li><a class="nav-link scrollto" href="login.php">Iniciar Sesion</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="d-flex align-items-center">
      <h1>Bienvenido a la <span>Fundacion Esperanza Bolivar</span></h1>
      <img src="./assets/images/funesboLOGOt.png" class="img-fluid" width="450" height="450" alt="">
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Reseña Historica</h2>
          <h3>Reseña <span>Historica</span></h3>
          <!-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="./assets/images/PFE.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>La Posada Fundación Esperanza Bolívar</h3>
            <p class="fst-italic">
              Fue fundada el 3 de octubre del 2017 bajo orden del exgobernador Francisco Rangel Gómez, basado en el acta constituya del ministerio del poder popular para la salud, apoyado con el decreto 3769 publicado el 22 de diciembre del 2012.
              La Fundación tiene por objeto atender de modo integral los planes tendientes al desarrollo de las actividades dirigidas a la protección, alojamiento y atención de personas en estado de vulnerabilidad, sin ningún tipo de distinción, persiguiendo como finalidad el bien común e interés público y de esta manera contribuir a minimizar el riesgo social.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Mision y Vision</h2>
          <h3>Nuestra <span>Mision</span></h3>
          <p>Brindar atención a la población general en situación de vulnerabilidad, resaltando el compromiso humanitario, con el fin de lograr y alcanzar la tranquilidad y el bienestar del colectivo con mayor riesgo social.</p>
        </div>
        <div class="section-title">
          <h3>Nuestra <span>Vision</span></h3>
          <p>Ser modelo de referencia a nivel nación al con el alto perfil humanista, para el desarrollo de planes y actividades que contribuyan con la protección, alimentación y resguardo de niños, niñas, adolescentes y adultos.</p>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contactanos</h2>
          <h3><span>Contactanos</span></h3>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Direccion</h3>
              <p>4FMC+8H8, Cdad. Bolívar 8001, Bolívar</p>
            </div>
          </div>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">
          <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-63.5303521!3d8.133334!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8dce87e78f3f127b%3A0x357c356b6b932222!2sFundaci%C3%B3n+Esperanza+Bolivar!5e0!3m2!1ses!2s!4v1625231912447!5m2!1ses!2s" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

           <div class="col-lg-6">
            <form action="includes/contactanos.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nombre y Apellido" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electronico" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Mensaje" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Cargando</div>
                <div class="error-message"></div>
                <div class="sent-message">Su mensaje ha sido enviado, Muchas Gracias!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar mensaje</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>FEB</span></strong>. Todos los derechos reservados.
      </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="css/purecounter/purecounter_vanilla.js"></script>
  <script src="css/aos/aos.js"></script>
  <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="css/glightbox/js/glightbox.min.js"></script>
  <script src="css/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="css/swiper/swiper-bundle.min.js"></script>
  <script src="css/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="css/js/main.js"></script>

</body>

</html>
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
  <title>Unidad Educativa "Colegio Sion"</title>
  <link rel="shortcut icon" href="./Assets/Images/Logo.png">

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">        
  
  <!-- Archivos CSS -->
  <link rel="stylesheet" href="./css/style-index.css">
  <link href="css/aos/aos.css" rel="stylesheet">
  <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="css/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="css/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="css/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Archivo Main CSS -->
  <link href="css/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="https://www.facebook.com/colegiosion1" class="facebook"><i class="bi bi-facebook"></i> Siguenos en Facebook</a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <img src="./Assets/Images/Logo.jpg" class="img-fluid" width="50" height="50" alt="">
      <h1 class="logo" style="font-size: 20px"><a href="index.html">Unidad Educativa "Colegio Sion"</a></h1>

<a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
          <li><a class="nav-link scrollto" href="#about">Reseña Historica</a></li>
          <li><a class="nav-link scrollto" href="#services">Mision y Vision</a></li>
          <li><a class="nav-link scrollto" href="#contact">Dirección</a></li>
          <li><a class="nav-link scrollto" href="login.php">Iniciar Sesion</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- Final del Header-->

  <!-- ======= Seccion del logo ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="d-flex align-items-center">
      <h1>Bienvenido a <span class="strong-text-title">Unidad Educativa "Colegio Sion"</span></h1>
      <img src="./Assets/Images/Logo.jpg" class="img-fluid" width="250" height="250" alt="">
      </div>
    </div>
  </section><!-- Final de la eccion del logo -->

  <main id="main">

    <!-- ======= Seccion - Sobre nosotros ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Reseña Historica</h2>
          <h3>Reseña <span>Historica</span></h3>
        </div>

          <div class="row">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
              <div class="card">
              <img src="./assets/images/Sion.jpg" class="img-fluid" style="width: 1000px; height: 275px; border-radius: 10px;">
              </div>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
              <h3>Unidad Educativa Sión</h3>
              <p class="fst-italic">
              Se origina de la preocupación del Reverendo Everilde Castillo, Pastor Evangélico acerca de la ausencia de valores cristianos sólidos en los niños y niñas; ya que muchos al llegara adultos se encuentran involucrados en situaciones peligrosas tales como deshonestidad, alcoholismo, drogadicción,prostitución, hechicerías, idolatria, debido a que Dios prohíbe tales cosas y otras más en su palabra, surge la inquietud de brindarles a los niños y adolescentes las herramientas que Dios ha dejado para formar hombres y mujeres temerosos de El, responsables con su familia ante la sociedad y la patria.
              </p>
            </div>
            
          </div>

      </div>
    </section><!-- Fin de seccion - Sobre nosotros -->

    <!-- ======= Seccion - Servicios ======= -->
    <section id="services" class="services" style="background-image: url(./assets/images/background-index.jpg); background-repeat: no-repeat; background-size: 100% 100%;">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Mision y Vision</h2>
          <h3>Nuestra <span>Mision</span></h3>
          <p class="glass-effect" style="border-radius: 10px; padding: 5px">La misión es predicar el Evangelio de Jesucristo en la medida que se enseña secularmente, ya que como dice la escritura <a style="font-style: italic;">"Porque ¿que aprovechará el hombre si ganara todo el mundo, y perdiere su alma?"<a>, Marcos 8:36.</p>
        </div>
        <div class="section-title">
          <h3>Nuestra <span>Vision</span></h3>
          <p class="glass-effect" style="border-radius: 10px; padding: 5px">La vision que origina la fundación del Colegio esta basada en la necesidad que tiene el ser humano de llenar vacios en su alma, curar y sanar heridas que le ocacionaron dolor y muchas veces impiden el desarrollo, el crecimiento emocional y espiritual que las personas deben lograr.</p>
        </div>
      </div>
    </section><!-- Fin de seccion - Servicios -->
    

    <!-- Seccion - Actividades escolares (Carrusel)  -->
    <section id="about" class="about section-bg">
    <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./assets/images/Sion1.jpg" class="d-block w-60" style="width: 1000px; height: 500px; border-radius: 10px; margin: 0 auto">
      <div class="carousel-caption d-none d-md-block">
        </div>
    </div>
    <div class="carousel-item">
      <img src="./assets/images/Sion2.jpg" class="d-block w-60" style="width: 1000px; height: 500px; border-radius: 10px; margin: 0 auto">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item">
      <img src="./assets/images/Sion3.jpg" class="d-block w-60" style="width: 1000px; height: 500px; border-radius: 10px; margin: 0 auto">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span style="font-size: 30px; color: #106eea" class="bi bi-caret-left-fill" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span style="font-size: 30px; color: #106eea" class="bi bi-caret-right-fill" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>
    </section><!-- Final de seccion - Actividades escolares (Carrusel) -->

    <!-- ======= Seccion - Contactos ======= -->
    <section id="contact" class="contact" style="background-image: url(./assets/images/background-index.jpg); background-repeat: no-repeat; background-size: 100% 100%;">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Dirección</h2>
          <h3><span>Dirección</span></h3>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">
            <div style="border:1px solid #ffffff2e; border-radius: 10px;" class="glass-effect info-box mb-4">
              <a class="bi bi-geo-alt"></a>
              <p>3FV6+RHV, Cdad. Bolívar 8001, Bolívar</p>
            </div>
          </div>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">
            <div>
              <img src="./assets/images/mapa.png" alt="" srcset="">
            </div>
          </div>

           

        </div>

      </div>
    </section><!-- ======= Final de seccion - Contactos ======= -->

  </main><!-- Fin de #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container py-4">
      <div class="copyright" style="text-align: center">
        &copy; Copyright <strong><span>Unidad Educativa "Colegio Sion"</span></strong>. Todos los derechos reservados.
      </div>
  </footer><!-- Final de Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Archivos JS -->
  <script src="css/purecounter/purecounter_vanilla.js"></script>
  <script src="css/aos/aos.js"></script>
  <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="css/glightbox/js/glightbox.min.js"></script>
  <script src="css/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="css/swiper/swiper-bundle.min.js"></script>
  <script src="css/waypoints/noframework.waypoints.js"></script>

  <!-- Archivo Main JS -->
  <script src="css/js/main.js"></script>

</body>

</html>
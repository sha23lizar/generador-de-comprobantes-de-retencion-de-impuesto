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


                <li>
                </li>

                <li class="app-sidebar__heading text-center text-white">
                    <img width="180" height="180" class="" src="./Assets/Images/Logo.png" alt=""><br>
                    <p>MENÚ</p>
                </li>

                <?php

                // class="mm-active" para la seccion seleccionada



                if ($_SESSION['rol'] == 3) { ?>

                    <li>
                        <a href="asistente.php" style="opacity: 1;" class="
                        <?php
                        if (basename($_SERVER['PHP_SELF']) == 'asistente.php') {
                            echo "mm-active";
                        }
                        ?>">
                            <i class="metismenu-icon bi bi-house-door-fill"></i>
                            Inicio
                        </a>
                    </li>
                     <li>
                        <a href="asistente_isr.php" style="opacity: 1;" class="
                        <?php
                        if (basename($_SERVER['PHP_SELF']) == 'asistente_isr.php') {
                            echo "mm-active";
                        }
                        ?>">
                            <i class="metismenu-icon bi bi-file-person-fill"></i>
                            Comprobante ISLR
                        </a>
                    </li> 
                <?php
                }
                ?>
                <?php
                if ($_SESSION['rol'] ==  2) { ?>
                    <li>
                        <a href="administrador.php" style="opacity: 1;" class=" text-white
                        <?php
                        if (basename($_SERVER['PHP_SELF']) == 'administrador.php') {
                            echo "mm-active";
                        }
                        ?>">
                            <i class="metismenu-icon bi bi-house-door-fill"></i>
                            Inicio
                        </a>
                    </li>
                    <li>
                        <a href="administradorha.php" class="text-white
                        <?php
                        if (basename($_SERVER['PHP_SELF']) == 'administradorha.php') {
                            echo "mm-active";
                        }
                        ?>">
                            <i class="metismenu-icon bi bi-file-person-fill active "></i>
                            Proveedores
                        </a>
                    </li>
                     <li>
                        <a href="superusuarioisr.php" class="text-white 
                        <?php
                        if (basename($_SERVER['PHP_SELF']) == 'superusuarioisr.php') {
                            echo "mm-active";
                        }
                        ?>">
                            <i class="metismenu-icon bi bi-file-person-fill"></i>
                            Comprobante ISLR
                        </a>
                    </li>
                    <li>
                        <a href="superusuarioproisr.php" class="text-white
                        <?php
                        if (basename($_SERVER['PHP_SELF']) == 'superusuarioproisr.php') {
                            echo "mm-active";
                        }
                        ?>
                        ">
                            <i class="metismenu-icon bi bi-person-check-fill"></i>
                            Proveedores ISLR
                        </a>
                    </li> 
                <?php
                }
                ?>
                <?php
                if ($_SESSION['rol'] == 1) { ?>
                    <li>
                        <a href="superusuario.php" style="opacity: 1;" class=" text-white
                        <?php
                        if (basename($_SERVER['PHP_SELF']) == 'superusuario.php') {
                            echo "mm-active";
                        }
                        ?>
                        
                        ">
                            <i style="font-size: 20px" class="metismenu-icon bi bi-house-door-fill"></i>
                            Inicio
                        </a>
                    </li>
                    <li>
                        <a href="superusuarioha.php" class="text-white 
                        <?php
                        if (basename($_SERVER['PHP_SELF']) == 'superusuarioha.php') {
                            echo "mm-active";
                        }
                        ?>
                        ">
                            <i class="metismenu-icon bi bi-file-person-fill active "></i>
                            Proveedores
                        </a>
                    </li>
                     <li>
                        <a href="superusuarioisr.php" class="text-white
                        <?php
                        if (basename($_SERVER['PHP_SELF']) == 'superusuarioisr.php') {
                            echo "mm-active";
                        }
                        ?>
                        ">
                            <i class="metismenu-icon bi bi-file-person-fill"></i>
                            Comprobante ISLR
                        </a>
                    </li>
                    <li>
                        <a href="superusuarioproisr.php" class="text-white
                        <?php
                        if (basename($_SERVER['PHP_SELF']) == 'superusuarioproisr.php') {
                            echo "mm-active";
                        }
                        ?>
                        ">
                            <i class="metismenu-icon bi bi-person-check-fill"></i>
                            Proveedores ISLR
                        </a>
                    </li> 
                    <li>
                        <a href="superusuarious.php" class="text-white
                        <?php
                        if (basename($_SERVER['PHP_SELF']) == 'superusuarious.php') {
                            echo "mm-active";
                        }
                        ?>
                        ">
                            <i class="metismenu-icon bi bi-people-fill">
                            </i>
                            Usuarios
                        </a>
                    </li>
                    <li>
                        <a href="superusuariobd.php" class="text-white
                        <?php
                        if (basename($_SERVER['PHP_SELF']) == 'superusuariobd.php') {
                            echo "mm-active";
                        }
                        ?>
                        
                        ">
                            <i class="metismenu-icon bi bi-database-fill"></i>
                            Base de datos
                        </a>
                    </li>
                <?php }
                ?>


                <li class="app-sidebar__heading text-white" class="text-white">Ayuda</li>
                <li>
                    <a href="./Manual%20Tecnico%20Colegio%20SION.pdf" class="text-white">
                        <i class="metismenu-icon bi bi-journal-bookmark-fill"></i>
                        Manual tecnico
                    </a>
                </li>
                <li>
                    <a href="./Manual%20de%20Usuario%20Colegio%20SION.pdf" class="text-white">
                        <i class="metismenu-icon bi bi-journal-bookmark-fill"></i>
                        Manual de Usuario
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
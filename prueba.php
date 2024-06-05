<?php

if (basename($_SERVER['PHP_SELF']) == 'prueba.php') {
    echo "Estoy en la página de prueba.php";
} else {
    // Código que se ejecutará en caso de que no se esté en la página "prueba.php"
    echo "No estoy en la página de prueba.php";
}
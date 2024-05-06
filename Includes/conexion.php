
<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "feb"; // Reemplaza con el nombre de tu base de datos
    $server = "mysql:host=localhost;dbname=feb";

    $conexion = new PDO($server, $username, $password);
    $conn = new mysqli($servername, $username, $password, $dbname);


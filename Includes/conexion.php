
<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "feb"; // Reemplaza con el nombre de tu base de datos
    $server = "mysql:host=localhost;dbname=crud_personal";

    $conexion = new PDO($server, $username, $password);

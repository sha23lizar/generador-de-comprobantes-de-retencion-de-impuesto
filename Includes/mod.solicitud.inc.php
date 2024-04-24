<?php

if (isset($_POST['modificar'])) {
    
    include "bd.inc.php";
    
    $ids = $_POST['ids'];
	$estudiante = mysqli_real_escape_string($conn, $_POST['estudiante']);
	$cedula = mysqli_real_escape_string($conn, $_POST['cedula']);
	$carrera = mysqli_real_escape_string($conn, $_POST['carrera']);
	$seccion = mysqli_real_escape_string($conn, $_POST['seccion']);
	$trayecto = mysqli_real_escape_string($conn, $_POST['trayecto']);

    $sql = "UPDATE solicitudes SET 
            estudiante='$estudiante',
            cedula='$cedula',
            carrera='$carrera',
            seccion='$seccion',
            trayecto='$trayecto'
            WHERE ids='$ids'";
        mysqli_query($conn, $sql);

    if ($sql==true) { 
        
        ?>
        <script>
            alert("Datos Modificados Correctamente!");
            window.location.href = "javascript:history.go(-1)";
            
        </script> 

        <?php }    
        } else {
            ?> <script>
            alert("Hubo un error, intentelo de nuevo");
            window.location.href = "javascript:history.go(-1)";

        </script> <?php } exit(); ?>

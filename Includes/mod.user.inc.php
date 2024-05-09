<?php

if (isset($_POST['modificar'])) {
    
    include "bd.inc.php";
    
    $idu = $_POST['idu'];
	$usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
	$cedula = mysqli_real_escape_string($conn, $_POST['cedula']);
	$contra = mysqli_real_escape_string($conn, $_POST['contra']);
    

    $sql = "UPDATE usuarios SET 
            usuario='$usuario',
            cedula='$cedula',
            contra='$contra',
            WHERE idu='$idu'";
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
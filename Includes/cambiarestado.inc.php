<?php
include "bd.inc.php";

if (isset($_REQUEST['cambiar'])) {
    $idp = $_REQUEST['idp'];
    $idh = $_REQUEST['idh'];
    $statush = '0';

    $sql = "UPDATE pacientes SET statush='$statush', fechae=NOW() WHERE idp='$idp'";
    mysqli_query($conn, $sql);
    
    $sql_update = "UPDATE habitaciones SET estatus = '0' WHERE idh = $idh";
    $result = mysqli_query($conn, $sql_update);

    if ($result) { 
        ?>
        <script>
            alert("Paciente dado de alta con éxito!");
            window.location.href = "javascript:history.go(-1)";
        </script> 
    <?php 
    } else {
        ?>
        <script>
            alert("Hubo un error, inténtelo de nuevo");
            window.location.href = "javascript:history.go(-1)";
        </script> 
    <?php 
    } 
    exit();
} 
?>
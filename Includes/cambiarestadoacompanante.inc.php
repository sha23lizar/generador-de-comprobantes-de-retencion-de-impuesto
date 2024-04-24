<?php
include "bd.inc.php";

if (isset($_REQUEST['cambiar'])) {
    $ida = $_REQUEST['ida'];
    $statusa = '0';

    $sql = "UPDATE acompanantes SET statusa='$statusa', fechae=NOW() WHERE ida='$ida'";
    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) { 
        ?>
        <script>
            alert("Acompañante retirado con éxito!");
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
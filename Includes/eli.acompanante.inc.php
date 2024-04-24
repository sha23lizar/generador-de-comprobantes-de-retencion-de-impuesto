<?php

//Eliminar Paciente
if (isset($_POST['eliminar'])) {

    //Llamar base de datos
    include 'bd.inc.php';

    $ida = mysqli_real_escape_string($conn, $_POST['ida']);

    // Eliminar registro de la tabla 'acompanantes'
    $sql_pac = "DELETE FROM acompanantes WHERE ida='$ida'";
    mysqli_query($conn, $sql_pac);

    if (mysqli_affected_rows($conn) > 0) {
        
        ?>
        <script>
            alert("Acompañante eliminado con exito.");
            window.location.href = "javascript:history.go(-1)";
        </script>
        <?php
        exit();
    } else {
        ?>
        <script>
            alert("No se pudo eliminar al acompañante. Intente de nuevo.");
            window.location.href = "javascript:history.go(-1)";
        </script>
        <?php
        exit();
    }
} else {
    ?>
    <script>
        alert("El query ha fallado con exito.");
        window.location.href = "javascript:history.go(-1)";
    </script>
    <?php
    exit();
}
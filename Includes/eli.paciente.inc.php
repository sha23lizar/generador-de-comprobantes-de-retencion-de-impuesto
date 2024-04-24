<?php

//Eliminar Paciente
if (isset($_POST['eliminar'])) {

    //Llamar base de datos
    include 'bd.inc.php';

    $idp = mysqli_real_escape_string($conn, $_POST['idp']);
    $idh = mysqli_real_escape_string($conn, $_POST['idh']);

    // Eliminar registros relacionados en la tabla 'acompanantes'
    $sql_acomp = "DELETE FROM acompanantes WHERE idp='$idp'";
    mysqli_query($conn, $sql_acomp);

    // Eliminar registro de la tabla 'pacientes'
    $sql_pac = "DELETE FROM pacientes WHERE idp='$idp'";
    mysqli_query($conn, $sql_pac);

    if (mysqli_affected_rows($conn) > 0) {
        $sql_update = "UPDATE habitaciones SET estatus = '0' WHERE idh = $idh";
        mysqli_query($conn, $sql_update);
        
        ?>
        <script>
            alert("Paciente eliminado con exito.");
            window.location.href = "javascript:history.go(-1)";
        </script>
        <?php
        exit();
    } else {
        ?>
        <script>
            alert("No se pudo eliminar al paciente. Intente de nuevo.");
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
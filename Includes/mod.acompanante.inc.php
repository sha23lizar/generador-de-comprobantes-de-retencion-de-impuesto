<?php

if (isset($_POST['modificar'])) {

    include "bd.inc.php";

    $ida = $_POST['idaEditarA'];
    $acompanante = mysqli_real_escape_string($conn, $_POST['acompananteEditarA']);
    $cedula = mysqli_real_escape_string($conn, $_POST['cedulaEditarA']);
    $edad = mysqli_real_escape_string($conn, $_POST['edadEditarA']);
    $sexo = mysqli_real_escape_string($conn, $_POST['sexoEditarA']);
    $estado = mysqli_real_escape_string($conn, $_POST['estadoEditarA']);
    $municipio = mysqli_real_escape_string($conn, $_POST['municipioEditarA']);
    $parroquia = mysqli_real_escape_string($conn, $_POST['parroquiaEditarA']);

    $sql = "UPDATE acompanantes SET 
            acompanante='$acompanante',
            cedula='$cedula',
            edad='$edad',
            sexo='$sexo',
            estado='$estado',
            municipio='$municipio',
            parroquia='$parroquia'
            WHERE ida='$ida'";
    $result = mysqli_query($conn, $sql);

    if ($result) { ?>
        <script>
            alert("Acompanante Modificados Correctamente!");
            window.location.href = "javascript:history.go(-1)";
        </script>

    <?php } else { ?>
        <script>
            alert("Hubo un error, intentelo de nuevo");
            window.location.href = "javascript:history.go(-1)";
        </script>
<?php }
    exit();
}
?>
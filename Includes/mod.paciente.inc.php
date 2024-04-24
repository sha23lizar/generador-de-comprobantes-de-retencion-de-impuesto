<?php

if (isset($_POST['modificar'])) {

    include "bd.inc.php";

    $idp = $_POST['idpEditar'];
    $paciente = mysqli_real_escape_string($conn, $_POST['pacienteEditar']);
    $cedula = mysqli_real_escape_string($conn, $_POST['cedulaEditar']);
    $edad = mysqli_real_escape_string($conn, $_POST['edadEditar']);
    $sexo = mysqli_real_escape_string($conn, $_POST['sexoEditar']);
    $estado = mysqli_real_escape_string($conn, $_POST['estadoEditar']);
    $municipio = mysqli_real_escape_string($conn, $_POST['municipioEditar']);
    $parroquia = mysqli_real_escape_string($conn, $_POST['parroquiaEditar']);
    $patologia = mysqli_real_escape_string($conn, $_POST['patologiaEditar']);

    $sql = "UPDATE pacientes SET 
            paciente='$paciente',
            cedula='$cedula',
            edad='$edad',
            sexo='$sexo',
            estado='$estado',
            municipio='$municipio',
            parroquia='$parroquia',
            patologia='$patologia'
            WHERE idp='$idp'";
    $result = mysqli_query($conn, $sql);

    if ($result) { ?>
        <script>
            alert("Paciente Modificados Correctamente!");
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
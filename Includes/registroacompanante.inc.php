<?php
if (isset($_POST['submit1'])) {

    // Incluye el archivo de conexión a la base de datos
    include 'bd.inc.php';

    // Escapa los valores del formulario
    $idp = mysqli_real_escape_string($conn, $_POST['idp']);
    $acompanante = mysqli_real_escape_string($conn, $_POST['acompanante']);
    $cedula = mysqli_real_escape_string($conn, $_POST['cedula']);
    $edad = mysqli_real_escape_string($conn, $_POST['edad']);
    $sexo = mysqli_real_escape_string($conn, $_POST['sexo']);
    $estado = mysqli_real_escape_string($conn, $_POST['estado']);
    $municipio = mysqli_real_escape_string($conn, $_POST['municipio']);
    $parroquia = mysqli_real_escape_string($conn, $_POST['parroquia']);
    $statusa = '1';

    // Comprueba si el IDP existe en la tabla de pacientes
    $sql = "SELECT * FROM pacientes WHERE idp='$idp'";
    $resultado = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $filas = mysqli_num_rows($resultado);

    if ($filas > 0) {
        // El IDP existe en la tabla de pacientes, comprobar si el acompañante ya está registrado
        $sql = "SELECT * FROM acompanantes WHERE idp='$idp' AND acompanante='$acompanante'";
        $resultado = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $filas = mysqli_num_rows($resultado);

        if ($filas > 0) {
            // El acompañante ya está registrado, mostrar mensaje y redirigir a la página anterior
            echo "<script>alert('El acompañante ya está registrado.')</script>";
            echo "<script>window.history.go(-1)</script>";
            exit();
        } else {
            // El acompañante no está registrado, insertar en la tabla de acompañantes
            $sql = "INSERT INTO acompanantes (acompanante, cedula, edad, sexo, estado, municipio, parroquia, idp, fechae, statusa)
                    VALUES ('$acompanante', '$cedula', '$edad', '$sexo', '$estado', '$municipio', '$parroquia', '$idp', null, '$statusa')";
            mysqli_query($conn, $sql) or die(mysqli_error($conn));
            // Mostrar mensaje y redirigir a la página anterior
            echo "<script>alert('Acompañante registrado con éxito.')</script>";
            echo "<script>window.history.go(-1)</script>";
            exit();
        }
    } else {
        // El IDP no existe en la tabla de pacientes, mostrar mensaje y redirigir a la página anterior
        echo "<script>alert('El IDP no existe en la tabla de pacientes.')</script>";
        echo "<script>window.history.go(-1)</script>";
        exit();
    }
} else {
    // El formulario no se ha enviado, redirigir a la página anterior
    echo "<script>window.history.go(-1)</script>";
    exit();
}

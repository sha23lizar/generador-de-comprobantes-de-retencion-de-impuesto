<?php

// Incluye el archivo de conexión a la base de datos
include 'bd.inc.php';

// Escapa los valores del formulario
$nombreapellido = mysqli_real_escape_string($conn, $_POST['name']);
$correo = mysqli_real_escape_string($conn, $_POST['email']);
$asunto = mysqli_real_escape_string($conn, $_POST['subject']);
$mensaje = mysqli_real_escape_string($conn, $_POST['message']);

$sql = "INSERT INTO contactanos (nombreapellido, correo, asunto, mensaje)
                    VALUES ('$nombreapellido', '$correo', '$asunto', '$mensaje')";
mysqli_query($conn, $sql) or die(mysqli_error($conn));

echo "<script>alert('Su mensaje ha sido enviado, Muchas Gracias!')</script>";
echo "<script>window.history.go(-1)</script>";
exit();

<?php

include("conexion.php");


// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Consulta SQL para seleccionar los datos de los usuarios
$sql = "SELECT * FROM comprobante_isr ORDER BY fechaRegistro DESC LIMIT 1";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Array para almacenar los datos de los usuarios
    $comprobante = array();

    // Recorrer los resultados y almacenarlos en el array
    while ($row = $result->fetch_assoc()) {
        $comprobante[] = $row;
    }

    // Convertir el array en formato JSON
    $json_data = json_encode($comprobante);

    // Devolver el JSON como respuesta
    echo $json_data;
} else {
    echo json_encode("no hay comprobantes");
}

// Cerrar la conexión
$conn->close();
?>
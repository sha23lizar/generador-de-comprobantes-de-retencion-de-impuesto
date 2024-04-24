<?php
// Verifica si se ha enviado el formulario
if (isset($_POST['submit1'])) {
    // Conexión a la base de datos (debes llenar los detalles de conexión)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "feb";

    // Crea una conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Obtén los valores del formulario
    $nroComprobante = $_POST['nroComprobante'];
    $proveedor = $_POST['proveedor'];
    $rifProveedor = $_POST['rifProveedor'];
    $direccionProveedor = $_POST['dirreccionProveedor'];
    $fEmision = $_POST['fEmision'];
    $fEntrega = $_POST['fEntrega'];
    $fFactura = $_POST['fFactura'];
    $nroControl = $_POST['nroControl'];
    $totalFacturado = $_POST['totalFacturado'];
    $baseImponible = $_POST['baseImponible'];

    // Prepara la consulta SQL para insertar los datos en la tabla
    $sql = "INSERT INTO comprobante (nroComprobante, proveedor, rifProveedor, direccionProveedor, fEmision, fEntrega, fFactura, nroControl, totalFacturado, baseImponible)
            VALUES ('$nroComprobante', '$proveedor', '$rifProveedor', '$direccionProveedor', '$fEmision', '$fEntrega', '$fFactura', '$nroControl', '$totalFacturado', '$baseImponible')";

    // Ejecuta la consulta y verifica si fue exitosa
    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Cierra la conexión
    $conn->close();
}
?>


CREATE TABLE comprobante (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nroComprobante VARCHAR(50) NOT NULL,
    proveedor VARCHAR(100) NOT NULL,
    rifProveedor VARCHAR(20),
    direccionProveedor VARCHAR(255),
    fEmision DATE NOT NULL,
    fEntrega DATE NOT NULL,
    fFactura DATE NOT NULL,
    nroControl VARCHAR(20) NOT NULL,
    totalFacturado DECIMAL(10,2) NOT NULL,
    baseImponible DECIMAL(10,2) NOT NULL,
    fechaRegistro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
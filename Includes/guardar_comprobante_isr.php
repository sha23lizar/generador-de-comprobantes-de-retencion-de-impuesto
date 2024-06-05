<?php
// Verifica si se ha enviado el formulario
// if (isset($_POST['submit1'])) {
if (true) {
    // Conexión a la base de datos (debes llenar los detalles de conexión)
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "feb";

    // // Crea una conexión
    // $conn = new mysqli($servername, $username, $password, $dbname);
    include("./conexion.php");
    // Verifica la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Obtén los valores del formulario
    $nroComprobante = $_POST['nroComprobante'];
    $proveedor = $_POST['proveedor'];
    $rifProveedor = $_POST['rifProveedor'];
    $direccionProveedor = $_POST['direccionProveedor'];
    $fEmision = $_POST['fEmision'];
    $fEntrega = $_POST['fEntrega'];
    $fFactura = $_POST['fFactura'];
    $nroControl = $_POST['nroControl'];
    $totalFacturado = $_POST['totalFacturado'];
    $baseImponible = $_POST['baseImponible'];
    $impuestoIva = $_POST['impuestoIva'];
    $ivaRetenido = $_POST['ivaRetenido'];
    $nroFactura = $_POST['nroFactura'];

    // Prepara la consulta SQL para insertar los datos en la tabla
    $sql = "INSERT INTO comprobante_isr (nroComprobante, proveedor_isr, rifProveedor, direccionProveedor, fEmision, fEntrega, fFactura, nroControl, totalFacturado, baseImponible, impuestoIva, ivaRetenido, nroFactura)
            VALUES ('$nroComprobante', '$proveedor', '$rifProveedor', '$direccionProveedor', '$fEmision', '$fEntrega', '$fFactura', '$nroControl', '$totalFacturado', '$baseImponible','$impuestoIva', '$ivaRetenido', '$nroFactura')";

    $conn->query($sql); 
    // Ejecuta la consulta y verifica si fue exitosa
    // if ($conn->query($sql) === TRUE) {
    //     echo "Registro exitoso";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }

    // Cierra la conexión
    $conn->close();
}
?>
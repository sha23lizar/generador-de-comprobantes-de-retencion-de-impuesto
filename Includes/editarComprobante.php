<?php
// Verifica si se ha enviado el formulario
// if (isset($_POST['submit1'])) {
// Conexión a la base de datos (debes llenar los detalles de conexión)
include("conexion.php");

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
$id = $_POST['id'];

// Prepara la consulta SQL para insertar los datos en la tabla
$sql = "UPDATE comprobante SET nroComprobante = '$nroComprobante', proveedor = '$proveedor', rifProveedor = '$rifProveedor', direccionProveedor = '$direccionProveedor', fEmision = '$fEmision', fEntrega = '$fEntrega', fFactura = '$fFactura', nroControl = '$nroControl', totalFacturado = '$totalFacturado', baseImponible = '$baseImponible', impuestoIva = '$impuestoIva', ivaRetenido = '$ivaRetenido', nroFactura = '$nroFactura' WHERE id = '$id'";

$conn->query($sql);
// Ejecuta la consulta y verifica si fue exitosa
// if ($conn->query($sql) === TRUE) {
//     echo "Registro exitoso";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// Cierra la conexión
$conn->close();



// $stmt = $conexion->prepare("UPDATE comprobante SET proveedor = :proveedor, rifProveedor = :rifProveedor, direccionProveedor = :direccionProveedor, fEmision = :fEmision, fEntrega = :fEntrega, fFactura = :fFactura, nroControl = :nroControl, totalFacturado = :totalFacturado, baseImponible = :baseImponible, impuestoIva = :impuestoIva, ivaRetenido = :ivaRetenido WHERE id = :id");

// $resultado = $stmt->execute(
//     array(
//         ":nroComprobante" => $_POST['nroComprobante'],
//         ":proveedor" => $_POST['proveedor'],
//         ":rifProveedor" => $_POST['rifProveedor'],
//         ":direccionProveedor" => $_POST['direccionProveedor'],
//         ":fEmision" => $_POST['fEmision'],
//         ":fEntrega" => $_POST['fEntrega'],
//         ":fFactura" => $_POST['fFactura'],
//         ":nroControl" => $_POST['nroControl'],
//         ":totalFacturado" => $_POST['totalFacturado'],
//         ":baseImponible" => $_POST['baseImponible'],
//         ":impuestoIva" => $_POST['impuestoIva'],
//         ":ivaRetenido" => $_POST['ivaRetenido'],
//         ":id" => $_POST['id']
//     )
// );

// if (!empty($resultado)) {
//     echo "registro Actualizado";
// } else {
//     echo "Algo salio mal";
// }

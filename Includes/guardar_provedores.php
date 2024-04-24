<?php
/*
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
    $nombreProveedor = $_POST['nombreProveedor'];
    $rifProveedor = $_POST['rifProveedor'];
    $direccionProveedor = $_POST['dirreccionProveedor'];
    

    // Prepara la consulta SQL para insertar los datos en la tabla
    $sql = "INSERT INTO proveedor (nombreProveedor, rifProveedor, direccionProveedor)
            VALUES ('$nombreProveedor', '$rifProveedor', '$direccionProveedor')";

    // Ejecuta la consulta y verifica si fue exitosa
    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Cierra la conexión
    $conn->close();
}
*/
?>

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
    $nombreProveedor = $_POST['nombreProveedor'];
    $rifProveedor = $_POST['rifProveedor'];
    $direccionProveedor = $_POST['dirreccionProveedor'];
    

    // Prepara la consulta SQL para insertar los datos en la tabla
    $sql = "INSERT INTO proveedor (nombreProveedor, rifProveedor, direccionProveedor)
            VALUES ('$nombreProveedor', '$rifProveedor', '$direccionProveedor')";

    // Ejecuta la consulta y verifica si fue exitosa
    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso. Redireccionando al panel de superusuario...";
        header("refresh:1; url=../superusuarioha.php"); // Redirect to panelSuperUsuario.php after 3 seconds
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Cierra la conexión
    $conn->close();
}
?>
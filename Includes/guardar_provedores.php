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
        echo "Registro exitoso. Redireccionando al panel de superusuario...";
        header("refresh:1; url=../superusuarioha.php"); // Redirect to panelSuperUsuario.php after 3 seconds
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
    $seudonimo= $_POST['seudonimo'];

    // Verifica si el RIF ya existe en la base de datos
    $sql_check_rif = "SELECT * FROM proveedor WHERE rifProveedor = '$rifProveedor'";
    $result_check_rif = $conn->query($sql_check_rif);
    if ($result_check_rif->num_rows > 0) {
        header("refresh:0.5; url=./preloaderError.php?redirect=../superusuarioha.php");
        exit(); // Detiene la ejecución del script
    }

    // Prepara la consulta SQL para insertar los datos en la tabla
    $sql = "INSERT INTO proveedor (nombreProveedor, rifProveedor, direccionProveedor, seudonimo)
            VALUES ('$nombreProveedor', '$rifProveedor', '$direccionProveedor', '$seudonimo')";

    // Ejecuta la consulta y verifica si fue exitosa
    if ($conn->query($sql) === TRUE) {
        // Redirige al preloader después de 1 segundo
        header("refresh:0.5; url=./preloader.php?redirect=../superusuarioha.php");
        exit(); // Asegura que el script se detenga después de la redirección
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Cierra la conexión
    $conn->close();
}

if (isset($_POST['eliminar'])) {
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

    // Verifica si se ha enviado la solicitud de eliminación
    if (isset($_POST['id'])) {
        $idEliminar = $_POST['id'];
        // Realiza la eliminación del registro
        $sql = "DELETE FROM proveedor WHERE id = $idEliminar";
        if ($conn->query($sql) === TRUE) {
            // Redirige al preloader después de 1 segundo
            header("refresh:0.5; url=./preloader.php?redirect=../superusuarioha.php");
            exit(); // Asegura que el script se detenga después de la redirección
        } else {
            echo "Error al eliminar el registro: " . $conn->error;
        }
    }

    // Cierra la conexión
    $conn->close();
}

// Si no hay acciones de eliminación ni de creación, simplemente carga la página de superusuario
header("Location: ../superusuarioha.php");
exit();
?>

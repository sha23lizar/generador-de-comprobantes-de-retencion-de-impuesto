<?php

if (true) {
	
//Llamar base de datos
    include '../bd.inc.php';

	$usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
	$cedula = mysqli_real_escape_string($conn, $_POST['cedula']);
	$contra = mysqli_real_escape_string($conn, $_POST['contra']);
	$pregunta = mysqli_real_escape_string($conn, $_POST['pregunta']);
	$respuesta = mysqli_real_escape_string($conn, $_POST['respuesta']);
	$rol = mysqli_real_escape_string($conn, $_POST['rol']);
	$idu = mysqli_real_escape_string($conn, $_POST['idu']);

    $sql = $conn->query(" select count(*) as 'total' from usuarios where usuario='$usuario' AND idu <> '$idu'");
    if ($sql->fetch_object()->total>0) {
        if ($sql==true) { ?>
            <script>
                alert("otro usuario ya tiene ese nombre.");
                window.location.href = "../superusuarious.php";
    
            </script> <?php exit();
        }
    }else {
        $sql = $conn->query(" select count(*) as 'total' from usuarios where cedula='$cedula' AND idu <> '$idu'");
        
        if ($sql->fetch_object()->total>0) {
            if ($sql==true) { ?>
                <script>
                    alert("Ya existe otro usuario con esa cedula.");
                    window.location.href = "../superusuarious.php";
        
                </script> <?php exit();
            }
        } else {
            $sql = "UPDATE usuarios SET usuario = '$usuario', cedula = '$cedula', contra = '$contra', pregunta = '$pregunta', respuesta = '$respuesta', rol = '$rol' WHERE idu = '$idu';";
             mysqli_query($conn, $sql);
             if ($sql==true) { ?>
                 <script>
                     alert("Registro editado con exito.");
                     window.location.href = "../superusuarious.php";
         
                 </script> <?php exit();
             }
            
        }
        
    }

}else {
header("Location: ../superusuarious.php");
exit();
}
// Verifica si se ha enviado el formulario
// if (isset($_POST['submit1'])) {
// Conexión a la base de datos (debes llenar los detalles de conexión)
// include("conexion.php");

// // Verifica la conexión
// if ($conn->connect_error) {
//     die("Conexión fallida: " . $conn->connect_error);
// }

// // Obtén los valores del formulario
// $cedula = $_POST['cedula'];
// $contra = $_POST['contra'];
// $pregunta = $_POST['pregunta'];
// $respuesta = $_POST['respuesta'];
// $rol = $_POST['rol'];
// $usuario = $_POST['usuario'];
// $idu = $_POST['idu'];



// // Prepara la consulta SQL para insertar los datos en la tabla
// $sql = "UPDATE usuarios SET cedula = '$cedula', contra = '$contra', pregunta = '$pregunta', respuesta = '$respuesta', rol = '$rol', usuario = '$usuario' WHERE idu = '$idu'";





// $conn->query($sql);

// $conn->close();

?>
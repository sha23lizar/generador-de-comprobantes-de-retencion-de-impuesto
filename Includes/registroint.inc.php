<?php

if (isset($_POST['submit1'])) {
	
//Llamar base de datos
    include '../bd.inc.php';

	$usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
	$cedula = mysqli_real_escape_string($conn, $_POST['cedula']);
	$contra = mysqli_real_escape_string($conn, $_POST['contra']);
	$pregunta = mysqli_real_escape_string($conn, $_POST['pregunta']);
	$respuesta = mysqli_real_escape_string($conn, $_POST['respuesta']);
	$rol = mysqli_real_escape_string($conn, $_POST['rol']);
    $foto = 'user-default.jpg';

    $sql = $conn->query(" select count(*) as 'total' from usuarios where usuario='$usuario'");
    if ($sql->fetch_object()->total>0) {
        if ($sql==true) { ?>
            <script>
                alert("el usuario ya existe.");
                window.location.href = "../superusuarious.php";
    
            </script> <?php exit();
        }
    }else {
        $sql = $conn->query(" select count(*) as 'total' from usuarios where cedula='$cedula'");
        
        if ($sql->fetch_object()->total>0) {
            if ($sql==true) { ?>
                <script>
                    alert("Ya existe un usuario con esa cedula.");
                    window.location.href = "../superusuarious.php";
        
                </script> <?php exit();
            }
        } else {
            $sql = "INSERT INTO usuarios(usuario, cedula, contra, pregunta, respuesta, rol, foto) VALUES ('$usuario','$cedula','$contra','$pregunta','$respuesta','$rol','$foto');";
             mysqli_query($conn, $sql);
             if ($sql==true) { ?>
                 <script>
                     alert("Registro realizado con exito.");
                     window.location.href = "../superusuarious.php";
                 </script> <?php exit();
             }
            
        }
        
    }
    


                    

}else {
header("Location: ../superusuarious.php");
exit();
} ?>

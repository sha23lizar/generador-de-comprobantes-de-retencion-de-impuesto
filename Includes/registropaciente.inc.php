<?php

//Constancia de Inscripcion
if (isset($_POST['submit1'])) {

    //Llamar base de datos
    include 'bd.inc.php';

    $paciente = mysqli_real_escape_string($conn, $_POST['paciente']);
    $cedula = mysqli_real_escape_string($conn, $_POST['cedula']);
    $edad = mysqli_real_escape_string($conn, $_POST['edad']);
    $sexo = mysqli_real_escape_string($conn, $_POST['sexo']);
    $estado = mysqli_real_escape_string($conn, $_POST['estado']);
    $municipio = mysqli_real_escape_string($conn, $_POST['municipio']);
    $parroquia = mysqli_real_escape_string($conn, $_POST['parroquia']);
    $patologia = mysqli_real_escape_string($conn, $_POST['patologia']);
    $idh = mysqli_real_escape_string($conn, $_POST['idh']);
    $statush = '1';

    $sql = "SELECT * FROM pacientes where cedula='$cedula'";
    $resultado = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $validar = mysqli_num_rows($resultado);

    if ($validar > 0) { ?>
        <script>
            alert("Este paciente ya esta registrado, lo sentimos.");
            window.location.href = "javascript:history.go(-1)";
        </script> <?php exit();
                } else {

                    $sql = "INSERT INTO pacientes(paciente, cedula, edad, sexo, estado, municipio, parroquia, patologia, idh, fechae, statush) 
                            VALUES ('$paciente','$cedula','$edad','$sexo','$estado','$municipio','$parroquia','$patologia','$idh',null,'$statush');";
                    mysqli_query($conn, $sql);

                    $sql_update = "UPDATE habitaciones SET estatus = '1' WHERE idh = $idh";
                    mysqli_query($conn, $sql_update);

                    if ($sql == true) { ?>
            <script>
                alert("Paciente registrado con exito.");
                window.location.href = "javascript:history.go(-1)";
            </script> <?php exit();
                    }
                }
            } else {
                header("Location: javascript:history.go(-1)");
                exit();
            } ?>
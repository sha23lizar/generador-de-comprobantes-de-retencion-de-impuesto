<?php

    include("conexion.php");

if ($_POST["id_personal"]) {
    $stmt = $conexion->prepare("DELETE FROM comprobante WHERE id = :id");

    $resultado = $stmt->execute(
        array(
            ":id" => $_POST["id_personal"]
        )
    );

    if (!empty($resultado)) {
        echo "registro Borrado";
    }  else {
        echo "Algo salio mal";
    }
} 
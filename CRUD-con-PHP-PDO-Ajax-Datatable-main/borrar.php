<?php

    include("conexion.php");
    include("funciones.php");

    

if ($_POST["id_proveedor"]) {
    /*
    $imagen = obtener_nombre_imagen($_POST["id_empresa"]);
    if ($imagen != "") {
        unlink($imagen);
    }
    */
    
    $stmt = $conexion->prepare("DELETE FROM proveedor WHERE id = :id");

    $resultado = $stmt->execute(
        array(
            ":id" => $_POST["id_proveedor"]
        )
    );

    if (!empty($resultado)) {
        echo "registro Borrado";
    }  else {
        echo "Algo salio mal";
    }
    // $stmt->bindParam(":Rif", $_POST["Rif"]);
    // $stmt->bindParam(":Razonsocial", $_POST["Razonsocial"]);
    // $stmt->bindParam(":Direccion", $_POST["Direccion"]);
    // $stmt->bindParam(":Seudonimo", $_POST["Seudonimo"]);
    // $stmt->bindParam(":imagen", $imagen);
    // $stmt->execute();
} 

<?php

    include("conexion.php");
    include("funciones.php");


    if(isset($_POST['id_proveedor'])) {
        $salida = array();
        $stmt = $conexion->prepare("SELECT * FROM proveedor_isr WHERE id = '".$_POST["id_proveedor"]."' LIMIT 1");
        $stmt->execute();
        $resultado = $stmt->fetchAll();
        foreach ($resultado as $row) {
            $salida["seudonimo"] = $row["seudonimo"];
            $salida["nombreProveedor"] = $row["nombreProveedor"];
            $salida["rifProveedor"] = $row["rifProveedor"];
            $salida["direccionProveedor"] = $row["direccionProveedor"];
            /*
            if($row["imagen"] != "") {
                $salida["imagen_empresa"] = '<img src="'.$row["imagen"].'" class="img-thumbnail" width="100" height="50" /><input type="hidden" name="imagen_usuario_oculta" value="'.$row["imagen"].'" />';
            } else {
                $salida["imagen_empresa"] = '<input type="hidden" name="imagen_empresa_oculta" value="'.$row["imagen"].'" />';
            }
            */
        }
        echo json_encode($salida);
    }
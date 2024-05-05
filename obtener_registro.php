<?php

    include("conexion.php");
    include("funciones.php");


    if(isset($_POST['id_empresa'])) {
        $salida = array();
        $stmt = $conexion->prepare("SELECT * FROM comprobante WHERE id = '".$_POST["id_empresa"]."' LIMIT 1");
        $stmt->execute();
        $resultado = $stmt->fetchAll();
        foreach ($resultado as $row) {
            $salida["Rif"] = $row["Rif"];
            $salida["Razonsocial"] = $row["Razonsocial"];
            $salida["Direccion"] = $row["Direccion"];
            $salida["Seudonimo"] = $row["Seudonimo"];
            if($row["imagen"] != "") {
                $salida["imagen_empresa"] = '<img src="'.$row["imagen"].'" class="img-thumbnail" width="100" height="50" /><input type="hidden" name="imagen_usuario_oculta" value="'.$row["imagen"].'" />';
            } else {
                $salida["imagen_empresa"] = '<input type="hidden" name="imagen_empresa_oculta" value="'.$row["imagen"].'" />';
            }
        }
        echo json_encode($salida);
    }
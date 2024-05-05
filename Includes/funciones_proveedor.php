<?php

/*
    function subir_imagen(){
        if(isset($_FILES['imagen_empresa'])){
            $extension = explode('.', $_FILES['imagen_empresa']['name']);
            $new_name = rand().'.'. $extension[1];
            $url = './img/'.$new_name;
            move_uploaded_file($_FILES['imagen_empresa']['tmp_name'], $url);
            return $url;
        }
    }

    function obtener_nombre_imagen($id_empresa){
        include("conexion.php");
        $stmt = $conexion->prepare("SELECT imagen FROM empresas WHERE id = '$id_empresa'");
        $stmt->execute();
        $resultado = $stmt->fetchAll();
        foreach ($resultado as $row) {
            return $row["imagen"];
        }
    }
*/
    function obtener_todos_proveedores(){
        include("bd.inc.php");
        $stmt = $conexion->prepare("SELECT * FROM proveedor");
        $stmt->execute();
        // $resultado = $stmt->fetchAll();
        return $stmt->rowCount();
    }
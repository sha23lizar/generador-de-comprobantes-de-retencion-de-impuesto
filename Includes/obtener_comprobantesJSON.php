<?php
    
    include("conexion.php");
    

    $query = '';
    $salida = array();
    $query = "SELECT * FROM comprobante ";

    if(isset($_POST['search']['value'])) {
        $query .= "WHERE nroComprobante LIKE '%".$_POST['search']['value']."%'";
        $query .= "OR proveedor LIKE '%".$_POST['search']['value']."%'";
        $query .= "OR rifProveedor LIKE '%".$_POST['search']['value']."%'";
        $query .= "OR direccionProveedor LIKE '%".$_POST['search']['value']."%'";
        $query .= "OR fFactura LIKE '%".$_POST['search']['value']."%'";
    }
    if (isset($_POST['order'])) {
        $query .= "ORDER BY " . $_POST['order']['0']['column'] . " " . $_POST['order']['0']['dir'] . " ";
    } else {
        $query .= "ORDER BY id DESC ";
    }
    if ($_POST['length'] != -1) {
        $query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
    }

    $stmt = $conexion->prepare($query);
    $stmt->execute();
    $resultado = $stmt->fetchAll();
    $datos = array();
    $filtered_rows = $stmt->rowCount();
    foreach($resultado as $row){
        $sub_array = array();
        $sub_array[] = $row["nroComprobante"];
        $sub_array[] = $row["proveedor"];
        $sub_array[] = $row["rifProveedor"];
        $sub_array[] = $row["direccionProveedor"];
        $sub_array[] = $row["fFactura"];
        $sub_array[] = $row["totalFacturado"];
        $sub_array[] = $row["baseImponible"];
        $sub_array[] = $row["baseImponible"];
        $sub_array[] = $row["impuestoIva"];
        $sub_array[] = $row["impuestoIva"];
        $sub_array[] = '<button type="button" name="editar" id="'.$row["id"].'" class="btn btn-warning btn-xs editar">Editar</button>';
        $sub_array[] = '<button type="button" name="borrar" id="'.$row["id"].'" class="btn btn-danger btn-xs borrar">Eliminar</button>';
        $datos[] = $sub_array;
    }


    function obtener_todos_registros(){
        include("conexion.php");
        $stmt = $conexion->prepare("SELECT * FROM comprobante");
        $stmt->execute();
        // $resultado = $stmt->fetchAll();
        return $stmt->rowCount();
    }

    $salida = array(
        "draw" => intval($_POST["draw"]),
        "recordsTotal" => $filtered_rows,
        "recordsFiltered" => obtener_todos_registros(),
        "data" => $datos
    );
    echo json_encode($salida);

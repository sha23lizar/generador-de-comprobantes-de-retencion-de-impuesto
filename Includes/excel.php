<?php  
/*
include "bd.inc.php";
 
if(isset($_GET['export'])){
if($_GET['export'] == 'true'){
$query = mysqli_query($conn, 'select * from pacientes'); // Get data from Database from table
 
 
    $delimiter = ";";
    $filename = "Pacientes/" . date('d/m/Y') . ".csv"; // Create file name
     
    //create a file pointer
    $f = fopen('php://output', 'w'); 
     
    //set column headers
    $fields = array('idp', 'paciente', 'cedula', 'edad', 'sexo', 'estado', 'municipio',
     'parroquia', 'idh', 'patologia', 'fechai', 'fechae', 'statush');
    fputcsv($f, $fields, $delimiter);
     
    //output each row of the data, format line as csv and write to file pointer
    while($row = $query->fetch_assoc()){
        
        $lineData = array($row['idp'], $row['paciente'], $row['cedula'], $row['edad'], $row['sexo'], $row['estado'], $row['municipio'],
         $row['parroquia'], $row['idh'], $row['patologia'], $row['fechai'], $row['fechae'], $row['statush']);
        fputcsv($f, $lineData, $delimiter);
    }
     
    //set headers to download file rather than displayed
    header('Content-Type: text/csv; charset=latin1');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
 
 }
}
*/
?>

<?php
/*
include "bd.inc.php";

if(isset($_GET['export'])){
    if($_GET['export'] == 'true'){
        $query = mysqli_query($conn, 'select * from pacientes'); // Get data from Database from table

        $delimiter = ";";
        $filename = "proveedores/pacientes" . date('d-m-Y') . ".csv"; // Create file name with folder path

        //create a file pointer
        $f = fopen('php://output', 'w'); 

        //set column headers
        $fields = array('idp', 'paciente', 'cedula', 'edad', 'sexo', 'estado', 'municipio',
         'parroquia', 'idh', 'patologia', 'fechai', 'fechae', 'statush');
        fputcsv($f, $fields, $delimiter);

        //output each row of the data, format line as csv and write to file pointer
        while($row = $query->fetch_assoc()){
            $lineData = array($row['idp'], $row['paciente'], $row['cedula'], $row['edad'], $row['sexo'], $row['estado'], $row['municipio'],
             $row['parroquia'], $row['idh'], $row['patologia'], $row['fechai'], $row['fechae'], $row['statush']);
            fputcsv($f, $lineData, $delimiter);
        }

        //set headers to download file rather than displayed
        header('Content-Type: text/csv; charset=latin1');
        header('Content-Disposition: attachment; filename="' . $filename . '";');

        // Save the file to the server
        fseek($f, 0); // Reset the file pointer to the beginning of the file
        $fileContent = fread($f, filesize('php://output')); // Read the file content
        file_put_contents($filename, $fileContent); // Save the file content to the server

        // Close the file pointer
        fclose($f);
    }
}
*/
?>

<?php  

include "bd.inc.php";

// Establecer la zona horaria a Venezuela
date_default_timezone_set('America/Caracas');
 
if(isset($_GET['export'])){
    if($_GET['export'] == 'true'){
        // Carpeta base donde se almacenarán los archivos CSV por mes
        $baseFolder = "../respaldo/comprobante/";

        // Obtener el año y mes actual
        $currentYear = date('Y');
        $currentMonth = date('m');

        // Carpeta para el mes actual
        $folder = $baseFolder . $currentYear . '/' . $currentMonth . '/';

        // Verificar si la carpeta para el mes actual existe, si no, crearla
        if (!file_exists($folder)) {
            mkdir($folder, 0777, true); // Cambia los permisos según sea necesario
        }

        // Nombre de archivo CSV con la fecha y hora actual para evitar sobrescritura
        $filename = $folder . date('d-m-Y_H-i-s') . ".csv";

        // Abrir un nuevo archivo CSV o agregar al archivo existente si ya existe
        $f = fopen($filename, 'a');

        // Si es un nuevo archivo, agregar encabezados de columna
        if(filesize($filename) == 0) {
            // Establecer delimitador y encabezados de columna
            $delimiter = ";";
            $fields = array('id', 'nroComprobante', 'Proveedor', 'rifProveedor', 'direccionProveedor', 'fEmision', 'fEntrega', 'fFactura', 'totalFacturado', 'baseImponible', 'fechaRegistro');
            fputcsv($f, $fields, $delimiter);
        }

        // Obtener datos de la base de datos
        $query = mysqli_query($conn, 'select * from comprobante');

        // Escribir cada fila de datos al archivo CSV
        while($row = $query->fetch_assoc()){
            $lineData = array($row['id'], $row['nroComprobante'], $row['rifProveedor'], $row['direccionProveedor'], $row['fEmision'], $row['fEntrega'], $row['fFactura'], $row['totalFacturado'], $row['baseImponible'], $row['fechaRegistro']);
            fputcsv($f, $lineData, $delimiter);
        }

        // Cerrar archivo
        fclose($f);

        // Redireccionar para descargar el archivo
        header('Location: ' . $filename);
        exit();
    }
}
?>
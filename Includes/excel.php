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

?>
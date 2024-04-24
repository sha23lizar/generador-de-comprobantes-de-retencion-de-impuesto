<?php  

include "bd.inc.php";
 
if(isset($_GET['export'])){
if($_GET['export'] == 'true'){
$query = mysqli_query($conn, 'select * from acompanantes'); // Get data from Database from table
 
 
    $delimiter = ";";
    $filename = "acompanantes/" . date('d/m/Y') . ".csv"; // Create file name
     
    //create a file pointer
    $f = fopen('php://output', 'w'); 
     
    //set column headers
    $fields = array('ida', 'acompanante', 'cedula', 'edad', 'sexo', 'estado', 'municipio',
     'parroquia', 'fechai', 'fechae');
    fputcsv($f, $fields, $delimiter);
     
    //output each row of the data, format line as csv and write to file pointer
    while($row = $query->fetch_assoc()){
        
        $lineData = array($row['ida'], $row['acompanante'], $row['cedula'], $row['edad'], $row['sexo'], $row['estado'], $row['municipio'],
         $row['parroquia'], $row['fechai'], $row['fechae']);
        fputcsv($f, $lineData, $delimiter);
    }
     
    //set headers to download file rather than displayed
    header('Content-Type: text/csv; charset=latin1');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
 
 }
}

 ?>
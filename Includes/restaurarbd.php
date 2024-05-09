<?php
$conn = mysqli_connect("localhost", "root", "", "feb");

if (isset($_POST['restaurar'])) {
    // Drop all tables in the feb database
    dropAllTables($conn);

    $filePath = "../Respaldo/respaldos/" . $_POST['filePath'].".sql";
    restoreMysqlDB($filePath, $conn);
}

function dropAllTables($conn)
{
    $sql = "SHOW TABLES";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $tableName = $row["Tables_in_feb"];
        $sql = "DROP TABLE IF EXISTS $tableName";
        mysqli_query($conn, $sql);
    }
}

function restoreMysqlDB($filePath, $conn)
{
    $sql = '';
    $error = '';
    
    if (file_exists($filePath)) {

        $lines = file($filePath);
        
        foreach ($lines as $line) {

            // Ignoring comments from the SQL script
            if (substr($line, 0, 2) == '--' || $line == '') {
                continue;
            }
            
            $sql.= $line;
            
            if (substr(trim($line), - 1, 1) == ';') {
                $result = mysqli_query($conn, $sql);
                if (! $result) {
                    $error.= mysqli_error($conn). "\n";
                }
                $sql = '';
            }
        } // end foreach
        
        if ($error) {
            $response = array(
                "type" => "error",
                "message" => $error
            );
        } else {
            $response = array(
                header("refresh:0.3;url=preloader.php"),
                
            );
        }
    } else {
        $response = array(
            "type" => "error",
            "message" => "File not found"
        );
    }
    
}
?>
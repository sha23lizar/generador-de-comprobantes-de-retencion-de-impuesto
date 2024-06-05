<?php

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if a file was uploaded
    if (isset($_FILES["archivo"])) {
        // Get the file extension
        $file_extension = strtolower(pathinfo($_FILES["archivo"]["name"], PATHINFO_EXTENSION));

        // Check if the file extension is .sql
        if ($file_extension != "sql") {
            echo '<script type="text/javascript">alert("Error: solo estan permitidos archivos de tipo: .sql"); window.location.href = "../superusuariobd.php";</script>';

            exit;
        }

        // Set the target directory
        $target_dir = "../Respaldo/respaldos/";

        // Generate a unique name for the uploaded file
        $target_file = $target_dir . basename($_FILES["archivo"]["name"]);

        // Check if the file already exists
        if (file_exists($target_file)) {
            echo '<script type="text/javascript">alert("Error: el archivo ya existe."); window.location.href = "../superusuariobd.php";</script>';

            exit;
        }

        // Upload the file
        if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $target_file)) {
            header("refresh:0.3;url=preloader.php");

        } else {
            echo '<script type="text/javascript">alert("Fallo al subir el archivo."); window.location.href = "../superusuariobd.php";</script>';
        }
    }
}
?>
<?php

include 'bd.inc.php';

$nombre = 'respaldo'.date('dmY-His').'.sql';

$directorio = 'C:\\wamp64\\www\\FUNESBO\\architectui-html-free\\respaldo';

$dir = $directorio.'\\'.$nombre;

$sql = "INSERT INTO respaldos(nombre, fecha) VALUES ('$nombre',NOW());";
mysqli_query($conn, $sql);

$cmd = "C:\\wamp64\\bin\\mysql\\mysql5.7.36\\bin\\mysqldump.exe --routines -h $dbserverName -u $dbuserName FUNESBO > $dir";

// Ejecutar el comando de respaldo
system($cmd);

// Verificar si el archivo de respaldo se ha creado correctamente
if (file_exists($dir)) { ?>
    <script>
        alert("Respaldo Exitoso!");
        window.location.href = "../superusuariobd";
    </script>
<?php } else { ?>
    <script>
        alert("Hubo un error al crear el archivo de respaldo. Por favor, contacte al administrador del sistema.");
        window.location.href = "../superusuariobd";
    </script>
<?php }

?>
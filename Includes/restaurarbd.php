<?php

include 'bd.inc.php';

$nombre = 'respaldo'.date('dmY-His').'.sql';

$directorio = 'C:\\wamp64\\www\\FUNESBO\\architectui-html-free\\respaldo';

$dir = $directorio.'\\'.$nombre;

$sql = "INSERT INTO respaldos(nombre, fecha) VALUES ('$nombre',NOW());";
mysqli_query($conn, $sql);

$cmd = "C:\\wamp64\\bin\\mysql\\mysql5.7.36\\bin\\mysqldump.exe --routines -h $dbserverName -u $dbuserName FUNESBO > $dir";

system($cmd);
?>

<script>
    alert("Restauracion Exitosa!");
    window.location.href = "../superusuariobd.php";

</script>
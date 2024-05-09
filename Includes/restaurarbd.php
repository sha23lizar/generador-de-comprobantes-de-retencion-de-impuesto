<?php

include 'bd.inc.php';

$nombre = 'respaldo'.date('dmY-His').'.sql';

$directorio = 'C:\\xammp\www\\feb\\architectui-html-free\\respaldo';

$dir = $directorio.'\\'.$nombre;

$sql = "INSERT INTO respaldos(nombre, fecha) VALUES ('$nombre',NOW());";
mysqli_query($conn, $sql);

$cmd = "C:\\xammp\\bin\\mysql\\mysql5.7.36\\bin\\mysqldump.exe --routines -h $dbserverName -u $dbuserName feb > $dir";

system($cmd);

?>

<script>
    
    alert("Restauracion Exitosa!");
    window.location.href = "../superusuariobd.php";
    
</script>





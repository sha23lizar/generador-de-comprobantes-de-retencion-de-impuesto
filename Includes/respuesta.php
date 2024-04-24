<?php
#first if
include ("bd.inc.php");

if(isset($_REQUEST['submit'])){
    
	$respuesta = mysqli_real_escape_string( $conn , $_POST['respuesta']);
	$cedula = mysqli_real_escape_string( $conn , $_POST['cedula']);
              
		$sql = "SELECT * FROM usuarios WHERE respuesta='$respuesta' and cedula='$cedula'";
		$result = mysqli_query($conn,$sql);
    	$resultCheck = mysqli_num_rows($result);

		 ?>
<?php
if ($resultCheck > 0) { 
    while($mostrar=mysqli_fetch_array($result)){
?>

<script>
    alert("Su contraseña es: \n \n <?php echo $mostrar['contra']; ?> ");
    window.location.href = "../login.php";

</script>
<?php
}} else { ?>

<script>
    
    alert("Respuesta Incorrecta, intente otra vez");
    window.location.href = "javascript:history.go(-1)";

</script>

<?php }} ?>

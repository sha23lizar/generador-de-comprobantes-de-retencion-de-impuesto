<?php

$username = $_POST['idu'];
$password = ($_POST['pwd']);
$login = $_POST['submit2'];

$mysqli = new mysqli("localhost", "root", "", "feb");

if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
}

$res = $mysqli->query("SELECT * FROM usuarios WHERE cedula='$username' and contra='$password'");



if ($row = $res->fetch_assoc()) {

  $idu = $row['idu'];
  $cedula = $row['cedula'];
  $pass = $row['contra'];
  $rol = $row['rol'];
  $usuario = $row['usuario'];
  $foto = $row['foto'];
  
  if ($cedula == $username && $pass == $password) {
    
    session_start();
    $_SESSION['rol'] = $rol;
    $_SESSION['usuario'] = $usuario;
    $_SESSION['idu'] = $idu;
    $_SESSION['foto'] = $foto;
    
    if ($_SESSION['rol'] == 1) {
        header("Location: ../superusuario.php?success=1");
    }elseif ($_SESSION['rol'] == 2) {
        header("Location: ../administrador.php?success=1");
        
    }elseif($_SESSION['rol'] == 3){
        header("Location: ../asistente.php?success=1");

    }
  }
}
  else { 
    ?>

    <script>
      window.location.href = "../login.php?error=1";
    </script>

<?php } ?>

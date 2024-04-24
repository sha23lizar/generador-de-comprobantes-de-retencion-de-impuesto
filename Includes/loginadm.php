<?php

$username = $_POST['idu'];
$password = ($_POST['pwd']);
$login = $_POST['submit2'];

$mysqli = new mysqli("localhost", "root", "", "feb");

if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
}

$res = $mysqli->query("SELECT * FROM usuarios WHERE cedula='$username' and contra='$password'");
$row = $res->fetch_assoc();

$idu = $row['idu'];
$cedula = $row['cedula'];
$pass = $row['contra'];
$rol = $row['rol'];
$usuario = $row['usuario'];
$foto = $row['foto'];

if ($cedula == $username && $pass == $password && $rol == '1') {

  session_start();
  $_SESSION['Super'] = $rol;
  $_SESSION['usuario'] = $usuario;
  $_SESSION['idu'] = $idu;
  $_SESSION['foto'] = $foto;

  header("Location: ../superusuario.php?success=1");
} elseif ($cedula == $username && $pass == $password && $rol == '2') {
  session_start();

  $_SESSION['Admin'] = $rol;
  $_SESSION['usuario'] = $usuario;
  $_SESSION['idu'] = $idu;
  $_SESSION['foto'] = $foto;

  header("Location: ../administrador.php?success=1");
} elseif ($cedula == $username && $pass == $password && $rol == '3') {
  session_start();

  $_SESSION['Asis'] = $rol;
  $_SESSION['usuario'] = $usuario;
  $_SESSION['idu'] = $idu;
  $_SESSION['foto'] = $foto;

  header("Location: ../asistente.php?success=1");
} else { ?>

  <script>
    window.location.href = "../login.php?error=1";
  </script>

<?php  } ?>
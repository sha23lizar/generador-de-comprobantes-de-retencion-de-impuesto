<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Windows Loader | CodingNepal</title>
      <link rel="stylesheet" href="style.css">
   </head>
   <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body{
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  text-align: center;
  background: #0079d7;
}
.container{
  position: relative;
  width: 100%;
  display: flex;
  justify-content: center;
}
.wrapper{
  position: absolute;
  top: -35px;
  transform: scale(1.5);
}
.loader{
  height: 25px;
 width: 1px;
 position: absolute;
 animation: rotate 3.5s linear infinite;
}
.loader .dot{
  top: 30px;
 height: 7px;
 width: 7px;
 background: #fff;
 border-radius: 50%;
 position: relative;
}
.text{
  position: absolute;
  bottom: -85px;
  font-size: 25px;
  font-weight: 400;
  font-family: 'Poppins',sans-serif;
  color: #fff;
}
@keyframes rotate {
  30%{
    transform: rotate(220deg);
  }
  40%{
  transform: rotate(450deg);
    opacity: 1;
 }
 75%{
  transform: rotate(720deg);
  opacity: 1;
 }
 76%{
  opacity: 0;
 }
 100%{
  opacity: 0;
  transform: rotate(0deg);
 }
}
.loader:nth-child(1){
  animation-delay: 0.15s;
}
.loader:nth-child(2){
  animation-delay: 0.3s;
}
.loader:nth-child(3){
  animation-delay: 0.45s;
}
.loader:nth-child(4){
  animation-delay: 0.6s;
}
.loader:nth-child(5){
  animation-delay: 0.75s;
}
.loader:nth-child(6){
  animation-delay: 0.9s;
}
   </style>
   <body>
      <div class="container">
         <div class="wrapper">
            <div class="loader">
               <div class="dot"></div>
            </div>
            <div class="loader">
               <div class="dot"></div>
            </div>
            <div class="loader">
               <div class="dot"></div>
            </div>
            <div class="loader">
               <div class="dot"></div>
            </div>
            <div class="loader">
               <div class="dot"></div>
            </div>
            <div class="loader">
               <div class="dot"></div>
            </div>
         </div>
         <div class="text">
            La operacion no se pudo completar correctamente. Espere un momento
         </div>
      </div>
   </body>
</html>

<?php
    // Espera 3 segundos antes de redirigir al panel del superusuario
    $tiempoEspera = 3; // Tiempo en segundos
    $urlRedireccion = isset($_GET['redirect']) ? $_GET['redirect'] : '../superusuariobd.php'; // URL de redirección predeterminada
    echo "<script>setTimeout(function() { window.location.href = '$urlRedireccion'; }, $tiempoEspera * 2000);</script>";
?>
 <?php

    include("bd.inc.php");

    $cedula = $_POST['cedula'];
    /*  OPERACION BASE DE DATOS */
    $sql = "SELECT * FROM usuarios WHERE cedula='$cedula'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    ?>
 <?php
    if ($resultCheck > 0) {
        while ($mostrar = mysqli_fetch_array($result)) {
    ?>
         <!--  /*  OPERACION BASE DE DATOS */ -->

         <!DOCTYPE html>
         <html>

         <!-- Se declaran archivos, scripts y css -->

         <head>
             <meta charset="utf-8">
             <title>FEB</title>
             <link rel="shortcut icon" href="../../src/img/funesboLOGO.PNG">
             <link rel="stylesheet" href="./../css/master.css">
             <link href="./../css/main.css" rel="stylesheet">
             <link rel="stylesheet" type="text/css" href="./../css/sweetalert2.min.css">
             <!-- Se declaran archivos, scripts y css -->

             <script src="./../assets/scripts/sweetalert2.min.js"></script>
         </head>

         <body>

             <div class="login-box">
                 <img src="../../src/img/funesboLOGO.png" class="avatar shadow border border-dark" alt="Avatar Image">
                 <div class="h2 text-center">
                     <strong><?php echo $mostrar['pregunta']; ?></strong>
                 </div>
                 <br>
                 <br>

                 <form action="respuesta.php" method="post">

                     <!-- USERNAME INPUT -->

                     <input type="hidden" placeholder="Escriba su Cedula" name="cedula" value='<?php echo $mostrar['cedula']; ?>' required />

                     <label for="respuesta">Respuesta</label>

                     <input type="text" placeholder="Escriba su Respuesta" name="respuesta" required />
                     <br>
                     <br>
                     <br>

                     <input type="submit" name="submit" class="btn btn-primary pull-right" value="Responder">

                 </form>
             </div>

             <script type="text/javascript" charset="utf8" src="../../src/DataTables/jQuery-3.3.1/jquery-3.3.1.js"></script>
             <script type="text/javascript" src="./../assets/scripts/main.js"></script>
             <script type="text/javascript" charset="utf8" src="../../src/bootstrap4/js/modaledit.js">
             </script>

         <?php }
    } else { ?>

         <script>
             alert("Cedula Invalida, intentelo de nuevo");

             window.location.href = "../../architectui-html-free/login.php";
         </script>

     <?php } ?>
         </body>

         </html>
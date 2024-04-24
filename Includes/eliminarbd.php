<?php

    include ("bd.inc.php");

    if(isset($_REQUEST['eliminar'])){

    $idr=$_REQUEST['idr'];
    $sql = "DELETE FROM respaldos WHERE idr='$idr'";
    mysqli_query($conn,$sql);

    if($sql==true){
        header("Location: ../superusuariobd?delete=success");
        exit();
        }

    }else {
        header("Location: ../superusuariobd?error");
        exit();
    }
?>

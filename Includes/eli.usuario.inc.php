<?php

    include ("bd.inc.php");

    if(isset($_REQUEST['eliminar'])){

    $idu=$_REQUEST['idu'];
    $sql = "DELETE FROM usuarios WHERE idu='$idu'";
    mysqli_query($conn,$sql);

    if($sql==true){
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
        }

    }else {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }
?>

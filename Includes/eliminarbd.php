<?php
if (isset($_POST['filePath'])) {
    $filePath = "../Respaldo/respaldos/" . $_POST['filePath'].".sql";
    deleteFile($filePath);
}

function deleteFile($filePath)
{
    if (file_exists($filePath)) {
        unlink($filePath);
        $response = array(
            header("refresh:0.3;url=preloader.php"),

        );
    } else {
        $response = array(
            "type" => "error",
            "message" => "File not found"
        );
    }

}
?>
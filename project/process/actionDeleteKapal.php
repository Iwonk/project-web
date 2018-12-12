<?php

include '../helper/connection.php';

$id_kapal = $_GET["id_kapal"];

$query = "UPDATE kapal SET deleted=1 WHERE id_kapal = $id_kapal";

if (mysqli_query($con, $query)) {
    header("Location:../display/displayKapal.php");
} else {
    $error = urldecode("Data tidak berhasil didelete");
    header("Location:../display/displayKapal.php?error=$error");
}

mysqli_close($con); 

?>
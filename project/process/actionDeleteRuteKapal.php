<?php

include '../helper/connection.php';

$id_rute_kapal = $_GET["id_rute_kapal"];

$query = "UPDATE rute_kapal SET deleted=1 WHERE id_rute_kapal = $id_rute_kapal";

if (mysqli_query($con, $query)) {
    header("Location:../display/displayRuteKapal.php");
} else {
    $error = urldecode("Data tidak berhasil didelete");
    header("Location:../display/displayRuteKapal.php?error=$error");
}

mysqli_close($con); 

?>
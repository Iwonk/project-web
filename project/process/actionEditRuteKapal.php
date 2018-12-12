<?php

include '../helper/connection.php';

$id_rute_kapal = $_POST["id_rute_kapal"];
$rute_kapal = $_POST["rute_kapal"];

    $query = "UPDATE rute_kapal 
    SET rute_kapal = '$rute_kapal' WHERE id_rute_kapal = $id_rute_kapal";

    if (mysqli_query($con, $query)) {
        header("Location:../display/displayRuteKapal.php");
    } 
    else {
        $error = urldecode("Data tidak berhasil di update");
        header("Location:../display/displayRuteKapal.php?error=$error");
    }

    mysqli_close($con);
?>


 
<?php

include '../helper/connection.php';

$id_rute_kapal = $_POST["id_rute_kapal"];
$id_pelabuhan1 = $_POST["id_pelabuhan1"];
$id_pelabuhan2 = $_POST["id_pelabuhan2"];

    $query = "UPDATE rute_kapal SET pelabuhan1 = $id_pelabuhan1, pelabuhan2 = $id_pelabuhan2 WHERE id_rute_kapal = $id_rute_kapal";

    if (mysqli_query($con, $query)) {
        header("Location:../display/displayRuteKapal.php");
    } 
    else {
        $error = urldecode("Data tidak berhasil di update");
        header("Location:../display/displayRuteKapal.php?error=$error");
    }

    mysqli_close($con);
?>


 
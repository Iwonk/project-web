<?php

include '../helper/connection.php';

$id_pelayaran = $_POST["id_pelayaran"];
$id_kapal = $_POST["id_kapal"];
$id_rute_kapal = $_POST["id_rute_kapal"];

$query = "UPDATE pelayaran SET id_kapal = '$id_kapal', id_rute_kapal = '$id_rute_kapal' WHERE id_pelayaran = '$id_pelayaran'";

    if (mysqli_query($con, $query)) {
        header("Location:../display/displayPelayaran.php");
    } 
    else {
        $error = urldecode("Data tidak berhasil di update");
        header("Location:../display/displayPelayaran.php?error=$error");
    }

    mysqli_close($con);
?>


 
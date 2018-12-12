<?php

include '../helper/connection.php';

$id_kapal = $_POST["id_kapal"];
$nama_kapal = $_POST["nama_kapal"];

    $query = "UPDATE kapal 
    SET nama_kapal = '$nama_kapal' WHERE id_kapal = $id_kapal";

    if (mysqli_query($con, $query)) {
        header("Location:../display/displayKapal.php");
    } 
    else {
        $error = urldecode("Data tidak berhasil di update");
        header("Location:../display/displayKapal.php?error=$error");
    }

    mysqli_close($con);
?>


 
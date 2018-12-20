<?php

include '../helper/connection.php';

$id_detail = $_POST["id_detail"];
$jadwal = $_POST["jadwal"];
$harga = $_POST["harga"];

$query = "UPDATE detail_penerbangan SET jadwal = '$jadwal', harga = $harga WHERE id_detail = $id_detail";

    if (mysqli_query($con, $query)) {
        header("Location:../display/displayData.php");
    } 
    else {
        $error = urldecode("Data tidak berhasil di update");
        header("Location:../display/displayData.php?error=$error");
    }

    mysqli_close($con);
?>


 
<?php

include '../helper/connection.php';

$id_detail = $_POST["id_detail"];
$id_pelayaran = $_POST["id_pelayaran"];
$jadwal = $_POST["jadwal"];
$harga = $_POST["harga"];

$query = "UPDATE detail_pelayaran SET id_pelayaran = '$id_pelayaran', jadwal = '$jadwal', harga = '$harga' WHERE id_detail = '$id_detail'";

    if (mysqli_query($con, $query)) {
        header("Location:../display/displayDataPelayaran.php");
    } 
    else {
        $error = urldecode("Data tidak berhasil di update");
        header("Location:../display/displayDataPelayaran.php?error=$error");
    }

    mysqli_close($con);
?>


 
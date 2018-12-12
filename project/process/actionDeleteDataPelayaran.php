<?php

include '../helper/connection.php';

$id_detail = $_GET["id_detail"];

$query = "UPDATE detail_pelayaran SET deleted=1 WHERE id_detail = $id_detail";

if (mysqli_query($con, $query)) {
    header("Location:../display/displayDataPelayaran.php");
} else {
    $error = urldecode("Data tidak berhasil didelete");
    header("Location:../display/displayDataPelayaran.php?error=$error");
}

mysqli_close($con); 

?>
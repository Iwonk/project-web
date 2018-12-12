<?php

include '../helper/connection.php';

$id_penerbangan = $_POST["id_penerbangan"];
$id_maskapai = $_POST["id_maskapai"];
$id_rute = $_POST["id_rute"];

$query = "UPDATE penerbangan SET id_maskapai = '$id_maskapai', id_rute = '$id_rute' WHERE id_penerbangan = '$id_penerbangan'";

    if (mysqli_query($con, $query)) {
        header("Location:../display/displayPenerbangan.php");
    } 
    else {
        $error = urldecode("Data tidak berhasil di update");
        header("Location:../display/displayPenerbangan.php?error=$error");
    }

    mysqli_close($con);
?>


 
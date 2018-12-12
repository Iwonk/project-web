<?php

include '../helper/connection.php';

$id_rute = $_POST["id_rute"];
$nama_rute = $_POST["nama_rute"];

    $query = "UPDATE rute 
    SET nama_rute = '$nama_rute' WHERE id_rute = $id_rute";

    if (mysqli_query($con, $query)) {
        header("Location:../display/displayRute.php");
    } 
    else {
        $error = urldecode("Data tidak berhasil di update");
        header("Location:../display/displayRute.php?error=$error");
    }

    mysqli_close($con);
?>


 
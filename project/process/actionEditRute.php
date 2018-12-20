<?php

include '../helper/connection.php';

$id_rute = $_POST["id_rute"];
$id_kota1 = $_POST["id_kota1"];
$id_kota2 = $_POST["id_kota2"];

    $query = "UPDATE rute SET kota1 = $id_kota1, kota2 = $id_kota2 WHERE id_rute = $id_rute";

    if (mysqli_query($con, $query)) {
        header("Location:../display/displayRute.php");
    } 
    else {
        $error = urldecode("Data tidak berhasil di update");
        header("Location:../display/displayRute.php?error=$error");
    }

    mysqli_close($con);
?>


 
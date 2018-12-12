<?php

include '../helper/connection.php';

$id_maskapai = $_POST["id_maskapai"];
$nama_maskapai = $_POST["nama_maskapai"];

    $query = "UPDATE maskapai 
    SET nama_maskapai = '$nama_maskapai' WHERE id_maskapai = $id_maskapai";

    if (mysqli_query($con, $query)) {
        header("Location:../display/displayMaskapai.php");
    } 
    else {
        $error = urldecode("Data tidak berhasil di update");
        header("Location:../display/displayMaskapai.php?error=$error");
    }

    mysqli_close($con);
?>


 
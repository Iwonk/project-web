<?php
include '../helper/connection.php';

$id_pelayaran = $_POST["id_pelayaran"];
$id_kapal = $_POST["id_kapal"];
$id_rute_kapal = $_POST["id_rute_kapal"];

$query = "INSERT INTO pelayaran (id_pelayaran, id_kapal, id_rute_kapal, deleted) VALUES ('$id_pelayaran','$id_kapal','$id_rute_kapal',0)";

if (mysqli_query($con, $query)) {
    header("Location:../display/displayPelayaran.php");
} 
else {
    $error = urldecode("Data tidak berhasil ditambahkan");
    header("Location:../display/displayPelayaran.php?error=$error");
}

mysqli_close($con);
?>
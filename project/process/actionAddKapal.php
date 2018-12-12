<?php
include '../helper/connection.php';

$nama_kapal = $_POST["nama_kapal"];
$id_kapal = $_POST["id_kapal"];

$query = "INSERT INTO kapal (id_kapal, nama_kapal, deleted) VALUES ('$id_kapal','$nama_kapal',0)";

if (mysqli_query($con, $query)) {
    header("Location:../display/displayKapal.php");
} 
else {
    $error = urldecode("Data tidak berhasil ditambahkan");
    header("Location:../display/displayKapal.php?error=$error");
}

mysqli_close($con);
?>
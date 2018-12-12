<?php
include '../helper/connection.php';

$id_detail = $_POST["id_detail"];
$id_penerbangan = $_POST["id_penerbangan"];
$jadwal = $_POST["jadwal"];
$harga = $_POST["harga"];

$query = "INSERT INTO detail_penerbangan (id_detail, id_penerbangan, jadwal, harga, deleted) VALUES ('$id_detail','$id_penerbangan','$jadwal','$harga',0)";

if (mysqli_query($con, $query)) {
    header("Location:../display/displayData.php");
} 
else {
    $error = urldecode("Data tidak berhasil ditambahkan");
    header("Location:../display/displayData.php?error=$error");
}

mysqli_close($con);
?>
<?php
include '../helper/connection.php';

$id_detail = $_POST["id_detail"];
$id_pelayaran = $_POST["id_pelayaran"];
$jadwal = $_POST["jadwal"];
$harga = $_POST["harga"];

$query = "INSERT INTO detail_pelayaran (id_detail, id_pelayaran, jadwal, harga, deleted) VALUES ('$id_detail','$id_pelayaran','$jadwal','$harga',0)";

if (mysqli_query($con, $query)) {
    header("Location:../display/displayDataPelayaran.php");
} 
else {
    $error = urldecode("Data tidak berhasil ditambahkan");
    header("Location:../display/displayDataPelayaran.php?error=$error");
}

mysqli_close($con);
?>
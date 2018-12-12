<?php
include '../helper/connection.php';

$id_penerbangan = $_POST["id_penerbangan"];
$id_maskapai = $_POST["id_maskapai"];
$id_rute = $_POST["id_rute"];

$query = "INSERT INTO penerbangan (id_penerbangan, id_maskapai, id_rute, deleted) VALUES ('$id_penerbangan','$id_maskapai','$id_rute',0)";

if (mysqli_query($con, $query)) {
    header("Location:../display/displayPenerbangan.php");
} 
else {
    $error = urldecode("Data tidak berhasil ditambahkan");
    header("Location:../display/displayPenerbangan.php?error=$error");
}

mysqli_close($con);
?>
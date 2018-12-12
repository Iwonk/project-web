<?php
include '../helper/connection.php';

$nama_rute = $_POST["nama_rute"];
$id_rute = $_POST["id_rute"];

$query = "INSERT INTO rute (id_rute, nama_rute, deleted) VALUES ('$id_rute','$nama_rute',0)";

if (mysqli_query($con, $query)) {
    header("Location:../display/displayRute.php");
} 
else {
    $error = urldecode("Data tidak berhasil ditambahkan");
    header("Location:../display/displayRute.php?error=$error");
}

mysqli_close($con);
?>
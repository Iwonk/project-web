<?php
include '../helper/connection.php';

$id_kota1 = $_POST["id_kota1"];
$id_kota2 = $_POST["id_kota2"];
$id_rute = $_POST["id_rute"];

$query = "INSERT INTO rute (id_rute, kota1, kota2, deleted) VALUES ('$id_rute', '$id_kota1', '$id_kota2', 0)";

if (mysqli_query($con, $query)) {
    header("Location:../display/displayRute.php");
} 
else {
    $error = urldecode("Data tidak berhasil ditambahkan");
    header("Location:../display/displayRute.php?error=$error");
}

mysqli_close($con);
?>
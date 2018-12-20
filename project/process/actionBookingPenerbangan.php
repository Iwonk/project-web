<?php
include '../helper/connection.php';
session_start();

$id_detail = $_GET["id_detail"];
$id_customer = $_SESSION["id_customer"];

$query = "INSERT INTO transaksi (id_detail_penerbangan, id_customer) VALUES ($id_detail, $id_customer)";

if (mysqli_query($con, $query)) {
    header("Location:../display/displayTransaksi.php");
} 
else {
    $error = urldecode("Data tidak berhasil ditambahkan");
    header("Location:../display/displayTransaksi.php?error=$error");
}

mysqli_close($con);
?>
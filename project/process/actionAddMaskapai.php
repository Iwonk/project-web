<?php
include '../helper/connection.php';

$nama_maskapai = $_POST["nama_maskapai"];
$id_maskapai = $_POST["id_maskapai"];

$query = "INSERT INTO maskapai (id_maskapai, nama_maskapai, deleted) VALUES ('$id_maskapai','$nama_maskapai',0)";

if (mysqli_query($con, $query)) {
    header("Location:../display/displayMaskapai.php");
} 
else {
    $error = urldecode("Data tidak berhasil ditambahkan");
    header("Location:../display/displayMaskapai.php?error=$error");
}

mysqli_close($con);
?>
<?php
include '../helper/connection.php';

$id_customer = $_POST["id_customer"];
$id_user = $_POST["id_user"];
$username = $_POST["username"];
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$no_telp = $_POST["no_telp"];
$password = $_POST["password"];
$tipe_user = $_POST["tipe_user"];

$nama_folder = "img";
$nama_file = $_FILES["gambar"]["name"];
$tmp = $_FILES["gambar"]["tmp_name"];
$path = "../$nama_folder/$nama_file";
$tipe_file = array("image/jpeg","image/gif","image/png","image/jpg");

if(!in_array($_FILES["gambar"]["type"],$tipe_file)) {
    $error = urldecode("Cek kembali ekstensi file anda (*.jpg, *.gif, *.png)");
    header("Location:../../register.php?error=$error");
}
else {
    move_uploaded_file($tmp, $path);
    $query1 = "INSERT INTO customer (id_customer, nama, gambar, alamat, jenis_kelamin, no_telp)
            VALUES ($id_customer,'$nama','$nama_file','$alamat','$jenis_kelamin','$no_telp')";
    $query2 = "INSERT INTO user (id_user, username, password, tipe_user, id_customer) 
            VALUES ($id_user, '$username', '$password', 1, '$id_customer')";

    if (mysqli_query($con, $query1) && mysqli_query($con, $query2)) {
        header("Location:../../login.php");
    } 
    else {
        $error = urldecode("Data tidak berhasil ditambahkan");
        header("Location:../../register.php?error=$error");
    }

    mysqli_close($con);
}
?>
<?php
include '../helper/connection.php';

$id_pelabuhan1 = $_POST["id_pelabuhan1"];
$id_pelabuhan2 = $_POST["id_pelabuhan2"];
$id_rute_kapal = $_POST["id_rute_kapal"];

$query = "INSERT INTO rute_kapal (id_rute_kapal, pelabuhan1, pelabuhan2, deleted) VALUES ('$id_rute_kapal','$id_pelabuhan1', '$id_pelabuhan2', 0)";

if (mysqli_query($con, $query)) {
    header("Location:../display/displayRuteKapal.php");
} 
else {
    $error = urldecode("Data tidak berhasil ditambahkan");
    header("Location:../display/displayRuteKapal.php?error=$error");
}

mysqli_close($con);
?>
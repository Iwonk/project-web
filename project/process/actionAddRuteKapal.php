<?php
include '../helper/connection.php';

$rute_kapal = $_POST["rute_kapal"];
$id_rute_kapal = $_POST["id_rute_kapal"];

$query = "INSERT INTO rute_kapal (id_rute_kapal, rute_kapal, deleted) VALUES ('$id_rute_kapal','$rute_kapal',0)";

if (mysqli_query($con, $query)) {
    header("Location:../display/displayRuteKapal.php");
} 
else {
    $error = urldecode("Data tidak berhasil ditambahkan");
    header("Location:../display/displayRuteKapal.php?error=$error");
}

mysqli_close($con);
?>
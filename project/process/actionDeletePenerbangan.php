<?php

include '../helper/connection.php';

$id_penerbangan = $_GET["id_penerbangan"];

$query = "UPDATE penerbangan SET deleted=1 WHERE id_penerbangan = $id_penerbangan";

if (mysqli_query($con, $query)) {
    header("Location:../display/displayPenerbangan.php");
} else {
    $error = urldecode("Data tidak berhasil didelete");
    header("Location:../display/displayPenerbangan.php?error=$error");
}

mysqli_close($con); 

?>
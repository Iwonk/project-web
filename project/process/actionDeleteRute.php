<?php

include '../helper/connection.php';

$id_rute = $_GET["id_rute"];

$query = "UPDATE rute SET deleted=1 WHERE id_rute = $id_rute";

if (mysqli_query($con, $query)) {
    header("Location:../display/displayRute.php");
} else {
    $error = urldecode("Data tidak berhasil didelete");
    header("Location:../display/displayRute.php?error=$error");
}

mysqli_close($con); 

?>
<?php

include '../helper/connection.php';

$id_pelayaran = $_GET["id_pelayaran"];

$query = "UPDATE pelayaran SET deleted=1 WHERE id_pelayaran = $id_pelayaran";

if (mysqli_query($con, $query)) {
    header("Location:../display/displayPelayaran.php");
} else {
    $error = urldecode("Data tidak berhasil didelete");
    header("Location:../display/displayPelayaran.php?error=$error");
}

mysqli_close($con); 

?>
<?php

include '../helper/connection.php';

$id_maskapai = $_GET["id_maskapai"];

$query = "UPDATE maskapai SET deleted=1 WHERE id_maskapai = $id_maskapai";

if (mysqli_query($con, $query)) {
    header("Location:../display/displayMaskapai.php");
} else {
    $error = urldecode("Data tidak berhasil didelete");
    header("Location:../display/displayMaskapai.php?error=$error");
}

mysqli_close($con); 

?>
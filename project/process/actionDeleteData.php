<?php

include '../helper/connection.php';

$id_detail = $_GET["id_detail"];

$query = "UPDATE detail_penerbangan SET deleted=1 WHERE id_detail = $id_detail";

if (mysqli_query($con, $query)) {
    header("Location:../display/displayData.php");
} else {
    $error = urldecode("Data tidak berhasil didelete");
    header("Location:../display/displayData.php?error=$error");
}

mysqli_close($con); 

?>
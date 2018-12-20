<?php
include '../helper/connection.php';
session_start();
$error = '';

if(!empty($_POST["username"]) || !empty($_POST["password"])) {
    # Get username and password from user
    $username = $_POST["username"];
    $password = $_POST["password"];

    # Write MySql Query
    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    # Get the query result
    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $tipe_user = $row["tipe_user"];

        if($tipe_user == 0) {
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
            $_SESSION["tipe_user"] = $tipe_user;
            header("location:../../starter.php");
        } else {
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
            $_SESSION["tipe_user"] = $tipe_user;
            $_SESSION["id_customer"] = $row["id_customer"];
            header("Location:../../user.php"); // PERLU DIGANTI
        }
    } else {
        $error = urlencode("Username atau password salah!");
        header("Location: ../../login.php?pesan=$error");
    }

    # Close connection to database
    mysqli_close($con);

} else {
    // echo "masuk";
    die();
    $error = urlencode("Username atau password kosong!");
    header("Location: ../../login.php?pesan=$error");
}
?>
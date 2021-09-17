<?php

require_once('../config/koneksi.php');
if (isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = $conn->prepare("SELECT * FROM user WHERE username = '$username' and password = '$password'");
    $sql->bind_param("ss", $username,$password);
    $sql->execute();
    if ($sql) {
        echo json_encode(array('RESPONSE' => 'SUCCESS'));
        header("location:../readapi/tampil.php");
    } else {
        echo json_encode(array('RESPONSE' => 'FAILED'));
        echo "GAGAL";
    }
}
?>
<?php

require_once('../config/koneksi.php');
if (isset($_POST['nama_karyawan']) && isset($_POST['jenis_kelamin']) && isset($_POST['lama_bekerja']) && isset($_POST['gaji'])) {
    $nama_karyawan    = $_POST['nama_karyawan'];
    $jenis_kelamin  = $_POST['jenis_kelamin'];
    $lama_bekerja    = $_POST['lama_bekerja'];
    $gaji    = $_POST['gaji'];
    $sql = $conn->prepare("INSERT INTO karyawan (nama_karyawan, jenis_kelamin, lama_bekerja, gaji) VALUES (?, ?, ?, ?)");
    $sql->bind_param('sssi', $nama_karyawan, $jenis_kelamin, $lama_bekerja, $gaji);
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
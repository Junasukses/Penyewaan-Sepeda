<?php

require_once('../config/koneksi.php');
if (isset($_POST['nama_karyawan']) && isset($_POST['jenis_kelamin']) && isset($_POST['lama_bekerja']) && isset($_POST['gaji']) && isset($_POST['id'])) {
    $id                 = $_POST['id'];
    $nama_karyawan        = $_POST['nama_karyawan'];
    $lama_bekerja              = $_POST['lama_bekerja'];
    $jenis_kelamin        = $_POST['jenis_kelamin'];
    $gaji               = $_POST['gaji'];
    $sql = $conn->prepare("UPDATE karyawan SET nama_karyawan=?, jenis_kelamin=?, lama_bekerja=?, gaji=? WHERE id=?");
    $sql->bind_param('sssii', $nama_karyawan, $jenis_kelamin, $lama_bekerja, $gaji, $id);
    $sql->execute();
    if ($sql) {
        echo json_encode(array('RESPONSE' => 'SUCCESS'));
        header("location:../readapi/tampil.php");
        
    } else {
        echo json_encode(array('RESPONSE' => 'FAILED'));
        echo "GAGAL";
    }
}

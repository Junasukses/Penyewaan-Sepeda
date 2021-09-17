<?php

require_once('../config/koneksi.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $SQL = $conn->prepare("SELECT * FROM karyawan WHERE id=? ORDER BY id ASC");
    $SQL->bind_param("i", $id);
    $SQL->execute();
    $myArray = array();
    $hasil = $SQL->get_result();
    while ($users = $hasil->fetch_array(MYSQLI_ASSOC)) {
        $myArray = $users;
    }
    echo json_encode($myArray);
} 
<?php
function http_request($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}
$data = http_request("http://localhost/pabrik/api/api_edit.php?id=" . $_GET["id"]);
$data = json_decode($data, TRUE);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Karyawan Pabrik</title>
</head>
<body>
    <h3>Edit Karyawan</h3>
    <a href="tampil.php">.. Kembali</a><br>
    <form action="../api/api_ubah.php" method="post" id="form">
        <input type="hidden" name="id" id="id" value="<?=$data['id']?>">
        <table border="0">
            <tr>
                <td>Nama Karyawan</td>
                <td>: <input type="text" name="nama_karyawan" id="nama_karyawan" value="<?=$data['nama_karyawan']?>" placeholder="nama_karyawan"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>: <select name="jenis_kelamin" id="jenis_kelamin">
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                </select></td>
            </tr>
            <tr>
                <td>Lama Bekerja</td>
                <td>: <input type="text" name="lama_bekerja" id="lama_bekerja" placeholder="lama_bekerja" value="<?=$data['lama_bekerja']?>"></td>
            </tr>
            <tr>
                <td>Gaji</td>
                <td>: <input type="number" name="gaji" id="gaji" placeholder="gaji" value="<?=$data['gaji']?>"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit">Tinjau</button></td>
            </tr>
        </table>
        
    </form>

</body>
</html>
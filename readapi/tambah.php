<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Karyawan Pabrik</title>
</head>
<body>
	<h3>Tambah Karyawan Pabrik</h3>
	<a href="tampil.php">.. Kembali</a><br>
	<form action="../api/api_tambah.php" method="post" id="form">
		<table border="0">
			<tr>
				<td>Nama Karyawan</td>
				<td>: <input type="text" name="nama_karyawan" id="nama_karyawan" placeholder="nama_karyawan"></td>
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
				<td>: <input type="text" name="lama_bekerja" id="lama_bekerja" placeholder="lama_bekerja"></td>
			</tr>
			<tr>
				<td>Gaji</td>
				<td>: <input type="number" name="gaji" id="gaji" placeholder="gaji"></td>
			</tr>
			<tr>
				<td colspan="2"><button type="submit">Tambah</button></td>
			</tr>
		</table>
		
	</form>
</body>
</html>
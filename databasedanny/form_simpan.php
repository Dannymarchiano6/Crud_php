<html>
<head>
	<title>Membuat CRUD dengan PHP</title>
</head>
<body>
	<h1>Tambah Data Mahsiswa Teknik</h1>
	<form method="post" action="proses_simpan.php">
		<table cellpadding="8">
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
				<input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
				<input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
				</td>
			</tr>
			<tr>
				<td>Semester</td>
				<td><input type="text" name="semester"></td>
			</tr>
			<tr>
				<td>Reg</td>
				<td><textarea name="reg"></textarea></td>
			</tr>
		</table>

		<hr>
		<input type="submit" value="Simpan">
		<a href="index.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>

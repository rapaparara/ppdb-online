<!DOCTYPE html>
<html>
<head>
	<title>Selamat Datang di PPDB Online</title>
</head>
<body>
	<h2>Masukkan data anda</h2>
	<form action="pendaftaran/input_data" method="POST">
		<label>Nama Siswa : </label>
		<input type="text" name="namaSiswa"><br>
		<label>NISN : </label>
		<input type="text" name="nisn"><br>
		<label>Jenis Kelamin : </label>
		<select name="jenisKelamin">
			<option value="1">Laki-Laki</option>
			<option value="2">Perempuan</option>
		</select><br>
		<label>Tanggal Lahir</label>
		<input type="date" name="tanggalLahir"><br>
		<label>Alamat : </label>
		<input type="text" name="alamat"><br>
		<label>Asal Sekolah : </label>
		<input type="text" name="asalSekolah"><br>
		<label>Nama Ayah : </label>
		<input type="text" name="namaAyah"><br>
		<label>Nama Ibu : </label>
		<input type="text" name="namaIbu"><br>
		<label>Minat dan Bakat : </label>
		<select name="minatBakat">
			<option value="1">Olahraga</option>
			<option value="2">Kesenian</option>
			<option value="2">Pramuka</option>
		</select><br>
		<input type="submit" name="sumbit" value="Simpan">
	</form>
</body>
</html>
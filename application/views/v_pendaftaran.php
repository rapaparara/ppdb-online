<!DOCTYPE html>
<html>
<head>
	<?php include 'header.php'; ?>
</head>
<body>
	<?php include 'navbar.php'; ?>
<div class="container mt-5">
	<div class="row">
	<div class="col-sm-5 mt-3">
		<div class="card" style="background-color: #e0e0e0;">
			<div class="card-body">
	<h3>Masukkan data Siswa</h3>
	<form action="pendaftaran/input_data" method="POST">
		<div class="form-group">
		<label>Nama Siswa : </label>
		<input class="form-control" type="text" name="namaSiswa" required>
		<label>NISN : </label>
		<input class="form-control" type="text" name="nisn" required>
		<label>Jenis Kelamin : </label>
		<select class="form-control" name="jenisKelamin">
			<option value="1">Laki-Laki</option>
			<option value="2">Perempuan</option>
		</select>
		<label>Tanggal Lahir</label>
		<input class="form-control" type="date" name="tanggalLahir" required>
		<label>Alamat : </label>
		<input class="form-control" type="text" name="alamat" required>
		<label>Asal Sekolah : </label>
		<input class="form-control" type="text" name="asalSekolah" required>
		<label>Nama Ayah : </label>
		<input class="form-control" type="text" name="namaAyah" required>
		<label>Nama Ibu : </label>
		<input class="form-control" type="text" name="namaIbu" required>
		<label>Minat dan Bakat : </label>
		<select class="form-control" name="minatBakat">
			<option value="1">Olahraga</option>
			<option value="2">Kesenian</option>
			<option value="3">Kepramukaan</option>
		</select>
		<button type="submit" class="btn btn-success mt-3">Simpan</button>
	</div>
	</form>
			</div>
		</div>
	</div>

	<div class="col-sm-7 mt-3">
	<h3>Siswa yang terdaftar</h3>
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Asal Sekolah</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($siswa as $s) {?>
			<tr>
				<td><?php echo $s->namaSiswa ?></td>
				<td><?php echo $s->asalSekolah ?></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
	</div>
</div>
</div>
	<?php include 'footer.php'; ?>
</body>
</html>
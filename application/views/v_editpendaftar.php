<!DOCTYPE html>
<html>
<head>
	<?php include 'header.php'; ?>
</head>
<body>
	<?php include 'navbar_admin.php'; ?>
<div class="container mt-5">
	<div class="row">
	<div class="col-sm-5 mt-3">
		<div class="card" style="background-color: #e0e0e0;">
			<div class="card-body">
	<h3>Masukkan data Siswa</h3>
	<form action="pendaftaran/input_data" method="POST">
		<div class="form-group">
		<?php foreach($pendaftar as $p) { ?>
		<label>Nama Siswa : </label>
		<input class="form-control" type="text" name="namaSiswa" value="<?php echo $p->namaSiswa; ?>" required>
		<label>NISN : </label>
		<input class="form-control" type="text" name="nisn" value="<?php echo $p->nisn; ?>" readonly>
		<label>Jenis Kelamin : </label>
		<select class="form-control" name="jenisKelamin">
			<option value="1" <?php if($p->jenisKelamin==1) echo "selected" ?>>Laki-Laki</option>
			<option value="2" <?php if($p->jenisKelamin==2) echo "selected" ?>>Perempuan</option>
		</select>
		<label>Tanggal Lahir</label>
		<input class="form-control" type="date" name="tanggalLahir" value="<?php echo $p->tanggalLahir; ?>" required>
		<label>Alamat : </label>
		<input class="form-control" type="text" name="alamat" value="<?php echo $p->alamat; ?>" required>
		<label>Asal Sekolah : </label>
		<input class="form-control" type="text" name="asalSekolah" value="<?php echo $p->asalSekolah; ?>" required>
		<label>Nama Ayah : </label>
		<input class="form-control" type="text" name="namaAyah" value="<?php echo $p->namaAyah; ?>" required>
		<label>Nama Ibu : </label>
		<input class="form-control" type="text" name="namaIbu" value="<?php echo $p->namaIbu; ?>" required>
		<label>Minat dan Bakat : </label>
		<select class="form-control" name="minatBakat">
			<option value="1" <?php if($p->minatBakat==1) echo "selected" ?> >Olahraga</option>
			<option value="2" <?php if($p->minatBakat==2) echo "selected" ?> >Kesenian</option>
			<option value="3" <?php if($p->minatBakat==3) echo "selected" ?> >Kepramukaan</option>
		</select>
		<button type="submit" class="btn btn-success mt-3">Simpan</button>
	</div>
	<?php } ?>
	</form>
			</div>
		</div>
	</div>
</div>
</div>
	<?php include 'footer.php'; ?>
</body>
</html>
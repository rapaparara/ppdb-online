<!DOCTYPE html>
<html>
<head>
	<?php include 'header.php'; ?>
</head>
<body>
	<?php include 'navbar_admin.php'; ?>
<div class="container mt-5">
	<div class="row">
	<div class="col-sm">
		<div class="card">
			<div class="card-body">
	<h3>Siswa yang terdaftar</h3>
	<table class="table  table-hover table-responsive table-bordered">
		<thead>
			<tr>
				<th>NISN</th>
				<th>Nama</th>
				<th>Asal Sekolah</th>
				<th>Tanggal Lahir</th>
				<th>Alamat</th>
				<th>Minat dan Bakat</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($pendaftar as $s) {?>
			<tr>
				<td><?php echo $s->nisn ?></td>
				<td><?php echo $s->namaSiswa ?></td>
				<td><?php echo $s->asalSekolah ?></td>
				<td><?php echo $s->tanggalLahir ?></td>
				<td><?php echo $s->alamat ?></td>
				<td><?php 
					if($s->minatBakat == 1){
						echo "Olahraga";
					}else if($s->minatBakat == 2){
						echo "Kesenian";
					}else {
						echo "Kepramukaan";
					}
				?></td>
				<td><a href="pendaftar/edit/<?php echo $s->nisn; ?>">Ubah </a><a href="pendaftar/delete/<?php echo $s->nisn; ?>">Hapus</a></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
			</div>
		</div>
	</div>
</div>
</div>
	<?php include 'footer.php'; ?>
</body>
</html>
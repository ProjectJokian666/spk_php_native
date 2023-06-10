<div class="card shadow">
	<div class="card-header">
		<h6 class="m-0 font-weight-bold text-primary">
			Setting File Cetak
		</h6>
	</div>
	<?php 
	$no=1;
	$data_interprestasi = mysqli_query($koneksi_database,"select * from data_cetak");
	// var_dump($data_interprestasi);
	?>
	<?php foreach ($data_interprestasi as $key => $value): ?>
		<form action="update.php" method="POST">
			<input type="hidden" name="id" value="<?= $value['id'] ?>">
			<div class="card-body">
				<div class="form-group">
					<label>Header</label>
					<input type="text" class="form-control form-control-user" name="header" id="header" placeholder="Masukkan Text Header" value="<?= $value['header']; ?>">
				</div>
				<div class="form-group">
					<label>Size Font</label>
					<input type="text" class="form-control form-control-user" name="size_header" id="size_header" placeholder="Masukkan Size Text Header" value="<?= $value['size_header']; ?>">
				</div>
				<div class="form-group">
					<label>Location</label>
					<input type="text" class="form-control form-control-user" name="location" id="location" placeholder="Masukkan Text Lokasi" value="<?= $value['location']; ?>">
				</div>
				<div class="form-group">
					<label>Size Font</label>
					<input type="text" class="form-control form-control-user" name="size_location" id="size_location" placeholder="Masukkan Size Text Lokasi" value="<?= $value['size_location']; ?>">
				</div>
				<div class="form-group">
					<label>Judul</label>
					<input type="text" class="form-control form-control-user" name="judul" id="judul" placeholder="Masukkan Text Judul" value="<?= $value['judul']; ?>">
				</div>
				<div class="form-group">
					<label>Size Font</label>
					<input type="text" class="form-control form-control-user" name="size_judul" id="size_judul" placeholder="Masukkan Size Text Judul" value="<?= $value['size_judul']; ?>">
				</div>
				<div class="form-group">
					<label>Wilayah</label>
					<input type="text" class="form-control form-control-user" name="wilayah" id="wilayah" placeholder="Masukkan Wilayah" value="<?= $value['wilayah']; ?>">
				</div>
				<div class="form-group">
					<label>Konselor</label>
					<input type="text" class="form-control form-control-user" name="konselor" id="konselor" placeholder="Masukkan Konselor" value="<?= $value['konselor']; ?>">
				</div>
				<div class="form-group">
					<center>
						<button class="btn btn-sm btn-info" type="submit">UPDATE</button>
					</center>
				</div>
			</div>
		</form>
	<?php endforeach ?>
</div>
<div class="card shadow">
	<div class="card-header">
		<h6 class="m-0 font-weight-bold text-primary">
			Data Hasil Kuesioner
		</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<?php 
			$no=1;
			$data_hasil = mysqli_query($koneksi_database,"select * from hasil_kuesioner");
			?>
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th class="text-center" style="vertical-align: middle;">No</th>
						<th class="text-center" style="vertical-align: middle;">Tanggal</th>
						<th class="text-center" style="vertical-align: middle;">Nama</th>
						<th class="text-center" style="vertical-align: middle;">Kelas</th>
						<th class="text-center" style="vertical-align: middle;">Sekolah</th>
						<th class="text-center" style="vertical-align: middle;">Jenis Kelamin</th>
						<th class="text-center" style="vertical-align: middle;">Tanggal Lahir</th>
						<th class="text-center" style="vertical-align: middle;">Hasil Test</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($data_hasil as $key => $value): ?>
						<tr>
							<td class="text-center" style="vertical-align: middle;"><?= $no; ?></td>
							<td class="text-center" style="vertical-align: middle;"><?= $value['tanggal_test']; ?></td>
							<td class="text-center" style="vertical-align: middle;"><?= $value['nama']; ?></td>
							<td class="text-center" style="vertical-align: middle;"><?= $value['kelas']; ?></td>
							<td class="text-center" style="vertical-align: middle;"><?= $value['sekolah']; ?></td>
							<td class="text-center" style="vertical-align: middle;"><?= $value['jenis_kelamin']; ?></td>
							<td class="text-center" style="vertical-align: middle;"><?= $value['tanggal_lahir']; ?></td>
							<td class="text-center" style="vertical-align: middle;"><?= $value['hasil_tes']; ?></td>
						</tr>
						<?php $no++; ?>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<div class="card shadow">
	<div class="card-header">
		<h6 class="m-0 font-weight-bold text-primary">
			Data Interprestasi
		</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<?php 
			$no=1;
			$data_interprestasi = mysqli_query($koneksi_database,"select * from data_interpretasi");
			?>
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th class="text-center" style="vertical-align: middle;">No</th>
						<th class="text-center" style="vertical-align: middle;">Klasifikasi</th>
						<th class="text-center" style="vertical-align: middle;">Batas Bawah</th>
						<th class="text-center" style="vertical-align: middle;">Batas Atas</th>
						<th class="text-center" style="vertical-align: middle;">Interprestasi</th>
						<!-- <th class="text-center" style="vertical-align: middle;">Aksi</th> -->
					</tr>
				</thead>
				<tbody>
					<?php foreach ($data_interprestasi as $key => $value): ?>
						<tr>
							<td class="text-center" style="vertical-align: middle;"><?= $no; ?></td>
							<td class="text-center" style="vertical-align: middle;"><?= $value['klasifikasi']; ?></td>
							<td class="text-center" style="vertical-align: middle;"><?= $value['batas_bawah']; ?></td>
							<td class="text-center" style="vertical-align: middle;"><?= $value['batas_atas']; ?></td>
							<td class="text-center" style="vertical-align: middle;" contenteditable="true"><?= $value['interpretasi']; ?></td>
							<!-- <td class="d-flex"> -->
								<!-- <button class="btn btn-sm btn-info"><i class="fas fa-edit"></i></button> -->
								<!-- <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button> -->
							<!-- </td> -->
						</tr>
						<?php $no++; ?>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script type="text/javascript">
	
</script>
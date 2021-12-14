<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h4 class="">Menu Punishment Pegawai</h4>
			</div>
		</div>
	</div>
</div>

<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<!-- <div class="card-header">
						<h4 class="card-title"></h4>
					</div> -->

					<div class="card-body">
						<table class="table" id="phk">
							<thead>
								<tr>
									<th>Nama</th>
									<th>Surat Peringatan</th>
									<th>Aksi</th>

							</thead>
							<tbody>
								<?php foreach ($nama as $key => $n) { ?>
									<tr>
										<td><?= $n['nama'] ?></td>
										<?php if ($n['punishment'] == null) { ?>
											<td>Tidak Ada Surat Peringatan</td>
										<?php } else { ?>
											<td>
												<a href="<?php echo site_url('punishment/riwayatPunishment/' . $n['id']); ?>">
													<button class="btn btn-primary btn-sm text-white">
														<i class="fa">Lihat Riwayat</i>
													</button>
												</a>
											</td>
										<?php } ?>
										<td>
											<a href="<?php echo site_url('punishment/upload_sp/' . $n['id']); ?>">
												<button class="btn btn-primary btn-sm text-white">
													<i class="fa">Upload</i>
												</button>
											</a>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
</section>

<script>
	$(function() {
		$("#phk").DataTable()
	})
</script>

<?php if ($this->session->flashdata('uploadsp')) { ?>
	<?php unset($_SESSION['add_sp']) ?>
	<script>
		alert('Punishment berhasil diupload!');
	</script>
<?php } ?>

<?php if ($this->session->flashdata('error_uploadsp')) { ?>
	<?php unset($_SESSION['add_sp']) ?>
	<script>
		alert('File tidak boleh kosong!');
	</script>
<?php } ?>

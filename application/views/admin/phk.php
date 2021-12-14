<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h4 class="">Menu PHK Pegawai</h4>
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
									<th>Surat Keterangan PHK dan Pengalaman Kerja</th>
									<th>Aksi</th>

							</thead>
							<tbody>
								<?php foreach ($namapegawai as $key => $np) { ?>
									<tr>
										<td><?= $np['nama'] ?></td>
										<?php if ($np['file'] == null) { ?>
											<td>Tidak Ada Laporan</td>
										<?php } else { ?>
											<td>
												<a download href="<?php echo base_url('surat_ket_phk/' . $np['file']) ?>">
													<?= $np['file'] ?>
												</a>
											</td>
										<?php } ?>
										<td>
											<a href="<?php echo site_url('phk/upload_suratket/' . $np['id']); ?>">
												<button class="btn btn-primary btn-sm text-white">
													<i class="fa">PHK</i>
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

<?php if ($this->session->flashdata('uploadsk')) { ?>
	<?php unset($_SESSION['add_surat_ket']) ?>
	<script>
		alert('Upload File Berhasil!');
	</script>
<?php } ?>

<?php if ($this->session->flashdata('error_sk')) { ?>
	<?php unset($_SESSION['add_surat_ket']) ?>
	<script>
		alert('File tidak boleh kosong!');
	</script>
<?php } ?>

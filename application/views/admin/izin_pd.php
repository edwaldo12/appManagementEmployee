<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h4 class="">Daftar Pengunduran Diri</h4>
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
						<h4 class="card-title">Daftar Pengunduran Diri Pegawai</h4>
					</div> -->

					<div class="card-body">
						<table class="table" id="izinpd">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Surat Pengunduran Diri</th>
									<th>Surat Pengalaman Kerja</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($izin_undur as $key => $pd) { ?>
									<tr>
										<td><?= $pd['id'] ?></td>
										<td><?= $pd['nama'] ?></td>
										<td>
											<a download href="<?php echo base_url('surat_pd/' . $pd['upload_surat_pd']) ?>">
												<?= $pd['upload_surat_pd'] ?>
											</a>
										</td>
										<td>
											<a download href="<?php echo base_url('suratpengalamankerja/' . $pd['file']) ?>">
												<?= $pd['file'] ?>
											</a>
										</td>
										<td>
											<a href="<?php echo site_url('Izin_PD/upload_SPK/' . $pd['id']); ?>">
												<button class="btn btn-primary btn-sm text-white">
													<i class="fa fa-upload"></i>
												</button>
											</a>
										</td>
									</tr>
								<?php } ?>
							</tbody>
					</div>
				</div>
			</div>
		</div>
</section>

<?php if ($this->session->flashdata('uploadSPK')) { ?>
	<?php unset($_SESSION['add_surat_pk']) ?>
	<script>
		alert('Surat Pengalaman Kerja berhasil diupload!');
	</script>
<?php } ?>

<?php if ($this->session->flashdata('error_uploadSPK')) { ?>
	<?php unset($_SESSION['add_surat_pk']) ?>
	<script>
		alert('File harus PDF!');
	</script>
<?php } ?>

<script>
	$(function() {
		$("#izinpd").DataTable()
	})
</script>

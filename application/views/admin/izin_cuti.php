<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h4 class="">Daftar Cuti</h4>
			</div>
		</div>
	</div>
</div>

<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">

					<div class="card-body">
						<table class="table" id="izin_cuti">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Tanggal Mulai</th>
									<th>Tanggal Selesai</th>
									<th>Alasan</th>
									<th>Surat Keterangan Cuti</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($izin_cuti as $key => $ct) { ?>
									<tr>
										<td><?= $ct['id'] ?></td>
										<td><?= $ct['nama'] ?></td>
										<td><?= $ct['tanggal_mulai'] ?></td>
										<td><?= $ct['tanggal_selesai'] ?></td>
										<td><?= $ct['alasan'] ?></td>
										<td>
											<a download href="<?php echo base_url('surat_izin_cuti/' . $ct['file']) ?>">
												<?= $ct['file'] ?>
											</a>
										</td>
										<td>
											<a href="<?php echo site_url('izin_Cuti/upload_SKC/' . $ct['id']); ?>">
												<button class="btn btn-primary btn-sm text-white">
													<i class="fa fa-upload"></i>
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
		$("#izin_cuti").DataTable()
	})
</script>

<?php if ($this->session->flashdata('upload_skc')) { ?>
	<?php unset($_SESSION['add_surat_cuti']) ?>
	<script>
		alert('Surat Keterangan Cuti berhasil diajukan!');
	</script>
<?php } ?>

<?php if ($this->session->flashdata('error_uploadskc')) { ?>
	<?php unset($_SESSION['add_surat_cuti']) ?>
	<script>
		alert('File tidak boleh kosong!');
	</script>
<?php } ?>

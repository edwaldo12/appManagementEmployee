<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h4 class="">Absensi</h4>
			</div>
		</div>
		<a href="<?php echo site_url('absensi/absenMasuk') ?>">
			<button type="button" class="btn btn-primary">Absen Masuk</button>
		</a>
	</div>
</div>

<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<!-- <div class="card-header">
						<h4 class="card-title">Absensi Pegawai</h4>
					</div> -->
					<div class="card-body">
						<table class="table" id="pegawai">
							<thead>
								<tr>
									<th>Nama</th>
									<th>Keterangan Waktu</th>
									<th>Absen Masuk</th>
									<th>Absen Pulang</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($absen as $key => $a) { ?>
									<tr>
										<td><?= $a['nama'] ?></td>
										<td><?= $a['keterangan_waktu'] ?></td>
										<td><?= $a['jam_datang'] ?></td>
										<td><?= $a['jam_pulang'] ?></td>
										<td>
											<?php if ($a['jam_pulang'] != null) { ?>
												-
											<?php } else { ?>
												<a href="<?php echo site_url('absensi/absen_pulang/' . $a['id']) ?>">
													<button type="button" class="btn btn-primary">Absen Pulang</button>
												</a>
											<?php } ?>
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
		$("#absensi").DataTable()
	})
</script>

<?php if ($this->session->flashdata('tambah_absensi')) { ?>
	<?php unset($_SESSION['storeAbsensi']) ?>
	<script>
		alert('Tambah absensi berhasil!');
	</script>
<?php } ?>

<?php if ($this->session->flashdata('update_absensi')) { ?>
	<?php unset($_SESSION['update']) ?>
	<script>
		alert('Update absensi berhasil!');
	</script>
<?php } ?>

<?php if ($this->session->flashdata('hapus_absensi')) { ?>
	<?php unset($_SESSION['delete']) ?>
	<script>
		alert('Hapus absensi berhasil!');
	</script>
<?php } ?>
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h4 class="">Pegawai</h4>
			</div>
		</div>
	</div>
</div>

<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<a href="<?php echo site_url('tambah_pengguna/index') ?>">
					<button type="button" class="mb-3 btn btn-primary">Tambah Pengguna</button>
				</a>
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Data Pegawai</h4>
					</div>

					<div class="card-body">
						<table class="table" id="pegawai">
							<thead>
								<tr>
									<th>Nama</th>
									<th>Username</th>
									<th>Jabatan</th>
									<th>Status Karyawan</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($pegawai as $key => $p) { ?>
									<tr>
										<td><?= $p['nama'] ?></td>
										<td><?= $p['username'] ?></td>
										<td><?= $p['jabatan'] ?></td>
										<!-- <td><?= date('Ymd', strtotime($p['tanggal_lahir'])) ?></td> -->
										<?php if ($p['status'] == '0') { ?>
											<td>Non-Aktif</td>
										<?php } else { ?>
											<td>Aktif</td>
										<?php } ?>
										<td>
											<a href="<?php echo site_url('pegawai/halamanEdit/' . $p['id']) ?>">
												<button class="btn btn-warning btn-sm text-white">
													<i class="fa fa-pen"></i>
												</button>
											</a>
											<a href="<?php echo site_url('pegawai/delete/' . $p['id']) ?>">
												<button class="btn btn-danger btn-sm text-white">
													<i class="fa fa-trash"></i>
												</button>
											</a>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
					<div class="card-footer">
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<script>
	$(function() {
		$("#pegawai").DataTable()
	})
</script>

<?php if ($this->session->flashdata('update_profil')) { ?>
	<?php unset($_SESSION['updateProfile']) ?>
	<script>
		alert('Profil berhasil diupdate!');
	</script>
<?php } ?>

<?php if ($this->session->flashdata('hapus_pengguna')) { ?>
	<?php unset($_SESSION['delete']) ?>
	<script>
		alert('Pengguna berhasil dihapus!');
	</script>
<?php } ?>

<?php if ($this->session->flashdata('update_pegawai')) { ?>
	<?php unset($_SESSION['update']) ?>
	<script>
		alert('Profil pegawai berhasil diubah!');
	</script>
<?php } ?>

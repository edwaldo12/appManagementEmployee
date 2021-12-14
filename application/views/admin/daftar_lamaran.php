<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h4 class="">Daftar Lamaran</h4>
			</div>
		</div>
	</div>
</div>

<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Daftar Lamaran</h4>
					</div>

					<div class="card-body">
						<table class="table" id="daftar_lamaran">
							<thead>
								<tr>
									<th>Nama</th>
									<th>Telepon</th>
									<th>Jenis Kelamin</th>
									<th>Tanggal Lahir</th>
									<th>Agama</th>
									<th>Warga Negara</th>
									<th>Pendidikan Terakhir</th>
									<th>Status Pernikahan</th>
									<th>CV</th>
									<th>Jabatan yang dipilih</th>
									<th>Status</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($lamaran as $key => $l) { ?>
									<tr>
										<td><?= $l['nama'] ?></td>
										<td><?= $l['telepon'] ?></td>
										<td><?= $l['jenis_kelamin'] ?></td>
										<td><?= $l['tanggal_lahir'] ?></td>
										<td><?= $l['agama'] ?></td>
										<td><?= $l['warga_negara'] ?></td>
										<td><?= $l['pendidikan_terakhir'] ?></td>
										<td><?= $l['status_pernikahan'] ?></td>
										<td>
											<a download href="<?php echo base_url('cv/' . $l['upload_cv']) ?>">
												<?= $l['upload_cv'] ?>
											</a>
										</td>
										<td><?= $l['jabatan'] ?></td>
										<td>
											<?= $l['status_rekrutmen'] == "1" ? "Terima" : "Tolak" ?>
										</td>
										<td width="90px">
											<?php if ($l['status_rekrutmen'] == "0") { ?>
												<a href="daftar_lamaran/terima/<?= $l['id'] ?>" class="btn btn-sm btn-success" style="width:32px">
													<i class="fa fa-check"></i>
												</a>
												<a href="daftar_lamaran/tolak/<?= $l['id'] ?>" class="btn btn-sm btn-danger" style="width:32px">
													<i class="fa fa-times"></i>
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

	</div>
</section>

<script>
	$(function() {
		$("#daftar_lamaran").DataTable()
	})
</script>

<?php if ($this->session->flashdata('terima')) { ?>
	<?php unset($_SESSION['terima']) ?>
	<script>
		alert('Lamaran di terima!');
	</script>
<?php } ?>

<?php if ($this->session->flashdata('tolak')) { ?>
	<?php unset($_SESSION['tolak']) ?>
	<script>
		alert('Lamaran di tolak!');
	</script>
<?php } ?>

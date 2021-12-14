<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h4 class="">Riwayat Cuti</h4>
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
						<h4 class="card-title">Daftar Riwayat Cuti</h4>
					</div>

					<div class="card-body">
						<table class="table" id="izincuti">
							<thead>
								<tr>
									<th>Tanggal Mulai</th>
									<th>Tanggal Selesai</th>
									<th>Alasan</th>
									<th>Surat Keterangan Cuti</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($riwayat_ct as $key => $rct) { ?>
									<tr>
										<td><?= $rct['tanggal_mulai'] ?></td>
										<td><?= $rct['tanggal_selesai'] ?></td>
										<td><?= $rct['alasan'] ?></td>
										<td>
											<?php if ($riwayat_ct == NULL) {
											?>
												<h3>Belum ada data!</h3>
											<?php } else { ?>
												<h5>
													<a download href="<?php echo base_url('surat_izin_cuti/' . $rct['file']) ?>">
														<?= $rct['file'] ?>
													</a>
												</h5>
											<?php } ?>

										</td>
									</tr>
								<?php } ?>
							</tbody>
					</div>
				</div>
			</div>
		</div>
</section>

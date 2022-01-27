<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h4 class="">Riwayat Surat Peringatan</h4>
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
						<h4 class="card-title">Daftar Riwayat Cuti</h4>
					</div> -->

					<div class="card-body">
						<table class="table" id="riwayatpunishment">
							<!-- <thead>
								<tr>
									<th>Surat Peringatan</th>
								</tr>
							</thead> -->
							<tbody>
								<?php foreach ($riwayat_sp as $key => $rsp) { ?>
									<?php if ($riwayat_sp == NULL) {
									?>
										<h3>Belum ada data!</h3>
									<?php } else { ?>
										<h5>
											<a download href="<?php echo base_url('SuratPeringatan/' . $rsp['punishment_file']) ?>">
												<?= $rsp['punishment_file'] ?>
											</a>
										</h5>
									<?php } ?>
								<?php } ?>
							</tbody>
					</div>
				</div>
			</div>
		</div>
</section>

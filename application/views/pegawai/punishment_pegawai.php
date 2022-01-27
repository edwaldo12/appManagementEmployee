<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h4 class="">Punishment Pegawai</h4>
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
						<table id="punishmentpegawai">
							<!-- <thead>
								<tr>
									<th>Tanggal Mulai</th>
									<th>Tanggal Selesai</th>
									<th>Alasan</th>
									<th>Surat Keterangan Cuti</th>
								</tr>
							</thead> -->
							<tbody>
								<?php foreach ($punish_peg as $key => $pp) { ?>
									<?php if ($punish_peg == NULL) { ?>
										<h5>Tidak ada Punishment!</h5>
									<?php } else { ?>
										<h5>
											<a download href="<?php echo base_url('SuratPeringatan/' . $pp['punishment_file']) ?>">
												<?= $pp['punishment_file'] ?>
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

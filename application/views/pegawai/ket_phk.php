<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h4 class="">PHK</h4>
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
						<table id="ket_phk">
							<!-- <thead>
								<tr>
									<th>Tanggal Mulai</th>
									<th>Tanggal Selesai</th>
									<th>Alasan</th>
									<th>Surat Keterangan Cuti</th>
								</tr>
							</thead> -->
							<tbody>
								<?php if ($keterangan_phk == NULL) {
								?>
									<h5>Belum ada data!</h5>
								<?php } else { ?>
									<h5 style="color:red;">Maaf, Anda telah kami PHK</h5>
									<br>
									<h6>Berikut kami lampirkan Surat Keterangan PHK</h6>
									<h5>
										<a download href="<?php echo base_url('surat_ket_phk/' . $keterangan_phk['file']) ?>">
											<?= $keterangan_phk['file'] ?>
										</a>
									</h5>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
</section>

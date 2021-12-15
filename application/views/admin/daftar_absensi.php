<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h4 class="">Daftar Absensi</h4>
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
						<div class="card-title">
							<h5>
								<?php
								date_default_timezone_set("Asia/Jakarta");
								$jkt = date("d F Y");
								echo " Tanggal/Bulan/Tahun : " . $jkt
								?>
							</h5>
						</div>
					</div>
					<div class="card-body">
						<form action="" method="GET">
							<p>Filter Data</p>
							<input type="date" name="start_date" class="form-control" style="min-width:100px;max-width:200px;width:100%;display:inline-block" placeholder="Dimulai dari tanggal">
							<input type="date" name="end_date" class="form-control" style="min-width:100px;max-width:200px;width:100%;display:inline-block" placeholder="Hingga Tanggal">
							<button class="btn btn-primary" style="position:relative;top:-2px"><i class="fa fa-search"></i></button>
						</form>
						<br>
						<table class="table" id="daftar_lamaran">
							<thead>
								<tr>
									<th>Nama</th>
									<th>Keterangan Waktu</th>
									<th>Jam Masuk</th>
									<th>Jam Pulang</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($daftarnama as $key => $d) { ?>
									<tr>
										<td><?= $d['nama'] ?></td>
										<td><?= $d['keterangan_waktu'] ?></td>
										<td><?= $d['jam_datang'] ?></td>
										<td><?= $d['jam_pulang'] ?></td>
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
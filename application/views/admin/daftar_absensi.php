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
							<input type="date" name="start_date" class="form-control" style="min-width:100px;max-width:200px;width:100%;display:inline-block" placeholder="Dimulai dari tanggal" required>
							<input type="date" name="end_date" class="form-control" style="min-width:100px;max-width:200px;width:100%;display:inline-block" placeholder="Hingga Tanggal" required>
							<button class="btn btn-primary" style="position:relative;top:-2px"><i class="fa fa-search"></i></button>
						</form>

						<br>
						<table class="table" id="daftar_absensi">
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

<!-- <script>
	$(document).ready(function() {
		$('#daftar_absensi').DataTable({
			dom: 'Bfrtip',
			buttons: [
				'excel', 'pdf', 'print'
			]
		});
	});
</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script> -->

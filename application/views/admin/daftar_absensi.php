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
						<table class="table" id="absensi">
							<thead>
								<tr>
									<th>Nama</th>
									<th>Jam Masuk</th>
									<th>Jam Pulang</th>
								</tr>
							</thead>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

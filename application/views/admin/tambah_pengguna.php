<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
			</div>
		</div>
	</div>
</div>

<section class="content">
	<div class="container-fluid">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Tambah Pengguna</h3>
				</div>
				<form method="POST" action="<?php echo site_url('tambah_pengguna/tambahpengguna') ?>">
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" class="form-control" id="nama" name="nama" required>
								</div>
								<div class="form-group">
									<label for="username">Username</label>
									<input type="text" class="form-control" id="username" name="username" required>
								</div>
								<div class="form-group">
									<label for="password">Password</label>
									<input type="password" class="form-control" id="username" name="username" required>
								</div>
								<div class="form-group">
									<label for="jabatan">Jabatan</label>
									<select id="id_jabatan" name="id_jabatan" class="form-control">
										<?php foreach ($getdata as $gd) { ?>
											<option value="<?= $gd['id'] ?>"><?= $gd['jabatan']  ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
						</div>
					</div>

					<div class="card-footer">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
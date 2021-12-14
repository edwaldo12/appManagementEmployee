<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<div class="d-flex justify-content-center">
			<form class="w-50" method="POST" enctype="multipart/form-data" action="<?= site_url('guest/upload_lamaran') ?>">
				<div class="card">

					<div class="card-header">
						<h4 class="card-title">Formulir Ajukan Lamaran</h4>
					</div>

					<div class="card-body">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" value="<?= set_value('nama') ?>" required>
						</div>
						<div class="form-group">
							<label for="alamat">Alamat</label>
							<input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat" value="<?= set_value('alamat') ?>" required>
						</div>
						<div class="form-group">
							<label for="Telepon">Telepon</label>
							<input type="tel" class="form-control" id="Telepon" placeholder="Masukkan Telepon" name="telepon" value="<?= set_value('telepon') ?>" required>
						</div required>
						<div class="form-group">
							<label for="jenis_kelamin">Jenis Kelamin</label>
							<select id="jenis_kelamin" name="jenis_kelamin" class="form-control" required>
								<option <?= set_value('jenis_kelamin') == 'L' ? "selected" : "" ?> value="L">Laki-Laki</option>
								<option <?= set_value('jenis_kelamin') == 'P' ? "selected" : "" ?> value="P">Perempuan</option>
							</select>
						</div>
						<div class="form-group">
							<label for="tanggal_lahir">Tanggal Lahir</label>
							<input type="date" class="form-control" id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" name="tanggal_lahir" value="<?= set_value('tanggal_lahir') ?>" required>
						</div>
						<div class="form-group">
							<label for="agama">Agama</label>
							<select id="agama" name="agama" class="form-control" required>
								<option <?= set_value('agama') == 'Islam' ? "selected" : "" ?> value="Islam">Islam</option>
								<option <?= set_value('agama') == 'Kristen' ? "selected" : "" ?> value="Kristen">Kristen</option>
								<option <?= set_value('agama') == 'Katolik' ? "selected" : "" ?> value="Katolik">Katolik</option>
								<option <?= set_value('agama') == 'Hindu' ? "selected" : "" ?> value="Hindu">Hindu</option>
								<option <?= set_value('agama') == 'Budha' ? "selected" : "" ?> value="Budha">Budha</option>
							</select>
						</div>
						<div class="form-group">
							<label for="warga_negara">Warga Negara</label>
							<input type="text" class="form-control" id="warga_negara" placeholder="Masukkan Warga Negara" name="warga_negara" value="<?= set_value('warga_negara') ?>" required>
						</div>
						<div class="form-group">
							<label for="pendidikan_terakhir">Pendidikan Terakhir</label>
							<select id="pendidikan_terakhir" name="pendidikan_terakhir" class="form-control" required>
								<option <?= set_value('pendidikan_terakhir') == '-' ? "selected" : "" ?> value="-">-</option>
								<option <?= set_value('pendidikan_terakhir') == 'SD' ? "selected" : "" ?> value="SD">SD</option>
								<option <?= set_value('pendidikan_terakhir') == 'SMP' ? "selected" : "" ?> value="SMP">SMP</option>
								<option <?= set_value('pendidikan_terakhir') == 'SMA' ? "selected" : "" ?> value="SMA">SMA</option>
								<option <?= set_value('pendidikan_terakhir') == 'D1' ? "selected" : "" ?> value="D1">D1</option>
								<option <?= set_value('pendidikan_terakhir') == 'D2' ? "selected" : "" ?> value="D2">D2</option>
								<option <?= set_value('pendidikan_terakhir') == 'D3' ? "selected" : "" ?> value="D3">D3</option>
								<option <?= set_value('pendidikan_terakhir') == 'D4' ? "selected" : "" ?> value="D4">D4</option>
								<option <?= set_value('pendidikan_terakhir') == 'D5' ? "selected" : "" ?> value="D5">D5</option>
								<option <?= set_value('pendidikan_terakhir') == 'S1' ? "selected" : "" ?> value="S1">S1</option>
								<option <?= set_value('pendidikan_terakhir') == 'S2' ? "selected" : "" ?> value="S2">S2</option>
								<option <?= set_value('pendidikan_terakhir') == 'S3' ? "selected" : "" ?> value="S3">S3</option>
							</select>
						</div>
						<div class="form-group">
							<label for="status_pernikahan">Status Pernikahan</label>
							<select id="status_pernikahan" name="status_pernikahan" class="form-control" required>
								<option <?= set_value('status_pernikahan') == 'Belum Menikah' ? "selected" : "" ?> value="Belum Menikah">Belum Menikah</option>
								<option <?= set_value('status_pernikahan') == 'Menikah' ? "selected" : "" ?> value="Menikah">Menikah</option>
							</select>
						</div>
						<div class="form-group">
							<label for="id_jabatan">Jabatan Yang Dikehendaki</label>
							<select id="id_jabatan" name="id_jabatan" class="form-control">
								<?php foreach ($jabatan as $jabatan) { ?>
									<option value="<?= $jabatan['id'] ?>"><?= $jabatan['jabatan']  ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="upload_cv">Upload CV</label>
							<div class="input-group">
								<div class="custom-file">
									<input type="file" id="upload_cv" required name="upload_cv" value="<?= set_value('upload_cv') ?>">
									<label class="custom-file-label" for="upload_cv">Choose file</label>
								</div>
							</div>
							<small class="text-muted">File hanya bisa dalam pdf!</small>
							<br>
							<span style="color:red">Format Penamaan File: NamaLengkap_TanggalLahir</span>
						</div>
					</div>
					<!-- /.card-body -->

					<div class="card-footer">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
			</form>
		</div>

	</div>
	<!-- /.container-fluid -->
</section>
<!-- /.content -->
<?php if ($this->session->flashdata('upload_lamaran')) { ?>
	<?php unset($_SESSION['upload_lamaran']) ?>
	<script>
		alert('Lamaran berhasil diajukan!');
	</script>
<?php } ?>

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
					<h3 class="card-title">Upload Surat Pengalaman Kerja</h3>
				</div>
				<form enctype="multipart/form-data" method="POST" action="<?php echo site_url('izin_PD/add_surat_pk/' . $undur_diri['id']); ?>">
					<div class="card-body">
						<label for="upload_spk">Silahkan Upload Surat Pengalaman Kerja</label>
						<div class="row">
							<div class="col-md-12">
								<div class="custom-file">
									<input type="file" name="upload_spk" id="upload_spk" value="<?= set_value('upload_spk') ?>">
								</div>
								<small class="text-muted">File hanya bisa dalam pdf!</small>
								<br>
								<span style="color:red">Format Penamaan File: SuratPengalamanKerja_NamaPegawai</span>
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

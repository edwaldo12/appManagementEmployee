<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h4 class="">Pengunduran Diri</h4>
			</div>
		</div>
		<form method="POST" enctype="multipart/form-data" action="<?= site_url('PengunduranDiri/ajukan') ?>">
			<div class="card-body">
				<div class="form-group">
					<label for="pengundurandiri">Surat Pengunduran Diri</label>
					<div class="input-group">
						<div class="custom-file">
							<input type="file" name="upload_pd" id="upload_pd" value="<?= set_value('upload_pd') ?>">
						</div>
					</div>
					<small class="text-muted">File hanya dalam PDF!</small>
				</div>
				<div class="form-group">
					<label for="file">Silahkan Download Surat Pengalaman Kerja</label>
				</div>
				<?php if ($pengunduran_diri == NULL) {
				?>
					<h4>Belum ada data!</h4>
				<?php } else { ?>
					<h4>
						<a download href="<?php echo base_url('suratpengalamankerja/' . $pengunduran_diri['file']) ?>">
							<?= $pengunduran_diri['file'] ?>
						</a>
					</h4>
				<?php } ?>
				<br>
				<div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
		</form>
	</div>
</div>

<?php if ($this->session->flashdata('izin')) { ?>
	<?php unset($_SESSION['ajukan']) ?>
	<script>
		alert('Pengunduran diri berhasil diajukan!');
	</script>
<?php } ?>

<?php if ($this->session->flashdata('error_izin')) { ?>
	<?php unset($_SESSION['ajukan']) ?>
	<script>
		alert('File tidak boleh kosong!');
	</script>
<?php } ?>

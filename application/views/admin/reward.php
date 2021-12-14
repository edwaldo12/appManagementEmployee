<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h4 class="">Reward</h4>
			</div>
		</div>
		<form method="POST" enctype="multipart/form-data" action="<?= site_url('') ?>">
			<div class="card-body">
				<div class="form-group">
					<label for="nama">Nama Pegawai</label>
					<select id="id" name="id" class="form-control">
						<?php foreach ($pengguna as $p) { ?>
							<option value="<?= $p['id'] ?>"><?= $p['nama']  ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label for="reward">Reward Pegawai</label>
					<textarea class="form-control" name="reward" id="reward" rows="5"></textarea>
				</div>
				<br>
				<div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
		</form>
		<br>
		<hr size="50px" color="black">
		<!-- <div>
			<a href="<?php echo site_url('Cuti/riwayatCuti') ?>">Riwayat Reward</a>
		</div> -->
	</div>
</div>

<?php if ($this->session->flashdata('cuti')) { ?>
	<?php unset($_SESSION['inputCuti']) ?>
	<script>
		alert('Izin Cuti berhasil diajukan!');
	</script>
<?php } ?>

<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h4 class="">Cuti</h4>
			</div>
		</div>
		<div class="p">
			sisa cuti anda : <?php echo 12 - $hari_cuti ?> hari
		</div>
		<form method="POST" enctype="multipart/form-data" action="<?= site_url('Cuti/inputCuti') ?>">
			<div class="card-body">
				<div class="form-group">
					<label for="awalcuti">Masukkan Tanggal Awal Cuti</label>
					<input type="date" class="form-control" id="awalcuti" name="awalcuti" value="<?= set_value('awalcuti') ?>" required>
				</div>
				<div class="form-group">
					<label for="akhircuti">Masukkan Tanggal Akhir Cuti</label>
					<input type="date" class="form-control" id="akhircuti" name="akhircuti" value="<?= set_value('akhircuti') ?>" required>
				</div>
				<div class="form-group">
					<label for="alasan">Alasan Cuti</label>
					<textarea class="form-control" name="alasan" id="alasan" rows="5" required></textarea>
				</div>
				<br>
				<div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
		</form>
		<br>
		<hr size="50px" color="black">
		<div>
			<a href="<?php echo site_url('Cuti/riwayatCuti') ?>">Riwayat Cuti</a>
		</div>
	</div>
</div>

<?php if ($this->session->flashdata('cuti')) { ?>
	<?php unset($_SESSION['cuti']) ?>
	<script>
		alert('Izin Cuti berhasil diajukan!');
	</script>
<?php } ?>

<?php if ($this->session->flashdata('cuti_tidak_dapat')) { ?>
	<?php unset($_SESSION['cuti_tidak_dapat']) ?>
	<script>
		alert('Tidak dapat cuti !');
	</script>
<?php } ?>
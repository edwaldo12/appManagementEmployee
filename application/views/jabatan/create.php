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
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Tambah Jabatan</h3>
				</div>
				<!-- /.card-header -->
				<!-- form start -->
				<form method="POST" action="<?php echo site_url('jabatan/storeJabatan') ?>">
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="jabatan">Jenis Jabatan</label>
									<input type="text" class="form-control" id="jabatan" placeholder="Masukkan jabatan" name="jabatan" required>
								</div>
							</div>
							<!-- /.card-body -->
						</div>
					</div>

					<div class="card-footer">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- /.container-fluid -->
</section>
<!-- /.content -->

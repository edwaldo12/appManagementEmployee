<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Silahkan Login</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= site_url() ?>adminlte/plugins/fontawesome-free/css/all.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?= site_url() ?>adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= site_url() ?>adminlte/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
	<div class="login-box">
		<!-- /.login-logo -->
		<div class="card">
			<div class="card-body login-card-body">
				<p class="login-box-msg">Silahkan masukkan Username dan Password Anda!</p>
				<form action="<?= site_url('login/loginPengguna') ?>" method="post">
					<div class="input-group mb-3">
						<input type="text" name="username" class="form-control" placeholder="Username">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-key"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="password" name="password" id="password" class="form-control" placeholder="Password">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<input type="checkbox" onclick="showPassword()">Show Password
					<div class="row">
						<div class="col-12">
							<button type="submit" class="btn btn-primary btn-block">Sign In</button>
						</div>
						<!-- /.col -->
					</div>
				</form>
				<!-- /.login-card-body -->
			</div>
		</div>
		<!-- /.login-box -->
		</div<>
		<!-- jQuery -->
		<script src="<?= site_url() ?>adminlte/plugins/jquery/jquery.min.js"></script>
		<!-- Bootstrap 4 -->
		<script src="<?= site_url() ?>adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- AdminLTE App -->
		<script src="<?= site_url() ?>adminlte/dist/js/adminlte.min.js"></script>
</body>

</html>

<?php if ($this->session->flashdata('gagalLogin')) { ?>
	<?php unset($_SESSION['loginPengguna']) ?>
	<script>
		alert('Maaf akun anda telah di non-aktifkan!');
	</script>
<?php } ?>

<script>
	function showPassword() {
		var x = document.getElementById("password");
		if (x.type === "password") {
			x.type = "text";
		} else {
			x.type = "password";
		}
	}
</script>
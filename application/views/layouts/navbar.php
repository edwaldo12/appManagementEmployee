<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
		</li>
	</ul>
	<ul class="navbar-nav ml-auto">
		<!-- Navbar Search -->
		<?php
		$login = $this->session->userdata('user');
		if (empty($login)) { ?>
			<li class="nav-item d-none d-sm-inline-block">
				<a style="color:green" href="<?php echo site_url('guest/ajukan_lamaran') ?>" class="nav-link">Ajukan Lamaran</a>
			</li>
		<?php } else { ?>
			<li class="nav-item d-none d-sm-inline-block">
				<a style="color:green" href="<?php echo site_url('pegawai/editProfil/' . $login['id']) ?>" class="nav-link">Edit Profil</a>
			</li>
			<li class="nav-item d-none d-sm-inline-block">
				<a style="color:red" href="<?php echo site_url('login/logout') ?>" class="nav-link">Logout</a>
			</li>
		<?php } ?>
	</ul>
</nav>
<!-- /.navbar -->

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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Profile Data Diri</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <?php
                $login = $this->session->userdata('user');
                ?>
                <form method="POST" action="<?php echo site_url('pegawai/updateProfile/' . $login['id']) ?>">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" value="<?php echo $pengguna['nama'] ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?php echo $jabatan['jabatan'] ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password">
                                    <small style="color:red">Kosongkan jika tidak ingin update password!</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" placeholder="Masukkan username" name="username" value="<?php echo $pengguna['username'] ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="role">role</label>
                                    <input type="text" class="form-control" id="role" name="role" value="<?php echo $pengguna['role'] ?>" required readonly>
                                </div>
                                <?php if ($pengguna['status'] == 0) { ?>
                                    <div class="form-group">
                                        <label for="status">status</label>
                                        <input type="text" class="form-control" id="status" name="status" value="Non-Aktif" required readonly>
                                    </div>
                                <?php } else { ?>
                                    <div class="form-group">
                                        <label for="status">status</label>
                                        <input type="text" class="form-control" id="status" name="status" value="Aktif" required readonly>
                                    </div>
                                <?php } ?>
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
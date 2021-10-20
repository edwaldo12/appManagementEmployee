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
                    <h3 class="card-title">Edit Pengguna, <?php echo $pengguna['nama'] ?></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="<?php echo site_url('pegawai/update/' . $pengguna['id']) ?>">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" placeholder="Masukkan nama" name="nama" value="<?php echo $pengguna['nama'] ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" placeholder="Masukkan Username" name="username" value="<?php echo $pengguna['username'] ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password" value="">
                                    <small style="color:red;">Kosongkan password jika tidak ingin mengubah!</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="id_jabatan">Jabatan</label>
                                    <select name="id_jabatan" id="id_jabatan" class="form-control">
                                        <?php foreach ($jabatan as $jabatan) { ?>
                                            <option value="<?php echo $jabatan['id'] ?>"><?php echo $jabatan['jabatan'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="status">status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="1">Aktif</option>
                                        <option value="0">Non-Aktif</option>
                                    </select>
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
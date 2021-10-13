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
                            <input type="text" class="form-control" id="agama" placeholder="Masukkan Agama" name="agama" value="<?= set_value('agama') ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="warga_negara">Warga Negara</label>
                            <input type="text" class="form-control" id="warga_negara" placeholder="Masukkan Warga Negara" name="warga_negara" value="<?= set_value('warga_negara') ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                            <input type="text" class="form-control" id="pendidikan_terakhir" placeholder="Masukkan Pendidikan Terakhir" name="pendidikan_terakhir" value="<?= set_value('pendidikan_terakhir') ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="status_pernikahan">Status Pernikahan</label>
                            <input type="text" class="form-control" id="status_pernikahan" placeholder="Masukkan Status Pernikahan" name="status_pernikahan" value="<?= set_value('status_pernikahan') ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="id_jabatan">Jabatan Yang Dikehendaki</label>
                            <select id="id_jabatan" name="id_jabatan" class="form-control">
                                <?php
                                foreach ($jabatan as $jabatan) {
                                    echo "<option value=" . $jabatan->id . ">" . $jabatan['jabatan'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="upload_cv">Upload CV</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" id="upload_cv" required name="upload_cv" value="<?= set_value('upload_cv') ?>">
                                    <label class="custom-file-label" for="upload_cv">Choose file</label>
                                </div>
                                <h4 style="color:red">File hanya bisa dalam pdf!</h34>
                            </div>
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
    <script>
        alert('Lamaran berhasil diajukan!');
    </script>
<?php } ?>
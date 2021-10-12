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
            <form class="w-50">
                <div class="card">

                    <div class="card-header">
                        <h4 class="card-title">Formulir Ajukan Lamaran</h4>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat">
                        </div>
                        <div class="form-group">
                            <label for="Telepon">Telepon</label>
                            <input type="tel" class="form-control" id="Telepon" placeholder="Masukkan Telepon" name="telepon">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" name="tanggal_lahir">
                        </div>
                        <div class="form-group">
                            <label for="agama">Agama</label>
                            <input type="text" class="form-control" id="agama" placeholder="Masukkan Agama" name="agama">
                        </div>
                        <div class="form-group">
                            <label for="warga_negara">Warga Negara</label>
                            <input type="text" class="form-control" id="warga_negara" placeholder="Masukkan Warga Negara" name="warga_negara">
                        </div>
                        <div class="form-group">
                            <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                            <input type="text" class="form-control" id="pendidikan_terakhir" placeholder="Masukkan Pendidikan Terakhir" name="pendidikan_terakhir">
                        </div>
                        <div class="form-group">
                            <label for="status_pernikahan">Status Pernikahan</label>
                            <input type="text" class="form-control" id="status_pernikahan" placeholder="Masukkan Status Pernikahan" name="status_pernikahan">
                        </div>
                        <div class="form-group">
                            <label for="id_jabatan">Jabatan Yang Dikehendaki</label>
                            <select id="id_jabatan" name="id_jabatan" class="form-control">
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="upload_cv">Upload CV</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="upload_cv">
                                    <label class="custom-file-label" for="upload_cv">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
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
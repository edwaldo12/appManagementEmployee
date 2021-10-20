<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h4 class="">Pegawai</h4>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Pegawai</h4>
                    </div>

                    <div class="card-body">
                        <table class="table" id="pegawai">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Jabatan</th>
                                    <th>Password Default</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pegawai as $key => $p) { ?>
                                    <tr>
                                        <td><?= $p['nama'] ?></td>
                                        <td><?= $p['username'] ?></td>
                                        <td><?= $p['jabatan'] ?></td>
                                        <td><?= date('Ymd', strtotime($p['tanggal_lahir'])) ?></td>
                                        <td>
                                            <a href="<?php echo site_url('pegawai/halamanEdit/' . $p['id']) ?>">
                                                <button class="btn btn-warning btn-sm text-white">
                                                    <i class="fa fa-pen"></i>
                                                </button>
                                            </a>
                                            <a href="<?php echo site_url('pegawai/delete/' . $p['id']) ?>">
                                                <button class="btn btn-danger btn-sm text-white">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="card-footer">

                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<script>
    $(function() {
        $("#pegawai").DataTable()
    })
</script>
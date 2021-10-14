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
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pegawai as $key => $p) { ?>
                                    <tr>
                                        <td><?= $p['nama'] ?></td>
                                        <td><?= $p['username'] ?></td>
                                        <td><?= $p['jabatan'] ?></td>
                                        <td><?= date('Ymd',strtotime($p['tanggal_lahir'])) ?></td>
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

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h4 class="">Jabatan</h4>
            </div>
        </div>
    </div>
</div>


<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="<?php echo site_url('jabatan/halamanTambah') ?>">
                    <button type="button" class="mb-3 btn btn-primary">Tambah Jabatan</button>
                </a>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Jabatan</h4>
                    </div>

                    <div class="card-body">
                        <table class="table" id="jabatan">
                            <thead>
                                <tr>
                                    <th>Jabatan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($jabatan as $key => $j) { ?>
                                    <tr>
                                        <td><?= $j['jabatan'] ?></td>
                                        <td>
                                            <a href="<?php echo site_url('jabatan/halamanEdit/' . $j['id']) ?>">
                                                <button class="btn btn-warning btn-sm text-white">
                                                    <i class="fa fa-pen"></i>
                                                </button>
                                            </a>
                                            <a href="<?php echo site_url('jabatan/delete/' . $j['id']) ?>">
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
        $("#jabatan").DataTable()
    })
</script>
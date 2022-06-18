<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kelola dosen</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Dosen</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <a class="btn btn-success" href="<?=(base_url().'index.php/dosen/create_dosen');?>" role="button">Tambah Dosen</a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIDN</th>
                            </th>
                            <th>Nama Dosen</th>
                            <th>Gender</th>
                            <th>Tempat,Tgl Lahir</th>
                            <th>Pendidikan Terakhir</th>
                            <th>Prodi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($list_dosen as $obj) {
                        ?>
                            <tr>
                                <td><?= $nomor ?></td>
                                <td><?= $obj->nidn ?></td>
                                <td><?= $obj->nama ?></td>
                                <td><?= $obj->gender ?></td>
                                <td><?= $obj->tmp_lahir ?>,<?= $obj->tgl_lahir ?></td>
                                <td><?= $obj->pendidikan_akhir ?></td>
                                <td><?= $obj->prodi_kode ?></td>
                                <td>
                                    <a href="<?=(base_url().'index.php/dosen/view?id=');?><?= $obj->nidn ?>">view</a>|
                                    <a href="<?=(base_url().'index.php/dosen//edit?id=');?><?= $obj->nidn ?>">Edit</a>|
                                    <a href="<?=(base_url().'index.php/dosen/delete?id=');?><?= $obj->nidn ?>" onclick="if(!confirm('Anda Yakin Hapus dosen NIM <?= $obj->nidn ?>?')) {return false}">Delete</a>
                                </td>
                            </tr>
                        <?php
                            $nomor++;
                        } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
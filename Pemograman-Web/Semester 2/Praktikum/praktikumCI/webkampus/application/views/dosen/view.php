<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Dosen</h1>
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
                <h3 class="card-title">Biodata dosen</h3>

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
                <div class="row mb-2">
                    <div class="col-sm-8">
                        <table class="table table-striped table-hover">
                            <tbody>
                                <tr>
                                    <td>NIDN</td>
                                    <td><?= $dsn->nidn ?></td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td><?= $dsn->nama ?></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td><?= $dsn->gender ?></td>
                                </tr>
                                <tr>
                                    <td>Tempat Lahir</td>
                                    <td><?= $dsn->tmp_lahir ?></td>
                                </tr>
                                <tr>
                                    <td>Pendidikan Terakhir</td>
                                    <td><?= $dsn->pendidikan_akhir ?></td>
                                </tr>
                                <tr>
                                    <td>Program Studi</td>
                                    <td><?= $dsn->prodi_kode ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-4">
                        Buat Foto
                    </div>

                </div>
                <!-- NIM: <?= $dsn->nim ?> <br>
                Nama: <?= $dsn->nama ?> <br>
                Jenis Kelamin: <?= $dsn->gender ?> <br>
                Tempat Lahir: <?= $dsn->tmp_lahir ?> <br>
                Program Studi: <?= $dsn->prodi_kode ?> <br>
                IPK: <?= $dsn->ipk ?> <br> -->

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
<!-- /.content-wrapper -->
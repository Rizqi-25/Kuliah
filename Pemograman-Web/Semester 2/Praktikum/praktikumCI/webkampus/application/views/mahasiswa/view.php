<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Blank Page</h1>
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
                <h3 class="card-title">Biodata Mahasiswa</h3>

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
                                    <td>NIM</td>
                                    <td><?= $mhs->nim ?></td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td><?= $mhs->nama ?></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td><?= $mhs->gender ?></td>
                                </tr>
                                <tr>
                                    <td>Tempat Lahir</td>
                                    <td><?= $mhs->tmp_lahir ?></td>
                                </tr>
                                <tr>
                                    <td>Program Studi</td>
                                    <td><?= $mhs->prodi_kode ?></td>
                                </tr>
                                <tr>
                                    <td>IPK</td>
                                    <td><?= $mhs->ipk ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-4">
                        <b>Foto</b>
                        <br>
                        <?php
                        $filefoto = base_url('uploads/foto/' . $mhs->foto);

                        // echo $filefoto;
                        $array = get_headers($filefoto);
                        $string = $array[0];
                        if(strpos($string, "200"))
                        {
                            echo '<img src="' . $filefoto . '" class="img-thumbnail" width="250" alt="Foto">';
                        }else{
                            echo '<img src="' . base_url('uploads/foto/default.png') . '" class="img-thumbnail" width="250" alt="Foto">';
                        }
                        // if (file_exists($filefoto)) {
                        //     echo '<img src="' . base_url($filefoto) . '" class="img-thumbnail" width="250" alt="Foto">';
                        // } else {
                        //     echo '<img src="' . base_url('uploads/foto/default.png') . '" class="img-thumbnail" width="250" alt="Foto">';
                        // }
                        ?>
                        <br>
                        <b>Nama File: <?= $mhs->foto ?> </b>
                            <br>
                            <?php
                            echo form_open_multipart('mahasiswa/upload');
                            ?>
                            <b>Upload Foto</b>
                            <br>
                                <input type="hidden" name="nim" value="<?=$mhs->nim?>">
                                <input type="file" name="fotomhs">
                                <input type="submit" class="btn btn-primary" value="Upload">
                            <?php echo form_close() ?>
                    </div>

                </div>
                <!-- NIM: <?= $mhs->nim ?> <br>
                Nama: <?= $mhs->nama ?> <br>
                Jenis Kelamin: <?= $mhs->gender ?> <br>
                Tempat Lahir: <?= $mhs->tmp_lahir ?> <br>
                Program Studi: <?= $mhs->prodi_kode ?> <br>
                IPK: <?= $mhs->ipk ?> <br> -->

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
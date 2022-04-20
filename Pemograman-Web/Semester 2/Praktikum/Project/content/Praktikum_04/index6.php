<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Project dan Praktikum PHP</h1>
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

        <!-- CARD NILAI MAHASISWA -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Nilai Mahasiswa</h3>

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
                <?php
                require_once './content/class_nilaiMahasiswa.php';

                if (isset($_POST['submit'])) {
                    $nim = $_POST['nim'];
                    $matkul = $_POST['matkul'];
                    $nilai = $_POST['nilai'];

                    $hasil = new NilaiMahasiswa($nim, $matkul, $nilai);
                }
                ?>
                <div class="container">
                    <form method="POST" action="index6.php">
                        <div class="form-group row">
                            <label for="nim" class="col-4 col-form-label">NIM</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-address-card"></i>
                                        </div>
                                    </div>
                                    <input id="nim" name="nim" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="matkul" class="col-4 col-form-label">Nama MK</label>
                            <div class="col-8">
                                <select id="matkul" name="matkul" class="custom-select">
                                    <option value="Data Warehouse">Data Warehouse</option>
                                    <option value="Pemograman Web">Pemograman Web</option>
                                    <option value="DDP">DDP</option>
                                    <option value="BasDat">BasDat</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nilai" class="col-4 col-form-label">Nilai</label>
                            <div class="col-8">
                                <input id="nilai" name="nilai" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                    <hr class="featurette-divider mx-auto">
                    <?php if (isset($_POST['submit'])) { ?>
                        <div class="col-12 col-md-6">
                            <div class="card">
                                <h4>NIM : <?= $nim; ?></h4>
                                <h4>Mata Kuliah : <?= $matkul; ?></h4>
                                <h4>Nilai : <?= $nilai; ?></h4>
                                <h4>GRADE : <?= $hasil->grade(); ?></h4>
                                <h4>Hasil Ujian : <?= $hasil->hasil(); ?></h4>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
        <!-- CARD DAFTAR MAHASISWA -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Mahasiswa</h3>

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
                <?php
                require_once './content/class_mahasiswa.php';

                $mh1 = new Mahasiswa('02011', 'Faiz Fikri', '2012', 'Teknik Informatika', '3.8');
                $mh2 = new Mahasiswa('02012', 'Alissa Khairunnisa', '2012', 'Teknik Informatika', '3.9');
                $mh3 = new Mahasiswa('01011', 'Rosalie Naurah', '2010', 'Sistem Informasi', '3.46');
                $mh4 = new Mahasiswa('01012', 'Defghi Muhammad', '2010', 'Sistem Informasi', '3.2');

                $no = 0;

                $ar_mh = array(
                    1 => array(
                        "nim" => $mh1->nim,
                        "nama" => $mh1->nama,
                        "thn_angkatan" => $mh1->thn_angkatan,
                        "prodi" => $mh1->prodi,
                        "ipk" => $mh1->ipk,
                        "predikat_ipk" => $mh1->predikat_ipk()
                    ),
                    array(
                        "nim" => $mh2->nim,
                        "nama" => $mh2->nama,
                        "thn_angkatan" => $mh2->thn_angkatan,
                        "prodi" => $mh2->prodi,
                        "ipk" => $mh2->ipk,
                        "predikat_ipk" => $mh2->predikat_ipk()
                    ),
                    array(
                        "nim" => $mh3->nim,
                        "nama" => $mh3->nama,
                        "thn_angkatan" => $mh3->thn_angkatan,
                        "prodi" => $mh3->prodi,
                        "ipk" => $mh3->ipk,
                        "predikat_ipk" => $mh3->predikat_ipk()
                    ),
                    array(
                        "nim" => $mh4->nim,
                        "nama" => $mh4->nama,
                        "thn_angkatan" => $mh4->thn_angkatan,
                        "prodi" => $mh4->prodi,
                        "ipk" => $mh4->ipk,
                        "predikat_ipk" => $mh4->predikat_ipk()
                    )
                )

                // $ar_mh = array ($mh1, $mh2, $mh3, $mh4,
                //     'Predikat' => $mh1->predikat_ipk(),
                //     'Predikat' => $mh2->predikat_ipk(),
                //     'Predikat' => $mh3->predikat_ipk(),
                //     'Predikat' => $mh4->predikat_ipk()
                // );


                ?>

                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                <div class="container">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Prodi</th>
                                <th>Tahun Angkatan</th>
                                <th>IPK</th>
                                <th>Predikat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($ar_mh as $mh => $value) {
                                $no++;
                                echo "<tr>";
                                echo "<td>$no</td>";
                                echo "<td>$value[nim]</td>";
                                echo "<td>$value[nama]</td>";
                                echo "<td>$value[prodi]</td>";
                                echo "<td>$value[thn_angkatan]</td>";
                                echo "<td>$value[ipk]</td>";
                                echo "<td>$value[predikat_ipk]</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                    <li class="paginate_button page-item active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                                    <li class="paginate_button page-item next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
        <!-- CARD LINGKARAN -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Menghitung Lingkaran</h3>

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
                <?php
                require_once './content/class_lingkaran.php';
                echo 'Nilai PHI: ' . Lingkaran::PHI . '<br>';
                $lingkar1 = new Lingkaran(10);
                $lingkar2 = new Lingkaran(4);

                echo 'Luas Lingkaran I: ' . $lingkar1->getLuas() . '<br>';
                echo 'Luas Lingkaran II: ' . $lingkar2->getLuas() . '<br>';

                echo 'Keliling Lingkaran I: ' . $lingkar1->getKeliling() . '<br>';
                echo 'Keliling Lingkaran II: ' . $lingkar2->getKeliling() . '<br>';

                ?>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
        <!-- CARD PERSEGI PANJANG -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Menghitung Persegi Panjang</h3>

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
                <?php
                require_once './content/class_persegiPanjang.php';

                echo 'Perhitungan Luas dan Keliling Persegi Panjang<br>';

                $persegiPanjang1 = new PersegiPanjang(10, 5);
                $persegiPanjang2 = new PersegiPanjang(7, 10);

                echo 'Luas Persegi Panjang I dengan Panjang 10 dan Lebar 5 = ' . $persegiPanjang1->getLuas() . ' cm' . '<br>';
                echo 'Luas Persegi Panjang II dengan Panjang 7 dan Lebar 10 = ' . $persegiPanjang2->getLuas() . ' cm' . '<br>';

                echo 'Keliling Persegi Panjang I dengan Panjang 10 dan Lebar 5 = ' . $persegiPanjang1->getKeliling() . ' cm' . '<br>';
                echo 'Keliling Persegi Panjang II dengan Panjang 7 dan Lebar 10 = ' . $persegiPanjang2->getKeliling() . ' cm' . '<br>';

                ?>
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

<?php
include_once 'footer.php';
?>
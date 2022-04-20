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

        <!-- CARD FORM BELANJA -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Praktikum 1 Form Belanja</h3>

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
                <h1>Belanja Online</h1>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <form method="post" action="index4.php">
                                <div class="form-group row">
                                    <label for="cs" class="col-4 col-form-label">Customer</label>
                                    <div class="col-8">
                                        <input id="cs" name="cs" placeholder="Nama Customer" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4">Pilih Produk</label>
                                    <div class="col-8">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV">
                                            <label for="produk_0" class="custom-control-label">TV</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS">
                                            <label for="produk_1" class="custom-control-label">KULKAS</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI">
                                            <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                                    <div class="col-8">
                                        <input id="jumlah" name="jumlah" placeholder="Jumlah Produk" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                        <input name="proses" type="submit" class="btn btn-primary" value="Submit"></input>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action active">Daftar Harga</a>
                                <div class="list-group-item">
                                    TV: 4.200.000
                                </div>
                                <div class="list-group-item">
                                    Kulkas: 3.100.000
                                </div>
                                <div class="list-group-item">
                                    Mesin Cuci: 3.800.000
                                </div>
                            </div> <a href="#" class="list-group-item list-group-item-action active justify-content-between">Harga Dapat Berubah Setiap Saat</a>
                        </div>
                    </div>
                </div>
                <?php
                $_customer = $_POST['cs'];
                $_produk = $_POST['produk'];
                $_jumlah = $_POST['jumlah'];
                $_proses = $_POST['proses'];
                $_harga_tv = 4200000;
                $_harga_kulkas = 3100000;
                $_harga_mesin_cuci = 3800000;

                echo 'Nama Customer: ' . $_customer . '<br>';
                echo 'Produk: ' . $_produk . '<br>';
                echo 'Jumlah: ' . $_jumlah . '<br>';
                if ($_proses == 'Submit') {
                    if ($_produk == 'TV' && $_jumlah > 0) {
                        echo 'Total harga: Rp. ' . number_format($_harga_tv * $_jumlah, 0, ',', '.') . '<br>';
                        // echo 'Total Harga: ' . 'Rp. ' . $_harga_tv * $_jumlah . '<br>';
                    } else if ($_produk == 'KULKAS' && $_jumlah > 0) {
                        echo 'Total harga: Rp. ' . number_format($_harga_kulkas * $_jumlah, 0, ',', '.') . '<br>';
                        // echo 'Total Harga: ' . 'Rp. ' . $_harga_kulkas * $_jumlah . '<br>';
                    } else if ($_produk == 'MESIN CUCI' && $_jumlah > 0) {
                        echo 'Total harga: Rp. ' . number_format($_harga_mesin_cuci * $_jumlah, 0, ',', '.') . '<br>';
                        //echo 'Total Harga: '. 'Rp. ' .$_harga_mesin_cuci * $_jumlah.'<br>';
                    }
                }

                ?>

            </div>
        </div>

        <!-- /.card-body -->
        <div class="card-footer">
            Footer
        </div>
        <!-- /.card-footer-->
        <!-- CARD FORM NILAI -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">FORM NILAI</h3>

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
                <div class="container">
                    <h2 style="background-color: lightgrey;">Sistem Penilaian</h2>
                    <h1>Form Nilai Siswa</h1>
                    <form method="GET" action="index4.php">
                        <div class="form-group row">
                            <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                            <div class="col-8">
                                <input id="nama" name="nama" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
                            <div class="col-8">
                                <select id="matkul" name="matkul" class="custom-select">
                                    <option value="DDP">Dasar-Dasar Pemograman</option>
                                    <option value="BD1">Basis Data 1</option>
                                    <option value="PW">Pemograman Web</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="uts" class="col-4 col-form-label">Nilai UTS</label>
                            <div class="col-8">
                                <input id="uts" name="uts" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="UAS" class="col-4 col-form-label">NIlai UAS</label>
                            <div class="col-8">
                                <input id="UAS" name="UAS" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="praktek" class="col-4 col-form-label">Nilai Tugas/Praktikum</label>
                            <div class="col-8">
                                <input id="praktek" name="praktek" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <input name="proses" type="submit" class="btn btn-primary" value="Simpan"></input>
                            </div>
                        </div>
                    </form>
                </div>

                <?php
                $proses = $_GET['proses'];
                $nama = $_GET['nama'];
                $matkul = $_GET['matkul'];
                $uts = $_GET['uts'];
                $UAS = $_GET['UAS'];
                $praktek = $_GET['praktek'];

                echo 'Proses: ' . $proses . '<br>';
                echo 'Nama Lengkap: ' . $nama . '<br>';
                echo 'Mata Kuliah: ' . $matkul . '<br>';
                echo 'Nilai UTS: ' . $uts . '<br>';
                echo 'Nilai UAS: ' . $UAS . '<br>';
                echo 'Nilai Tugas/Praktikum: ' . $praktek . '<br>';

                ?>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
        <!-- CARD NILAI SISWA -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">NILAI SISWA DAN PREDIKAT</h3>

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
                <div class="container">
                    <h2 style="background-color: lightgrey;">Sistem Penilaian</h2>
                    <h1>Form Nilai Siswa</h1>
                    <form class="form-horizontal" method="POST" action="index4.php">
                        <div class="form-group row">
                            <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                            <div class="col-8">
                                <input id="nama" name="nama" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
                            <div class="col-8">
                                <select id="matkul" name="matkul" class="custom-select">
                                    <option value="DDP">Dasar-Dasar Pemograman</option>
                                    <option value="BD1">Basis Data 1</option>
                                    <option value="PW">Pemograman Web</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="uts" class="col-4 col-form-label">Nilai UTS</label>
                            <div class="col-8">
                                <input id="uts" name="uts" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="UAS" class="col-4 col-form-label">NIlai UAS</label>
                            <div class="col-8">
                                <input id="UAS" name="UAS" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="praktek" class="col-4 col-form-label">Nilai Tugas/Praktikum</label>
                            <div class="col-8">
                                <input id="praktek" name="praktek" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <input name="proses" type="submit" class="btn btn-primary" value="Simpan"></input>
                            </div>
                        </div>
                    </form>
                </div>


                <?php
                require_once './content/libfungsi.php';

                $_proses = $_POST['proses'];
                $_nama = $_POST['nama'];
                $_matkul = $_POST['matkul'];
                $_uts = $_POST['uts'];
                $_UAS = $_POST['UAS'];
                $_praktek = $_POST['praktek'];

                echo 'Proses: ' . $_proses . '<br>';
                echo 'Nama Lengkap: ' . $_nama . '<br>';
                echo 'Mata Kuliah: ' . $_matkul . '<br>';
                echo 'Nilai UTS: ' . $_uts . '<br>';
                echo 'Nilai UAS: ' . $_UAS . '<br>';
                echo 'Nilai Tugas/Praktikum: ' . $_praktek . '<br>';

                $_nilai_total = ($_uts * 0.35 + $_UAS * 0.35 + $_praktek * 0.3);
                echo 'Nilai Total: ' . $_nilai_total . '<br>';

                // Logika jika nilai siswa lulus
                if ($_nilai_total >= 55) {
                    echo 'Siswa Dinyatakan Lulus' . '<br>';
                } else {
                    echo 'Siswa Dinyatakan Tidak Lulus' . '<br>';
                }

                //Logika Grade Nilai Siswa
                if ($_nilai_total >= 0 && $_nilai_total <= 35) {
                    $_grade = 'E';
                    echo 'Grade E' . '<br>';
                } elseif ($_nilai_total > 35 && $_nilai_total <= 55) {
                    $_grade = 'D';
                    echo 'Grade D' . '<br>';
                } elseif ($_nilai_total > 55 && $_nilai_total < 69) {
                    $_grade = 'C';
                    echo 'Grade C' . '<br>';
                } elseif ($_nilai_total > 69 && $_nilai_total <= 84) {
                    $_grade = 'B';
                    echo 'Grade B' . '<br>';
                } elseif ($_nilai_total > 84 && $_nilai_total <= 100) {
                    $_grade = 'A';
                    echo 'Grade A' . '<br>';
                } elseif ($_nilai_total < 0 || $_nilai_total > 100) {
                    $_grade = 'Tidak Ada';
                    echo 'Grade I' . '<br>';
                }

                //Logika Swicth case grade nilai siswa
                switch ($_grade) {
                    case 'E':
                        $_predikat = 'Sangat Kurang';
                        echo 'Predikat: ' . $_predikat . '<br>';
                        break;
                    case 'D':
                        $_predikat = 'Kurang';
                        echo 'Predikat: ' . $_predikat . '<br>';
                        break;
                    case 'C':
                        $_predikat = 'Cukup';
                        echo 'Predikat: ' . $_predikat . '<br>';
                        break;
                    case 'B':
                        $_predikat = 'Baik';
                        echo 'Predikat: ' . $_predikat . '<br>';
                        break;
                    case 'A':
                        $_predikat = 'Sangat Baik';
                        echo 'Predikat: ' . $_predikat . '<br>';
                        break;
                    default:
                        $_predikat = 'Tidak Ada';
                        echo 'Predikat: ' . $_predikat . '<br>';
                        break;
                }
                $_nilai = $_nilai_total;
                $hasil_ujian = kelulusan($_nilai);
                echo 'Dinyatakan ' . $hasil_ujian;
                ?>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
</div>
<!-- /.card -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include_once 'footer.php';
?>
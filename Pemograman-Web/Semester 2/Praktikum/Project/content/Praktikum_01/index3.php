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

        <!-- ARRAY BUAH -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">ARRAY BUAH</h3>

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
                $ar_buah = ["Pepaya", "Mangga", "Pisang", "Jambu"];
                // cetak buah ke index ke 2
                echo $ar_buah[2];
                // cetak jumlah buah
                echo '<br>Jumlah buah: ' . count($ar_buah);
                // cetak seluruh buah
                foreach ($ar_buah as $buah) {
                    echo '<li>' . $buah . '</li>';
                }

                echo '</ol>';
                // tanbahkan buah
                $ar_buah[] = "Durian";
                // hapus buah index ke 1
                unset($ar_buah[1]);
                // ubah buah inedex ke 2 menjadi Manggis
                $ar_buah[2] = "Manggis";
                // cetak seluruh buah dengan index nya
                echo '<ul>';
                foreach ($ar_buah as $k => $v) {
                    echo '<li> buah index - ' . $k . ' adalah ' . $v . '</li>';
                }
                echo '</ul>';

                foreach ($ar_buah as $k => $v) {
                    echo '<li>' . $k . ' - ' . $v . '</li>';
                }
                echo '</ol>';
                arsort($ar_buah);
                echo '</hr>';
                echo '<ol>';
                foreach ($ar_buah as $k => $v) {
                    echo '<li>' . $k . ' - ' . $v . '</li>';
                }
                echo '</ol>';

                array_unshift($ar_buah, "Kelapa", "jeruk");
                foreach ($ar_buah as $buahs);
                echo '<li>' . $buahs . '</li>';
                ?>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
        <!-- ARRAY SISWA -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">ARRAY SISWA</h3>

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
                $ns1 = ['id' => '1', 'nim' => '01101', 'uts' => '80', 'uas' => '84', 'tugas' => '78'];
                $ns2 = ['id' => '2', 'nim' => '01121', 'uts' => '70', 'uas' => '50', 'tugas' => '68'];
                $ns3 = ['id' => '3', 'nim' => '01130', 'uts' => '60', 'uas' => '86', 'tugas' => '70'];
                $ns4 = ['id' => '4', 'nim' => '01134', 'uts' => '90', 'uas' => '91', 'tugas' => '82'];

                $ar_nilai = [$ns1, $ns2, $ns3, $ns4];

                ?>

                <h3>Daftar Nilai Sisawa</h3>
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>UTS</th>
                            <th>UAS</th>
                            <th>TUGAS</th>
                            <th>Nilai Akhir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($ar_nilai as $ns) {
                            echo '<tr>';
                            echo '<td>' . $nomor . '</td>';
                            echo '<td>' . $ns['nim'] . '</td>';
                            echo '<td>' . $ns['uts'] . '</td>';
                            echo '<td>' . $ns['uas'] . '</td>';
                            echo '<td>' . $ns['tugas'] . '</td>';
                            $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas']) / 3;
                            echo '<td>' . number_format($nilai_akhir, 2, ',', '.') . '</td>';
                            echo '</tr>';
                            $nomor++;
                        }
                        ?>
                </table>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
        <!-- INFO.PHP -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">INFO.PHP</h3>

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
                // phpinfo();
                // for ($x = 1; $x < 10; $x++) {
                //     echo $x . " ";
                // }
                $x = 20;

                $y = 12;

                if ($y >= $x) {

                    echo $y;
                }
                ?>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
        <!-- VARIABLE SYSTEM -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">VARIABLE SYSTEM</h3>

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
                // Variable System
                echo "Dokumen Root : " . $_SERVER['DOCUMENT_ROOT'] . "<br>";
                echo "Nama File : " . $_SERVER["PHP_SELF"] . "<br>";
                ?>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
        <!-- VARIABLE USER -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">VARIABLE USER</h3>

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
                // Definisikan Variabel
                $nama = "Muhammad Rizqi";
                $umur = 20;
                $berat = 50;

                echo "Nama : " . $nama . "<br>";
                echo "Umur : " . $umur . " Tahun" . "<br>";
                echo "Berat : " . $berat . " Kg" . "<br>";

                echo "<br> Hello $nama, Apakabar?, Selamat Datang di Website Saya <br>";

                ?>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
        <!-- VARIABLE KONSTAN -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">VARIABLE KONSTAN</h3>

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
                // Definisikan Konstanta
                define("PHI", 3.14);
                define("DBNAME", "inventori");
                define("DBSERVER", "localhost");

                $jari = 8;
                $luas = PHI * $jari * $jari;
                $keliling = 2 * PHI * $jari;

                echo "Luas Lingkaran dengan Jari-jari $jari = $luas cm2 <br>";
                echo "Keliling Lingkaran dengan Jari-jari $jari = $keliling cm <br>";
                ?>
                <hr>
                <?php
                echo "Nama databasenya: " . DBNAME . "<br>";
                echo "Lokasi databasenya: " . DBSERVER;
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
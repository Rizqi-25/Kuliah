<?php
require_once 'class_mahasiswa.php';

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
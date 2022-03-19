<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="container">
        <h2 style="background-color: lightgrey;">Sistem Penilaian</h2>
        <h1>Form Nilai Siswa</h1>
        <form class="form-horizontal" method="POST" action="nilai_siswa.php">
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
    require_once 'libfungsi.php';

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
    if ($_nilai_total >= 55){
        echo 'Siswa Dinyatakan Lulus'. '<br>';
    }
    else{
        echo 'Siswa Dinyatakan Tidak Lulus'. '<br>';
    }

    //Logika Grade Nilai Siswa
    if ($_nilai_total >= 0 && $_nilai_total <= 35){
        $_grade = 'E';
        echo 'Grade E'. '<br>';
    }
    elseif ($_nilai_total > 35 && $_nilai_total <= 55){
        $_grade = 'D';
        echo 'Grade D'. '<br>';
    }
    elseif ($_nilai_total > 55 && $_nilai_total < 69){
        $_grade = 'C';
        echo 'Grade C'. '<br>';
    }
    elseif ($_nilai_total > 69 && $_nilai_total <= 84){
        $_grade = 'B';
        echo 'Grade B'. '<br>';
    }
    elseif ($_nilai_total > 84 && $_nilai_total <= 100){
        $_grade = 'A';
        echo 'Grade A'. '<br>';
    }
    elseif ($_nilai_total < 0 || $_nilai_total > 100){
        $_grade = 'Tidak Ada';
        echo 'Grade I'. '<br>';
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
</body>

</html>
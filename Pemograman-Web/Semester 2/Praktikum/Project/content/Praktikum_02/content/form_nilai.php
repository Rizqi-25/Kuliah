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
        <form method="GET" action="form_nilai.php">
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

        echo 'Proses: '.$proses.'<br>';
        echo 'Nama Lengkap: '.$nama.'<br>';
        echo 'Mata Kuliah: '.$matkul.'<br>';
        echo 'Nilai UTS: '.$uts.'<br>';
        echo 'Nilai UAS: '.$UAS.'<br>';
        echo 'Nilai Tugas/Praktikum: '.$praktek.'<br>';

        ?>
</body>

</html>
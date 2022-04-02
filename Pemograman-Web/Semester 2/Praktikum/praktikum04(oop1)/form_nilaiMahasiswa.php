<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM NILAI MAHASISWA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php
    require_once 'class_nilaiMahasiswa.php';

    if (isset($_POST['submit'])) {
        $nim = $_POST['nim'];
        $matkul = $_POST['matkul'];
        $nilai = $_POST['nilai'];

        $hasil = new NilaiMahasiswa($nim, $matkul, $nilai);
    }
    ?>
    <div class="container">
        <form method="POST" action="form_nilaiMahasiswa.php">
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
</body>

</html>
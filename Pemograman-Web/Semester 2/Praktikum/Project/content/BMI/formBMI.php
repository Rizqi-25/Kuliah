<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<div class="container" style="padding-top: 40px;">

    <body>
        <!-- Form -->
        <form action="formBMI.php" method="POST">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label>
                <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4 col-form-label" for="gender">Gender</label>
                <div class="col-8">
                    <select id="gender" name="gender" class="custom-select" required="required">
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
                <div class="col-8">
                    <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
                <div class="col-8">
                    <div class="input-group">
                        <input id="tgl_lahir" name="tgl_lahir" type="text" class="form-control" aria-describedby="tgl_lahirHelpBlock">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fa fa-calendar"></i>
                            </div>
                        </div>
                    </div>
                    <span id="tgl_lahirHelpBlock" class="form-text text-muted">Format Year-month-date. Ex: 2022-1-11</span>
                </div>
            </div>
            <div class="form-group row">
                <label for="beratbadan" class="col-4 col-form-label">Berat Badan</label>
                <div class="col-8">
                    <div class="input-group">
                        <input id="beratbadan" name="beratbadan" type="text" class="form-control">
                        <div class="input-group-append">
                            <div class="input-group-text">Kg</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="tinggibadan" class="col-4 col-form-label">Tinggi Badan</label>
                <div class="col-8">
                    <div class="input-group">
                        <input id="tinggibadan" name="tinggibadan" type="text" class="form-control">
                        <div class="input-group-append">
                            <div class="input-group-text">Cm</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <input id="email" name="email" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>

        <!-- PHP method -->
        <?php
        require_once 'class_BMIPasien.php';
        require_once 'class_pasien.php';
        require_once 'class_BMI.php';
        $no = 0;
        $id = 0;
        $id++;
        $pasien = [
            new Pasien($id, 'P001', 'Ahmad', 'Jakarta', '1996-01-01', 'L'),
            new Pasien($id, 'P002', 'Rina', 'Bogor', '2001-01-01', 'P'),
            new Pasien($id, 'P003', 'Lutfi', 'Depok', '2002-04-01', 'L'),
        ];

        $wah = [   // Weight and Height
            new BMI(169, 69.8),
            new BMI(165, 55.3),
            new BMI(171, 45.2)
        ];

        $data_pasien = [
            new BMIPasien($id, $wah[0], '2022-01-10', $pasien[0]),
            new BMIPasien($id, $wah[1], '2022-01-10', $pasien[1]),
            new BMIPasien($id, $wah[2], '2022-01-11', $pasien[2]),
        ];

        if (isset($_POST['submit'])) {
            $newPasien = new Pasien($id, 'P004', $_POST['nama'], $_POST['tmp_lahir'], $_POST['tgl_lahir'], $_POST['gender']);
            $newBMI = new BMI($_POST['tinggibadan'], $_POST['beratbadan']);
            $data_pasien[] = new BMIPasien($id, $newBMI, date('Y-m-d'), $newPasien);
        }


        ?>

        <!-- Table Hasil -->
        <table class="example display nowrap table-striped table-bordered table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal Periksa</th>
                    <th>Kode Pasien</th>
                    <th>Nama Pasien</th>
                    <th>Gender</th>
                    <th>Berat Badan(Kg)</th>
                    <th>Tinggi Badan(Cm)</th>
                    <th>Nilai BMI</th>
                    <th>Status BMI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data_pasien as $dp) { ?>
                    <?php $no++; ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $dp->tanggal ?></td>
                        <td><?= $dp->pasien->kode ?></td>
                        <td><?= $dp->pasien->nama ?></td>
                        <td><?= $dp->pasien->gender ?></td>
                        <td><?= $dp->bmi->berat ?></td>
                        <td><?= $dp->bmi->tinggi ?></td>
                        <td><?= $dp->bmi->hasilbmi() ?></td>
                        <td><?= $dp->bmi->statusbmi() ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</div>

</html>
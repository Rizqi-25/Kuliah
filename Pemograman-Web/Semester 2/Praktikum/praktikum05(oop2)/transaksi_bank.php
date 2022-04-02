<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Bank</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
    <table id="example2" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nomor Rekening</th>
                <th>Nama Pemilik</th>
                <th>Saldo</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once 'class_accountBank.php';
            $rizqi = new BankAccount(10000000, 'A101', 'Rizqi');
            $rina = new BankAccount(20000000, 'A102', 'Rina');
            $ali = new BankAccount(30000000, 'A103', 'Ali');
            $ar_account = array(1 => $rizqi, $rina, $ali);
            $no = 1;
            foreach ($ar_account as $account => $value) {
                echo "<tr>";
                echo "<td>$no</td>";
                echo "<td>".$value->noRek()."</td>";
                echo "<td>".$value->customerName."</td>";
                echo "<td>". "Rp".$value->saldo()."</td>";
                echo "</tr>";
                $no++;
            }
            ?>
        </tbody>
    </table>

    <p>Rizqi menabung sebesar Rp5.000.000</p><br>
    <p>Rizqi Tranfer ke Rina sebesar Rp2.000.000 dan Rp1.500.000 ke Ali</p><br>
    <p>Ali menarik uang sebesar Rp2.500.000</p><br>

    <table id="example2" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nomor Rekening</th>
                <th>Nama Pemilik</th>
                <th>Saldo</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $rizqi->deposit(5000000);
            $rizqi->tranfer($rina, 2000000);
            $rizqi->tranfer($ali, 1500000);
            $ali->withdraw(2500000);
            $ar_account = array(1 => $rizqi, $rina, $ali);
            $no = 1;
            foreach ($ar_account as $account => $value) {
                echo "<tr>";
                echo "<td>$no</td>";
                echo "<td>".$value->noRek()."</td>";
                echo "<td>".$value->customerName."</td>";
                echo "<td>". "Rp".$value->saldo()."</td>";
                echo "</tr>";
                $no++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>
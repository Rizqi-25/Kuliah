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
    <h1>Belanja Online</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <form method="post" action="form_belanja.php">
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
            echo 'Total harga: Rp. '. number_format($_harga_tv * $_jumlah, 0, ',', '.'). '<br>';
            // echo 'Total Harga: ' . 'Rp. ' . $_harga_tv * $_jumlah . '<br>';
        } else if ($_produk == 'KULKAS' && $_jumlah > 0) {
            echo 'Total harga: Rp. '. number_format($_harga_kulkas * $_jumlah, 0, ',', '.'). '<br>';
            // echo 'Total Harga: ' . 'Rp. ' . $_harga_kulkas * $_jumlah . '<br>';
        } else if ($_produk == 'MESIN CUCI' && $_jumlah > 0) {
            echo 'Total harga: Rp. '. number_format($_harga_mesin_cuci * $_jumlah, 0, ',', '.'). '<br>';
            //echo 'Total Harga: '. 'Rp. ' .$_harga_mesin_cuci * $_jumlah.'<br>';
        }
    }

    ?>

</body>

</html>
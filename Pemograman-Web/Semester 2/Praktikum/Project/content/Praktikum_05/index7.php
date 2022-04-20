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

        <!-- CARD DISPENSER -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">System Dispenser</h3>

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
                require_once './content/class_dispenser.php';
                $jusJeruk = new Minuman("Jus Jeruk", 2000);
                $jusJeruk->isiGalon(5000);
                echo "<br>";
                $jusJeruk->infoDispenser();
                echo "<br>";
                $jusJeruk->infoMinuman();
                echo "<br>";
                $jusJeruk->isiGelas(250);
                echo "<br>";
                $jusJeruk->refillGelas(10);
                echo "<br>";
                $jusJeruk->infoDispenser();
                ?>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
        <!-- CARD TRANSAKSI BANK -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Transaksi Bank</h3>

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
                            require_once './content/class_accountBank.php';
                            $rizqi = new BankAccount(10000000, 'A101', 'Rizqi');
                            $rina = new BankAccount(20000000, 'A102', 'Rina');
                            $ali = new BankAccount(30000000, 'A103', 'Ali');
                            $ar_account = array(1 => $rizqi, $rina, $ali);
                            $no = 1;
                            foreach ($ar_account as $account => $value) {
                                echo "<tr>";
                                echo "<td>$no</td>";
                                echo "<td>" . $value->noRek() . "</td>";
                                echo "<td>" . $value->customerName . "</td>";
                                echo "<td>" . "Rp" . $value->saldo() . "</td>";
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
                                echo "<td>" . $value->noRek() . "</td>";
                                echo "<td>" . $value->customerName . "</td>";
                                echo "<td>" . "Rp" . $value->saldo() . "</td>";
                                echo "</tr>";
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
        </div>
        <!-- /.card -->
        <!-- CARD Fruit -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Class Fruit</h3>

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
                class Fruit
                {
                    public $name;
                    public $color;
                    public function __construct($name, $color)
                    {
                        $this->name = $name;
                        $this->color = $color;
                    }

                    public function intro()
                    {
                        echo "This fruit is a " . $this->name . " and the color is " . $this->color . ".";
                    }
                }

                // Strawberry is inherited from Fruit

                class Strawberry extends Fruit
                {
                    public function message()
                    {
                        echo "Am I a fruit or a berry?" . '<br>';
                    }
                }
                $strawberry = new Strawberry("Strawberry", "Red");
                $strawberry->message();
                $strawberry->intro();
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
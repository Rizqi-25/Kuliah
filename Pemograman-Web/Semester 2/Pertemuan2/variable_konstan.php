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
    echo "Lokasi databasenya: " . DBSERVER ;
?>

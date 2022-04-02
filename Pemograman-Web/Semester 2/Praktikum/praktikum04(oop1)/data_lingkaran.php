<?php
require_once 'class_lingkaran.php';
echo 'Nilai PHI: ' . Lingkaran::PHI . '<br>';
$lingkar1 = new Lingkaran(10);
$lingkar2 = new Lingkaran(4);

echo 'Luas Lingkaran I: ' . $lingkar1->getLuas() . '<br>';
echo 'Luas Lingkaran II: ' . $lingkar2->getLuas() . '<br>';

echo 'Keliling Lingkaran I: ' . $lingkar1->getKeliling() . '<br>';
echo 'Keliling Lingkaran II: ' . $lingkar2->getKeliling() . '<br>';

?>
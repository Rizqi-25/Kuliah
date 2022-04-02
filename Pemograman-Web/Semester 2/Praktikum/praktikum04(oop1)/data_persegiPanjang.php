<?php
require_once 'class_persegiPanjang.php';

echo 'Perhitungan Luas dan Keliling Persegi Panjang<br>';

$persegiPanjang1 = new PersegiPanjang(10, 5);
$persegiPanjang2 = new PersegiPanjang(7, 10);

echo 'Luas Persegi Panjang I dengan Panjang 10 dan Lebar 5 = ' . $persegiPanjang1->getLuas() . ' cm' . '<br>';
echo 'Luas Persegi Panjang II dengan Panjang 7 dan Lebar 10 = ' . $persegiPanjang2->getLuas() . ' cm' . '<br>';

echo 'Keliling Persegi Panjang I dengan Panjang 10 dan Lebar 5 = ' . $persegiPanjang1->getKeliling() . ' cm' . '<br>';
echo 'Keliling Persegi Panjang II dengan Panjang 7 dan Lebar 10 = ' . $persegiPanjang2->getKeliling() . ' cm' . '<br>';

?>
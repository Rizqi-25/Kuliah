o<?php
$ar_buah = ["Pepaya", "Mangga", "Pisang", "Jambu"];
// cetak buah ke index ke 2
echo $ar_buah[2];
// cetak jumlah buah
echo 'br>Jumlah buah: '.count($ar_buah);
// cetak seluruh buah
foreach ($ar_buah as $buah) {
    echo '<li>'.$buah.'</li>';
}

echo '</ol>';
// tanbahkan buah
$ar_buah[] = "Durian";
// hapus buah index ke 1
unset($ar_buah[1]);
// ubah buah inedex ke 2 menjadi Manggis
$ar_buah[2] = "Manggis";
// cetak seluruh buah dengan index nya
echo '<ul>';
foreach ($ar_buah as $k => $v) {
    echo '<li> buah index - '.$k.' adalah '.$v.'</li>';
}
echo '</ul>';

foreach ($ar_buah as $k => $v) {
    echo '<li>'.$k.' - '.$v.'</li>';
}
echo '</ol>';
arsort($ar_buah);
echo '</hr>';
echo '<ol>';
foreach ($ar_buah as $k => $v) {
    echo '<li>'.$k.' - '.$v.'</li>';
}
echo '</ol>';

array_unshift($ar_buah, "Kelapa", "jeruk");
foreach ($ar_buah as $buahs);
    echo '<li>'.$buahs.'</li>';
?>
<?php
require_once 'class_dispenser.php';
$jusJeruk = new Minuman("Jus Jeruk", 2000);
$jusJeruk->isiGalon(5000);
echo"<br>";
$jusJeruk->infoDispenser();
echo"<br>";
$jusJeruk->infoMinuman();
echo "<br>";
$jusJeruk->isiGelas(250);
echo"<br>";
$jusJeruk->refillGelas(10);
echo"<br>";
$jusJeruk->infoDispenser();
?>
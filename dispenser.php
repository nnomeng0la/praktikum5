<?php

require_once "class_dispenser.php";

$D1 = new Dispenser();
$D1->isi(1000);
$D1->setHarga(1000);
$D1->setVolGel(250);
echo "Nama Minuman ini adalah " .$D1->namaMinuman = "Aqua";
echo "<br/>";
$D1->cetakVolume();
$D1->cetakHargaSegelas();
$D1->cetakVolSegelas();

?>
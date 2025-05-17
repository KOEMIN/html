<?php
$jumlah_uang = 1387500;

$pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 500];

$hasil = [];

foreach ($pecahan as $uang){
    $hasil[$uang] = intdiv($jumlah_uang, $uang);
    $jumlah_uang = $jumlah_uang % $uang;
}

echo "<h3>Rincian Pecahan Uang<h3>";
foreach ($hasil as $uang => $banyak) {
    echo "Rp. " . number_format($uang, 0, ',', '.') . " sebanyak " . $banyak . "lembar<br>";
}
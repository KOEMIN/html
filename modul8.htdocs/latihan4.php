<?php
/* Operator logika yang bisa digunakan

*  ==   Sama Dengan             $x == $y 
*  ===  Identical               $x === $y 
*  !=   Tidak sama dengan       $x != $y 
*  <>   Tidak sama dengan       $x <> $y 
*  !==  Not identical           $x !== $y 
*  >    Lebih Besar dari        $x > $y 
*  <    Kurang Dari             $x < $y 
*  >=   Lebih besar atau Sama dengan  $x >= $y 
*  <=   Kurang dari atau sama dengan   $x <= $y 
*  <=>  Spaceship               $x <=> $y 
*/

$t = date("H"); // mendapatkan jam dengan format 0-23

echo "If";
if ($t < 16) {
    echo "Selamat siang!";
}

// Tambahkan kode dibawah ini if else
$t = date("H"); // mendapatkan jam dengan format 0-23

echo "<br>If dan Else <br>";
if ($t < 20) {
    echo "Selamat siang!";
} else {
    echo "Selamat malam!";
}

// Tambahkan kode dibawah ini
echo "<br>Nested If <br>";
if ($t < 10) {
    echo "Selamat Pagi!";
} elseif ($t < 16) {
    echo "Selamat sore!";
} else {
    echo "Selamat Malam!";
}
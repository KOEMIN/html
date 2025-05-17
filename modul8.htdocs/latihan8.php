<?php
// data kelas dengan array 2 dimensi
$array = array(
    "1C" => array("udin", "ismail", "andi"),
    "1D" => array("lukman", "fajri", "mahmud")
);

// menampilkan data array
print_r($array);
echo "<br>";

// menampilkan kelas 10
print_r($array['1C']);
echo "<br>";

// menampilkan kelas 10 dengan index 0
echo $array['1C'][0] . "<br>";

// tampilkan fajri
echo $array['1D'][1] . "<br>";

// tampilkan andi
echo $array['1C'][2] . "<br>";

// data kelas bisa ditulis juga dengan
$array_simple = [
    "1C" => ["udin", "ismail", "adi"],
    "1D" => ["Lukman", "fajri", "mahmud"]
];
<?php

$siswa = [
    ["nama" => "Adi", "poin" => 75],
    ["nama" => "Joni", "poin" => 80],
    ["nama" => "Jihan", "poin" => 65],
    ["nama" => "Aya", "poin" => 70],
    ["nama" => "Ita", "poin" => 85],
    ["nama" => "Budi", "poin" => 90],
    ["nama" => "Tini", "poin" => 95],
    ["nama" => "Sari", "poin" => 65],
];

echo "a) Poin siswa nomor urut 5: Ita " . $siswa[4]["poin"] . "<br><br>";

echo "b) Nama siswa dengan poin 90:<br>";
foreach ($siswa as $data) {
    if ($data["poin"] == 90) {
        echo "- " . $data["nama"] . "<br>";
    }
}
echo "<br>";

echo "c) Nama siwa dengan poin 100:<br>";
$ada = false;
foreach ($siswa as $data) {
    if ($data["poin"] == 100) {
        echo "- " . $data["nama"] . "<br>";
        $ada = true;
    }
}
if (!$ada) {
    echo "tidak ada siswa dengan poin 100<br>";
}
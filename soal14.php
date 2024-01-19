<?php
$jamKerja = 8;
$shalat = 20;
$makan = 30;
$hasil = hitungWaktuKerja($jamKerja, $shalat, $makan);

function hitungWaktuKerja($jamKerja, $shalat, $makan) {
    $waktuKerja = $jamKerja * 60;
    $totalIstirahat = $shalat + $makan;
    $waktuKerjaBersih = $waktuKerja - $totalIstirahat;
    $jamKerjaBersih = floor($waktuKerjaBersih / 60);
    $menitKerjaBersih = $waktuKerjaBersih % 60;
    $jamShalat = floor($shalat / 60);
    $menitShalat = $shalat % 60;
    $jamMakan = floor($makan / 60);
    $menitMakan = $makan % 60;
    return array(
        'jamKerja' => $jamKerjaBersih,
        'menitKerja' => $menitKerjaBersih,
        'jamShalat' => $jamShalat,
        'menitShalat' => $menitShalat,
        'jamMakan' => $jamMakan,
        'menitMakan' => $menitMakan
    );
}

echo "Waktu kerja bersih: " . $hasil['jamKerja'] . " jam " . $hasil['menitKerja'] . " menit <br>";
echo "Waktu istirahat shalat: " . $hasil['jamShalat'] . " jam " . $hasil['menitShalat'] . " menit <br>";
echo "Waktu istirahat makan: " . $hasil['jamMakan'] . " jam " . $hasil['menitMakan'] . " menit <br>";

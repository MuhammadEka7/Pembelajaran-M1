<?php

// $nilai = -7;

// if ($nilai > 0) {
//     echo "bilangan bulat positif";
// } elseif ($nilai < 0){
//     echo "bilangan bulat negatif";
// } else {
//     echo "bilangan nol";
// }

// nomor 1
$tahunAwal = 2024;

$andi = 16;
$tahunKelahiranAndi = $tahunAwal - $andi;
$beni = 19;
$tahunKelahiranBeni = $tahunAwal - $beni;
$dani = 16;
$tahunKelahiranDani = $tahunAwal - $dani;
$eko = 14;
$tahunKelahiranEko = $tahunAwal - $eko;

function tahun($tahunKelahiranAndi) {
    if ($tahunKelahiranAndi % 4 == 0) {
        echo "tahun kelahiran andi : " . $tahunKelahiranAndi . " (kabisat)";
    } else {
        echo "tahun kelahiran andi : " . $tahunKelahiranAndi . " (bukan kabisat)";
    }
}

function tahun2($tahunKelahiranEko) {
    if ($tahunKelahiranEko % 4 == 0) {
        echo "tahun kelahiran eko : " . $tahunKelahiranEko . " (kabisat)";
    } else {
        echo "tahun kelahiran eko : " . $tahunKelahiranEko . " (bukan kabisat)";
    }
}

echo tahun($tahunKelahiranAndi) . "<br>";
echo "tahun kelahiran beni : " . $tahunKelahiranBeni . "<br>";
echo "tahun kelahiran dani : " . $tahunKelahiranDani . "<br>";
echo tahun2($tahunKelahiranEko) . "<br>";
<?php

// for ( $a = 1; $a <= 25; $a++ ) {
//     if ( $a % 4 == 0 && $a % 5 == 0 ) {
//         echo $a;
//     }
// }
// $x = 90;
// $jumlah = 0;
// for ( $a = 3; $a <= 30; $a += 3 ) {
//     if ( $x % $a == 0 ) {
//         $jumlah++;
//     }
// }
// echo $jumlah;

// $umurAndi = 25;
// $mtk = 83;
// $inggris = 87;
// $indo = 86;
// $rata = ( $mtk + $inggris + $indo ) / 3;

// if ( $umurAndi >= 16 && $umurAndi <= 25 ) {
//     if ( $mtk >= 87 && $inggris = 87 && $indo = 86 && $rata >= 85 ) {
//         echo "Andi diterima";
//     } else {
//         echo "Andi tidak diterima";
//     }
// }

$beratBadanBeni = 44;
$tinggiBadanBeni = 148 / 100;
$tinggi = $tinggiBadanBeni * $tinggiBadanBeni;
$imt = $beratBadanBeni / $tinggi;

if ( $imt < 18.5 ) {
    echo "Kurang";
} elseif ( $imt >= 18.5 && $imt < 22.9 ) {
    echo "normal";
} elseif ( $imt >= 22.9 && $imt < 24.9 ) {
    echo "berat badan lebih";
} else {
    echo "obesitas";
}
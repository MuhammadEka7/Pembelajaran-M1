<?php

// $luas = 25;

// if ( $luas == 25 ) {
//     $sisi = sqrt($luas);
//     echo $sisi;
// }

$jam = 16;
$menit = 00;

if (( $jam >= 7 ) || ( $jam <= 11 && $menit <= 30 ) || ( $jam < 16) || ($jam >= 12 && $menit <= 15 )) {
    echo "waktu kerja";
    } elseif (( $jam >= 11 && $menit <= 30 ) || ( $jam <= 12 && $menit <=30 )) {
        echo "waktu istirahat";
    } else {
        echo "bukan waktu kerja";
    }
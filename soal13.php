<?php

$angka1 = 1000;

$angka2 = [3, 5, 7, 10];
$cetak = [];
$input2 = getAngka2($cetak, $angka1, $angka2);

$input = getAgka($angka1, $angka2);

function getAgka($angka1, $angka2) {
    global $cetak;
    foreach ($angka2 as $item) {
        if ($angka1 % $item == 0) {
            $cetak[] = $item;
        }
    }
}

function getAngka2($cetak, $angka1, $angka2) {
    print_r ($angka2);
    foreach ($cetak as $item) {
        echo $item . " yaitu angka yang bisa dibagi dengan " . $angka1;
    }
}
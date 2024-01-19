<?php
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$array1 = [1, 2, 3];

foreach ( $array1 as $kali2 ) {
    foreach ( $array as $kali1 ) {
        $hasil = $kali1 * $kali2;
        echo $hasil . "<br>";
    }
}
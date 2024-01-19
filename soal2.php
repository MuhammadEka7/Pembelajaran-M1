<?php
$bil1 = [ 80, 77, 65, 89, 55, 12, 90, 86 ];
$bil2 = [ 77, 99, 55, 81, 45, 90, 91, 98 ];
$kelompok1 = [];
$kelompok2 = [];

foreach ( $bil1 as $raul ) {
    if ( in_array($raul, $bil2) ) {
        $kelompok1[] = $raul;
    } else {
        $kelompok2[] = $raul;
    }
}

foreach ( $bil2 as $raul ) {
    if ( in_array($raul, $bil1) ) {
        $kelompok2[] = $raul;
    }
}
echo "Kelompok 1: " . implode(' ', $kelompok1) . " kompeten <br>";
echo "Kelompok 2: " . implode(' ', $kelompok2) . " belum kompeten";
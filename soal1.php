<?php
$bilangan = [ 75, 77, 87, 70, 90, 81, 69, 87, 66 ];
$kelompok1 = [];
$kelompok2 = [];

foreach ( $bilangan as $raul ) {
    if ( $raul >= 75 ) {
        $kelompok1[] = $raul;
    } else {
        $kelompok2[] = $raul;
    }
}
echo "Kelompok 1: " . implode(' ', $kelompok1) . " kompeten <br>";
echo "Kelompok 2: " . implode(' ', $kelompok2) . " belum kompeten";
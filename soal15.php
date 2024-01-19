<?php

$a = 9;
$cetak = suku($a);

function suku($a) {
    for ($x=1; $x<=12; $x++) {
        $rumus = $a * 4 + $x * 3;
        $cetak = "suku ke -1: " . $rumus . "<br>";
        echo $cetak;
    }
}
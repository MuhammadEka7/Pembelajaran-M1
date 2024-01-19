<?php
$jam1 = '19:00';
$jam2 = '23:55';
$jam3 = '20:55';
$ubah1 = ubahWaktu($jam1);
$ubah2 = ubahWaktu($jam2);
$ubah3 = ubahWaktu($jam3);

function ubahWaktu($waktu) {
    $jam = (int) substr($waktu, 0, 2);
    $menit = substr($waktu, 3, 2);

    $amPm = ($jam < 12) ? 'AM' : 'PM';
    $jam = ($jam > 12) ? $jam - 12 : ($jam == 0 ? 12 : $jam);

    return "$jam:$menit $amPm";
}

echo "Diubah 1: $ubah1 <br>";  
echo "Diubah 2: $ubah2 <br>";
echo "Diubah 3: $ubah3 <br>";
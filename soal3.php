<?php
$barang = [
    [
        'nama' => 'Ban',
        'diskon' => 10,
    ],
    [
        'nama' => 'Oli Mesin',
    ],
    [
        'nama' => 'Kampas Rem',
    ],
    [
        'nama' => 'Busi',
        'diskon' => 9,
    ],
    [
        'nama' => 'Akumulator',
        'diskon' => 7,
    ],
];

foreach ( $barang as $key => $diskon ) {
    if ( isset($diskon['diskon']) ) {
        echo 'Nama: ' . $diskon['nama'] . '<br>' . 'Diskon: ' . $diskon['diskon'] . '<br>';
    }
}

<?php
// nomor 2
$data = [
    ['nama' => 'Eko',
    'kategori' => 'Web App',
    'pendidikan' => 'SMA',
    'no_peserta' => 121,
    ]
];

  $tahun = 24;

  foreach ($data as $databaru) {
    $nama = $databaru['nama'];
    $kategori = $databaru['kategori'];
    $pendidikan = $databaru['pendidikan'];
    $no_peserta = $databaru['no_peserta'];

    if ( $no_peserta == 121 ) {
      echo 122;
    } elseif ( $pendidikan == 'SMA' ) {
      echo "A";
    } elseif ( $kategori == 'Web App' ) {
      echo "01w";
    }
  }
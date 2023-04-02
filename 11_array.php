<?php

// array biasa / nama numeric 
// $namaHari = ['senin', 100, 'rabu', false];
// echo $namaHari[1];


// array assosiatif : pasangan antara key dan value
$mahasiwa = [
    'nama' => 'Suci',
    'npm' => '07352011015',
    'semester' => 5,
    'alamat' => 'Bastiong',
    'status_lulus' => TRUE
];

// echo "nilai agama : ";
// echo $mahasiwa['nilai']['semester1']['agama'];


// perulangan khusus array assosiatif
foreach($mahasiwa as $mhs) {
  echo $mhs;
  echo "<br>";
}

?>
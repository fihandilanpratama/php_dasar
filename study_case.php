<?php
$mahasiswa = [
    [
        'nama' => 'Suci',
    'npm' => '07352011015',
    'semester' => 5,
    'alamat' => 'Bastiong'
    ],
    [
        'nama' => 'ecal',
    'npm' => '07352011028',
    'semester' => 6,
    'alamat' => 'kalumata'
    ],
    [
        'nama' => 'rahmat',
    'npm' => '07352011057',
    'semester' => 7,
    'alamat' => 'jati'
    ],
    [
        'nama' => 'wahyu',
    'npm' => '07352011027',
    'semester' => 6,
    'alamat' => 'jati kecil'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>study kasus</title>
</head>
<body>
    <h2>Daftar data mahasiswa : </h2>

    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>nama : <?= $mhs['nama']; ?> </li>
            <li>npm : <?= $mhs['npm']; ?> </li>
            <li>semester : <?= $mhs['semester']; ?></li>
            <li>alamat : <?= $mhs['alamat']; ?></li>
        </ul>
    <?php endforeach; ?>

</body>
</html>
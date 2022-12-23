<?php

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jk'];
$tempat_lahir = $_POST['tl'];
$jurusan = $_POST['jr'];
$tahun_masuk = $_POST['in'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil Input</title>
</head>
<body>
<h1>Data Mahasiswa</h1>
    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Jurusan</th>
            <th>Tahun Masuk</th>
        </tr>
        <tr>
            <td><?= $nim ?></td>
            <td><?= $nama ?></td>
            <td><?= $jenis_kelamin ?></td>
            <td><?= $tempat_lahir ?></td>
            <td><?= $jurusan ?></td>
            <td><?= $tahun_masuk ?></td>
        </tr>
    </table>
</body>
</html>
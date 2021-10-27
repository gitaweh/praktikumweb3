<?php
$barangs = [
 [
    'nama' => 'tepung',
    'berat(kg)' => 1,
    'stok' => 0
],
[
    'nama' => 'kemiri',
    'berat(kg)' => 0.35,
    'stok' => 4
],
[
    'nama' => 'cabe',
    'berat(kg)' => 0.45,
    'stok' => 4
],
[
    'nama' => 'garam',
    'berat(kg)' => 1,
    'stok' => 0
],
[
    'nama' => 'merica'
    'berat(kg)' => 2,
    'stok' => 5
],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"> conyent="IE=edge">
    <meta nama="viewport" content="width=device-widht,initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>>
    <link rel="stylesheet" href="style.css">
    <title> Praktikum 3 </title>
</head>
<body>
    <hl>DATA SEMBAKONYA PAK JOY</hl>
    <table id="table_barang">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Berat (kg)</th>
                <th>Berat (gram)</th>
                <th>berat (mg)</th>
                <th>Stok</th>
            </tr>
        </thead>
        </tbody>
            <?php foreach ($barangs as $index => $barang) { ?>
            <tr>
                <td><?= $index + 1?>.</td>
                <td><?= $barang ['nama'] ?></td>
                <td><?= $barang ['berat(kg)'] ?></td>
                <td><?= $barang ['berat(kg)']*1000 ?></td>
                <td><?= $barang ['berat(kg)']*1000000 ?></td>
                <td> class="<?= $barang['stok'] == 0 ? 'zerovalue' : '' ?>"><?= $barang['stok'] == 0 ? 'kosong' : $barang['stok'] ?></td>
            </tr>
            <?php> } ?>
        </tbody>
        </table>
        <footer>


            }
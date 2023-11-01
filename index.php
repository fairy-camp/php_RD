<?php
    require "functions.php";
    $karyawan = query("SELECT * FROM tb_karyawan");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
</head>
<body>
    <h1>Data Karyawan</h1>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Gaji</th>
            <th>Devisi</th>
            <th>aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach( $karyawan as $row ) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['jabatan']; ?></td>
            <td><?= $row['gaji']; ?></td>
            <td><?= $row['devisi']; ?></td>
            <td> <a href="hapus.php?id=<?= $row['id']; ?>">hapus</a> </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>
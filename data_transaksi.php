<?php
// untuk akses fungsi di file functions.php
require 'functions.php';
$transaksi = query ("SELECT * FROM transaksi");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Supplier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Data Supplier</h1>
    <table class="table table-hover" style="text-align:center;">
        <tr class="table-primary">
            <th>No</th>
            <th>ID Transaksi</th>
            <th>ID Barang</th>
            <th>ID Pembeli</th>
            <th>Tanggal</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($transaksi as $t) { ?>
        <tr>
            <td><?= $i;?></td>
            <td><?=$t['id_transaksi'];?></td>
            <td><?=$t['id_barang'];?></td>
            <td><?=$t['id_pembeli'];?></td>
            <td><?=$t['tanggal'];?></td>
            <td><?=$t['keterangan'];?></td>
            <td>
                <button type="button" class="btn btn-primary">Ubah<a href=""></a></button>
                <button type="button" class="btn btn-danger">Hapus<a href=""></a></button>
            </td>
        </tr>
        <?php $i++; ?>
        <?php } ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
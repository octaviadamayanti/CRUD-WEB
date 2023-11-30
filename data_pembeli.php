<?php
// untuk akses fungsi di file functions.php
require 'functions.php';
$pembeli = query ("SELECT * FROM pembeli");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pembeli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Data Pembelian</h1>
    <button><a href="tambah_pembeli.php">Tambah Pembelian</a></button>
    <table class="table table-striped" style="text-align:center;">
        <tr class="table-success">
            <th>No</th>
            <th>ID Pembeli</th>
            <th>Nama Pembeli</th>
            <th>Jenis Kelamin</th>
            <th>Nomor Telepon</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($pembeli as $beli) { ?>
        <tr>
            <td><?= $i;?></td>
            <td><?=$beli['id_pembeli'];?></td>
            <td><?=$beli['nama_pemebeli'];?></td>
            <td><?=$beli['jk'];?></td>
            <td><?=$beli['no_telp'];?></td>
            <td>
                <button type="button" class="btn btn-outline-info"><a href="ubah_pembeli.php?id=<?php echo $beli['id_pembeli'];?>">Ubah</a></button>
                <button type="button" class="btn btn-outline-danger"><a href="hapus_pembeli.php?id=<?php echo $beli['id_pembeli'];?>">Hapus</a></button>
            </td>
        </tr>
        <?php $i++; ?>
        <?php } ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
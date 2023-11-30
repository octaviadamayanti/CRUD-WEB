<?php
// untuk akses fungsi di file functions.php
require 'functions.php';
$barang = query ("SELECT * FROM barang");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Daftar Barang</h1>
    <button><a href="tambah_barang.php">Tambah Data</a></button>
    <table class="table table-striped" style="text-align:center;">
        <tr class="table-warning">
            <th>No</th>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>ID Supplier</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($barang as $brg) { ?>
        <tr>
            <td><?= $i;?></td>
            <td><?=$brg['id_barang'];?></td>
            <td><?=$brg['nama_barang'];?></td>
            <td><?=$brg['harga'];?></td>
            <td><?=$brg['stok'];?></td>
            <td><?=$brg['id_supplier'];?></td>
            <td>
                <button type="button" class="btn btn-outline-primary"><a href="ubah_barang.php?id=<?php echo $brg['id_barang'];?>">Ubah</a></button>
                <button type="button" class="btn btn-outline-danger"><a href="hapus_barang.php?id=<?php echo $brg['id_barang'];?>">Hapus</a></button>
            </td>
        </tr>
        <?php $i++; ?>
        <?php } ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</body>
</html>
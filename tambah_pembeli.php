<?php
require 'functions.php';
$supplier = query("SELECT * FROM supplier");
if (isset($_POST['tambah'])){
    if(tambah_pembeli($_POST) > 0){
        echo "<script>
        alert('Data Berhasil Ditambahkan');
        document.location.href='data_pembeli.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal Ditambahkan');
        document.location.href='data_pembeli.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Pembeli</title>
</head>
<body>
    <h1>Tambah Data Pembelian</h1>
    <form action="" method="post">
        <div>
            <label for="nama">Nama Pembeli:</label>
            <input type="text" name="nama" id="nama" required>
        </div>
        <div>
            <label for="jk">Jenis Kelamin:</label>
            <input type="text" name="jk" id="jk" required>
        </div>
        <div>
            <label for="nomor">Nomor Telepon:</label>
            <input type="number" name="nomor" id="nomor" required>
        </div>
        <button type="submit" name="tambah">Tambah Data Pembeli</button>
    </form>
</body>
</html>
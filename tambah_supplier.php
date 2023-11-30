<?php
require 'functions.php';
$supplier = query("SELECT * FROM supplier");
if (isset($_POST['tambah'])){
    if(tambah_supplier($_POST) > 0){
        echo "<script>
        alert('Data Berhasil Ditambahkan');
        document.location.href='data_supplier.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal Ditambahkan');
        document.location.href='data_supplier.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Supplier</title>
</head>
<body>
    <h1>Tambah Data Supplier</h1>
    <form action="" method="post">
        <div>
            <label for="nama">Nama Supplier:</label>
            <input type="text" name="nama" id="nama" required>
        </div>
        <div>
            <label for="nomor">Nomor Telepon:</label>
            <input type="number" name="nomor" id="nomor" required>
        </div>
        <div>
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" id="alamat" required>
        </div>
        <button type="submit" name="tambah">Tambah Data Supplier</button>
    </form>
</body>
</html>
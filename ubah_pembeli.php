<?php
require 'functions.php';
$supplier = query("SELECT * FROM supplier");

$id = isset($_GET['id']) ? $_GET ['id'] : 0;
$pembeli = query("SELECT * FROM pembeli WHERE id_pembeli = $id")[0];
if(isset($_POST["ubah"])) {
    if(ubah_pembeli($_POST) > 0 ) {
        echo "<script>
            alert('data berhasil diubah!');
            document.location.href = 'data_pembeli.php';
            </script>";
    } else {
        echo "<script>
            alert('data gagal diubah!');
            document.location.href = 'data_pembeli.php';
            </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Pembeli</title>
</head>
<body>
    <h1>Ubah Data Pembeli</h1>
    <form action="" method="post">
        <input type="hidden" name="id" 
        value="<?php echo $pembeli['id_pembeli'];?>">
        <div>
            <label for="nama">Nama Pembeli:</label>
            <input type="text" name="nama" id="nama" 
            value="<?php echo $pembeli["nama_pemebeli"];?>">
        </div>
        <div>
            <label for="jk">Jenis Kelamin:</label>
            <input type="text" name="jk" id="jk"
            value="<?php echo $pembeli["jk"];?>" required>
        </div>
        <div>
            <label for="no_telp">Nomor Telepon:</label>
            <input type="number" name="no_telp" id="no_telp"
            value="<?php echo $pembeli["no_telp"];?>" required>
        </div>
        <button type="submit" name="ubah">Ubah Pembeli</button>
    </form>
</body>
</html>
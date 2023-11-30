<?php
// Function untuk koneksi db
function koneksi() {
    $conn = mysqli_connect("localhost", "root", "", "penjualan");
    return $conn;
}

function query($sql){
    $conn = koneksi();
    $result = mysqli_query($conn,$sql);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah_barang($data){
    $conn = koneksi();

    $nama = $data['nama'];
    $harga = $data['harga'];
    $stok = $data['stok'];
    $id_supplier = $data['id_supplier'];

    $sql = "INSERT INTO barang VALUES (null, '$nama', '$harga', '$stok', '$id_supplier')";

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}

function hapus_barang($id){
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM barang WHERE id_barang = $id");

    return mysqli_affected_rows($conn);
}

function ubah_barang($data){
    $conn = koneksi();

    $id = $data['id'];
    $nama = $data['nama'];
    $harga = $data['harga'];
    $stok = $data['stok'];
    $id_supplier = $data['id_supplier'];

    $sql = "UPDATE barang SET nama_barang = '$nama',
                              harga = '$harga',
                              stok = '$stok',
                              id_supplier = '$id_supplier'
            WHERE id_barang = $id";

    mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn);
}

function tambah_pembeli($data){
    $conn = koneksi();

    $nama = $data['nama'];
    $jk = $data['jk'];
    $nomor = $data['nomor'];

    $sql = "INSERT INTO pembeli VALUES (null, '$nama', '$jk', '$nomor')";

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}

function hapus_pembeli($id){
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM pembeli WHERE id_pembeli = $id");

    return mysqli_affected_rows($conn);
}

function ubah_pembeli($data){
    $conn = koneksi();

    $id = $data['id'];
    $nama = $data['nama'];
    $jk = $data['jk'];
    $no_telp = $data['no_telp'];

    $sql = "UPDATE pembeli SET nama_pemebeli = '$nama',
                              jk = '$jk',
                              no_telp = '$no_telp'
            WHERE id_pembeli = $id";

    mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn);
}

function tambah_supplier($data){
    $conn = koneksi();

    $nama = $data['nama'];
    $nomor = $data['nomor'];
    $alamat = $data['alamat'];

    $sql = "INSERT INTO supplier VALUES (null, '$nama', '$nomor', '$alamat')";

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}

function hapus_supplier($id){
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM supplier WHERE id_supplier = $id");

    return mysqli_affected_rows($conn);
}

function ubah_supplier($data){
    $conn = koneksi();

    $id = $data['id'];
    $nama = $data['nama'];
    $no_telp = $data['no_telp'];
    $alamat = $data['alamat'];

    $sql = "UPDATE supplier SET nama_supplier = '$nama',
                              no_telp = '$no_telp',
                              alamat = '$alamat'
            WHERE id_supplier = $id";

    mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn);
}
?>
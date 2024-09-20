<?php
include "koneksi.php";

$id_jenis_laundry = $_POST['id_jenis_laundry'];
$qty = $_POST['qty'];
$query = mysqli_query($koneksi, "INSERT INTO member(id_jenis_laundry, qty) VALUES ('$id_jenis_laundry','$qty')");
if ($query) {
    echo "Data berhasil disimpan!";
} else {
    echo "Gagal menyimpan data. Error: " . mysqli_error($koneksi);
}


header('location:?page=transaksi/index');
?>

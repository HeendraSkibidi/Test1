<?php
include "koneksi.php";
$id_jenis_laundry=$_POST['id_jenis_laundry'];
$jenis_laundry=$_POST['jenis_laundry'];
$nama_paket=$_POST['nama_paket'];
$harga=$_POST['harga'];
$query=mysqli_query($koneksi,"insert into jenis_laundry(id_jenis_laundry,jenis_laundry,nama_paket,harga)values('$id_jenis_laundry','$jenis_laundry','$nama_paket','$harga')");
header('location:?page=jenis_laundry/index');
?>
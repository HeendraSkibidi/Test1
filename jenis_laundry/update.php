<?php
include "koneksi.php";
$id_jenis_laundry=$_POST['id_jenis_laundry'];
$jenis_laundry=$_POST['jenis_laundry'];
$nama_paket=$_POST['nama_paket'];
$harga=$_POST['harga'];
$query=mysqli_query($koneksi,"update jenis_laundry set jenis_laundry='$jenis_laundry',nama_paket='$nama_paket',harga='$harga' where id_jenis_laundry='$id_jenis_laundry'");
header('location:?page=jenis_laundry/index');
?>
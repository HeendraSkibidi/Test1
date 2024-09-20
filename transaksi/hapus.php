<?php
include "koneksi.php";
$id=$_GET['id'];
$query=mysqli_query($koneksi,"delete from transaksi where id='$id'");
header('location:?page=transaksi/index');

?>
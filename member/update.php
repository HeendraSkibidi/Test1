<?php
include "koneksi.php";
$id_member=$_POST['id_member'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$tlp=$_POST['tlp'];
$query=mysqli_query($koneksi,"update member set nama='$nama',alamat='$alamat',jenis_kelamin='$jenis_kelamin',tlp='$tlp' where id_member='$id_member'");
header('location:?page=member/index');
?>
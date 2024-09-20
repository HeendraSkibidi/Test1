<?php
include "koneksi.php";
$id_member=$_POST['id_member'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$tlp=$_POST['tlp'];
$query=mysqli_query($koneksi,"insert into member(id_member,nama,alamat,jenis_kelamin,tlp)values('$id_member','$nama','$alamat','$jenis_kelamin','$tlp')");
header('location:?page=member/index');
?>
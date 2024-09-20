<?php
include "koneksi.php";
$id=$_POST['id'];
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];
$lvl=$_POST['lvl'];
$query=mysqli_query($koneksi,"update user set nama='$nama',username='$username',password='$password',lvl='$lvl' where id='$id'");
header('location:?page=user/index');
?>
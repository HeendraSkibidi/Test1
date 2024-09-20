<?php
include "koneksi.php";
$id=$_POST['id'];
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];
$lvl=$_POST['lvl'];
$query=mysqli_query($koneksi,"insert into user(id,nama,username,password,lvl)values('$id','$nama','$username','$password','$lvl')");
header('location:?page=user/index');
?>
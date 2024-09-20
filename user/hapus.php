<?php
include "koneksi.php";
$id=$_GET['id'];
$query=mysqli_query($koneksi,"delete from user where id='$id'");
header('location:?page=user/index');
?>
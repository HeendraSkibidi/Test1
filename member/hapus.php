<?php
include "koneksi.php";
$id_member=$_GET['id_member'];
$query=mysqli_query($koneksi,"delete from member where id_member='$id_member'");
header('location:?page=Member/index');
?>
<?php
include "koneksi.php";
$id_jenis_laundry=$_GET['id_jenis_laundry'];
$query=mysqli_query($koneksi,"delete from jenis_laundry where id_jenis_laundry='$id_jenis_laundry'");
header('location:?page=jenis_laundry/index');

?>
<?php
include "koneksi.php";
session_start();
$id_member = $_GET['id_member'];
$query = mysqli_query($koneksi, "SELECT MAX(nota) AS nota FROM transaksi");
$data = mysqli_fetch_array($query);
$nota = $data['nota'] + 1;
$user = $_SESSION['username'];
$query = mysqli_query($koneksi, "UPDATE transaksi SET nota='$nota', status='1', username='$user', id_member = '$id_member' WHERE status='0'");
header('location:?page=transaksi/index');
?>
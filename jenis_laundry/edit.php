<?php
include "koneksi.php";
$id_jenis_laundry=$_GET['id_jenis_laundry'];
$query=mysqli_query($koneksi,"select * from jenis_laundry where id_jenis_laundry='$id_jenis_laundry'");
$data=mysqli_fetch_array($query);
?>


<h1>Edit Data</h1>
<form action="?page=jenis_laundry/update" method="POST">
<div class="mb-3">
        <tr>
        <td>  <label class="form-label">ID Member</label></td>
        <td>  <input type="text" class="form-control" name="id_jenis_laundry" value="<?php echo $data['id_jenis_laundry'] ?>"></td>    
        </tr>
        <tr>
        <td>  <label class="form-label">Jenis Laundry</label></td>
        <td>  <input type="text" class="form-control" name="jenis_laundry" value="<?php echo $data['jenis_laundry'] ?>"></td>    
        </tr>
        <tr>
        <td>  <label class="form-label">Nama Paket</label></td>
        <td>  <input type="text" class="form-control" name="nama_paket" value="<?php echo $data['nama_paket'] ?>"></td>    
        </tr>
        <tr>
        <td>  <label class="form-label">Harga</label></td>
        <td>  <input type="text" class="form-control" name="harga" value="<?php echo $data['harga'] ?>"></td>    
        </tr>
        <br>
        <td><input type="submit" class="btn btn-primary" values="Simpan"></td>
</form>`
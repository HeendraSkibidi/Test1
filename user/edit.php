<?php
include "koneksi.php";
$id=$_GET['id'];
$query=mysqli_query($koneksi,"select * from user where id='$id'");
$data=mysqli_fetch_array($query);
?>


<h1>Edit Data</h1>
<form action="?page=user/update" method="POST">
<div class="mb-3">
        <tr>
        <td>  <label class="form-label">ID</label></td>
        <td>  <input type="text" class="form-control" name="id" value="<?php echo $data['id'] ?>"></td>    
        </tr>
        <tr>
        <td>  <label class="form-label">Nama</label></td>
        <td>  <input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>"></td>    
        </tr>
        <tr>
        <td>  <label class="form-label">Usename</label></td>
        <td>  <input type="text" class="form-control" name="username" value="<?php echo $data['username'] ?>"></td>    
        </tr>
        <tr>
        <td>  <label class="form-label">Pasword</label></td>
        <td>  <input type="password" class="form-control" name="password" value="<?php echo $data['password'] ?>"></td>    
        </tr>
        <tr>
        <td>  <label class="form-label">Level</label></td>
        <td>  <input type="text" class="form-control" name="lvl" value="<?php echo $data['lvl'] ?>"></td>    
        </tr>
        <br>
        <td><input type="submit" class="btn btn-primary" values="Simpan"></td>
</form>`
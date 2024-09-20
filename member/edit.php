<?php
include "koneksi.php";
$id_member=$_GET['id_member'];
$query=mysqli_query($koneksi,"select * from member where id_member='$id_member'");
$data=mysqli_fetch_array($query);
?>


<h1>Edit Data</h1>
<form action="?page=member/update" method="POST">
<div class="mb-3">
        <tr>
        <td>  <label class="form-label">ID Member</label></td>
        <td>  <input type="text" class="form-control" name="id_member" value="<?php echo $data['id_member'] ?>"></td>    
        </tr>
        <tr>
        <td>  <label class="form-label">Nama</label></td>
        <td>  <input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>"></td>    
        </tr>
        <tr>
        <td>  <label class="form-label">Alamat</label></td>
        <td>  <input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat'] ?>"></td>    
        </tr>
        <tr>
        <td>  <label class="form-label">Jenis Kelamin</label></td>
        <select class="form-control" name="jenis_kelamin">
        <option>Laki Laki</option>
        <option>Perempuan</option>
       </select>
        </tr>
        <tr>
        <td>  <label class="form-label">Telepon</label></td>
        <td>  <input type="text" class="form-control" name="tlp" value="<?php echo $data['tlp'] ?>"></td>    
        </tr>
        <br>
        <td><input type="submit" class="btn btn-primary" values="Simpan"></td>
</form>`
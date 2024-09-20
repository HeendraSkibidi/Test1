    <?php
    include "koneksi.php";

    ?>
    <h1 class="mt-4">DATA MEMBER</h1>
    <button class="btn btn-primary"><a href="?page=member/tambah" style="color: white;text-decoration:none">Tambah Data</a></button>
    <button class="btn btn-success"><a href="member/cetak.php" style="color: white;text-decoration:none">Cetak</a></button>
    <div class="mb-3">
        <br>
    <table class="table table-striped">
        <tr>
            <th>ID Member</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>No Telepon</th>
            <th>Aksi</th>
        </tr>
        <?php
        $query=mysqli_query($koneksi,"select * from member");
        while($data=mysqli_fetch_array($query)){
        ?>
        <tr>   
        <td><?php echo $data['id_member'] ?></td>
        <td><?php echo $data['nama'] ?></td>
        <td><?php echo $data['alamat'] ?></td>
        <td><?php echo $data['jenis_kelamin'] ?></td>
        <td><?php echo $data['tlp'] ?></td>
        <td>
 
        <button class="btn btn-danger"><a style="color: white;text-decoration:none" href="?page=member/hapus&id_member=<?php echo $data['id_member'] ?>">Hapus</a></button>
        <button class="btn btn-warning"><a style="color: white;text-decoration:none" href="?page=member/edit&id_member=<?php echo $data['id_member'] ?>">Edit</a></button>
        </td>
        </td>
        </tr>
        <?php
        }
        ?>
    </table>
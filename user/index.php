    <?php
    include "koneksi.php";

    ?>
    <h1 class="mt-4">DATA USER</h1>
    <button class="btn btn-primary"><a href="?page=user/tambah" style="color: white;text-decoration:none">Tambah Data</a></button>
    
    <div class="mb-3">
        <br>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Password</th>
            <th>Level</th>
            <th>Aksi</th>
        </tr>
        <?php
        $query=mysqli_query($koneksi,"select * from user");
        while($data=mysqli_fetch_array($query)){
        ?>
        <tr>   
        <td><?php echo $data['id'] ?></td>
        <td><?php echo $data['nama'] ?></td>
        <td><?php echo $data['username'] ?></td>
        <td><?php echo $data['password'] ?></td>
        <td><?php echo $data['lvl'] ?></td>
        <td>
        <button class="btn btn-danger"><a style="color: white;text-decoration:none" href="?page=user/hapus&id=<?php echo $data['id'] ?>">Hapus</a></button>
        <button class="btn btn-warning"><a style="color: white;text-decoration:none" href="?page=user/edit&id=<?php echo $data['id'] ?>">Edit</a></button>
        </td>
        </td>
        </tr>
        <?php
        }
        ?>
    </table>
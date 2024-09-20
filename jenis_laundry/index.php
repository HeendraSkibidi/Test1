    <?php
    include "koneksi.php";

    ?>
    <h1 class="mt-4">JENIS LAUNDRY</h1>
    <button class="btn btn-primary"><a href="?page=jenis_laundry/tambah" style="color: white;text-decoration:none">Tambah Data</a></button>
    <div class="mb-3">
        <br>
    <table class="table table-striped">
        <tr>
            <th>ID Jenis Laundry</th>
            <th>Jenis Laundry</th>
            <th>Nama Paket</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php
        $query=mysqli_query($koneksi,"select * from jenis_laundry");
        while($data=mysqli_fetch_array($query)){
        ?>
        <tr>   
        <td><?php echo $data['id_jenis_laundry'] ?></td>
        <td><?php echo $data['jenis_laundry'] ?></td>
        <td><?php echo $data['nama_paket'] ?></td>
        <td><?php echo $data['harga'] ?></td>
        <td>
        <button class="btn btn-danger"><a style="color: white;text-decoration:none" href="?page=jenis_laundry/hapus&id_jenis_laundry=<?php echo $data['id_jenis_laundry'] ?>">Hapus</a></button>
        <button class="btn btn-warning"><a style="color: white;text-decoration:none" href="?page=jenis_laundry/edit&id_jenis_laundry=<?php echo $data['id_jenis_laundry'] ?>">Edit</a></button>
        </td>
        </td>
        </tr>
        <?php
        }
        ?>
    </table>
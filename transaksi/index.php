<?php
include "koneksi.php";
?>
<h1 class="mt-4">TRANSAKSI</h1>

<form action="" method="POST">
  <div class="mb-3">
    Nama_paket <select class="form-select" name="id_jenis_laundry" id="id_jenis_laundry">
      <?php
      $query = mysqli_query($koneksi, "select * from jenis_laundry");
      while ($data = mysqli_fetch_array($query)) {
      ?>
        <option value="<?php echo $data['id_jenis_laundry']; ?>"><?php echo $data['nama_paket']; ?></option>
      <?php
      }
      ?>
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label">Qty</label>
    <input type="text" class="form-control" name="qty" id="qty">
  </div>
  <br>
  <br>
  <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
</form>

<br>
<form action="cetak.php" method="POST">
  Nama Member:
  <div class="mb-3">
    <select class="form-select" name="id_member" id="id_member">
      <?php
      $query = mysqli_query($koneksi, "select * from member");
      while ($data = mysqli_fetch_array($query)) {
      ?>
        <option value="<?php echo $data['id_member']; ?>"><?php echo $data['nama'] ?></option>
      <?php
      }
      ?>
    </select>
  </div>
  <button class="btn btn-success" type="submit">Selesai</button>
</form>



<?php
session_start();

if (isset($_POST['simpan'])) {
  $id_jenis_laundry = $_POST['id_jenis_laundry'];
  $qty = $_POST['qty'];

  $query = mysqli_query($koneksi, "INSERT INTO transaksi (id_jenis_laundry, qty) VALUES ('$id_jenis_laundry', '$qty')");
}

?>


<hr>
<table class="table table-striped">
  <tr>
    <th>No</th>
    <th>Nama Paket</th>
    <th>Harga</th>
    <th>Qty</th>
    <th>Jumlah</th>
    <th>Aksi</th>
  </tr>
  <?php
  $query = mysqli_query($koneksi, "SELECT jenis_laundry.nama_paket, jenis_laundry.harga, transaksi.id, transaksi.qty 
  FROM jenis_laundry 
  JOIN transaksi ON transaksi.id_jenis_laundry = jenis_laundry.id_jenis_laundry
  WHERE
  transaksi.status = 0");

  $total = 0;
  $i = 1;
  while ($data = mysqli_fetch_array($query)) {
  ?>

    <tr>
      <td><?php echo  $i++ ?></td>
      <td><?php echo  $data['nama_paket']  ?></td>
      <td><?php echo  $data['harga'] ?></td>
      <td><?php echo  $data['qty']  ?></td>
      <td><?php echo  $data['harga'] * $data ['qty'] ?></td>
      <td><button class="btn btn-danger"><a style="color: white; text-decoration: none;" href="?page=transaksi/hapus&id=<?php echo $data['id'] ?>">Hapus</a></button></td>
    </tr>
  <?php
    $total = $total + ($data['harga'] * $data['qty']);
  }
  ?>
  <tr>
    <th colspan="4">Total</th>
    <th><?php echo $total; ?></th>
    <td></td>
  </tr>

</table>
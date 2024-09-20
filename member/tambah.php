<h1 class="mt-4">Tambah Data</h1>
<form action="?page=member/simpan"method="POST" enctype="multipart/form-data">
<div class="mb-3">
  <label class="form-label">ID Member</label>
  <input type="text" class="form-control" name="id_member">
</div>
<div class="mb-3">
  <label class="form-label">Nama</label>
  <input type="text" class="form-control" name="nama">
</div>
<div class="mb-3">
  <label class="form-label">Alamat</label>
  <input type="text" class="form-control" name="alamat">
</div>
<div class="mb-3">
  <label class="form-label">Jenis Kelamin</label>
  <select class="form-control" name="jenis_kelamin">
<option>Laki Laki</option>
<option>Perempuan</option>
</select>
</div>
<div class="mb-3">
  <label class="form-label">Telepon</label>
  <input type="text" class="form-control" name="tlp">
</div>
    <button class="btn btn-success" >Simpan</button>
</form>
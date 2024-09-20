<h1 class="mt-4">Tambah Data</h1>
<form action="?page=user/simpan"method="POST" enctype="multipart/form-data">
<div class="mb-3">
  <label class="form-label">ID User </label>
  <input type="text" class="form-control" name="id">
</div>
<div class="mb-3">
  <label class="form-label">Nama</label>
  <input type="text" class="form-control" name="nama">
</div>
<div class="mb-3">
  <label class="form-label">Username</label>
  <input type="text" class="form-control" name="username">
</div>
<div class="mb-3">
  <label class="form-label">Password</label>
  <input type="password" class="form-control" name="password">
</div>
<div class="mb-3">
  <label class="form-label">Level</label>
  <input type="text" class="form-control" name="lvl">
</div>
    <button class="btn btn-success" >Simpan</button>
</form>
<div class="container">
  <div class="col-lg-8 " >
  <form action="<?= base_url('siswa/simpanDataMahasiswa')?>" method="post">
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" required>
    <div id="nama" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="nis" class="form-label">NIS</label>
    <input type="text" class="form-control" id="nis" name="nis" required>
  </div>
  <div class="mb-3">
    <label for="kelas" class="form-label">Kelas</label>
    <input type="text" class="form-control" id="kelas" name="kelas">
  </div>
  <div class="mb-3">
    <label for="tanggal-lahir" class="form-label">Tanggal Lahir</label>
    <input type="date" class="form-control" id="tanggal-lahir" name="tanggal-lahir" required>
  </div>
  <div class="mb-3">
    <label for="tempat-lahir" class="form-label">Tempat Lahir</label>
    <input type="text" class="form-control" id="tempat-lahir" name="tempat-lahir" required>
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">alamat</label>
     <textarea class="form-control" id="alamat" rows="3" name="alamat" required></textarea>
  </div>
  <div class="mb-3">
    <label for="jenis-kelamin" class="form-label">Jenis</label>
   <select  class="form-control form-control-user" aria-label=".form-select-lg example" name="jenis-kelamin">
        <option selected>Pilih Jenis Kelamin</option>
        <option value="Laki-Laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="agama" class="form-label">Agama</label>
    <select class="form-control form-control-user" aria-label=".form-select-lg example" name="agama" required>
        <option selected>Pilih Agama</option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Katolik">Katolik</option>
        <option value="Budha">Budha</option>
        <option value="Hindu">Hindu</option>
        <option value="Protestan">Protestan</option>
        <option value="Khonghucu">Khonghucu</option>
    </select>
  </div>
  <div class="mb-3 form-check">
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

  </div>
</div>
  

<div class="container">
  <div class="col-lg-8">
  <form action="<?= base_url('siswa/editDataSiswa')?>" method="post">
  <input type="hidden" value="<?= $siswa['id']?>" name="id">
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input value="<?= $siswa['nama']?>" type="text" class="form-control"  id="nama" name="nama" require>
    <div id="nama" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="nis" class="form-label">NIS</label>
    <input value="<?= $siswa['nis']?>" type="text" class="form-control" id="nis" name="nis" require>
  </div>
  <div class="mb-3">
    <label for="kelas" class="form-label">Kelas</label>
    <input type="text" value="<?= $siswa['kelas']?>" class="form-control" id="kelas" name="kelas" require>
  </div>
  <div class="mb-3">
    <label for="tanggal-lahir" class="form-label">Tanggal Lahir</label>
    <input value="<?= $siswa['tanggal_lahir']?>" type="date" class="form-control" id="tanggal-lahir" name="tanggal-lahir" require>
  </div>
  <div class="mb-3">
    <label for="tempat-lahir" class="form-label">Tempat Lahir</label>
    <input value="<?= $siswa['tempat_lahir']?>" type="text" class="form-control" id="tempat-lahir" name="tempat-lahir" require>
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">alamat</label>
     <textarea class="form-control" id="alamat" rows="3" name="alamat" require><?= $siswa['alamat']?></textarea>
  </div>
  <div class="mb-3">
    <label for="jenis-kelamin" class="form-label">Jenis Kelamin</label>
    <select  class="form-control form-control-user" aria-label=".form-select-lg example" name="jenis-kelamin" require>
        <option value="<?= $siswa['jenis_kelamin']?>">Data Tidak Dirubah</option>
        <option value="Laki-Laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>
  </div>
  <div class="mb-3">
    <label  for="agama" class="form-label">Agama</label>
    <select class="form-control form-control-user" aria-label=".form-select-lg example" name="agama" require>
        <option value="<?= $siswa['agama']?>">Data Tidak Dirubah</option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Katolik">Katolik</option>
        <option value="Budha">Bhuda</option>
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
  

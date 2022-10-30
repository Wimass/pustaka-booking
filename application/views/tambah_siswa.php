<body>

  <div class="container" style="margin-top: 80px">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card">
          <div class="card-header">
            TAMBAH SISWA
          </div>
          <div class="card-body">
            <form action="<?php echo base_url() ?>index.php/siswa/simpan" method="POST">

              <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" placeholder="Masukkan Nama Siswa" class="form-control">
              </div>

              <div class="form-group">
                <label>NISN</label>
                <input type="text" name="nis" placeholder="Masukkan NISN Siswa" class="form-control">
              </div>

              <div class="form-group">
                <label for="kelas">kelas</label>
                <select class="form-control" id="kelas" name="kelas">
                  <option value="12.3A.35">12.3A.35</option>
                  <option value="12.3B.35">12.3B.35</option>
                  <option value="12.3C.35">12.3B.35</option>
                </select>
              </div>

              <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
              </div>

              <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
              </div>

              <!-- Membuat input jenis kelamin radio button php -->
              <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <div class="form-check">
                  <input class="form-check input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-laki">
                  <label class="form-check label" for="jenis_kelamin">
                    Laki-laki
                  </label>
                  <input class="form-check input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan">
                  <label class="form-check label" for="jenis_kelamin">
                    Perempuan
                  </label>
                </div>
              </div>

              <!-- Membuat input agama combo-box dengan php -->
              <div class="form-group">
                <label for="agama">Agama</label>
                <select class="form-control" id="agama" name="agama">
                  <option value="Islam">Islam</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Katolik">Katolik</option>
                  <option value="Budha">Budha</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Protestan">Protestan</option>
                  <option value="Khonghucu">Khonghucu</option>
                </select>
              </div>

              <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Siswa" rows="4"></textarea>
              </div>

              <button type="submit" class="btn btn-success">SIMPAN</button>
              <button type="reset" class="btn btn-warning">RESET</button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>
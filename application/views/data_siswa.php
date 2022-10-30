
<body>

  <div class="container" style="margin-top: 80px">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            DATA SISWA
          </div>
          <div class="card-body">
            <a href="<?php echo base_url() ?>index.php/siswa/tambah" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
            <table class="table table-bordered" id="myTable">
              <thead>
                <tr>
                  <!-- Buat table heading untuk No, Nama, NISN,Kelas, Tanggal Lahir, Tempat Lahir, Alamat, Jenis Kelamin, Agama -->
                  <th>No</th>
                  <th>Nama</th>
                  <th>NISN</th>
                  <th>Kelas</th>
                  <th>Tanggal Lahir</th>
                  <th>Tempat Lahir</th>
                  <th>Alamat</th>
                  <th>Jenis Kelamin</th>
                  <th>Agama</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>

                <?php
                $no = 1;
                foreach ($data_siswa as $siswa) {
                ?>

                  <tr>
                    <!-- Buat table body untuk menampilkan data siswa -->
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $siswa->nama ?></td>
                    <td><?php echo $siswa->nis ?></td>
                    <td><?php echo $siswa->kelas ?></td>
                    <td><?php echo $siswa->tanggal_lahir ?></td>
                    <td><?php echo $siswa->tempat_lahir ?></td>
                    <td><?php echo $siswa->alamat ?></td>
                    <td><?php echo $siswa->jenis_kelamin ?></td>
                    <td><?php echo $siswa->agama ?></td>
                    <td class="text-center">
                      <a href="<?php echo base_url() ?>index.php/siswa/hapus/<?php echo $siswa->id ?>" class="btn btn-sm btn-danger">HAPUS</a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

   
    <script>
      $(document).ready(function() {
        $('#myTable').DataTable();
      });
    </script>
</body>

</html>
<div class="container mt-3">
  
    <div class="row">
    <div class="col-lg-6">
        <h3>Daftar Mahasiswa</h3>
        <form action="<?= BASEURL; ?>mahasiswa/cari" method="post">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="cari mahasiswa.." name="keyword" id="keyword" autocomplete="off">
            <div class="input-group-append">
              <button class="btn btn-dark" type="submit" id="tombolCari">Cari</button>
            </div>
          </div>
        </form>
        <button type="button" class="mt-3 mb-2 btn btn-outline-dark tombolTambahData btn-sm" data-toggle="modal" data-target="#formModal">
          + Tambah data 
        </button>
        <table class="table">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <tr>
                        <td><?= $mhs['nim']; ?></td>
                        <td><?= $mhs['nama']; ?></td>
                        <td>
                            <a href="<?= BASEURL; ?>mahasiswa/detail/<?= $mhs['id']; ?>" class="btn btn-info btn-sm">Detail</a>
                            <a href="<?= BASEURL; ?>mahasiswa/ubah/<?= $mhs['id']; ?>" class="btn btn-warning btn-sm tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">Ubah</a>
                            <a href="<?= BASEURL; ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data?');">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

  <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
  </div>

</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>mahasiswa/tambah" method="post">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label for="nim">NIM</label>
            <input type="number" class="form-control" id="nim" name="nim" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com">
          </div>

          <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" id="jurusan" name="jurusan">
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
              <option value="Sistem Informasi">Sistem Informasi</option>
              <option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
              <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
              <option value="Teknik Industri">Teknik Industri</option>
            </select>
          </div>

      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>





<div class="contain-fluid">
  <h1 class="h3 mb-4 text-gray-8"><?php echo $judul; ?></h1>
  <div class="row">
    <div class="col-md-6"><a href="<?= base_url('prodi/tambah') ?>" class="btn btn-info mb-2">Tambah Prodi</a></div>
      <div class="col-md-12">
        <?= $this->session->flashdata('message'); ?>
        <table class="table">
          <thead>
              <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama prodi</th>
                  <th scope="col">ruangan</th>
                  <th scope="col">jurusan</th>
                  <th scope="col">akreditasi</th>
                  <th scope="col">nama kaprodi</th>
                  <th scope="col">tahun berdiri</th>
                  <th scope="col">output lulusan</th>
                  <th scope="col">Gambar</th>
                  <th scope="col">Aksi</th>
              </tr>
          </thead>
          <tbody>
              <?php $i = 1; ?>
              <?php foreach ($prodi as $us) : ?>
              <tr>
                  <td><?= $i; ?>.</td>
                  <td><?=$us['nama'];?></td>
                  <td><?=$us['ruangan'];?></td>
                  <td><?=$us['jurusan'];?></td>
                  <td><?=$us['akreditasi'];?></td>
                  <td><?=$us['nama_kaprodi'];?></td>
                  <td><?=$us['tahun_berdiri'];?></td>
                  <td><?=$us['output_lulusan'];?></td>
                  <td><img src="<?= base_url('assets/img/prodi/') . $us['gambar'] ?>" style="width: 100px;" class="img-tumbnail" alt=""></td>
                  <td>
                      <a href="<?= base_url('prodi/hapus/') . $us['id']; ?>" class="btn btn-danger">hapus</a>
                      <a href="<?= base_url('prodi/edit/') . $us['id']; ?>" class="btn btn-warning">edit</a>
                  </td>
              </tr>
              <?php $i++; ?>
              <?php endforeach; ?>
          </tbody>
        </table>
    </div>
  </div>
</div>

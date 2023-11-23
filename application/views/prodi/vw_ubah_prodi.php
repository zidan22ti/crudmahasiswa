<div class="container-fluid">
 <h1 class="h3 mb-4 text-gray-800">
 <br>
 <?php echo $judul; ?>
 </h1>
<div class="row justify-content-center ">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header justify-content-center">
          Form Ubah Data Prodi
        </div>
      </div>

 <div class="card-body">
     <form action="" method="POST" enctype="multipart/form-data">
     <input type="hidden" name="id" value="<?= $prodi['id'] ?>">
          <div class="form-group">
            <label for="nama_prodi">Nama Prodi</label>
            <input type="text" name="nama" class="form-control" id="nama" value="<?= $prodi['nama'] ?>" placeholder="Nama prodi">
            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="form-group">
            <label for="ruangan">Ruangan</label>
            <input type="text" name="ruangan" class="form-control" id="ruangan" value="<?= $prodi['ruangan'] ?>"placeholder="Ruangan">
            <?= form_error('ruangan', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" name="jurusan" class="form-control" id="jurusan" value="<?= $prodi['jurusan'] ?>" placeholder="Jurusan">
            <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="form-group">
            <label for="akreditasi">Akreditasi</label>
            <input type="text" name="akreditasi" class="form-control" value="<?= $prodi['akreditasi'] ?>" id="akreditasi"
              placeholder="Akreditasi">
            <?= form_error('akreditasi', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="form-group">
            <label for="nama_kaprodi">Nama Kaprodi</label>
            <input type="text" name="nama_kaprodi" class="form-control" id="nama_kaprodi" value="<?= $prodi['nama_kaprodi'] ?>" placeholder="Nama Kaprodi">
            <?= form_error('nama_kaprodi', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="form-group">
            <label for="tahun">Tahun Berdiri</label>
            <input type="number" name="tahun_berdiri" class="form-control" id="tahun_berdiri" value="<?= $prodi['tahun_berdiri'] ?>" placeholder="Tahun Berdiri">
            <?= form_error('tahun_berdiri', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="form-group">
            <label for="output_lulusan">Output Lulusan</label>
            <input type="text" name="output_lulusan" class="form-control" id="output_lulusan" value="<?= $prodi['output_lulusan'] ?>" placeholder="Output Lulusan">
            <?= form_error('output lulusan', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="form-group">
              <br>
							<img src="<?= base_url('assets/img/prodi/') . $prodi['gambar'] ?>" style="width: 100px; border-radius: 10px 10px 10px 10px;" class="img-tumbnail">
							<div class="custom-file">
								<input type="file" name="gambar" id="gambar" class="form-control" placeholder="Gambar">
								<label for="output_lulusan">Choose File</label>
								<?= form_error('gambar', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
					</div>
          <a href="<?= base_url('prodi/') ?>" class="btn btn-danger">Tutup</a>
          <button type="submit" name="ubah" class="btn btn-primary float-right">Update Prodi</button>
        </form>
      </div>
    </div>
  </div>
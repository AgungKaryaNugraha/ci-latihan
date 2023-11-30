<div class="container">
    <div class="row mt-6">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Form Tambah Mahasiswa
            </div>
            <div class="card-body">
            <form action="" method="post">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="Text" class="form-control" id="nama" name="nama">
                <small class="form-text text-danger"><?= form_error('nama'); ?></small>
            </div>
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="Text" class="form-control" id="nim" name="nim">
                <small class="form-text text-danger"><?= form_error('nim'); ?></small>
            </div>
            <div class="form-group">
                <label for="emai">Email</label>
                <input type="Text" class="form-control" id="emai" name="email">
                <small class="form-text text-danger"><?= form_error('email'); ?></small>
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select class="form-control" id="jurusan" name="jurusan">
                <option>Teknik Informatika</option>
                <option>Sumedang-Bandung</option>
                <option>Teknik Kayu</option>
                <option>Perawat</option>
                <option>Teknik Ilmu Hitam</option>
                </select>
            </div>
            <button type="submit" name="tambah" class="btn btn-primary float-right ml-1">Tambah</button>
            <a href="<?= base_url(); ?>mahasiswa" class="btn btn-warning float-right ml-1">Kembali</a>
            </form>
            </div>
            </div>
            
        </div>
    </div>
</div>
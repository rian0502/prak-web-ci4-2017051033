<?= $this->extend('templates/template') ?>
<?= $this->section('content') ?>

<form action="/update/<?= $mahasiswa['id'] ?>" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="npm" class="form-label">NPM</label>
                <input name="npm" type="text" class="form-control" id="npm" aria-describedby="emailHelp" value="<?= $mahasiswa['npm'] ?>">
            </div>
            <div class="form-group">
                <label for="nama" class="form-label">Nama</label>
                <input name="nama" type="text" value="<?= $mahasiswa['nama'] ?>" class="form-control" id="nama" aria-describedby="emailHelp">
            </div>

            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="alamat" class="form-label">alamat</label>
                <input name="alamat" type="text" class="form-control" id="alamat" value="<?= $mahasiswa['alamat'] ?>" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <div class="form-group">
                    <label for="deskripsi"></label>
                    <textarea id="deskripsi" name="deskripsi"><?= $mahasiswa['deskripsi'] ?></textarea>
                </div>
            </div>
        </div>
    </div>
</form>


<?= $this->endSection(); ?>
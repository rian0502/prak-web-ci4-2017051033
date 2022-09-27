<?= $this->extend('templates/template') ?>
<?= $this->section('content') ?>

<form action="/store" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="npm" class="form-label">NPM</label>
                <input name="npm" type="text" class="form-control" id="npm" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="nama" class="form-label">Nama</label>
                <input name="nama" type="text" class="form-control" id="nama" aria-describedby="emailHelp">
            </div>



            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="alamat" class="form-label">alamat</label>
                <input name="alamat" type="text" class="form-control" id="alamat" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="deskripsi"></label>
                <textarea id="deskripsi" name="deskripsi"></textarea>
            </div>

        </div>
    </div>
</form>


<?= $this->endSection(); ?>
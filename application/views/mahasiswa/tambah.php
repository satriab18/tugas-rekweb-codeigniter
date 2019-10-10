<div class="container">
    <div class="row mt-3">
    <div class="card">
        <div class="card-header">
        Form Tambah Data Mahasiswa
        </div>
        <div class="card-body">
        <form action="" method="post">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" >
            </div>
            <div class="form-group">
                <label for="nrp">NRP</label>
                <input type="text" class="form-control" id="nrp" name="nrp" >
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" >
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select class="form-control" name="jurusan" id="jurusan" name="jurusan">
                    <option value="Teknik Industri">301 - Teknik Industri</option>
                    <option value="Teknologi Pangan">302 - Teknologi Pangan</option>
                    <option value="Teknik Mesin">303 - Teknik Mesin</option>
                    <option value="Teknik Informatika">304 - Teknik Informatika</option>
                    <option value="Teknik Lingkungan">305 - Teknik Lingkungan</option>
                    <option value="Teknik Perencanaa & Wilayah Kota">306 - Teknik Perencanaa & Wilayah Kota</option>
                </select>
            </div>
            <button type="submit" name="tambah" class="btn btn-outline-primary float-right">
            Tambah Data
            </button>
        </form>
        <br>
        <br>
            <?php if(validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
            <?=validation_errors();?>
            </div>
            <?php endif; ?>
        </div>
        </div>
    </div>
</div>